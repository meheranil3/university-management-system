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
$sql="INSERT INTO contact (fullname,emailid,mobile,message)VALUES('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]')";
$a=$_POST['t2'];
if(!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
if($a=='')
{
echo "email cannot be left blank";
}
echo '<script>alert("query submitted successfully");</script>';
mysql_close($con);
?>