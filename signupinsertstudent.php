<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
die('Could not connect: ' . mysql_error());
}
$sel=mysql_select_db("ums", $con);
if(!$sel)
{
die('Could not select db: ' . mysql_error());
}
$sql="INSERT INTO signup (name,email,mobile,address,course,password)VALUES('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]')";
$a=$_POST['t2'];
$b=$_POST['t6'];
if(!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
if($a==''&&$b=='')
{
echo "email and password cannot be left blank";
}
echo '<script>alert("data submitted successfully");</script>';
mysql_close($con);
?>