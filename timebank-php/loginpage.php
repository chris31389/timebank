<?php

//create short variable names
$username = $_REQUEST['requiredUsername'];
$password = $_REQUEST['requiredPassword'];

if ($username != "" && $password != ""){ // check for blank fields
// they have just tried logging in
    $hashedPassword = mhash(MHASH_MD4, $password);
	$isuser = login($username, $hashedPassword); // use the login() function to check the credentials
    if ($isuser){ // true therefore they are in the database so register the user id
        $_SESSION['valid_user'] = $username; // set a session variable we can test for in other scripts
        header("Location: ../index.php?page=event"); // redirect to a different page than the login page
    }else{
      // unsuccessful login
	  	$message = 'You could not be logged in';
       header("Location: ../index.php?page=login&errormessage=".$message);
    }
}else{ // missing username or password
    $message = 'You must enter a username and password.';
	header("Location: ../index.php?page=login&errormessage=".$message);
}

function login($username, $password){
// check username and password with db
// if yes, return true
// else return false
    include_once 'dbConnect.php';
    $tbl_name = "user";
    
    // Connect to server and select databse.
    mysql_connect(HOST, USER, PASSWORD)or die("cannot connect"); 
    mysql_select_db(DATABASE)or die("cannot select DB");
    
    
//set error reporting to display and to it's highest level in case 
    $sql="SELECT * FROM $tbl_name WHERE username='$username'"; // and password='$password'";
    // $sql="SELECT 1";
    $result=mysql_query($sql);

    if (mysql_num_rows($result)>0){ //there was a result so the user is valid
        while($row=mysql_fetch_array($result)){
            // var_dump($row);
            if($row['password'] == $password){
                session_start(); // needs to be the first thing in the script
                $_SESSION['usertype'] = 'valid_user'; // set a session variable we can use elsewhere
                return true;
            }
        }
        return false;
    }else{
        return false;
    }
}
?>