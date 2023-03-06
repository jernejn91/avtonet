<?php
include_once "database.php";

$title=$_POST['title'];
$post_number=$_POST['post_number'];




if (!empty($title)) {
$query = "INSERT INTO cities(title, post_number) VALUES (?,?)";

$stmt=$pdo->prepare($query);
$stmt->execute([$title,$post_number]);


}

header("Location: cities.php");
