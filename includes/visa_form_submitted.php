<?php
            include_once("db.php");
            ?>
// <?php
// include('invoice.php');
// ?>
<?php
 if (isset($_POST['form_submitted'])){
	
	$txtDateOfArrival=$_POST['txtDateOfArrival'];
    $txtDateOfExit=$_POST['txtDateOfExit'];
    $chkMethod=$_POST['chkMethod'];
    $airport=$_POST['airport'];
    $seaport=$_POST['seaport'];
    $landborders=$_POST['landborders'];
    $txtSpecialRequest=$_POST['txtSpecialRequest'];
    //$btnUpLoadImage=$_POST['btnUpLoadImage'];
    $imageToUpload=$_POST['imageToUpload'];
    $txtGivenName=$_POST['txtGivenName'];
    $txtSurname=$_POST['txtSurname'];
    $txtbirthDay=$_POST['txtbirthDay'];
    $drpCountry=$_POST['drpCountry'];
    $txtPassportNumber=$_POST['txtPassportNumber'];
    $selVisaType=$_POST['selVisaType'];
    $txtUrlImage=$_POST['txtUrlImage'];
    $txtVisaType=$_POST['txtVisaType'];
    $txtFirstName=$_POST['txtFirstName'];
    $txtLastName=$_POST['txtLastName'];
    $txtEmail=$_POST['txtEmail'];
    $selZoneNumber=$_POST['selZoneNumber'];
    $txtTelephone=$_POST['txtTelephone'];
    $drpCountryOfResidence=$_POST['drpCountryOfResidence'];
    $txtCity=$_POST['txtCity'];
    $txtAddress=$_POST['txtAddress'];
    $txtState=$_POST['txtState'];
    $txtZipCode=$_POST['txtZipCode'];
    $txtAmount=$_POST['txtAmount'];
    $paymentFor=$_POST['paymentFor'];
    $txtNote=$_POST['txtNote'];
    $apply_visa_id=$_POST['apply_visa_id'];

    $query = "INSERT INTO `apply_visa` (
							`txtDateOfArrival`,
							`txtDateOfExit`,
							`chkMethod`,
							`airport`,
							`landborders`,
							`seaport`,
							`txtSpecialRequest`,
							`imageToUpload`,
							`txtGivenName`,
							`txtSurname`,
							`txtbirthDay`,
							`drpCountry`,
							`txtPassportNumber`,
							`selVisaType`,
							`txtUrlImage`,
							`txtVisaType`,
							`txtFirstName`,
							`txtLastName`,
							`txtEmail`,
							`selZoneNumber`, 
							`txtTelephone`, 
							`drpCountryOfResidence`,
							`txtCity`,
							`txtAddress`,
							`txtState`,
							`txtZipCode`,
							`txtAmount`,
							`paymentFor`,
							`txtNote`,
							`apply_visa_id`
							) 

							VALUES('{$txtDateOfArrival}',
							'{$txtDateOfExit}',
							'{$chkMethod}',
							'{$airport}',
							'{$seaport}',
							'{$landborders}',
							'{$txtSpecialRequest}',
							'{$imageToUpload}',
							'{$txtGivenName}',
							'{$txtSurname}',
							'{$txtbirthDay}',
							'{$drpCountry}',
							'{$txtPassportNumber}',
							'{$selVisaType}',
							'{$txtUrlImage}',
							'{$txtVisaType}',
							'{$txtFirstName}',
							'{$txtLastName}',
							'{$txtEmail}',
							'{$selZoneNumber}',
							'{$txtTelephone}',
							'{$drpCountryOfResidence}',
							'{$txtCity}',
							'{$txtAddress}',
							'{$txtState}',
							'{$txtZipCode}', 
							'{$txtAmount}',
							'{$paymentFor}',
							'{$txtNote}',
							'{$apply_visa_id}'
							)";

    
$create_post_query = mysqli_query($connection, $query);

    if(!$create_post_query){
       
    //   die("Error " . mysqli_error($connection));
       	header('Location: ../apply-visa.php');
		} else {
			header('Location: ../make_payment.php');
			exit();
		}
		

}
 ?>
