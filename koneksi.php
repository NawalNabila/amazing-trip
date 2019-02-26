<?php
//file koneksi ke database
$host="localhost";
$username="root";
$password="";
$database="ipcom";

//Koneksi ke host
mysql_connect($host,$username,$password) or die("Maaf, Server mati");

//select database
mysql_select_db($database) or die("Database tidak ada");

?>