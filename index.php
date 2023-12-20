<?php
include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1 ";
$result = mysqli_query($conn, $sql);
$userdata = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">

<!-- ======= Head ======= -->
<?php
    require("Components/head.php");
?>


<body>
    <!-- ======= Header ======= -->
    <?php
     require("Components/header.php");
?>

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/Maruf.jpg)">
        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4"><?php echo $userdata['name']?></h1>
                    <p class="hero-subtitle"><span class="typed" data-typed-items="Software Developer"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <?php
    require("Contents/about.php");
?>

        <!-- ======= Services Section ======= -->
        <?php 
    require("Contents/services.php");
?>
        <!-- ======= Counter Section ======= -->
        <?php 
    require("Contents/counter.php");
?>

        <!-- ======= Portfolio/Certifications Section ======= -->
        <?php
require ("Contents/certifications.php");
?>
        <!-- ======= Blog/Projects Section ======= -->
        <?php
require ("Contents/projects.php");
?>
        <!-- ======= Contact Section ======= -->
<?php
require ("Contents/contact.php");
?>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php 
    require("Components/footer.php");
?>
    <!-- End  Footer -->
<?php
require ("Components/preloader.php");

?>
</body>

</html>