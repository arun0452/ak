<html>
<?php
$servername='localhost';
$username='root';
$password='';
$db='project';
$user=$_POST['user'];
$pass=$_POST['password'];
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die('Could not connect:'.mysqli_error());
}
else
{
	$sql="select * from signup where user='$user' and password='$pass';";
	$res=mysqli_query($conn,$sql);
	$count = mysqli_num_rows($res);
	if($count==1)
	{
	?>
<script>
 window.location.href = "selection.html";
 </script>
 <?php
	}
	else
	{
?>
<script>
alert('Invalid user');
window.location.href = "signin.html";
</script>
<?php
	}
}
?>
</html>