<?php
include_once "database.php";
include_once "session.php";
admin_only();
$title=$_POST['title'];
$post_number=$_POST['post_number'];
$id=$_POST['id'];




if (!empty($title)) {
    $query = "UPDATE cities SET title=?, post_number=? WHERE ID=?";

    $stmt=$pdo->prepare($query);
    $stmt->execute([$title,$post_number,$id]);


}

header("Location: cities.php");

