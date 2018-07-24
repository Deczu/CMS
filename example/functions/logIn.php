
 <?php
 $query = require '../core/bstrap.php';

 $username=$_POST["username"];
 $password=$_POST["password"];
 $user = $app['database']->login($username);
 $user=$user[0];
//die(var_dump($user));
 if(password_verify($password,$user->password)){
     $_SESSION['username']=$user->username;
     $_SESSION['id']=$user->id;
     $_SESSION['permission']=$user->permission;
     $_SESSION['company']=$user->id_firmy;
 }
 if(isset($_SESSION['username'])){
     header("Location: http://example2.com/");
 }
 else
 {
     $_SESSION=array();
     header("Location: http://example2.com/");
 }

