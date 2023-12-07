<?php
include("header.php");
if(isset($_GET['rn'])){
    $error=$_GET['rn'];
    echo"<script>alert('".$error.".');</script>";
}
  $id=$_SESSION['user_id'];
  $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$id'");

$row=mysqli_fetch_array($sql);

?>
          <div class="p-4">
          <div class="welcome">
            <div class="content rounded-3 p-3">
              <center><h1 class="fs-3">Edit info <?php echo$row['name'];?></h1></center>
              <center><h6>Please Verfiy your password first</h5></center>
              <form action="" method="get">
              <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Password</span>
  </div>
  <input type="password" name="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<center><button type="submit" name="verfiy" class="btn btn-outline-light btn-lg btn-block">verfiy</button>
</center>
              </form>
              <?php
                if(isset($_GET['verfiy'])){
if(md5($_GET['password'])===$row['password']){
   ?>
              <form action="../controlers/edit_info.php" method="post"   enctype="multipart/form-data">
              <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">full name</span>
  </div>
  <input type="text" name="fulname" value="<?php echo$row['name'];?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">username</span>
  </div>
  <input type="name" name="username" value="<?php echo$row['username'];?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">username</span>
  </div>
  <input type="email" name="email" value="<?php echo$row['email'];?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">new password</span>
  </div>
  <input type="password" name="password"  class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">data birthday</span>
  </div>
  <input type="date" name="data"  value="<?php echo$row['birthday'];?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Image user</span>
  </div>
  <input type="file" name="file" required class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<center><button type="submit" name="send" class="btn btn-outline-light btn-lg btn-block">send</button>
</center>

              </form>
   <?php
}else{
    ?>
              <center><h6>The password not corect</h5></center>

    <?php
}
                }
              ?>

            </div>
          </div>