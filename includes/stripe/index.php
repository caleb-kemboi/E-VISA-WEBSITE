<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
           data-description="Kindly pay <?php echo $company_name; ?>" 
           <?php
        require_once('./config.php');
    require_once("../db.php");
         $query = "SELECT * FROM apply_visa ORDER BY apply_visa_id DESC LIMIT 1";
          $select_all_settings_query = mysqli_query($connection, $query);

           while ($row = mysqli_fetch_assoc($select_all_settings_query)) {
              
             $txtAmount = $row['txtAmount'];
             $txttotal = $txtAmount * 100;
           }
           ?>
           data-amount="<?php echo $txttotal; ?>"
           data-currency ="USD"
           
           ></script>
</form>