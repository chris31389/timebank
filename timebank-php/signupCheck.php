<?php 
    include 'dbConnect.php';
    
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
    $linkID = @mysql_connect("sql4.freesqldatabase.com", "sql458226", "nZ1!yG7%")or die("cannot connect"); 
    mysql_select_db("sql458226" , $linkID)or die("cannot select DB");
    
    $result = mysql_query("INSERT INTO user( preferredContact, name, add1, add2, add3, town, county, postcode, phone, email, dateAdded, username, password ) VALUES('$preferredContact', '$name', '$add1', '$add2', '$add3', '$town', '$county', '$postcode', '$phone', '$email', now(), '$username', '$password')", $linkID)or die(mysql_error()); 
     print "data added";
?>




//$password = $_POST['password'];

//$password = mhash(MHASH_MD4,$password);


//$realPassword = (get password from database)

//if $password != $realPassword 