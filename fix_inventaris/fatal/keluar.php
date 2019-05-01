<?php
     session_start();
     $_SESSION["id_petugas"];
     $_SESSION["username"];

     unset($_SESSION["id_petugas"]);
     unset($_SESSION["username"]);

     session_unset();
     session_destroy();

     header("location:../index.php");
?>
