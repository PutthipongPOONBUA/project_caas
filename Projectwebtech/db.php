<?php  
$hostName="localhost";
$user="root";
$pass="";
$dbName="caas";
$connect = mysqli_connect($hostName,$user,$pass,$dbName) or die("ไม่สามารถเชื่อมฐานข้อมูลได้");
