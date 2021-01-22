<?php 
require ('Database.php');
class Costumer extends Database {
    public function addCostumer($id,$first_name,$last_name,$email){
        $db=$this->connect();
        if(!$db)
        {
           echo 'erreur de connecxion avec votre base de donnée';
        }
        else{
            $query='INSERT INTO customers(id,first_name,last_name,email) values(:id,:first_name,:last_name,:email)';
            $stmt=$db->prepare($query);
            $stmt->execute([
                ':id'=>$id,
                ':first_name'=>$first_name,
                ':last_name'=>$last_name,
                ':email'=>$email,
            ]);
        }
    }
    public function getCostumers(){
        $pdo=$this->connect();
        if(!$pdo)
     {
     echo 'erreur de connecxion avec votre base de donnée';
     }
     else{
        $query=' SELECT * FROM customers';
        $stmt=$pdo->prepare($query);
        $stmt->execute();
        $data= $stmt->fetchAll();
        return $data;
     }
    }
    public function deletecos($id){
        $pdo=$this->connect();
        if(!$pdo)
     {
     echo 'erreur de connecxion avec votre base de donnée';
     }
     else{
        $query='DELETE from customers where id=:id';
        $smt=$pdo->prepare($query);
        $smt->execute([
            ':id'=>$id
        ]);
      }
    }
}
?>