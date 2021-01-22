<?php 
require(dirname(__FILE__).'/../../models/Course.php');
$course=new Course();
$data;
if($_SERVER['REQUEST_METHOD']=='GET')
   {
   $data=$course->getOne($_GET['id_update']);
   }
   if($_SERVER['REQUEST_METHOD']=="POST" )
   {
       $id=$_GET['id_update'];
        $course->updated($id,$_POST['name'],$_POST['description'],$_FILES['photo']['name'],$_POST['price']);
        header('location:allcourse.php');
    }

?>
     <?php include('master/header.php') ?>
<div class="col-lg-8 col-xlg-9 col-md-12">
     <h1 class="text-center mt-1 offset-2 text-secondary">Modification </h1>
                        <div class="card mt-2 offset-2">
                            <div class="card-body">
                                <form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Nom du cours</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="name" type="text" placeholder="Entrer le Nom" value=<?php echo $data['name'] ?> 
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">description</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <textarea  name="description" type="text" class="form-control form-control-lg  mb-2" ><?php echo $data['description'] ?></textarea>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Photo</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input class="mb-2" name="photo" type="file" class="form-control p-0 border-0" id="customFile" /> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Prix</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="price" placeholder="Prix"  value=<?php echo $data['price'] ?>
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Modifier</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<?php include('master/footer.php') ?>