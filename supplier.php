<html>
<?php
$servername='localhost';
$username='root';
$password='';
$db='project';
$id=$_POST['id'];
$name=$_POST['name'];
$company=$_POST['company'];
$date=$_POST['date'];
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die('Could not connect:'.mysqli_error());
}
else
{
		$sql="insert into supplier values($id,'$name','$company','$date');";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Details inserted successfully');
if (r==true)
{
	window.location.href="supplier.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details');
</script>
<?php
		}
}
	?>`
</html>