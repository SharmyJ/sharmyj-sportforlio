<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);

// Admin login handling
$admin_error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];

    // Replace this with your actual admin validation logic
    if ($admin_username == 'admin' && $admin_password == 'password') {
        // Admin login success logic here
        header('Location: admin_dashboard.php');
    } else {
        $admin_error = 'Invalid credentials';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$user_data['page_title']?></title>
  <meta content="<?=$user_data['description']?>" name="description">
  <meta content="<?=$user_data['keywords']?>" name="keywords">

  <!-- Favicons -->
  <link href="images/<?=$user_data['siteicon']?>" rel="icon">
  <link href="images/<?=$user_data['siteicon']?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v2.4.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .admin-login-button {
      display: none;
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 9999;
    }
  </style>
</head>

<body style="background:url('images/blue-bg.jpg') repeat; background-size: cover;">

<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);

// Admin login handling
$admin_error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_username = $_POST['admin_username'];
    $admin_password = $_POST['admin_password'];

    // Replace this with your actual admin validation logic
    if ($admin_username == 'admin' && $admin_password == 'password') {
        // Admin login success logic here
        header('Location: admin_dashboard.php');
    } else {
        $admin_error = 'Invalid credentials';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$user_data['page_title']?></title>
  <meta content="<?=$user_data['description']?>" name="description">
  <meta content="<?=$user_data['keywords']?>" name="keywords">

  <!-- Favicons -->
  <link href="images/<?=$user_data['siteicon']?>" rel="icon">
  <link href="images/<?=$user_data['siteicon']?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v2.4.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body style="background:url('images/blue-bg.jpg') repeat; background-size: cover;">

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container text-center">

      <h1><a href="index.php"><?=$user_data['title']?></a></h1>
      <h2><?=$user_data['subtitle']?></h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul class="d-flex justify-content-center">
          <?php if($user_data['home_section']) { ?>
          <li class="active"><a href="#header">Home</a></li>
          <?php } ?>
          <?php if($user_data['about_section']) { ?>
          <li><a href="#about">About</a></li>
          <?php } ?>
          <?php if($user_data['resume_section']) { ?>
          <li><a href="#resume">Resume</a></li>
          <?php } ?>
          <?php if($user_data['contact_section']) { ?>
          <li><a href="#contact">Contact</a></li>
          <?php } ?>
          <li><a href="admin/login.php">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title text-center">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row justify-content-center">

        <div class="col-md-6 d-flex align-items-stretch mb-4">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$user_data['address']?></p>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch mb-4">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$user_data['email']?></p>
          </div>
        </div>

        <div class="col-md-6 d-flex align-items-stretch mb-4">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$user_data['mobile']?></p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>



  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="images/<?=$user_data['profile_pic']?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?=$user_data['about_title']?></h3>
          <p class="font-italic">
            <?=$user_data['about_subtitle']?>
          </p>
          <div class="row col-lg-12">
            <div class="col-lg-6">
              <ul>
<?php
$query2 = "SELECT * FROM personal_info";
$run2 = mysqli_query($db,$query2);

while($personal_info = mysqli_fetch_array($run2)){
  ?>
<li><i class="icofont-rounded-right"></i> <strong><?=$personal_info['label']?> :</strong> <?=$personal_info['value']?></li>
  <?php
}
?>            
              </ul>
            </div>
            
          </div>
          <p>
            <?=$user_data['about_desc']?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

 
<!-- ======= Skills Section ======= -->
<div class="skills container">

    <div class="section-title">
        <h2>Skills</h2>
    </div>

    <div class="row skills-content">

        <div class="col-lg-12">
            <?php
            $query = "SELECT * FROM skills";
            $run = mysqli_query($db, $query);

            while ($skill = mysqli_fetch_array($run)) {
                $progressWidth = $skill['skill_level'] . '%'; // Calculate width based on skill level

            ?>
                <div class="progress">
                    <span class="skill"><?=$skill['skill_name']?> <i class="val"><?=$skill['skill_level']?>%</i></span>
                    <div class="progress-bar" role="progressbar" style="width: <?=$progressWidth?>;" aria-valuenow="<?=$skill['skill_level']?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>

</div><!-- End Skills Section -->

  

  </section><!-- End About Section -->

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume">
  <div class="container">

    <div class="section-title">
      <h2>Resume</h2>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <h3 class="resume-title">Education</h3>
        <?php
        $query4 = "SELECT * FROM resume";
        $run4 = mysqli_query($db, $query4);
        while ($resume = mysqli_fetch_array($run4)) {
          if ($resume['type'] == 'Education') {
        ?>
        <div class="resume-item">
          <h4><?=$resume['title']?></h4>
          <h5><?=$resume['time']?></h5>
          <p class="org-name"><em><?=$resume['org']?></em></p>
          <p><?=$resume['about_exp']?></p>
        </div>
        <?php
          }
        }
        ?>
      </div>
</section><!-- End Resume Section -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Me</p>
        </div>

        <div class="row mt-4">

            <div class="col-md-6 d-flex align-items-stretch mb-4">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>My Address</h3>
                    <p><?=$user_data['address']?></p>
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mb-4">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Me</h3>
                    <p><?=$user_data['email']?></p>
                </div>
            </div>

            <div class="col-md-6 d-flex align-items-stretch mb-4">
                <div class="info-box">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Me</h3>
                    <p><?=$user_data['mobile']?></p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>