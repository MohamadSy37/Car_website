<?php
if(isset($_GET['rn'])){
    $error=$_GET['rn'];
    echo"<script>alert('".$error.".');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>max</span>wheels </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
    </nav>

    <div id="login-btn">
        <button class="btn">login </button>
        <i class="far fa-user"></i>
    </div>

</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="controlers/login.php" method="POST">
        <h3>user login</h3>
        <input type="email" name="email" placeholder="email" class="box">
        <input type="password" name="password" placeholder="password" class="box">
        <p> forget your password <a href="#">click here</a> </p>
        <input type="submit" name="log" value="login" class="btn">
 
    </form>

</div>

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">find your car</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="#" class="btn home-parallax">explore cars</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>320+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">
        <?php
        include("controlers/db_con.php");
            $sql=mysqli_query($con,"SELECT * FROM `car` WHERE 1");
            while($row=mysqli_fetch_array($sql)){
        ?>
            <div class="swiper-slide box">
                <img src="image/car/<?php echo$row['img'];?>" alt="">
                <div class="content">
                    <div class="price"> <span>price : <?php echo$row['cost'];?></span>  </div>
                    <p>
                        <span class="fas fa-circle"></span> <?php echo$row['data'];?>
                        <span class="fas fa-circle"></span> <?php echo$row['brand'];?>
                        <span class="fas fa-circle"></span> <?php echo$row['name'];?>
                        <span class="fas fa-circle"></span> <?php echo$row['type'];?>
                        <span class="fas fa-circle"></span> <?php echo$row['Speed'];?>
                    </p>
                </div>
            </div>
            <?php
            }?>


        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>car insurance</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis, nisi.</p>
            <a href="#" class="btn"> read more</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>Brand</span> cars </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">
       <?php
            $sql=mysqli_query($con,"SELECT * FROM `brand` WHERE 1");
            while($row=mysqli_fetch_array($sql)){
        ?>
            <div class="swiper-slide box">
                <img src="image/mark/<?php echo$row['image'];?>" alt="">
                <div class="content">
                    <h3><?php echo$row['name'];?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price"><?php echo$row['data'];?></div>

                </div>
            </div>
                <?php
            }?>
       </div>

       <div class="swiper-pagination"></div>

    </div>

  

</section>


<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">
<style>
    .hamzi{
        height: 200px;
    }
</style>
        <div class="swiper-wrapper">
<?php
$test=mysqli_query($con,"SELECT * FROM `testimonials` WHERE 1");
while($req=mysqli_fetch_array($test)){
    ?>
            <div class="swiper-slide box hamzi">
                <div class="content">
                    
                    <p><?php echo$req['massage'];?>.</p>
                    <h3><?php echo$req['name'];?></h3>
                    <h3><?php echo$req['email'];?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <?php
}?>


        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1623.589166374809!2d35.80428301788637!3d35.52459048210879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzXCsDMxJzI4LjUiTiAzNcKwNDgnMTguNiJF!5e0!3m2!1sen!2s!4v1685719110572!5m2!1sen!2s" allowfullscreen="" loading="lazy"></iframe>

        <form action="controlers/add_tes.php" method="post">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" name="name" class="box">
            <input type="email" placeholder="your email" name="email" class="box">
            <textarea placeholder="your message" name="massage" class="box" cols="30" rows="10"></textarea>
            <input type="submit" name="send" value="send message" class="btn">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Latakai </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Tartos </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Damascus </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Homs </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Hama </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sy, latakai - 0001 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by sami&hamza&Ghasi&noama. web designer | all rights reserved </div>

</section>










<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>