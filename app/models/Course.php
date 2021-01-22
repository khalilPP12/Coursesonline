<?php 
require ('Database.php');
class Course extends Database
{
    public function getCourses(){
        $pdo=$this->connect();
        if(!$pdo)
     {
     echo 'erreur de connecxion avec votre base de donnée';
     }
     else{
        $query=' SELECT * FROM courses';
        $stmt=$pdo->prepare($query);
        $stmt->execute();
        $data= $stmt->fetchAll();
        return $data;
     }
    }
public function AddNewCourse($name,$description,$photo,$price){
    $pdo=$this->connect();
        if(!$pdo)
     {
     echo 'erreur de connecxion avec votre base de donnée';
     }
     else{
        $query='INSERT INTO courses (name,description,photo,price) values(:name ,:description  , :photo , :price)';
        $stm=$pdo->prepare($query);
        $stm->execute([   
            ':name'=>$name,
            ':description'=>$description,
            ':photo'=>$photo,
            ':price'=>$price
              ]);
                }
}
public function deleted($id){
    $pdo=$this->connect();
    if(!$pdo)
 {
 echo 'erreur de connecxion avec votre base de donnée';
 }
 else{
    $query='DELETE from courses where id=:id';
    $smt=$pdo->prepare($query);
    $smt->execute([
        ':id'=>$id
    ]);
  }
}
public function getOne($id){
    $pdo=$this->connect();
    if(!$pdo)
 {
 echo 'erreur de connecxion avec votre base de donnée';
 }
    else{
     $query='SELECT * FROM courses where id=:id';
     $stmt=$pdo->prepare($query);
     $stmt->execute([
    'id'=>$id,
    ]);
    $data=$stmt->fetch();
    return $data;
   }
   }
   public function updated($id,$name,$description,$photo,$price){
   $pdo=$this->connect();
    if(!$pdo)
 {
 echo 'erreur de connecxion avec votre base de donnée';
 }

    else{
       $query='UPDATE courses set name=:name, description=:description , photo=:photo , price =:price where id=:id';
        $stm=$pdo->prepare($query);
        $stm->execute([
            ':id'=>$id,
            ':name'=>$name,
           ':description'=>$description,
            ':photo'=>$photo,
             ':price'=>$price
        ]);
      }
    }
    public function is_admin($email){
    
      $pdo=$this->connect();
      if(!$pdo)
   {
   echo 'erreur de connecxion avec votre base de donnée';
   }
   else{
       $query='SELECT * from users where email=:email ';
       $stmt=$pdo->prepare($query);
       $stmt->execute([
                      ':email'=>$email,
                ]);
       $session=$stmt->fetch();
     if($session['is_admin'])
     {
        return true;
       }
     else{
  return false;
     }
      }
      }
}
?>