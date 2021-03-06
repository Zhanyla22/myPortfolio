<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about";
$run = mysqli_query($db,$query);
$user_data = mysqli_fetch_array($run);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$user_data['title']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.php" style="color: #556B2F"> <?=$user_data['title']?></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->

      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

      <h2><?=$user_data['subtitle']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
 <?php
 if($user_data['home_section']){
 ?>
<li><a class="nav-link active" href="#header">??????????????</a></li>
<?php
}
 if($user_data['about_section']){
?>
          <li><a class="nav-link" href="#about">?????? ??????</a></li>
          <?php
}

if($user_data['contact_section']){
?>
          <li><a class="nav-link" href="#contact">??????????????</a></li>
          <?php
}
?>
          <li><a class="nav-link" href="admin/login.php">??????????</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

<?php
if($user_data['showicons']){
?>
 <div class="social-links">
       <a href="https://twitter.com/<?=$user_data['twitter']?>" class="twitter"><i class="bi bi-twitter"></i></a>
       <a href="https://facebook.com/<?=$user_data['facebook']?>" class="facebook"><i class="bi bi-facebook"></i></a>
       <a href="https://instagram.com/<?=$user_data['instagram']?>" class="instagram"><i class="bi bi-instagram"></i></a>
       <a href="https://linkedin.com/<?=$user_data['linkedin']?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>
 <?php

}
?>


    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>?????? ??????</h2>
        <p>?????????????? ??????????????????????!</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/<?=$user_data['profile_pic']?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?=$user_data['about_title']?></h3>
          <p class="fst-italic">
            <?=$user_data['about_subtitle']?>
            </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
<?php
$query2 = "SELECT * FROM personal_info";
$run2 = mysqli_query($db,$query2);
;
while($personal_info = mysqli_fetch_array($run2)){
?>
 <li><i class="bi bi-chevron-right"></i> <strong><?=$personal_info['label']?> : </strong> <span><?=$personal_info['value']?></span></li>

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



    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>????????????</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-12">
<?php
$query3 = "SELECT * FROM skills";
$run3 = mysqli_query($db,$query3);
;
while($skill = mysqli_fetch_array($run3)){
?>
          <div class="progress">
            <span class="skill"><?=$skill['skill_name']?><i class="val"><?=$skill['skill_level']?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?=$skill['skill_level']?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <?php
          }
          ?>



        </div>

      </div>

    </div><!-- End Skills -->


  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>?????? ????????????</h2>
        <p></p>
      </div>

      <div class="row">
        <div class="col-lg-6">


          <h3 class="resume-title">????????</h3>
<?php
$query4 = "SELECT * FROM resume";
$run4 = mysqli_query($db,$query4);
;
while($resume = mysqli_fetch_array($run4)){
if($resume['type']=='e'){
?>
          <div class="resume-item">
            <h4><?=$resume['title']?></h4>
            <h5><?=$resume['time']?></h5>
            <p><em><?=$resume['org']?></em></p>
            <p><?=$resume['about_exp']?></p>
          </div>
<?php
}
}
?>
        </div>
        <div class="col-lg-6">
        <h3 class="resume-title">??????????</h3>
          <?php
          $query4 = "SELECT * FROM resume";
          $run4 = mysqli_query($db,$query4);
          ;
          while($resume = mysqli_fetch_array($run4)){
          if($resume['type']=='p'){
          ?>
                    <div class="resume-item">
                      <h4><?=$resume['title']?></h4>
                      <h5><?=$resume['time']?></h5>
                      <p><em><?=$resume['org']?></em></p>
                      <p><?=$resume['about_exp']?></p>
                    </div>
          <?php
          }
          }
          ?>
                  </div>

  </section><!-- End Resume Section -->

  <!-- ======= Services Section ======= -->



  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>??????????????</h2>
        <p>?????????????????? ???? ????????</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>?????? ??????????</h3>
            <p>???????????????????? 98??</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>???????????????????? ??????????</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>???????????????? ??????</h3>
            <p>ja.mamytova@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>?????????????????? ??????</h3>
            <p>+996 775 120 402</p>
          </div>
        </div>
      </div>

      <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="row">

        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="????????" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="text" rows="5" placeholder="??????????????????" required></textarea>
        </div>
        <div class="my-3">
          <div class="loading">????????????????</div>
          <div class="error-message"></div>
          <div class="sent-message">?????????????????? ????????????????????. ??????????????!</div>
        </div>
        <div class="text-center"><button type="submit">?????????????????? ??????????????????</button></div>
      </form>
      <?php
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        //Load Composer's autoloader
        require 'vendor/autoload.php';
      $errors = [];
      $errorMessage = '';
      if (isset($_REQUEST['submit'])){
      if (!empty($_POST)) {

          $subject = $_POST['subject'];
          $text = $_POST['text'];





          if (empty($subject)) {
              $errors[] = 'subject is empty';
          }
           if (empty($text)) {
                  $errors[] = 'Text is empty';
              }


          if (!empty($errors)) {
              $allErrors = join('<br/>', $errors);
              $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
          } else {
          $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
          try {
              //Server settings

              $mail->SMTPDebug = SMTP::DEBUG_OFF;                   //Enable verbose debug output
              $mail->isSMTP();                                            //Send using SMTP
              $mail->Host       = 'smtp.gmail.com';                      //Set the SMTP server to send through
              $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
              $mail->Username   = 'ja.mamytova@gmail.com';                     //SMTP username
              $mail->Password   = 'xbowlneiviotvppq';                               //SMTP password
              $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
              $mail->Port       = 587;

              //Recipients
              $mail->setFrom('ja.mamytova@gmail.com');
              $mail->addAddress('zanylmamytova6@gmail.com');     // Add a recipient



              //Content
              $mail->isHTML(true);                                  // Set email format to HTML
              $mail->Subject = $_POST['subject'];
              $mail->Body    = $_POST['text'];

              $mail->send('submit');
              echo 'Message has been sent';

              exit();
          } catch (Exception $e) {
              echo 'Message could not be sent.';
              echo 'Mailer Error: ' . $mail->ErrorInfo;
          }
          }
          }
          }
          ?>


    </div>
  </section><!-- End Contact Section -->


  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    ??????????????<a href="https://bootstrapmade.com/">???????????????? ??????????????</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>