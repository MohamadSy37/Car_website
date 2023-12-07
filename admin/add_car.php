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
              <center><h1 class="fs-3">Add Car</h1></center>
              <form action="../controlers/add_car.php" method="post"   enctype="multipart/form-data">
              <div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Name Car</span>
  </div>
  <input type="text" name="name" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text"  id="inputGroup-sizing-sm">Price Car in Dollar</span>
  </div>
  <input type="number" name="price" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Speed Car</span>
  </div>
  <input type="number" name="Speed" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">data Car</span>
  </div>
  <input type="date" name="data" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>

<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Image Car</span>
  </div>
  <input type="file" name="file" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
<p>Select Brand:</p>
<?php
$brand=mysqli_query($con,"SELECT * FROM `brand` WHERE 1");
while($res=mysqli_fetch_array($brand)){

  ?>
  <div class="form-check">
  <input class="form-check-input" value="<?php echo$res['name'];?>" type="radio" name="Brand" id="flexRadioDefault<?php echo$res['id'];?>">
  <label class="form-check-label" for="flexRadioDefault<?php echo$res['id'];?>">
  <?php echo$res['name'];?>
  </label>
</div>
  <?php
}
?>
<p>Select Type:</p>
<div class="form-check">
  <input class="form-check-input" value="Diesel" type="radio" name="flexRadioDefault" id="flexRadioDefaultDiesel">
  <label class="form-check-label" for="flexRadioDefaultDiesel">
  Diesel
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" value="electricity" type="radio" name="flexRadioDefault" id="flexRadioDefaultelectricity">
  <label class="form-check-label" for="flexRadioDefaultelectricity">
  electricity
  </label>
  <input type="checkbox"
</div>
<div class="form-check">
  <input class="form-check-input" value="petrol" type="radio" name="flexRadioDefault" id="flexRadioDefaultpetrol">
  <label class="form-check-label" for="flexRadioDefaultpetrol">
  petrol
  </label>
</div>
<center><button type="submit" name="send" class="btn btn-outline-light btn-lg btn-block">send</button>
</center>

              </form>
            </div>
          </div>