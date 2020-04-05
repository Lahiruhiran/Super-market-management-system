<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"nagarik_bazar");
if(isset($_POST['submit']))
{
	$name1 = mysqli_real_escape_string($con, $_POST['fname']);
	$name2 = mysqli_real_escape_string($con, $_POST['lname']);
	$mail = mysqli_real_escape_string($con, $_POST['email']);
	$pas1 = mysqli_real_escape_string($con, $_POST['pass']);
	$pas2 = mysqli_real_escape_string($con, $_POST['cpass']);

	if($pas1 == $pas2)
	{
		$pas1 = md5($pas2);
		$query = "INSERT INTO register (f_name, l_name, email, password) values ('".$name1."','".$name2."','".$mail."','".$pas1."');";
		if(mysqli_query($con, $query))
			
				echo ("<script> alert('Successfully Registered.'); </script>");
				echo ("<script> location.href = 'login.php'; </script>");
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