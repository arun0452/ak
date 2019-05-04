<html>
<?php
$servername='localhost';
$username='root';
$password='';
$db='project';
$id=$_POST['id'];
$name=$_POST['name'];
$brand=$_POST['brand'];
$sno=$_POST['sno'];
$mrp=$_POST['mrp'];
$quantity=$_POST['quantity'];
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die('Could not connect:'.mysqli_error());
}
else
{
	$sql="insert into product values($id,'$name','$brand',$sno,$mrp,$quantity);";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Product added');
if (r==true)
{
	window.location.href="stock_insert.html";
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