<html>
<?php
error_reporting(0);
$servername='localhost';
$username='root';
$password='';
$db='project';
$id=$_POST['id'];
$first=$_POST['first'];
$last=$_POST['last'];
$dob=$_POST['dob'];
$join=$_POST['join'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$state=$_POST['state'];
$country=$_POST['country'];
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die('Could not connect:'.mysqli_error());
}
else
{
	if(isset($_POST['insert']))
	{
	$sql="insert into worker values($id,'$first','$last','$dob','$join','$email',$mobile,'$gender','$address',$pincode,'$state','$country');";
		$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Worker added');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details');
window.location.href="works.html";
</script>
<?php
		}
}
if(isset($_POST['delete']))
{
	$sql="delete from worker where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Deleted!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct ID!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(isset($_POST['update']))
{
	if(empty($id))
	{
		?>
		<script>
		alert('Enter id to update');
		window.location.href="works.html";
		</script>
		<?php
	}
	if(!empty($first)&&empty($last)&&empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
	$sql="update worker set first='$first' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&!empty($last)&&empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set last='$last' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
}
if(empty($first)&&empty($last)&&!empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set dob='$dob' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&!empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set job='$join' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&empty($join)&&!empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set email='$email' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&empty($join)&&empty($email)&&!empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set mobile=$mobile where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&!empty($gender)&&empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set gender='$gender' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&!empty($address)&&empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set address='$address' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&!empty($pincode)&&empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set pincode='$pincode' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&!empty($state)&&!empty($country))
	{
     echo 'hi';		
	$sql="update worker set state='$state' where id=$id";
	$res=mysqli_query($conn,$sql) or mysqli_error($conn);
		if($res==TRUE)
		{
?>
<script>
var r=confirm('Data updated successfully!!!');
if (r==true)
{
	window.location.href="works.html";
}
</script>
<?php
		}
		else
		{
   ?>
<script>
alert('Enter the correct details!!..');
window.location.href="works.html";
</script>
<?php
		}
}
if(empty($first)&&empty($last)&&empty($dob)&&empty($join)&&empty($email)&&empty($mobile)&&empty($gender)&&empty($address)&&empty($pincode)&&empty($state))
{
	?>
	<script>
	alert('Enter the correcr details');
	window.location.href="works.html";
	<?php
}
}
?>`
</html>