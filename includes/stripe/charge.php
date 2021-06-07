
<?php
  require_once('./config.php');
    require_once("../db.php");
         $query = "SELECT * FROM apply_visa ORDER BY apply_visa_id DESC LIMIT 1";
          $select_all_settings_query = mysqli_query($connection, $query);

           while ($row = mysqli_fetch_assoc($select_all_settings_query)) {
             $txtAmount = $row['txtAmount'];
  $token  = $_POST['stripeToken']; // retrieve stripeToken POST parameter to charge the card
  $customer = \Stripe\Customer::create(array(
      'email' => $_POST['stripeEmail'],
      'card'  => $token
  ));
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => '<?php echo $txtAmount; ?>',
      'currency' => 'usd'
  ));
  echo '<h1>Successfully charged $50!</h1>';
           }
    header('Location: https://www.thekenyanvisa.com/visaapp/approved.php');
?>