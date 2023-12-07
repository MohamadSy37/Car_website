<?php
include("db_con.php");
$id=$_GET['rn'];
$sql=mysqli_query($con,"DELETE FROM `car` WHERE `id`='$id'");
if($sql){
    header("Location: ../admin/car.php?rn=Sucfull Delete");
}else{
    header("Location: ../admin/car.php?rn=Not Delete");
}