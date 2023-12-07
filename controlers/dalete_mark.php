<?php
include("db_con.php");
$id=$_GET['rn'];
$sql=mysqli_query($con,"DELETE FROM `brand` WHERE `id`='$id'");
if($sql){
    header("Location: ../admin/mark.php?rn=Sucfull Delete");
}else{
    header("Location: ../admin/mark.php?rn=Not Delete");
}