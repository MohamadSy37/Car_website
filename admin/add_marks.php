<?php
include("header.php");
if(isset($_GET['rn'])){
  $error=$_GET['rn'];
  echo"<script>alert('".$error.".');</script>";
}
?>
          <div class="p-4">
          <div class="welcome">
            <div class="content rounded-3 p-3">
              <center><h1 class="fs-3">Add Car brand</h1></center>
              <form action="../controlers/add_brand.php" method="post"   enctype="multipart/form-data">
              <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Name Car brand</span>
  </div>
  <input type="text" name="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">data Car brand</span>
  </div>
  <input type="date" name="data" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Image Car brand</span>
  </div>
  <input type="file" name="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<center><button type="submit" name="send" class="btn btn-outline-light btn-lg btn-block">send</button>
</center>

              </form>
            </div>
          </div>