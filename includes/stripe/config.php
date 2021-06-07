<?php
// Including the library instead of using Composer
// Read more about installing this library here: https://github.com/stripe/stripe-php
require_once('stripe-php-master/init.php');
// Replace with your API keys
$stripe = array(
  "secret_key"      => "sk_test_ayZu7IJooQoyXnyE8uFBzU3A00wJIECqgB",
  "publishable_key" => "pk_test_fClSbVwnRiMccP9uNGWSsOid004E3JzeCx"
);
// Set the API key for use in your app
\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
<?php

    require_once("db.php");
         $query = "SELECT * FROM settings";
          $select_all_settings_query = mysqli_query($connection, $query);

           while ($row = mysqli_fetch_assoc($select_all_settings_query)) {
             $company_name = $row['company_name'];
  }
  ?>
