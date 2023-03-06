
<?php
 include_once "header.php";
 ?>

<hi>Tvoji avtomobili</hi>

<a href = "car_add.php" class ="button">Nov avtomobil <a/>
<br />


<div class="table-wrapper">
    <table>
        <thead>
        <tr>
            <th>Znamka</th>
            <th>Model</th>
            <th>Letnik</th>
            <th>Gorivo</th>
            <th>Akcija</th>



        </tr>




        </thead>
        <tbody>
<?php
include_once "database.php";

$query="SELECT * from cars where user_id=?";
$stmt=$pdo->prepare($query);
$stmt->execute([$_SESSION['user_id']]);



while ($row=$stmt->fetch()){
    echo '<tr>';
    echo '<td><a href="car.php?id='.$row['id'].'" >'.$row['brand'].'</a></td>';
    echo '<td>'.$row['model'].'</td>';
     echo '<td>'.$row['year'].'</td>';
     echo '<td>'.$row['fuel'].'</td>';



    echo '<td>

            <a href="car_delete.php?id='.$row['id'].'" class ="fa fa fa-trash" onclick="return confirm(\'Ste prepricani?\');"></a>
            <a href="car_edit.php?id='.$row['id'].'" class ="fa fa-edit"></a>
            
               </td>';


    echo '</tr>';


}
?>

        </tbody>
      </table>

    </div>




<?php
include_once "footer.php";
?>



