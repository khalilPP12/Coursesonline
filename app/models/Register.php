<?php 
include('Database.php');
class Register extends Database{
    public function signUpWithEmailAndPasword($username,$email,$password){
        $pdo=$this->connect();
        if(!$pdo)
     {
     echo 'erreur de connecxion avec votre base de donnée';
     }
     else{
         $query='INSERT into users (username,email,password) value(:username,:email,:password)';
         $stm=$pdo->prepare($query);
         $stm->execute([
             ':username'=>$username,
             ':email'=>$email,
             ':password'=>$password
             
         ]);
     }
    }
}


?>