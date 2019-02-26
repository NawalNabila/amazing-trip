<?php
    $connect = @mysql_connect("localhost", "root", "") or die ("Gagal");
    
    $id = $_GET["id"];
    
    
    mysql_select_db("ipcom", $connect) or die ("can't open database");
    mysql_query("DELETE FROM posisi WHERE id='$id'", $connect);
    header('location:indexadmin.php');
?>