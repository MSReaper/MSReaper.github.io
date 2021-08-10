<?php
if(isset($_POST['submit']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['pass_word'];
  mysql_connect('localhost','root','');
  mysql_select_db('testing');
  $select=mysql_query("update signup set pass_word='$pass' and set cpassword='$cpass' where email='$email'");
}
?>