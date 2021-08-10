
<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';


$msg ="";


$subject = '';
$message = '';


if(isset($_POST['submit']))
{

  $name = $_POST["name"];
  $email = $_POST["email"];

$emailTo = 'mokshith.saliyan081@gmail.com';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                        // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'collegeguide2020@gmail.com';                     // SMTP username
    $mail->Password   = 'admintoprincipal2020';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->From = $_POST["email"];
    $mail->FromName = $_POST["name"];

    //Recipients

    $mail->setFrom($email, $name);

    $mail->addAddress($emailTo, 'office');
    $mail->AddCC($_POST["email"], $_POST["name"]);
    $mail->WordWrap = 50;

                 // Name is optional
    $mail->addReplyTo($email, "$name");


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_POST["sub"];
    $mail->Body    = $_POST["message"];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    $msg = "Message has been sent successfully";


} catch (Exception $e) {


    $msg = "Message could not be sent. Mailer Error: {$mail->ErrorInfo} ";
}



}


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Welcome to Institute Management Guide</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="navbar">
    <div class="container">
      <a class="navbar-brand title" href="#" style="font-family: sans-serif; font-size: 16px;"><b>VIVEKANANDA INSTITUTE GUIDE</b></a>
      <img src="logo.png" alt="" style="width: 35px; hieght: 20px;">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link text-light" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="services.php">Services</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-light" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-light" href="signup.php" id="navbarDropdownPortfolio" aria-expanded="false">
            Sign-Up
            </a>


          </li>
          <li class="nav-item dropdown text-light">
          <a class="nav-link dropdown-toggle  text-light" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false" >
              Login As
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="studlogin.php">Student</a>
              <a class="dropdown-item" href="login.php">Others</a>

            </div>

         </li>
          <li class="nav-item dropdown">


          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-5 mb-3">Contact
      <small>Us</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Map Column -->
      <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <h3>Locate Us</h3>
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.971277569389!2d75.1848373145518!3d12.780376322503963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4bd119f045ae5%3A0x88c4a2b5d945a7cb!2sVivekananda%20Degree%20College!5e0!3m2!1sen!2sin!4v1576421784325!5m2!1sen!2sin"></iframe>
      </div>
      <!-- Contact Details Column -->
      <div class="col-lg-4 mb-4">
        <h3><u>Reach Us</u></h3>
        <p>
          <b>Office:</b> +91 8251 230 455
          <br>
          <br><b>Principle:</b> +91 8251 233 635
        </p>
        <p>
          <abbr title="Phone"><b>Girls Hostel:</b></abbr> +91 8251 231 399,<br><br> +91 8251 238 294 (New Block)
          <br>
          <br>
                 <b> Boys Hostel:</b> +91 8251 230 294, +91 8251 232 184
        </p>
        <p>
          <abbr title="Email"><b>EMAIL</b></abbr>:
          <a href="mailto:principalvcputtur@gmail.com">principalvcputtur@gmail.com
          </a>
        </p>
        <p>
          <abbr title="Hours"><b>>Hours</b></abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Send us a Message</h3>
        <form name="sentMessage" action="<?= $_SERVER['PHP_SELF'] ?>" id="form" method="post">
          <div class="control-group form-group">

            <div class="controls">
              <label>Full Name:</label>
              <input type="text" class="form-control" name="name"   id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Subject:</label>
              <input type="text" class="form-control" name="sub" id="phone" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email Address:</label>
              <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Message:</label>
              <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" name="submit" id="sendMessageButton">Send Message</button>
		   <h5 class="text-center text-danger"><?= $msg; ?></h5>
       <br>


        </form>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark fixed"  style="position: relative; top: 550px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright&copy;Institute Management Guide 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script>/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-70px";
  }
  prevScrollpos = currentScrollPos;
}</script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>
