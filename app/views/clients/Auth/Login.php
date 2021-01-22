<?php
require(dirname(__FILE__).'/../../../models/Login.php');
$login= new Login();
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
    if ($login->signinWithEmailAndPaswword($_POST['email'],$_POST['password'])==true) {
        $_SESSION['email']=$_POST['email'];
 header('location:../home.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connectez-vous</title>
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
</head>
<body>
<!-- <form action="" method="POST">
        
        <input name="email" type="text">
        <input name="password" type="password">
        <button class="btn btn-info float-right">Entrer</button>
    </form>   -->
    

    <div class="login-page">
  <div class="form"> 
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form action="" method="POST" class="login-form">
      <input  name="email" type="text" placeholder="email"/>
      <input name="password" type="password" placeholder="Mot de passe"/>
      <button>Connectez-vous</button>
      <p class="message">Not registered? <a href="Register.php">Create an account</a></p>
    </form>
  </div>
</div>
<!------------------------------------------------------------------------------>

</body>
</html>
