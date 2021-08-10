
<?php
session_start();


//session_destroy();
unset($_SESSION['usernamee']);
unset($_SESSION['pass']);


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'testing');

$msg="";

if(isset($_POST['login'])){

	$username = $_POST['usernamee'];
$pass = $_POST['pass'];


$s = "select * from signup where name = '$username' and pass_word = '$pass'";

$result = mysqli_query($con, $s);


$num = mysqli_num_rows($result);

if($num == 1){

	if($_POST['usernamee']==true)
	{
		setcookie("usernamee",$username,time()+60*60);

        setcookie("pass",$pass,time()+60*60);

        header('location:student/startingpage.php');
        
        $_SESSION['usernamee'] = $username;
	}

    header('location:student/startingpage.php');
    $_SESSION['usernamee'] = $username;

}else{


    $msg = "Username Or Password  Is Incorrect!";
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to Access</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>

<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-6 mx-auto">
              <h3 class="login-heading mb-4"><b>Login</b></h3>


              <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>" >

                 <div class="form-label-group">
                  <input type="text" id="inputEmail"  name="usernamee" class="form-control" placeholder="username"  required autofocus>
                  <label for="inputEmail">Username</label>
                </div><br>

              <div class="form-label-group">
                  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div><br>

                <div class="custom-control custom-checkbox mb-3">
                  <input type="checkbox" class="custom-control-input" name="remember" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">Remember password</label>
                </div><br>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="login" type="submit">Sign in</button>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="cancel" onclick="javascript:window.location='index.php';">Cancel</button>
                <br><div class="text-center">
                  <a class="small" href="forgotpassword.php">Forgot Password?</a></div>
                   <h5 class="text-center text-danger"><?= $msg; ?></h5>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>