
<?php
include_once "session.php";
include_once "database.php";



$user_id=$_SESSION['user_id'];

$id = $_POST ['id'];

$brand=$_POST['brand'];
$model=$_POST['model'];
$year=$_POST['year'];
$km=$_POST['km'];
$ccm=$_POST['ccm'];
$kw=$_POST['kw'];
$fuel=$_POST['fuel'];




if (!empty($brand) && !empty($model)) {
    $query = "UPDATE cars SET brand=?, model=?,year=?,km=?,kw=?,ccm=?,fuel=? WHERE user_id=? and id=? ";

    $stmt=$pdo->prepare($query);
    $stmt->execute([$brand, $model,$year,$km,$kw,$ccm,$fuel,$user_id,$id]);


}

header("Location: cars.php");

