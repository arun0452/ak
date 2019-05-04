<html>
<html>
<head>
<style>
table
{
text-align:center;
}
th
{
	
	height:40px;
	font-size:20px;
	background-color:#F01467;
	font-family:cambria;
text-align:center;
}
tr:hover td{
   color:red;
}
td
{
	width:20px;
	height:50px;
font-family:cambria;
background-color:#ffffff;
text-align:center;
}
body
{
	background-image:url('se.jpg');
}
</style>
</head>
<?php
$servername='localhost';
$username='root';
$password='';
$db='project';
$opt=$_POST['opt'];
$id=$_POST['id'];
$name=$_POST['name'];
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	die('Could not connect:'.mysqli_error());
}
else
{
	if($opt=='supplier')
	{
		$c=0;
		if(!empty($name) && empty($id))
		{
		$sql="select id,name,company,date from supplier where name='$name';";
		$res=mysqli_query($conn,$sql);
		?>
<?php
		while($row=mysqli_fetch_array($res))
		{
?>
<body>
<table  width="100%" height="10%">
<tr>
<td><a href><?php echo $row['id'];?></a></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['company'];?></td>
<td><?php echo $row['date'];?></td>
</tr>
</table>
<?php
		}
		}
		else if(!empty($id) && empty($name))
		{
			$sql="select id,name,company,date from supplier where id=$id;";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
			?>
			<body>
<table width="100%" height="30%">
<tr>
<th>Id</th>
<th>Name</th>
<th>Company</th>
<th>Date</th>
</tr>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['company'];?></td>
<td><?php echo $row['date'];?></td>
</tr>
</table>
<?php
		}
		}
		else if(!empty(id)&&!empty(name))
		{
			$sql="select id,name,company,date from supplier where name='$name' and id=$id;";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
			?>
			<body>
			<br>
			<br><br><br><br>
<table align="center" width="100%" height="30%">
<tr>
<th>Id</th>
<th>Name</th>
<th>Company</th>
<th>Date</th>
</tr>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['company'];?></td>
<td><?php echo $row['date'];?></td>
</tr>
</table>
<?php 
		}
		}
	}
	if($opt=='worker')
	{
		?>
		<?php
		$sql="select id,first,last,dob,job,email,mobile,gender,address,pincode,state,country from worker where id=$id;";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
			?>
			<body>
<table width="100%" height="30%">
<tr>
<th>Id</th>
<th>First name</th>
<th>Last name</th>
<th>Date of birth</th>
<th>Date of join</th>
<th>Email</th>
<th>Mobile</th>
<th>Gender</th>
<th>Address</th>
<th>Pincode</th>
<th>State</th>
<th>Country</th>
</tr>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['first'];?></td>
<td><?php echo $row['last'];?></td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['job'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['gender'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['pincode'];?></td>
<td><?php echo $row['state'];?></td>
<td><?php echo $row['country'];?></td>
</tr>
</table>
<?php
		}
		}
	if($opt=='product')
	{
		$sql="select id,name,brand,sno,mrp,quantity from product where id=$id;";
		$res=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($res))
		{
			?>
			<body>
<table width="100%" height="30%">
<tr>
<th>Id</th>
<th>Name</th>
<th>Brand</th>
<th>Serial NO</th>
<th>MRP</th>
<th>Quantity</th>
</tr>
<tr>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['name'];?></td>
<td><a href="https://en.wikipedia.org/wiki/<?php echo $row['brand'];?>"><?php echo $row['brand'];?></a></td>
<td><?php echo $row['sno'];?></td>
<td><?php echo $row['mrp'];?></td>
<td><?php echo $row['quantity'];?></td>
</tr>
</table>
<?php
		}
		}
}
?>
</html>