<?php
$connection = mysql_connect("localhost", "root", ""); 
if(!$connection){
	echo 'not connected to server';
}
$db = mysql_select_db("admin_db",$connection);
if(!$db){
	echo 'database not connected';
}
$na = $_POST['username'];
$pa = $_POST['password'];
$sql = "insert into login(Username,Password) values ('$na', '$pa')";
$result=mysql_query($sql);
if(!$sql){
echo "<p>Insertion Failed</p>";}
	else{
		   echo "<p>Insertion success</p>";
}		
?>