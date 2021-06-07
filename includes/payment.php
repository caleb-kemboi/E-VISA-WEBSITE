
			<?php
            include_once("db.php");
            ?>

<?php

 if (isset($_POST['btnMakePayment'])){
	$payment_id=$_POST['payment_id'];
	$txtAmount=$_POST['txtAmount'];
    $paymentFor=$_POST['paymentFor'];
    $txtNote=$_POST['txtNote'];
    $txtFirstName=$_POST['txtFirstName'];
    $txtEmail=$_POST['txtEmail'];
    //$btnUpLoadImage=$_POST['btnUpLoadImage'];
    $txtTelephone=$_POST['txtTelephone'];
    $txtAddress=$_POST['txtAddress'];


    $query = "INSERT INTO `payment` (
    						`payment_id`,
							`txtAmount`,
							`paymentFor`,
							`txtNote`,
							`txtFirstName`,
							`txtEmail`,
							`txtTelephone`,
							`txtAddress`
							) 

							VALUES(
							  {$payment_id},
							'{$txtAmount}',
							'{$paymentFor}',
							'{$txtNote}',
							'{$txtFirstName}',
							'{$txtEmail}',
							'{$txtTelephone}',
							'{$txtAddress}'
							)";

    
$create_post_query = mysqli_query($connection, $query);

    if(!$create_post_query){
       
       	header('Location: ../make_payment.php?failed=false');
		} else {
			header('Location: ../processing.php?sucess=true');
		}
		

}
 ?>