<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9!';
echo '<a href="www.google.com">HAHAHAHA</a>';

$servername = "sql4.freesqldatabase.com";
$username = "sql458226";
$password = "nZ1!yG7%";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo "Hi";

?>
