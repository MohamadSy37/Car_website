<?php
include("header.php");
if(isset($_GET['rn'])){
  $id=$_GET['rn'];
  $sql=mysqli_query($con,"SELECT * FROM `brand` WHERE `id`='$id'");

$row=mysqli_fetch_array($sql);
}
?>
          <div class="p-4">
          <div class="welcome">
            <div class="content rounded-3 p-3">
              <center><h1 class="fs-3">Add Car brand</h1></center>
              <form action="../controlers/edit_brand.php" method="post"   enctype="multipart/form-data">
              <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Name Car brand</span>
  </div>
  <input type="text" name="name" value="<?php echo$row['name'];?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">data Car brand</span>
  </div>
  <input type="date" name="data" value="<?php echo$row['data'];?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<input type="text" name="id" value="<?php echo$id;?>" hidden>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Image Car brand</span>
  </div>
  <input type="file" name="file" value="../image/mark/<?php echo$row['image'];?>" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
</div>
<center><button type="submit" name="send" class="btn btn-outline-light btn-lg btn-block">send</button>
</center>

              </form>
            </div>
          </div>