<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Confirm Your Payments Details</title>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap4/css/bootstrap.min.css">
	<style type="text/css">
		.mt20{
			margin-top:20px;
		}
	</style>
</head>
<body>
<div class="container">
	<h1 class="text-center mt20">Review and Confirm Payment</h1>
	<div class="row justify-content-center">
		<div class="col-sm-8">
			<table class="table table-bordered mt20">
				<thead>
					<th>Username</th>
					<th>Pay For</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Telephone</th>
					<th>Amount</th>
					<th></th>
				</thead>
				<tbody>
					<?php
						//connection
						$conn = new mysqli('localhost', 'thekenya_visa', 'thekenya_visa', 'thekenya_visa');

						$sql = "SELECT * FROM apply_visa ORDER BY apply_visa_id DESC LIMIT 1";
						$query = $conn->query($sql);

						while($row = $query->fetch_assoc()){
							echo "
								<tr>
									<td>".$row['txtSurname']."</td>
									<td> ".$row['paymentFor']." </td>
									<td> ".$row['txtFirstName']." </td>
									<td> ".$row['txtLastName']." </td>
									<td> ".$row['txtEmail']." </td>
									<td> ".$row['txtTelephone']." </td>
									<td>".$row['txtAmount']."</td>
									<td><a href='checkout.php?txtSurname=".$row['txtSurname']."' class='btn btn-primary btn-sm'>Pay with PayPal or Skrill</a></td>
								</tr>
							";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>