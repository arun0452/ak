<html>
<?php
$servername='localhost';
$username='root';
$password='';
$db='project';
$user=$_POST['user'];
$pass=$_POST['password'];
$conf=$_POST['cpassword'];
$email=$_POST['email'];
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die('Could not connect:'.mysqli_error());
}
else
{
	if($pass==$conf)
	{
		$sql="update signup set password='$pass' where user='$user'";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r = confirm("Password updated successfully");
  if (r == true) {
    window.location.href = "signin.html";
  } else {
    window.location.href = "forget_password.html";
  }
 </script>
 <?php
		}
		else
		{
?>
<script>
alert('Enter the correct details');
window.location.href = "forget_password.html";
</script>
<?php
		}
	}
	else
	{
?>
<script>
alert('Enter the correct password');
window.location.href = "forget_password.html";
</script>
<?php
	}
}
?>
</html>
