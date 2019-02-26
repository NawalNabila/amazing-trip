<?php
$connect = @mysql_connect("localhost", "root", "") or die("Gagal Connect");
$username = $_POST["username"];
$email= $_POST["email"];
$pass = $_POST["pass"];

mysql_select_db("ipcom", $connect) or die("Gagal buka database");
mysql_query("insert into person values('$username', '$email', '$pass')", $connect);
header("Location: signin.html");
?>
