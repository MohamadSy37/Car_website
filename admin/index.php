<?php
include("header.php");
if(isset($_GET['rn'])){
    $error=$_GET['rn'];
    echo"<script>alert('".$error.".');</script>";
}
?>

<section class="admins mt-4">

            <div class="row">
              <div class="md-6">
              <?php
    $sql=mysqli_query($con,"SELECT * FROM `user` WHERE 1");
    if(mysqli_num_rows($sql) > 0){
while($row=mysqli_fetch_array($sql)){
    ?>

<div class="box">
                  <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                    <div class="img">
    <?php
  if($row['image']===""){
    ?>
    <img
         class="rounded-pill img-fluid"
         width="65"
         src="../image/user/profile.png"
         alt="">
         <?php
      }else{
        ?>
        <img
        class="rounded-pill img-fluid"
         width="65"
         src="../image/mark/<?php echo$row['image'];?>" alt="" srcset="">
        <?php
      }
      ?>

                    </div>
                    <div class="ms-3">
                      <h3 class="fs-5 mb-1"><?php echo$row['email'];?></h3>
                      <p class="mb-0"><?php echo$row['date_join'];?></p>
                    </div>
                    <div class="ms-3">
                    <a href="../controlers/dalete_user.php?rn=<?php echo$row['id'];?>"><button type="button" class="btn btn-danger">Delet</button></a>
                  </div>
                  </div>

                  </div>
                  <?php
}
}else{
        ?>
              <div class="box">
                  <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                    <div class="ms-3">
                      <h3 class="fs-5 mb-1">No Result</h3>
                    </div>
                  </div>
                  </div>
        <?php
    }
?>
                </div>
              </div>
              
          </section>