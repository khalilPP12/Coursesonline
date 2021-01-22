

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="credit.css">
    <title>Payment</title>
</head>
<body>
<form action="charge.php" method="post" id="payment-form">
  <div class="form-row">
  <input name='lastName' type="text" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="Nom">
     <input name='firstName' type="text" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="Prénom">
     
     <input name='Email' type="email" class="form-control mb-3 stripeElement stripeElement--empty" placeholder="Email">
 <input type="hidden" name="name" value="<?php echo $_GET['name']?>">
 <input type="hidden" name="price" value="<?php echo $_GET['price']?>">  
     <label for="card-element" class=" text-primary " style="font-family: serif;font-size:25px;">
      Credit or debit card
    </label>
    <div class="form-control" id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>
    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>
  
 <button >Effectuer l'Achat</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="credit.js"></script>
</html>