<?php

session_start(); // needs to be the first thing in the script
//create short variable names
$today = date("j, n, Y");
$timestamp = time();
 $time = strftime("%X", $timestamp);
$username = $_REQUEST['requiredUsername'];
$password = $_REQUEST['requiredPassword'];

if ($username != "" && $password != ""){ // check for blank fields
// they have just tried logging in
	$isuser = login($username, $password); // use the login() function to check the credentials
    if ($isuser){ // true therefore they are in the database so register the user id
        $_SESSION['valid_user'] = $username; // set a session variable we can test for in other scripts
        header("Location: courselist.php"); // redirect to a different page than the login page
    }else{
      // unsuccessful login
	  	$message = 'You could not be logged in.';
        header("Location: login.php?message=".$message);
    }
}else{ // missing username or password
    $message = 'You must enter a username and password.';
	header("Location: login.php?message=".$message);
}

function login($username, $password)
// check username and password with db
// if yes, return true
// else return false
{

//$linkID = @mysql_connect("localhost", "root", "");
//mysql_select_db("rso", $linkID);
$linkID = @mysql_connect("127.0.0.1", "smallbusiness", "drumstick");
mysql_select_db("small-business-advice_biz_fobs", $linkID);

//set error reporting to display and to it's highest level in case 

$resultID = mysql_query("SELECT * FROM login where username = '$username' AND password like '$password'", $linkID)or die(mysql_error());

  // check if username is unique and has the right password
//  $result = mysql_query("select User_Type, from members
  //                       where UserName='$username'
    //                     and Password = sha1('$password')"); // the passwords are encrypted in the database 
 // $line = mysql_fetch_array($resultID, MYSQL_ASSOC);
//  $type = $line['User_Type'];
  //if (!$result){ // the query failed
  //   return false;
  //}	
  if (mysql_num_rows($resultID)>0){ //there was a result so the user is valid
    $_SESSION['usertype'] = 'valid_user'; // set a session variable we can use elsewhere
	while ($row = mysql_fetch_assoc($resultID)) 
{ 
$userid = $row['email'];
global $userid;
$today = date("j, n, Y");
$timestamp = time();
 $time = strftime("%X", $timestamp);

$result = mysql_query("INSERT INTO tbllogon( Username, Date, Time ) VALUES( '$username', '$today', '$time')", $linkID)or die(mysql_error()); 
}
    return true;
  }else{
     return false;
  }
}
?>