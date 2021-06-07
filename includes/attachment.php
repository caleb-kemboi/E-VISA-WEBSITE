<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ . '/vendor/autoload.php';
date_default_timezone_set("EAT"); 
// grab variables

$txtFirstName=$_POST['txtFirstName'];
$txtEmail=$_POST['txtEmail'];
$txtTelephone=$_POST['txtTelephone'];
$txtAddress=$_POST['txtAddress'];
$txtPort=$_POST['txtPort'];
$drpCountry=$_POST['drpCountry'];
$txtAmount=$_POST['txtAmount'];
$chkMethod=$_POST['chkMethod'];
$txtNote=$_POST['txtNote'];
$apply_visa_id=$_POST['apply_visa_id'];
$today_date=date("d.m.Y");
$t_today=date('H:i:s', strtotime("+3 hours"));
//create new pdf instance
$pdo = new PDO('mysql:host=localhost;dbname=thekenya_visa', 'thekenya_visa', 'thekenya_visa');
$sql = "SELECT * FROM apply_visa ORDER BY apply_visa_id DESC  LIMIT 1";
foreach ($pdo->query($sql) as $row) {

$mpdf = new \Mpdf\Mpdf();
$data = '';
$data = '<hr style="border: none; height: 10px; color: #ffa500;" /> ';
$data .= '<br/>';
$data .= '<br/>';
$data .= '<br/>';
$data .= '<div style="text-align:right ">';
$data .= '<span  style="color:navy; font-size:30px;position: absolute;margin-right: auto; width:100%;">KENYA E-VISA PORTAL</span>';
$data .= '<br/>';
$data .= '<a  href="https://thekenyanvisa.com/visaapp/apply-visa.php"style=" color:#ffa500; font-size:20px;position: absolute;">WWW.THEKENYANVISA.COM</a>';
$data .= '<br/>';
$data .= '<span style="margin-left:80%; color:white; background:red; font-size:25px;">UNPAID VISA INVOICE</span>';
$data .= '<br/>';
$data .= '</div>';
$data .= '<br/>';
$data .= '<span style="background-color:#dddddd;">Invoice No:</span>'.'<span style="background-color:#dddddd;">'.$row['txtTelephone'].'</span>';
$data .= '<br/>';
$data .= '<span style="background-color:#dddddd;">Invoice Date&Time:</span>'.'<span style="background-color:#dddddd;">'.$today_date.'</span>'.'<span style="background-color:#dddddd;">'.'&nbsp;'.'</span>'.'<span style="background-color:#dddddd;">'.$t_today.'</span>';
$data .= '<br/>';
$data .= '<br/>';
$data .= '<br/>';
$data .= '<span>Invoice To:</span>';
$data .= '<br/>';
$data .= '<span>ATTN TO:</span>'.'<strong>'.$row['txtFirstName'].'</strong>';
$data .= '<br/>';
$data .= '<span>P.O BOX </span>'.'<strong>'.$row['txtAddress'].'</strong>';
$data .= '<br/>';
$data .= '<span>TEL:</span>'.'<strong>'.$row['txtTelephone'].'</strong>';
$data .= '<br/>';
$data .= '<br/>';
$data .= '</h4>';
$data .= '<strong>THE VISA KENYA</strong>';
$data .= '<br/>';
$data .= '<strong>P.O BOX </strong>';
$data .= '<br/>';
$data .= '<strong>KENYA</strong>';
$data .= '<br/>';
$data .= '<strong>Email:</strong>'.'<i>support@thekenyanvisa.com</i>';
$data .= '<br/>';
$data .= '<strong>Website:</strong>'.'<i>www.thekenyanvisa.com</i>';
$data .= '<br/>';
$data .= '<strong>Tell:</strong>'.'<i>+254 728446173/+491 5788137960</i>';
$data .= '<br/>';
$data .= '<strong> <hr><br/> </strong>';
$data .='<table border="1"  width="90%">';
$data .= '<tr  background= "#eee" >';
$data .= '<th >EMAIL</th>'.'<th text-align= "left">AMOUNT</th>';
$data .= '<tr/>';
$data .= '<tr >';
$data .= '<td >'.$row['txtEmail'].'</td ><td text-align= "left">'.'<span>$</span>'.$row['txtAmount'].'</td>';
$data .= '</tr>';
$data .= '<strong> <hr><br/> </strong>';
$data .= '<tr >';
$data .= '<td>Total</td>'.'<td text-align= "left">'.'<span>$</span>'.$row['txtAmount'].'</td>';
$data .= '</tr>';
$data .= '</table>';
$data .= '<br/>';
$data .= '<br/>';
$data .= '<strong id="paypal"> <br/> </strong>';
$data .= '<strong> <hr><br/> </strong>';
$data .= '<br/>';
$data .= '<br/>';
$data .= '<br/>';
$data .= '<i size="5px">Leading on Travel online & Relating services. This is a commercial/private website, NOT an official website of the Government. This is a commercial website to apply for an eVisa to Kenya through Government system, you will be charged a fee. To apply for an eVisa under our process, we will charge a service fee for consultancy, submitting and prepare applications and informing the status and results. Our fee will be higher than you apply directly on Kenya Government system or at Kenya Embassy in your country. If you prefer a non-guided service, you can visit the Government system.</i>';
$data .= '<hr style="border: none; height: 10px; color: navy;" /> ';
    
}
$mpdf->writeHTML($data);
// output to browser
// $mpdf->output('Visa Invoice.pdf','S');
 $pdf = $mpdf->Output('','S');

  $enquirydata = [
						'First Name' => $txtFirstName,
						'Email' => $txtEmail,
						'Message' => $txtNote
					];
