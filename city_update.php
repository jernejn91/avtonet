<?php
include_once "database.php";

$title=$_POST['title'];
$post_number=$_POST['post_number'];
$id=$_POST['id'];




if (!empty($title)) {
    $query = "UPDATE cities SET title=?, post_number=? WHERE ID=?";

    $stmt=$pdo->prepare($query);
    $stmt->execute([$title,$post_number,$id]);


}

header("Location: cities.php");

