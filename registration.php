<?php
 session_start();

 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con, 'testing');



 $name = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['pass'];
 $cpass = $_POST['passwrd'];


 


 $s = "select * from signup where name = '$name' or email = '$email'";

 
 

 $result = mysqli_query($con, $s);
 

 $num = mysqli_num_rows($result);

 

 if($num == 1)
 {

    echo"<h2>Sorry Username / Email Has already Been Taken</h2>";

 }else if($_POST["pass"] != $_POST["passwrd"]) 
 {
    
        echo "<h2>Passwords must match</h2>";

 }
else{

 $reg = "insert into signup(name, email, pass_word, cpassword) values ('$name' , '$email' , '$pass' , '$cpass')";

    mysqli_query($con, $reg);

  
    header("Location:index2.php");
 }
 
 

?>