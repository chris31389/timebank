<div id="listing">
    <fieldset style="width:96%">
        <legend>Test as listing</legend> 
        <?php 
            include 'timebank-php/dbConnect.php';
            
            $tbl_name = "offers";
            
            // Connect to server and select databse.
            mysql_connect(HOST, USER, PASSWORD)or die("cannot connect"); 
            mysql_select_db(DATABASE)or die("cannot select DB");
            
            $totalSQL = "SELECT count(*) as count FROM $tbl_name;";
            $totalResult=mysql_query($totalSQL);
            
            $limit = 20;
            $total = 0;
            
            if (mysql_num_rows($totalResult)>0){ //there was a result so the user is valid
                while($row=mysql_fetch_array($totalResult)){
                    $total = $row['count'];
                }
            }
            
            $pages = ceil($total / $limit);
            // What page are we currently on?
            $page = min($pages, filter_input(INPUT_GET, 'section', FILTER_VALIDATE_INT, array(
                'options' => array(
                    'default'   => 1,
                    'min_range' => 1,
                ),
            )));
            $offset = ($page - 1)  * $limit;
            
             // Some information to display to the user
            $start = $offset + 1;
            $end = min(($offset + $limit), $total);
        
            // The "back" link
            $prevlink = ($page > 1) ? '<a href="?page=listing&section=1" title="First page">&laquo;</a> <a href="?page=listing&section=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';
        
            // The "forward" link
            $nextlink = ($page < $pages) ? '<a href="?page=listing&section=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=listing&section=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

            // Display the paging information
            echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';

            // Prepare the paged query
            $pageListSQL = "
                SELECT
                    o.*,u.username
                FROM
                    $tbl_name o
                JOIN
                    user u
                ON
                   u.userID = o.userID 
                ORDER BY
                    offerDate
                LIMIT
                    $limit
                OFFSET
                    $offset
            ";
            
            $pageResults=mysql_query($pageListSQL);
            
            mysql_close();
            
            echo '<table>';
            echo '<tr>';
            echo '<th>username</th>';
            echo '<th>Details</th>';
            echo '<th>Status</th>';
            echo '<th>Date</th>';
            if(isset($_SESSION['userID'])){
                echo '<th>&nbsp</th>';
            }
            echo '</tr>';
            
            if(mysql_num_rows($pageResults)>0){
                while($row=mysql_fetch_array($pageResults)){
                    echo '<tr>';
                    echo '<td>'. $row['username']. '</td>';
                    echo '<td>'. $row['Details']. '</td>';
                    echo '<td>'. $row['status']. '</td>';
                    echo '<td>'. $row['offerDate']. '</td>';
                    if(isset($_SESSION['userID'])){
                        echo '<td>'.'<a href="index.php?page=reply&id='.$row['offerID'].'">Reply</a>'.'</td>';
                    }
                    echo '</tr>';
                }
            }
            
            echo '</table>';
            
        ?>
    </fieldset>
</div>