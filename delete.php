<?php

// include 'config.php';
$connect = mysqli_connect("localhost", "root", "root", "testing");
//if(isset($_POST['delete'])){
$id = $_GET['id'];

$strSQL = "DELETE FROM solucoes WHERE id = $id";

header('location:index.php');

?>
