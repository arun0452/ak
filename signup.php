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
		$sql="insert into signup values('$user','$pass','$email');";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r = confirm("User Account created successfully!!!");
  if (r == true) {
    window.location.href = "signin.html";
  } else {
    window.location.href = "signup.html";
  }
 </script>
 <?php
		}
		else
		{
?>
<script>
alert('Enter the correct details');
window.location.href = "signup.html";
</script>
<?php
		}
	}
	else
	{
?>
<script>
alert('Enter the correct password');
window.location.href = "signup.html";
</script>
<?php
	}
}
?>
</html>