sendEmail($pdf, $enquirydata);
function sendEmail($pdf, $enquirydata){
$emailbody='';
$emailbody .='<h1>Visa Application Details</h1>';
foreach ($enquirydata as $title => $data) {
	$emailbody .='<strong>'. $title.'</strong>:' .$data.'<br/>';
}
$mail = new PHPMailer(true);
try {
  //Server settings
    $mail->SMTPDebug = false;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'mail.thekenyanvisa.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@thekenyanvisa.com';                     // SMTP username
    $mail->Password   = 'NZxO,fD==35r';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
        $mail->setFrom('info@thekenyanvisa.com', 'THE KENYAN VISA' );
        //$mail->addBCC('calebkemboi5@gmail.com');
        //$mail->addBCC('statskenya5@gmail.com');
        $mail->addBCC('stevewaters384@gmail.com');
        $pdo = new PDO('mysql:host=localhost;dbname=thekenya_visa', 'thekenya_visa', 'thekenya_visa');
        $sql = "SELECT * FROM apply_visa ORDER BY apply_visa_id DESC  LIMIT 1";
        foreach ($pdo->query($sql) as $row) {							
        
        $mail->addAddress($row['txtEmail']); 
        }
    // $mail->addAddress($txtEmail);    // Add a recipient
              // Name is optional
    // $mail->addReplyTo('tanuidominic5676@gmail.com');
    // $mail->addCC('dominic.tonui@gmail.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
  // Optional name
    $mail->addStringAttachment($pdf, 'Unpaid_Visa.pdf');
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'UNPAID VISA APPLICATION';
    $pdo = new PDO('mysql:host=localhost;dbname=thekenya_visa', 'thekenya_visa', 'thekenya_visa');
    $sql = "SELECT * FROM apply_visa ORDER BY apply_visa_id DESC  LIMIT 1";
    foreach ($pdo->query($sql) as $row) {
    
    $message ='
        <!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
            <h3 align="center"> Kindly find attached <font style="background:red; color:white;">Unpaid Invoice</font> below, Thank you!</h3>
             <h4 align="center"> Ignore if already paid.</h4>

</body>
</html>
    ';
                        
    $mail->Body    = $message;
                                          
    $mail->AltBody = strip_tags($message);
                        }   
    $mail->send();
    header("Location:../make_payment.php");
    // echo "<meta http-equiv='refresh' content='0;url=make_payment.php'>";
    // echo 'Message has been sent';
    exit();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
 ?>