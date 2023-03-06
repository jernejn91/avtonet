<?php
include_once "session.php";
include_once "database.php";



$user_id=$_SESSION['user_id'];

$brand=$_POST['brand'];
$model=$_POST['model'];
$year=$_POST['year'];
$km=$_POST['km'];
$ccm=$_POST['ccm'];
$kw=$_POST['kw'];
$fuel=$_POST['fuel'];




if (!empty($brand) && !empty($model)) {
    $query = "INSERT INTO cars(brand, model,year,km,kw,ccm,fuel,user_id) VALUES (?,?,?,?,?,?,?,?)";

    $stmt=$pdo->prepare($query);
    $stmt->execute([$brand, $model,$year,$km,$kw,$ccm,$fuel,$user_id]);


}

header("Location: cars.php");

