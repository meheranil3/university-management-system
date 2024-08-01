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
$email=$_POST['t1'];
$pass=$_POST['t2'];
$sql = "select * from signup where email = '$email' and password = '$pass'";  
$result = mysql_query($sql,$con);  
	//$row = mysql_fetch_array($result, MYSQL_ASSOC);  
$count = mysql_num_rows($result);            
if($count == 1)
{  
//echo "<h1><center> Login successful </center></h1>"; 
header('location:dashboard.php'); 
}  
else
{  
echo "<h1> Login failed. Invalid name.</h1>";  
}
?>     