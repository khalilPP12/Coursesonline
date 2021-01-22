<?php
require(dirname(__FILE__).'/../../../models/Register.php');
$register= new Register();
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$register->signUpWithEmailAndPasword($_POST['username'],$_POST['email'],$_POST['password']);
	header('location:../home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/main.css" rel="stylesheet" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="register.css"> -->
	<meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
	<!-- <link rel="stylesheet" href="insc.scss"> -->
	<title>Inscription</title>
<!-- Icons font CSS-->
<link href="vendors/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<link href="vendors/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<!-- Font special for pages-->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- Vendor CSS-->
<link href="vendors/select2/select2.min.css" rel="stylesheet" media="all">
<link href="vendors/datepicker/daterangepicker.css" rel="stylesheet" media="all">
<!-- Main CSS-->
<link href="cssd/main.css" rel="stylesheet" media="all">
</head>
<body>
    <!-- <form action="" method="POST">
        <input name="username" type="text">
        <input name="email" type="text">
        <input name="password" type="password">
        <button class="btn btn-info float-right">AJOUTER</button>
    </form>  -->
    <!-- <div class="main-w3layouts wrapper">
		<h1>Inscrivez-vous</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="" method="post">
					<input class="text" type="text" name="username" placeholder="Non d'utilisateur" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Mot de passe" required="">
					
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>J'accepte les termes et conditions  </span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="S'inscrire">
				</form>
				<p>Vous avez déja un compte ? <a href="login.php"> Connecte-toi maintenant !</a></p>
			</div>
		</div>

		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div> -->

		
<!--------------------///////////////////////////////////////////////////////////////////////----------------------------------------------------->
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Inscription</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nom d'utilisateur" name="username">
						</div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email" name="email">
						</div>
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Mot de passe" name="password">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Date de naissance" >
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select >
                                            <option disabled="disabled" selected="selected">GENRE</option>
                                            <option>Homme</option>
                                            <option>Famme</option>
                                            <option>Autre</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="vendors/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/datepicker/moment.min.js"></script>
    <script src="vendors/datepicker/daterangepicker.js"></script>
    <!-- Main JS-->
    <script src="jss/global.js"></script>
</body>
</html>