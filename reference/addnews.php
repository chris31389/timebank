<?php
session_start();
	if (!isset($_SESSION['valid_user'])){
	header("Location: restricted.php");
	
} 
else
{
if ($_SESSION['status'] != '2')
	{$message = "You have come to the wrong area, please try logging on again.  If the problem persisits please contact Prescriptions2Homes ";
	header("location: members.php?message=$message");
	}
	else
	{
	 $navigationheader = '<p><a href="admin.php">Admin Home</a> -  <a href="addnewuser.php">Add new carehome </a> - <a href="addnews.php">Add News Item</a> - <a href="uploadprescriptions.php">Upload prescriptions</a> - <a href="members.php">Log Out </a></p>';	
;
		$username = $_SESSION['valid_user']; $status = $_SESSION['status']; $adminid = $_SESSION['adminid'];	}

	
}


	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><!-- InstanceBegin template="/Templates/members_template.dwt" codeOutsideHTMLIsLocked="false" --> 
<head profile="http://gmpg.org/xfn/11"> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<!-- InstanceBeginEditable name="header" --> 
<title>Members pages | Prescription2homes</title> 

<script type="text/javascript" src="checkthis.js"></script>

 <!-- InstanceEndEditable -->
<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen"/> 
<link rel="stylesheet" href="style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" media="all" href="styles/blue.css" /> 
 
<script type="text/javascript"> 
/* <![CDATA[ */
document.write('<style type="text/css">h1,h2,h3,h4,h5,#blurb,#site_name,#intro_blurb_title,#call_to_action,.light_gradient.dropcap1,.widgettitle,.dropcap2,.dark_gradient,th{text-indent:-9999px;}.noscript{display:none;}.bg_hover{background:none;}</style>');
/* ]]> */
</script> 
<meta name="disable_cufon" content="" />
<meta name="slider_speed" content="6000" />
<meta name="slider_disable" content="false" />
<meta name="slider_type" content="fading" />
 
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/DejaVu_Sans_Condensed_400.font.js"></script>
<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type='text/javascript' src='js/galleria/galleria.js'></script> 
<script type='text/javascript' src='js/galleria/themes/classic/galleria.classic.js'></script> 
<script type='text/javascript' src='js/custom.js'></script> 
<script type='text/javascript' src='js/sliders.js'></script> 

<!--[if IE 8]>
	<link rel="stylesheet" href="styles/_shared/ie8.css" type="text/css" media="screen" />
<![endif]--> 
 
<!--[if IE 7]>
	<link rel="stylesheet" href="styles/_shared/ie7.css" type="text/css" media="screen" />
<![endif]--> 

</head> 
 
<body> 
 
<div class="body_background"> 
	<div id="header_p2h"> 
		<div class="inner"> 
		
			<!-- logo -->
			<div id="logo"> 
				<a href="../index.html"><img alt="" src="styles/blue/p2h_logo_final.png" /></a>			</div> 								
  <!-- navigation -->
			<div id="main_navigation" class="jqueryslidemenu unitPng">
           <?php
           // $check status = $_SESSION['status'];
            if ($_SESSION['status'] == 1){$location = "useradmin.php";} // redirect to a different page than the login page
		if ($_SESSION['status'] == 2) {$location = "admin.php";}
     	if ($_SESSION['status'] == 3){$location = "careindex.php";}?>
			<ul>
					<li><a href='<?PHP echo $location ?>'>Members Home</a></li>"; 
					<li><a href="members.php">Logout</a></li>  		     
					<li><a href="contact.html">Contact Us</a></li> 
					
			  </ul>
			</div> 

            <!-- search removed -->
	  </div><!-- inner --> 
	</div>
	<!-- header -->
	
	<div id="body_block" class="full_width framed blue"> 
		<div id="intro_blurb">
			<div class="inner"><!-- InstanceBeginEditable name="heading" -->
				      <?
//$linkID = @mysql_connect("localhost", "root", "");
//mysql_select_db("p2h", $linkID);
$linkID = @mysql_connect("127.0.0.1", "prescrip", "z3tyfpKK5r");
mysql_select_db("prescrip_m3mb3rs", $linkID);	
	

