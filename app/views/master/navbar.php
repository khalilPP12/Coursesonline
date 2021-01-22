<?php 
$nav=new Course();
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">STUDIES AND FUTURE CAREERS</a>
        <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"></a>
</button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="home.php">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
        <!-- <?php  if($nav->is_admin($_SESSION['email'])) {?>   -->
              <a class="nav-link" href="../Dashboard/allcourse.php">Tableau de bord</a>
                       <!-- <?php } ?> -->
            </li>
          
          </ul>
          <ul class="navbar-nav mt-2 mt-md-0">
            <li class="nav-item active">
              <a class="nav-link" href="Auth/Login.php">Connectez-vous<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Auth/Register.php">Inscrivez-vous</a>
            </li>
        </div>
      </nav>