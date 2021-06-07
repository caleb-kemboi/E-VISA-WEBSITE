<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment Method</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Payments Method</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a href="#home">Home</a></li>
    <li><a href="#menu1">PayPal</a></li>
    <li><a href="#menu2">Stripe</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Note</h3>
      <p>Kindly select payment method you wish to pay with, Thank you.<a href="cancel.php" class="fa fa-danger">Cancel Payment</a></p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Click PayPal Button</h3>
      <p><button type="button" class="btn btn-info"><a href="paypal.php"style="text-decoration:none;color:#fff;" target="_blank"> PayPal</a></button></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Click Stripe Button</h3>
      <p><button type="button" style="background-color:#4b7bec;" class="btn btn-info" ><a href="stripe.php" style="text-decoration:none;color:#fff;" target="_blank">Stripe</a></button></p>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
});
</script>

</body>
</html>
