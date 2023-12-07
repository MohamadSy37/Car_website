<?php
include("db_con.php");
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $massage=$_POST['massage'];
    $sql=mysqli_query($con,"INSERT INTO `testimonials`(`name`, `email`, `massage`) VALUES ('$name','$email','$massage')");
    if($sql){
        header("Location: ../index.php?rn=Add testimonials");

    }else{
        header("Location: ../index.php?rn=not add testimonials");

    }
}