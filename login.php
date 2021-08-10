<?php

session_start();

 $conn = new mysqli("localhost","root","","testing");

 $msg="";

 if(isset($_POST['login'])){

 $usertype = $_POST['usertype'];
 $username = $_POST['username'];
 $pass = $_POST['pass'];



 $sql = "SELECT * FROM multilogin WHERE usertype=? AND username=? AND pass_word=?";

 $stmt=$conn->prepare($sql);

 $stmt->bind_param("sss" ,$usertype,$username,$pass);

 $stmt->execute();

 $result = $stmt->get_result();
 $row = $result->fetch_assoc();

 session_regenerate_id();

 $_SESSION['username'] = $row['username'];
 $_SESSION['role'] = $row['usertype'];
 session_write_close();

 if($result->num_rows==1 && $_SESSION['role']=="admin"){


  header("location:adminpg/index11.php");
   $_SESSION['usernamee'] = $username;



 }else if($result->num_rows==1 && $_SESSION['role']=="faculty"){


   header("location:faculty/home.php");
    $_SESSION['usernamee'] = $username;


 }else if($result->num_rows==1 && $_SESSION['role']=="principal"){


  header("location:princi/index.php");



 }
 else{

         $msg = "Username Or Password Is Incorrect!";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
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
            <div class="col-md-9 col-lg-5 mx-auto">
              <h3 class="login-heading mb-4"><b>Login</b></h3>


              <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">

             <div class="form-group lead">
            <label for="usertype">Im a:</label>
            <input type="radio" name="usertype" value="admin" clas="custom-radio" required>&nbsp;Admin  |

            <input type="radio" name="usertype" value="faculty" clas="custom-radio" required>&nbsp;Faculty  |
            <input type="radio" name="usertype" value="principal" clas="custom-radio" required>&nbsp;Principal
          </div><br>

                 <div class="form-label-group">
                  <input type="text" id="inputEmail"  name="username" class="form-control" placeholder="username" required autofocus>
                  <label for="inputEmail">Username</label>
                </div><br>

                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div><br>

               <br>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" name="login" type="submit">Sign in</button>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="cancel" onclick="javascript:window.location='index.php';">Cancel</button>
                <br><div class="text-center">

                  <h5 class="text-danger text-center"><?= $msg; ?></h5>
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