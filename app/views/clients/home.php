<?php 
session_start();
require(dirname(__FILE__).'/../../models/Course.php');
$Index=new Course();
$data=$Index->getCourses();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">
    <link rel="stylesheet" type="text/css" href="homee.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="slider.css" rel="stylesheet">
  </head>
  <title>Carousel Template for Bootstrap</title>
  <body>
     <header>
    <?php include('../master/navbar.php') ?>
        </header>
     <main role="main">
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style=" opacity: 1; " class="first-slide" src="work-731198_1920.jpg"  alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1 class="text-info">Apprendre à Coder</h1>
                <p>Coder en toute liberté </p>
                <p><a class="btn btn-lg btn-primary" href="Auth/Register.php" role="button">INSCRIVEZ-VOUS AUJOURD'HUI</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img style=" opacity: 0.3;height: 700px;" class="second-slide" src="office-925806_1920.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1 class="text-info">Le futur est à Vous</h1>
                <p>Fais de vous ce que vous revez toujours</p>
                <p><a class="btn btn-lg btn-primary" href="Auth/Login.php" role="button">Connectez-vous</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img style="   height: 550px;" class="third-slide" src="laptop-2557571_1920.jpg"  alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1 class="text-info">Contactez-Nous</h1>
                <p class="text-secondary">Découvrir vos passion cacher en toute liberté !</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">A PROPOS DE NOUS</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <hr style="width: 50%;  border: 1px solid #808080;">
      <!-- <div style="" class="card bg-dark text-white">
  <img style=" opacity: 0.5; background:cover;height: 250px; " class="card-img" src="computer-1245714_1920.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text">Last updated 3 mins ago</p>
  </div>
</div> -->
      <div class="container">
<h1  class="text-center mt-4 mb-3">Les cours les plus vendu</h1>
<div class="row QAdesh"> 
<?php foreach ($data as $key => $value) {?>
 <div class="  col-md-4 w-full sm:w-1/2 md:w-1/3 flex flex-col p-2">
     <div class="bg-white rounded-lg shadow-lg overflow-hidden flex-1 flex flex-col">
      <div class="bg-cover h-48" style="background-image: url(https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900);"></div>
      <div class=" QAdash p-4 flex-1 flex flex-col" >
        <h3  class="mb-4 text-2xl text-center"><?php echo $value['name'] ?></h3>
        <div class="mb-4 text-grey-darker text-sm flex-1">
          <p><img class="card-img-top" src="../images/<?php echo $value['photo'] ?>" style="width:70px; height:60px" /></p>
        </div>
        <div class="mb-4 text-grey-darker text-sm flex-1">
          <p><form action="Detail.php" method="GET">
              <input name="id_update" type="hidden" value=<?php echo $value['id']?>>
              <button class="btn btn-outline-secondary" >Detail &raquo;</button></form></p>
              </div>
       
      </div>
    </div>  
  </div>
 <?php     }?> 
</div>
</div>

</main>
<!-------- link CSS home.css -------------------------------------------->
<!-- <hr style="width: 50% ;  border: 1px solid #808080; margin-top:50px ; ;">
<div class="container">
  <div class="card-columns mt-3">
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/200/tech/1	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/480/tech/2	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/3	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/500/300/tech/4	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/480/tech/5	" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/200/tech/6" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/600/500/tech/7" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/600/500/tech/8" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/200/450/tech/20" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/10" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/11" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/200/400/tech/12" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/21" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/640/480/tech/14" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/200/tech/15" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/300/300/tech/16" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/300/300/tech/17" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/480/tech/18" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/300/400/tech/19" alt="Card image cap"> </div>
    <div class="card "> <img class="card-img-top" src="	https://placeimg.com/400/300/tech/20" alt="Card image cap"> </div>

  </div>
</div> -->
<?php include('../master/footer.php') ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
      <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    </body>
    </html>
