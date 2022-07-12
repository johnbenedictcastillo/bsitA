<?php
$con = mysqli_connect('localhost', '127.0.0.1', '','final_project');

$txtbUser = $_POST['txtbUser'];
$txtbPass = $_POST['txtbPass'];
$txtbFname = $_POST['txtbFname'];
$txtbLname = $_POST['txtbLname'];

$sql = "INSERT INTO `account` (`username`, `password`, `firstname`, `lastname`) VALUES ('$txtbUser', '$txtbPass', '$txtbFname', '$txtbLname')";

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>