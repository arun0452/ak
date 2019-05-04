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
	if(isset($_POST['update']))
	{
	if(empty($id))
	{
		?>
		<script>
		alert('Please enter id...');
		window.location.href="update_stock.html";
		</script>
		<?php
	}
	if(!empty($name)&&empty($brand)&&empty($sno)&&empty($mrp)&&empty($quantity))
	{
		$sql="update product set name='$name' where id=$id";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="update_stock.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="update_stock.html";
</script>
<?php
		}
}
if(empty($name)&&!empty($brand)&&empty($sno)&&empty($mrp)&&empty($quantity))
	{
		$sql="update product set brand='$brand' where id=$id";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="update_stock.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="update_stock.html";
</script>
<?php
		}
}
if(empty($name)&&empty($brand)&&!empty($sno)&&empty($mrp)&&empty($quantity))
	{
		$sql="update product set sno=$sno where id=$id";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="update_stock.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="update_stock.html";
</script>
<?php
		}
}
if(empty($name)&&empty($brand)&&empty($sno)&&!empty($mrp)&&empty($quantity))
	{
		$sql="update product set mrp=$mrp where id=$id";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="update_stock.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="update_stock.html";
</script>
<?php
		}
}
if(empty($name)&&empty($brand)&&empty($sno)&&empty($mrp)&&!empty($quantity))
	{
		$sql="update product set quantity=quantity+$quantity where id=$id";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="update_stock.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="update_stock.html";
</script>
<?php
		}
}
else
{
	?>
	<script>
	alert('please enter the correct details');
	</script>
	<?php
}
	}
	else
	{
		?>
		<script>
		window.location.href="selection.html";
		</script>
		<?php
}
}
?>
</html>
