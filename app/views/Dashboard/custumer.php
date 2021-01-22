<?php 
require(dirname(__FILE__).'/../../models/costumer.php');
$costumer=new Costumer();
$data=$costumer->getCostumers();
if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['id'])){
    $costumer->deletecos($_GET['id']);
      header('Location:custumer.php');
   }
?>
   <?php include('master/header.php') ?>
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
                        
                        <th class=" border-top-0">PRENOM</th>
                        <th class=" border-top-0">Email</th>
                        <th class=" border-top-0">Action</th>
                        
                    </tr>
                </thead>
                <tbody >
                <?php foreach ($data as $key => $value) {?>
                    <tr >
                        <td class="text-primary"><?php echo $value['first_name'] ?></td>
                        
                        <td><?php echo $value['last_name'] ?></td>
                       <td ><span class="text-success"><?php echo $value['email'] ?></span></td>
                       <td><form action="" method="get">
                                                <a class='btn btn-danger' type="hidden"  href="custumer.php?id=<?php echo $value['id'] ?>">Supprimer</a> 
                                             </form></td>
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



