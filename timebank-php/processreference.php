<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?PHP
//$userID = $_POST['$userID'];
$userID = '1';
$uploadtype = $_POST['requiredUploadType']			
				
				$target = "reference/"; 
$name = "reference/" . basename($_FILES['uploaded']['name']);

$target = $target . basename( $_FILES['uploaded']['name']) ; 
$ok=1; 
//This is our size condition 
if ($uploaded_size > 350000) 
{ 
echo "Your file is too large.<br>"; 
$ok=0; 
} 

//This is our limit file type condition 
if ($uploaded_type =="text/php") 
{ 
echo "No PHP files<br>"; 
$ok=0; 
} 

//Here we check that $ok was not set to 0 by an error 
if ($ok==0) 
{ 
Echo "Sorry your file was not uploaded"; 
} 

//If everything is ok we try to upload it 
else 
{ 
if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 
     
{ 
     // Connect to server and select databse.
    $linkID = @mysql_connect("sql4.freesqldatabase.com", "sql458226", "nZ1!yG7%")or die("cannot connect"); 
    mysql_select_db("sql458226" , $linkID)or die("cannot select DB");
    
$result = mysql_query("INSERT INTO uploads( userID, filetype, dateuploaded, name ) VALUES('$userID', '$uploadtype', now(), '$name')", $linkID)or die(mysql_error()); 
print  "<h1>The file ". basename( $_FILES['uploaded']['name']). " has been uploaded</h1>"; 
} 
else 
{ 
print "<h1>Sorry, there was a problem uploading your file.</h1>"; 
} 
} 

?>

</body>
</html>
