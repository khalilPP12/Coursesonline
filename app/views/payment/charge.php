<?php 
require_once('vendor/autoload.php');
require_once('../../models/costumer.php');
\Stripe\Stripe::setApiKey('sk_test_51I3I9UH5pqFgx2RAPpNTlyP8vKJ9z5DMmMJyh2s8K9NJ9FPYJ8GlXXK83ESain1gRoXB0R6c095Tcz28WpN8IhBe00fbCItlIr');
$POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);

$firstName=$POST['firstName'];
$lastName=$POST['lastName'];
$Email=$POST['Email'];
$token=$POST['stripeToken'];
$name=$POST['name'];
$price=$POST['price'];


$customer=\Stripe\Customer::create(array(
    'email'=>$_POST['Email'],
    'source'=>$token,
));

$charge=\Stripe\Charge::create(array(
  'amount'=>(float)$price*100,
  'currency'=>'usd',
  'description'=>$name,
  'customer'=>$customer->id,

));
// print_r($charge);
$customer=new Costumer();
$customer->addCostumer($charge->customer,$firstName,$lastName,$Email);
// header('Location:success.php');
?>
<html>
  <head>
  <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Merci pour votre Achat </h1> 
        <p>full  name : <?php echo "$firstName   $lastName" ?></p>
        <p>product : <?php echo $name ?></p>
        <p>your transaction number is : <?php echo $charge['id'] ?></p>
        <p>statuts : <?php  echo $charge['status'] ?> </p>
        <a class="btn btn-outline-danger  mt-2 border-t border-grey-light pt-2 text-xs text-grey hover:text-red uppercase no-underline tracking-wide " href="../clients/home.php">Retour</a>

      </div>
    </body>
</html>