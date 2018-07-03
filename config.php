<?php
   //Holezt.Id
   $hpbisnis = "0856-0081-2768";
   $emailbisnis = "jarwonozt@yahoo.com";
   $fbbisnis = "HoleztId";
   $conn = new mysqli("localhost", "root", "", "db_bisnis_wifi");
   if($conn->connect_errno){
      echo"Koneksi database gagal : ".$conn->connect_error;
   }
   $data = $conn->query("SELECT*FROM profil_usaha");
$d = $data->fetch_assoc();
?>