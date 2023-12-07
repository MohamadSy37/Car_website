<?php
date_default_timezone_set('Asia/Damascus');
include('../controlers/db_con.php');
session_start();
if(isset($_POST['join'])){
    $firstname=$_POST['username'];
    $fullname=$_POST['name'];
    $email=$_POST['email'];
    $reemail=$_POST['reemail'];
    $password=md5($_POST['password']);
    $repassword=md5($_POST['repassword']);
    $birth=$_POST['data'];
    $data=date('Y-m-d');
    $email_check = "SELECT * FROM user WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if($password===$repassword){
        if(mysqli_num_rows($res) > 0){
            header("Location: ../Register/index.php?rn=The Email Used");
        }else{
            if($email===$reemail){
            if(strlen($password)>=8){
                    $sql=mysqli_query($con,"INSERT INTO `user`(`name`, `username`, `email`, `password`, `birthday`, `date_join`) 
                    VALUES ('$fullname','$fullname','$email','$password','$birth','$data')");
                    if($sql){
                        header("Location: Register/index.php?rn=User registration successful");

                    }else{
                        header("Location: Register/index.php?rn=Not User registration successful");
                    }
            }else{
                header("Location: Register/index.php?rn=the password not Enough");

            }
        }else{
            header("Location: Register/index.php?rn=Email not corect");
        }
        }
    }else{
        header("Location: Register/index.php?rn=password not corect");
    }
}
