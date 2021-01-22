<?php 
require(dirname(__FILE__).'/../../models/Course.php');
$detail=new Course();
if($_SERVER['REQUEST_METHOD']=='GET')
   {
   $data=$detail->getOne($_GET['id_update']);
   }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="detaill.css">
    <link rel="stylesheet" href="footer.css">
    <title>Detail</title>
</head><?php include('../master/navbar.php') ?>
<body>
  

<div class='detail'>
<div class="flex flex-wrap -m-3"> 
<div class="w-full sm:w-1/2 md:w-1/3 flex flex-col p-3">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex-1 flex flex-col">
      <div class="bg-cover h-48" style="background-image: url(https://images.unsplash.com/photo-1523978591478-c753949ff840?w=900);"></div>
      <div class="p-4 flex-1 flex flex-col" >
        <h3 class="mb-4 text-2xl text-primary"><?php echo $data['name'] ?></h3>
        <div class="mb-4 text-grey-darker text-sm flex-1">
          <p><img class="card-img-top float-left mr-2" src="../images/<?php echo $data['photo'] ?>" style="with:0px; height:px" /> </p>
        </div>
        <div class="mb-4 text-grey-darker text-sm flex-1">
          <h5><?php echo $data['description'] ?> </5>
        </div>
        <div class="mb-4 text-grey-darker text-sm flex-1">
          <p><span style="font-family:times;"> Prix </span>: <span style="font-family:times;" class="text-success"> <?php echo $data['price'] ?> MAD</span> </p>
        </div>
        <form action="" method="post">
     
          <a href="../payment/index.php?name=<?php echo $data['name'] ?>&price=<?php echo $data['price'] ?>"  class="btn btn-outline-success mt-2 border-t border-grey-light pt-2 text-xs text-grey hover:text-red uppercase no-underline tracking-wide" >Achetez Maintenant </a>
        </form>
      
      <a class="btn btn-outline-danger  mt-2 border-t border-grey-light pt-2 text-xs text-grey hover:text-red uppercase no-underline tracking-wide " href="home.php">Retour</a>
    </div>
    </div>  
  </div>
  </div>
</div>
  <?php include('../master/footer.php') ?>
</body>
</html>