<html>
<head>
<title>abc</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body> 
<div style="height:50px;width:100%;background:gainsboro;">
<a href="logout.php"><input type="button" value="logout" class="btn btn-danger" style="margin-left:94%;margin-top:8px;"></a>
</div>
<center>
<div style="height:500 width:350;background:yellow;">
<h1><u>Profile Info.</u></h1>
<table class="table table-striped">
<tr bgcolor="blue" style="background:blue;color:white;">
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Address</th>
<th>Course</th>
<th>Password</th>
</tr>
<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}
$sel=mysql_select_db("ums", $con);
if (!$sel)
{
die('Could not select db: ' . mysql_error());
} 
$sql = "select * from signup";  
$ret = mysql_query($sql,$con); 
while($row=mysql_fetch_array($ret))		
{?>
<tr>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['mobile'];?></td>
<td><?php echo $row['address'];?></td>  
<td><?php echo $row['course'];?></td>
<td><?php echo $row['password'];?></td>
</tr>
<?php  }?>
</table>
</div>
</center>
</body>
</html>