<?php
include('db_con.php');
session_start();

if(isset($_POST['send'])&& isset($_FILES['file'])){
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];
    $name=$_POST['name'];
    $data=$_POST['data'];
    $iduser=$_SESSION['user_id'];
    $id=$_POST['id'];
    if ($error === 0) {
        $file_ex = pathinfo($file_name, PATHINFO_EXTENSION);
        $file_ex_lc = strtolower($file_ex);
        
        $img_exs = array("png",'jpg','jpeg');
       
        if (in_array($file_ex_lc, $img_exs)) {
                
            $new_image_name = uniqid("image-", true). '.'.$file_ex_lc;
            $image_file = '../image/mark/'.$new_image_name;
            move_uploaded_file($tmp_name, $image_file);
            $sqql=mysqli_query($con,"UPDATE `brand` SET `name`='$name',`data`='$data',`image`='$new_image_name' WHERE `id`='$id'");

    if($sqql){
        header("Location: ../admin/mark.php?rn=update succfull");

    }else{
        header("Location: ../admin/mark.php?rn=update not succfull");
    }

}else{
    header("Location: ../admin/mark.php?rn=Please upload png or jpg or jpeg");
}
    }else{

    header("Location: ../admin/mark.php?rn=Please upload png or jpg or jpeg");}
}
