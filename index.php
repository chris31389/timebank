        <?php     
        session_start(); // needs to be the first thing in the script
        if(isset($_SESSION['valid_user'])){
                echo '<a href="timebank-php/logout.php">Logout</a>';
            }
            else{
                echo '<a href="index.php?page=login">Login or Signup</a>';
            }
            
           
        if(isset($_SESSION['valid_user'])){
            $user = $_SESSION['valid_user'];
            echo "<span>$user</span>";
        }
        ?>
        
<!DOCTYPE html>
<html>
    <head><script src="js/checkthis.js"></script></head>
    <body>
        <h1 style="text-align:center"> Time Bank</h1>
        
        <table border="1" style="width:100%">
            <tr>
                <th width="20%"><a href="index.php?page=home">Homepage</a></th>
                <th width="20%"><a href="index.php?page=listing">Listings</a></th>
                <th width="20%"><a href="index.php?page=how">How it works</a></th>
                <th width="20%"><a href="index.php?page=faq">FAQ's</a></th>
                <th width="20%"><a href="index.php?page=event">Events</a></th>
            </tr>
        </table>
        <div id="body-container">
            <?php 
                if ($_GET["page"] == "home") {
                    include 'timebank-pages/home.php';
                }
                elseif ($_GET["page"] == "listing") {
                    include 'timebank-pages/listing.php';
                }
                elseif ($_GET["page"] == "how") {
                    include 'timebank-pages/how.php';
                }
                elseif ($_GET["page"] == "faq") {
                    include 'timebank-pages/faq.php';
                }
                elseif ($_GET["page"] == "event") {
                    include 'timebank-pages/event.php';
                }
                elseif ($_GET["page"] == "login") {
                    include 'timebank-pages/login-signup.php';
                } 
                elseif ($_GET["page"] == "equality") {
                    include 'timebank-pages/equalityForm.php';
                }
            ?>
        </div>
    </body>
</html>