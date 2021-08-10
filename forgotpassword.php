
<?php


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a functiouse PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';
require 'messages.php';

$msg="";
$msg1="";
$email="";

if(isset($_POST["email"])){

	 $emailTo  = $_POST["email"];

	 $code = uniqid(true);
	 $query  = mysqli_query($con, "INSERT INTO password_reset(code, email) VALUES('$code', '$emailTo')");
     if(!$query){

		exit("could not generate code");

	}


	$mail = new PHPMailer(true);


		try {
			//Server settings
							// Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = '';                    // SMTP username
			$mail->Password   = '';                               // SMTP password
			$mail->SMTPSecure = 'tls';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('mokshith.saliyan081@gmail.com', 'CollegeBLog');
			$mail->addAddress($emailTo);     // Add a recipient
			$mail->addReplyTo('no_reply@gmail.com', 'noreply');

			//

			// Content
			$url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/forgotpassrecoverymail.php?code=$code";
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject = 'Password reset link';
			$mail->Body    = "<h1> You requested a password reset</h1>
			                   Click <a href='$url'>this link</a> to change password";
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			echo "Reset password has been sent to your email address";
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
		exit();

}

// Instantiation and passing `true` enables exceptions
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Reset</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<style>
    body {
	background: #3b5998;
	font-size: 1.1em;
	font-family: sans-serif;
}
a {
	text-decoration: none;
}
form {
	width: 25%;
	margin: 70px auto;
	background: white;
	padding: 10px;
	border-radius: 3px;
}
h2.form-title {
	text-align: center;
}
input {
	display: block;
	box-sizing: border-box;
	width: 100%;
	padding: 8px;
}
form .form-group {
	margin: 10px auto;
}
form button {
	width: 100%;
	border: none;
	color: white;
	background: #3b5998;
	padding: 15px;
	border-radius: 5px;
}
.msg {
	margin: 5px auto;
	border-radius: 5px;
	border: 1px solid red;
	background: pink;
	text-align: left;
	color: brown;
	padding: 10px;
}


    </style>
</head>
<body>
	<form class="login-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

		<h2 class="form-title">Reset Password</h2>
		<!-- form validation messages -->

		<div class="form-group">
			<label>Your email address Here.</label>
			<input type="email" name="email" placeholder="Enter Your Email.">
		</div>
		<div class="form-group">
			<button type="submit" name="submit" class="login-btn">Submit</button>
            <br>
            <br>
			<button type="button" onclick=history.go(-1); class="login-btn btn-info">Cancel</button>
			<br>
			<h4 class="text-center text-danger"><?= $msg; ?></h4>
			<h4 class="text-center text-success"><?= $msg1; ?></h4>
		</div>
	</form>
</body>
</html>