<?PHP
session_start();
	if (!isset($_SESSION['valid_user'])){
	header("Location: restricted.php");
	
} 
else
{
if ($_SESSION['status'] != '3')
	{$message = "You have come to the wrong area, please try logging on again.  If the problem persisits please contact Prescriptions2Homes ";
	header("location: members.php?message=$message");
	}
	else
	{
		if ($_SESSION['status'] != '3')
	{ $navigationheader = '<p><a href="admin.php">Admin Home</a> - <a href="careindex.php"> Home</a> - <a href="newpatientinfo.php">Inform of new patient</a> - <a href="newpatientinfo.php">Inform of details change in patient </a> - <a href="removepatient.php">Inform of Removal patient </a> - <a href="uploadprescriptions.php">Upload prescriptions </a> - <a href="members.php">Log Out </a></p>';
		$username = $_SESSION['valid_user']; $status = $_SESSION['status']; $adminid = $_SESSION['adminid'];	}
	
	if ($_SESSION['status'] != '2')
	{  $navigationheader = '<p><a href="admin.php">Admin Home</a> -  <a href="addnewuser.php">Add new carehome </a> - <a href="addnews.php">Add News Item</a> - <a href="uploadprescriptions.php">Upload prescriptions</a> - <a href="members.php">Log Out </a></p>';	
;
		$username = $_SESSION['valid_user']; $status = $_SESSION['status']; $adminid = $_SESSION['adminid'];	}

		if ($_SESSION['status'] != '1')
	{ $navigationheader = '<p><a href="useradmin.php">Home</a> - <a href="addnewuser.php">Add new user or carehome </a> - <a href="members.php">Log Out </a>';	
		$username = $_SESSION['valid_user']; $status = $_SESSION['status']; $adminid = $_SESSION['adminid'];}
	}
}

	
	?>


