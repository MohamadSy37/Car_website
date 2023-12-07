<?php
session_start();
include("../controlers/db_con.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

</head>
<body>
    <aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
        <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
        <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
          <?php 
            $sql=mysqli_query($con,"SELECT * FROM `user` WHERE `id`='$_SESSION[user_id]'");
            $req=mysqli_fetch_array($sql);
            if($req['image']===""){
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
               src="../image/mark/<?php echo$req['image'];?>" alt="" srcset="">
              <?php
            }
            ?>
          <div class="ms-2">
            <h5 class="fs-6 mb-0">
              <a class="text-decoration-none" href=""><?php echo$req['name'];?></a>
            </h5>
          </div>
        </div>
      
        <div class="search position-relative text-center px-4 py-3 mt-2">
          <input type="text" class="form-control w-100 border-0 bg-transparent" placeholder="Search here">
          <i class="fa fa-search position-absolute d-block fs-6"></i>
        </div>
      
        <ul class="list-unstyled">
          <li class="">
            <a href="index.php"> Dashboard</a>
          </li>
          <li><a href="Register/index.php">add Admin</a></li>

              <li><a href="add_marks.php">Add car brand</a></li>
              <li><a href="mark.php">All car brand</a></li>
              <li><a href="add_car.php">Add car's</a></li>
              <li><a href="car.php">All car's</a></li>
              <li><a href="edit_info.php">Edit information</a></li>

              <li><a href="logout.php">logout</a></li>

        </ul>
      </aside>
      
      <section id="wrapper">
        <nav class="navbar navbar-expand-md">
          <div class="container-fluid mx-2">
            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="uil-bars text-white"></i>
              </button>
              <a class="navbar-brand" href="../index.php"><span class="main-color">Max</span>wheels</a>
            </div>

          </div>
        </nav>
        
        <section class="statistics mt-4">
            <div class="row">
              <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                  <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
                  <div class="ms-3">
                    <div class="d-flex align-items-center">
                      <h3 class="mb-0">
                        
                      <?php 
                        $sqli="SELECT COUNT(*) as total FROM user WHERE `type`='admin'";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                         echo $ff['total'];
                        ?>
                      </h3> <span class="d-block ms-2">admin</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                  <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
                  <div class="ms-3">
                    <div class="d-flex align-items-center">
                      <h3 class="mb-0">
                        
                      <?php 
                        $sqli="SELECT COUNT(*) as total FROM car WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                         echo $ff['total'];
                        ?>
                      </h3> <span class="d-block ms-2">car</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="box d-flex rounded-2 align-items-center p-3">
                  <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
                  <div class="ms-3">
                    <div class="d-flex align-items-center">
                      <h3 class="mb-0">
                        
                      <?php 
                        $sqli="SELECT COUNT(*) as total FROM brand WHERE 1";
                        $ss=mysqli_query($con,$sqli);
                        $ff=mysqli_fetch_assoc($ss);
                         echo $ff['total'];
                        ?>
                      </h3> <span class="d-block ms-2">brand</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
   