//set error reporting to display and to it's highest level in case 
 //it's not and you're missing vital notices and/or warnings: 
ini_set('display_errors', 1); 
error_reporting(E_ALL); 
			//get cycle number
$weekno = date("W"); 

$resultID = mysql_query("SELECT * FROM cycle WHERE week = '$weekno'", $linkID)or die(mysql_error());
if(mysql_num_rows($resultID) < 1) 

{
	print " Could not find the week number sorry please try again later<p>" ;
}
else
{

while ($row = mysql_fetch_assoc($resultID)) 
{ 
$cycle = $row['cycle'];
}
}

			?>
				<h2>Admin pages - Welcome <? echo($username)?> - Current Cycle: <? echo($cycle)?></h2><!-- InstanceEndEditable -->
			</div>
		</div><!-- intro_blurb -->
		<div class="clearboth"></div>	

		<div id="body_block_background"> 
		<div class="inner"> 
	                <div id="main"> 
				<div class="content"> <!-- InstanceBeginEditable name="content" --><?php
//$message = $_GET['message'];
//print "<p>$message</p>";
				print $navigationheader ;

?>
<form action="choosenewsrecipients.php" method="post" name="form" onsubmit = "return checkrequired(this)">

  <table width="100%" border="0" cellpadding="5">
    <tr>
      <td width="14%">Contact name</td>
      <td width="86%"><input type="text" name="requiredContact" id="requiredContact" tabindex="0" /></td>
    </tr>
    <tr>
      <td>News Title</td>
      <td><input name="requiredTitle" type="text" id="requiredTitle" size="75" /></td>
    </tr>
    <tr>
      <td>News item</td>
      <td><textarea name="requiredNews" id="requiredNews" cols="75" rows="10" tabindex="1"></textarea></td>
    </tr>

    <tr>
      <td>Do you want this message sending to everyone?</td>
      <td><select name="requiredWho" id="requiredWho">
        <option>Please choose who you want to send to</option>
        <option value="yes">Send to everyone</option>
        <option value="no">Let me select who I send to</option>
      </select>
      </td>
    </tr>
    <tr>
      <td><input type="submit" name="submit" id="submit" value="Submit" tabindex="2"/></td>
      <td><input type="reset" name="clear" id="clear" value="Reset" tabindex="3"/></td>
    </tr>
  </table>

</form><!-- InstanceEndEditable -->
				  <!-- content --> 
				</div> 
				<!-- main --> 
				<div class="clearboth"></div> 
			</div><!-- inner --> 
 
			</div>
		</div><!-- body_block_background -->							
	</div><!-- body_block --> 
 
	<div id="footer"> 
		<div class="footer_background"> 
			<div class="footer_trim"></div> 
			<div class="inner"> 
				
				<div class="widget widget_text">
					<div class="one_half" style="text-align:left;"> <p>Email: <a href="mailto:info@prescription2homes.com">info@prescription2homes.com</a> | Tel: 01255 689176</p> </div><div class="textwidget_right">
						<p><a href="../privacy_policy.html">Privacy Policy</a> | <a href="../legal.html">Legal</a> | <a href="../sitemap.html">Site Map</a> </p> 
				  </div> 

				</div>

			  <div class="clearboth"></div> 
 
			</div><!-- inner --> 
		</div><!-- background --> 
	</div><!-- footer --> 
 
	<div id="sub_footer"> 
		<div class="inner"> 
			<div class="one_half"><a href="http://www.prescriptions2you.com/">&copy; 2011 Prescription2you. All Rights Reserved</a></div>			
			<div class="one_half last" style="text-align:right;"> 
				<div id="footer_nav"></div> 
			</div>											
			<div class="clearboth"></div> 
		</div><!-- inner -->							
	</div><!-- sub_footer --> 
 
	<script type="text/javascript">Cufon.now();</script> 
 
</div><!-- body_background --> 
 
</body> 
<!-- InstanceEnd --></html>
