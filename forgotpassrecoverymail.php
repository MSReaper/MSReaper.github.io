
<?php
include("messages.php");

if(!isset($_GET["code"])){

  exit("This Page is not found");
}

$code = $_GET["code"];

$getEmailQuery = mysqli_query($con, "SELECT email FROM password_reset WHERE code='$code'");

if(mysqli_num_rows($getEmailQuery) == 0){

  exit("Cant find page");

}

if(isset($_POST["password"])){


  $pw = $_POST["password"];
  $PW = md5($pw);

  $row = mysqli_fetch_array($getEmailQuery);


  $email = $row["email"];

  $query  = mysqli_query($con, "UPDATE signup SET pass_word='$pw', cpassword='$pw' WHERE email='$email'");

  if($query){

    $query = mysqli_query($con, "DELETE FROM password_reset WHERE code='$code'");
    exit("password updated");
  }
  else{
    exit("something went wrong");
  }
}

?>

<form method="post">


      <h2 class="form-title">New Password</h2>
            <!-- form validation messages -->

         <input type="Password" name="password" placeholder="New Password">
            <br>
        <input type="submit" name="submit" value="update password" placeholder="New Password">


	</form>

