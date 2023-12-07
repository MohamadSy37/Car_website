<?php
include("db_con.php");
$id=$_GET['rn'];
$sql=mysqli_query($con,"DELETE FROM `user` WHERE `id`='$id'");
if($sql){
    header("Location: ../admin/index.php?rn=Sucfull Delete");
}else{
    header("Location: ../admin/index.php?rn=Not Delete");
}