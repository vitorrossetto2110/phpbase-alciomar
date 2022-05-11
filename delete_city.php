<?php
include 'connect.php';

$id = $_GET['ID_city']

$sq="delete from city where ID_city=$id";
mysqli_query($con,$sq);
header('location:viewall_city.php');
?>