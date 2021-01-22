<?php 
require(dirname(__FILE__).'/../../models/Course.php');
$course=new Course();
$data=$course->getCourses();
if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['id'])){
   $course->deleted($_GET['id']);
     header('Location:allcourse.php');
  }
?>       
                 <?php include('master/header.php') ?>
                
                <!-- ============================================================== -->
                <!-- COURSES -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12" >
                        <div class="white-box">
                            <div class="d-md-flex mb-3">
                                <h3 class="box-title mb-0">Les Cours</h3>
                           
                            </div>
                            <div   class="table-responsive">
                                <table class="table no-wrap  ">
                                    <thead >
                                        <tr >
                                            <th class="border-top-0">NOM</th>
                                            
                                            <th class=" border-top-0">PICTURE</th>
                                            <th class="text-center border-top-0">PRIX</th>
                                            <th class="text-center border-top-0">MODIFIER</th>
                                            <th class="text-center border-top-0">SUPPRIMER</th>
                                            <th class="border-top-0" >DESCRIPTION</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                    <?php foreach ($data as $key => $value) {?>
                                        <tr >
                                            <td class="text-primary"><?php echo $value['name'] ?></td>
                                            
                                            <td><img src="../images/<?php echo $value['photo'] ?>" style="with:50px; height:50px" /></td>
                                           <td ><span class="text-success"><?php echo $value['price'] ?> MAD</span></td>
                                            <td   class="txt-oflo">
                                                <form action="Update.php" method="GET">
                                                <input name="id_update" type="hidden" value=<?php echo $value['id']?>>
                                                 <button class="btn btn-warning" >Modifier</button></form>
                                            </td>
                                            <td  class="txt-oflo">
                                                <form action="" method="get">
                                                <a class='btn btn-danger' type="hidden"  href="allcourse.php?id=<?php echo $value['id'] ?>">Supprimer</a> 
                                             </form>
                                            </td>
                                            <td  class="txt-oflo"><?php echo $value['description']?></td>
                                        </tr>
                                        <?php     }?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
           <?php include('master/footer.php') ?>