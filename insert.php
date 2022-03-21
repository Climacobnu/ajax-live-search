<?php

//include db connection 
$connect = mysqli_connect("localhost", "root", "root", "testing");

if(isset($_POST['upload'])){
    $DESCRICAO = $_POST['descricao'];
    $SOLUCAO = $_POST['solucao'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc, 'uploadImage/' .$img_name);
    header('location:index.php');

    // insert data

    mysqli_query($connect, "INSERT INTO solucoes (descricao, solucao, image) VALUES ('$DESCRICAO','$SOLUCAO','$img_des')");

}

?>
