<?php 
    include_once 'dbConnect.php';
    
    //$tbl_name = "user";
    
    //Collect data sent from form
    $username=$_POST['requiredUsername'];
    $password=$_POST['requiredPassword'];
    $cpassword=$_POST['requiredCpassword'];
    $name=$_POST['requiredName'];
    $add1=$_POST['requiredAdd1'];
    $add2=$_POST['add2'];
    $add3=$_POST['add3'];
    $town=$_POST['requiredTown'];
    $county=$_POST['requiredCounty'];
    $postcode = $_POST['requiredPostcode'];
    $phone=$_POST['requiredPhone'];
    $email=$_POST['requiredEmail'];
    $cemail=$_POST['requiredCemail'];
    $preferredContact=$_POST['requiredPreferredContact'];
    
    
  //  if (strlen($password) == 0)
    //{
    //   dglwefgywe     
    
   // }
    
    // @todo: validate passwords are the same
    
    // Hash the password to be stored into the database
   $password = mhash(MHASH_MD4,$password);
    
         // Connect to server and select databse.
        // $linkID = @mysql_connect(HOST, USER, PASSWORD)or die("cannot connect"); 
        // mysql_select_db("sql458226" , $linkID)or die("cannot select DB");
        
        
        mysql_connect(HOST, USER, PASSWORD)or die("cannot connect"); 
        mysql_select_db(DATABASE);
        
        $sql = "INSERT INTO user( preferredContact, name, add1, add2, add3, town, county, postcode, phone, email, dateAdded, username, password ) VALUES('$preferredContact', '$name', '$add1', '$add2', '$add3', '$town', '$county', '$postcode', '$phone', '$email', now(), '$username', '$password')";
        // $result = mysql_query($sql, $linkID)or die(mysql_error()); 
        $result = mysql_query($sql);
        print "data added";

    header("Location: ../index.php?page=listing");
    
    
//$password = $_POST['password'];

//$password = mhash(MHASH_MD4,$password);


//$realPassword = (get password from database)

//if $password != $realPassword 

?>
