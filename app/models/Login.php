<?php 

include('Database.php');
class Login extends Database{
    public function signInWithEmailAndPaswword($email,$password){
        $pdo=$this->connect();
        if(!$pdo)
     {
     echo 'erreur de connecxion avec votre base de donnée';
     }
     else{
         $query='SELECT * from users where email=:email and password=:password';
         $stmt=$pdo->prepare($query);
         $stmt->execute([
             
             ':email'=>$email,
             ':password'=>$password,
             
         ]);
         $data=$stmt->fetch();
         if($data){
             return true;
         }
         else{
             return false;
         }
     }
    }


}
?>