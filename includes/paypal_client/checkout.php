<!DOCTYPE html>
<head>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="asset/bootstrap4/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="asset/swal2/sweetalert2.min.css">
  	<script src="https://www.paypalobjects.com/api/checkout.js"></script>
  	<style type="text/css">
  		.mt20{
			margin-top:20px;
		}
  	</style>
</head>
<body>
<div class="container">
	<h1 class="text-center mt20">Paypal Method</h1>
	<div class="row justify-content-center">
		<div class="col-sm-8 mt20">
			<h4>Order Details</h4>
		    <p>	<table class="table table-bordered mt20">
				<thead>
					<th>Address</th>
					<th>Country</th>
					<th>Payment For</th>
					<th>Mobile Number</th>
					<th>Amount</th>
				</thead>
				<tbody>
					<?php
						//connection
						$conn = new mysqli('localhost', 'thekenya_visa', 'thekenya_visa', 'thekenya_visa');

						$sql = "SELECT * FROM apply_visa WHERE txtSurname='$txtSurname' ORDER BY apply_visa_id DESC  LIMIT 1";
						$query = $conn->query($sql);
						$row = $query->fetch_assoc();
							echo "
								<tr>
									<td>".$row['txtAddress']."</td>
									<td>".$row['drpCountryOfResidence']."</td>
									<td>".$row['paymentFor']."</td>
									<td>".$row['txtTelephone']."</td>
									<td>".$row['txtAmount']."</td>
								</tr>
							";
					?>
					<!--
					<tr>
						<td colspan="2" align="right"><span id="print"><input type="submit" value=""></span></td>
					</tr>
					-->
				<hr>
				</tbody>
			</table></p>
			<table class="table table-bordered mt20">
				<thead>
					<th>UserName</th>
					<th>Amount</th>
				</thead>
				<tbody>
					<?php
						//connection
						$conn = new mysqli('localhost', 'thekenya_visa', 'thekenya_visa', 'thekenya_visa');

						$sql = "SELECT * FROM apply_visa ORDER BY apply_visa_id DESC  LIMIT 1";
						$query = $conn->query($sql);
						$row = $query->fetch_assoc();
							echo "
								<tr>
									<td>".$row['txtSurname']."</td>
									<td>".$row['txtAmount']."</td>
								</tr>
							";
					?>
					<tr>
						<td colspan="2" align="right"><span id="paypal-button"></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="asset/jquery.min.js"></script>
<script src="asset/bootstrap4/js/bootstrap.min.js"></script>
<script src="asset/swal2/sweetalert2.min.js"></script>
<script>
paypal.Button.render({
    env: 'production', // change for production if app is live,

	client: {
        // sandbox:    'AbxHfqe2grryJudvpWr8FfoO3d_GXLqAjHFkbGUdG6Nus8hSE-Y6HRZ4BBeBlQ3qjJObsJaCj_ec3Gos',
        production: 'AcjJ0ibj4LJ2TimkCtI6YvIpjoXYkodzv_IYEKKNEUelVUVTA4VyogtroPRTkyJO5abJ5xZtvfNaUzZQ',
    },

    commit: true, // Show a 'Pay Now' button

    style: {
    	color: 'gold',
    	size: 'small'
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                    	//total purchase
                        amount: { 
                        	total: '<?php echo $row['txtAmount']; ?>',  
                        	currency: 'USD' 
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
    		//sweetalert for successful transaction
    		swal('Thank you!', 'Paypal purchase successful.', 'success');
        });
    },

}, '#paypal-button');
</script>
</body>
</html>