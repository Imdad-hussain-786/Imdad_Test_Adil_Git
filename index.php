
<?php require_once 'session_handler.php'; ?>

<?php 



$pageTitle = "Home Page"; // Set the title for this page
include 'Head.php'; 
?>

  <body>
    <!-- Top Header Start -->
    <?php  include 'Top_Header_Start.php'; ?>
    <!-- Top Header End -->
  <a href="Submitproduct.php">Submitproduct</a>
    <!-- Header Start -->
    <?php  include 'Header_Navbar.php'; ?>
    <!-- Header End -->

    <!-- Main Slider Start -->
    <?php  include 'Main_Slider.php'; ?>
    <!-- Main Slider End -->

    <!-- Feature Start-->
   <?php  include 'Feature.php'; ?>
    <!-- Feature End-->

    <!-- Category Start-->
    <?php  include 'Catogary.php'; ?>
    <!-- Category End-->

    <!-- Featured Product Start -->
   <?php  include 'Featured_Products.php'; ?>
    <!-- Featured Product End -->

    <!-- Newsletter Start -->
    <?php  include 'NewsLetter.php'; ?>

    <!-- Newsletter End -->
   
    <!-- Recent Product Start -->
    <?php  include 'RecentProducts.php'; ?>
    <!-- Recent Product End -->

    <!-- Brand Start -->
    <?php include 'Brand.php' ?>
    <!-- Brand End -->

    <!-- Footer Start -->
    
<?php  include 'Footer.php'; ?>