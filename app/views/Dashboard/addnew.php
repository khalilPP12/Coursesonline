<?php 
require(dirname(__FILE__).'/../../models/Course.php');
$addNew=new Course();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $ressource=$_FILES['photo']['tmp_name'];
    $dst=$_FILES['photo']['name'];
    move_uploaded_file($ressource,'../images/'.$dst);
    $addNew->AddNewCourse($_POST['name'],$_POST['description'],$_FILES['photo']['name'],$_POST['price']);
    header('Location:allcourse.php');
}
?>
<?php include('master/header.php') ?>
 <div class="col-lg-8 col-xlg-9 col-md-12">
     <h1 class="text-center text-secondary mt-1 offset-2">Ajouter de nouveau cours </h1>
                        <div class="card mt-2 offset-2">
                            
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0 text-primary">NOM DU COURS</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="name" type="text" placeholder="Entrer le Nom" 
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0 text-primary">DESCRIPTION</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="description" placeholder="Description"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0  text-primary">PICTURE</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input class="mb-2" name="photo" type="file" class="form-control p-0 border-0" id="customFile" /> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0 text-primary">PRIX</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" name="price" placeholder="Prix"
                                                class="form-control p-0 border-0"> </div>
                                    </div>
                                    
                                  
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-info float-right">AJOUTER</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
<?php include('master/footer.php') ?>
