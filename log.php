<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"nagarik_bazar");
if(isset($_POST['submit']))
{
	
	$mail = mysqli_real_escape_string($con, $_POST['email']);
	$pas1 = mysqli_real_escape_string($con, $_POST['pass']);
	

	
	
	$query = "SELECT email,password from register where email='".$name1."' and password ='".$pas1."'";
	if(mysqli_query($con, $query))
	{
			
		echo ("<script> alert('login sucess full.'); </script>");
		echo ("<script> location.href = 'home.php'; </script>");
	}
			
	else {
		echo ("<script> alert('Admin will not notify.'); </script>");
	}
		}
		
else
{
	echo "Unauthorized Access. Error Code : " . mysqli_connect_errno();
	header("Refresh:1, url=Index.php");
}
?>