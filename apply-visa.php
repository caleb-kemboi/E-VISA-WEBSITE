<?php 
include_once("includes/header.php");
?>
<body>
    <div id="wrap-page">
       <div id="wrap-page">

              <section id="nav-top" class="hidden-xs">
     <?php include("includes/top_menu.php"); ?>
        </section>
        <section id="banner" class="shadow-primary">
            <div class="container">
                <div class="row fix-container">
                    <?php include("includes/menu.php"); ?>
                </div>
            </div>
        </section>
        <section class="steps-one">
            <div class="img-ad"> <img src="images/destinations_kenya-nairobihead.jpg" style="width: 100%"> </div>
            <div class="title-page">
                <div class="container">
                    <div class="row fix-container">
                        <div style="background-color: #ffa500;">
                            <div class="title-capitalize py-5 clearfix" style="padding: 14px 0; margin: 0 -5px;">
                                <div class="step-title col-lg-6 col-md-6 col-sm-6">
                                    <h1 class="h1"> <i class="fa fa-lock color-fff"></i> Apply for a Kenyan eVisa </h1> </div>
                                <div class="step-date-time col-lg-6 col-md-6 col-sm-6 text-right">
                                    <p id="demo" style="font:20px bold;"></p>
                                        <script>
                                        var d = new Date();
                                        document.getElementById("demo").innerHTML = d;
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loading" style="position: fixed;background: #ffffff94;width: 100%;z-index: 9999;height: 100%;text-align: center;top:0;display: none"> <img src="../d1epznubg4y3gw.cloudfront.net/template/images/loading.gif" style="position: relative;top: 40%;" /> </div>
            <div class="container shadow-primary" style="padding:10px 0px;">
                <div class="fix-container">
                    <div class="">
                        <ol class="steps">
                            <li class="current py-5">
                                <div class="wrap">
                                    <div class="stt">1</div>
                                    <div class="name-step">Submit Application Online</div>
                                </div>
                            </li>
                            <li class="py-5">
                                <div class="wrap">
                                    <p class="stt">2</p>
                                    <p class="name-step">Review and Confirm Payment</p>
                                </div>
                            </li>
                            <li class="py-5">
                                <div class="wrap">
                                    <p class="stt">3</p>
                                    <p class="name-step">Receive Approved Visa</p>
                                </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <div id="modal-alert-inner">
                    <div class="modal fade in" tabindex="-1" role="dialog" id="modal-alert-age" aria-hidden="false" style="display: none;">
                        <div class="modal-backdrop fade in" style="height:100%;"></div>
                        <div class="modal-dialog" role="document">
                            <div class="modal-content panel-warning">
                                <div class="modal-header panel-heading">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true" onclick="document.getElementById('modal-alert-age').style.display='none'">×</span> </button>
                                    <h4 class="modal-title">Notification!</h4> </div>
                                <div class="modal-body">
                                    <p>Children under the age of 16 are exempt from Kenyan visa.</p>
                                </div>
                                <div class="modal-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include_once("includes/visa_form.php")
                ?>


            </div>
            <div id="modal-alert-inner"></div>
            <script>
                var interval = setInterval(function() {
                    if (typeof modalAlert != 'undefined' && typeof $ !== "undefined" && typeof $.prototype.modal !== "undefined") {
                        clearInterval(interval);
                    }
                }, 100);
            </script>
        </section>
        <section>
            <?php
            include_once("includes/footer.php")
            ?>
        </section>
        <nav id="m-menu" style="display: none">
            <ul>
                <li class="Divider">Service</li>
                <li><a title="Home" target="_self" href="index.php"><i class="fa fa-home"></i> Home</a></li>
                <li><a title="Apply Visa" target="_self" href="apply-visa.php"><i class="fa fa-check-circle"></i> Apply Visa</a></li>
                <li><a title="Make Payment" target="_self" href="make-payment.php"><i class="fa fa-usd"></i> Make Payment</a></li>
                <li><a href="visa-fee.php"><i class="fa fa-file" aria-hidden="true"></i> <span>Visa Fee</span></a></li>
                <li><a href="processing.php"><i class="fa fa-refresh" aria-hidden="true"></i> <span>Processing</span></a></li>
                <li class="Divider">Follow Us</li>
                <li> <a href="about-us.php"><i class="fa fa-info" aria-hidden="true"></i> About Us</a>
                    <ul>
                        <li> <a href="about-us.php" title="About Us" target="_self"> About Us </a> </li>
                        <li> <a href="information/disclaimer.php" title="Disclaimer" target="_self"> Disclaimer </a> </li>
                        <li> <a href="information/cancellation-and-refund-policy.php" title="Cancellation and Refund Policy" target="_self"> Cancellation and Refund Policy </a> </li>
                        <li> <a href="information/privacy-policy.php" title="Privacy Policy" target="_self"> Privacy Policy </a> </li>
                        <li> <a href="information/universal-terms-of-service.html" title="Universal Terms of Service" target="_self"> Universal Terms of Service </a> </li>
                        <li> <a href="information/universal-terms-of-use.html" title="Universal Terms of Use" target="_self"> Universal Terms of Use </a> </li>
                    </ul>
                </li>
                <li> <a href="faqs.php"><i class="fa fa-comments" aria-hidden="true"></i> FAQs</a>
                    <ul>
                        <li> <a title="What types of Kenyan eVisa can I apply online?" target="_self" href="faqs/what-types-of-kenyan-evisa-can-i-apply-online.html"> What types of Kenyan eVisa can I apply online? </a> </li>
                        <li> <a title="Why do we charge a service fee?" target="_self" href="faqs/why-do-we-charge-a-service-fee.html"> Why do we charge a service fee? </a> </li>
                        <li> <a title="What is Kenyan eVisa?" target="_self" href="faqs/what-is-kenyan-evisa.html"> What is Kenyan eVisa? </a> </li>
                        <li> <a title="What is Kenyan e-Transit Visa?" target="_self" href="faqs/what-is-kenyan-e-transit-visa.html"> What is Kenyan e-Transit Visa? </a> </li>
                        <li> <a title="What is Kenyan e-Medical Visa?" target="_self" href="faqs/what-is-kenyan-e-medical-visa.html"> What is Kenyan e-Medical Visa? </a> </li>
                        <li> <a title="What is Kenyan e-Business Visa?" target="_self" href="faqs/what-is-kenyan-e-business-visa.html"> What is Kenyan e-Business Visa? </a> </li>
                        <li> <a title="Read More" target="_self" href="faqs.html"> View all... </a> </li>
                    </ul>
                </li>
                <li> <a><i class="fa fa-info-circle" aria-hidden="true"></i> Useful information</a>
                    <ul>
                        <li> <a title="Make Payment" target="_self" href="make-payment.html"> Make Payment </a> </li>
                        <li> <a title=" Check Requirements" target="_self" href="check-requirements.html"> Check Requirements </a> </li>
                        <li> <a title="Embassy" target="_self" href="embassy.html"> Embassy </a> </li>
                    </ul>
                </li>
                <li><a title="Contact Us" target="_self" href="contact-us.html"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
            </ul>
        </nav>
        
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNP7WMC" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <noscript>
            <iframe style="width: 100px; height: 100px; border: 0; position:absolute; top: -5000px;" src="tags/frame.html"></iframe>
        </noscript>
        <script>
            const mainjs = "applyVisaS1";
            const strAirPorts = '<option value="11">Eldoret - EDL</option><option value="12">Garisa Airtrip - GAS - Garisa</option><option value="13">Jomo Kenyatta - NBO - Nairobi</option><option value="14">Kisumu - KIS</option><option value="15">Manda - LAU - Laumu</option><option value="16">Lokichogio - LKG</option><option value="17">Malindi - MYD</option><option value="18">Moi - MBA - Mombasa</option><option value="19">Wajir - WJR</option><option value="20">Wilson - WIL - Nairobi</option>';
            const strSeaPorts = '<option value="1">Kilindini</option><option value="2">Kisumu</option><option value="3">Kuinga</option><option value="4">Lamu</option><option value="5">Malindi</option><option value="6">Mbita Point</option><option value="7">Muhuru Bay</option><option value="8">Old Port</option><option value="9">Shimoni</option><option value="10">Vanga</option>';
            const strLandBorder = '<option value="21">Busia - Uganda</option><option value="22">Isebania - Tanzania</option><option value="23">Liboi - Somalia</option><option value="24">Loitokitok - Tanzania</option><option value="25">Lungalunga - Tanzania</option><option value="26">Malaba - Uganda</option><option value="27">Mandera</option><option value="28">Moyale - Ethiopia</option><option value="29">Nadapal - South Sudan</option><option value="30">Namanga - Tanzania</option><option value="31">Taveta - Tanzania</option>';
        </script>
    </div>
</body>
<!-- Mirrored from www.kenyaevisagov.com/apply-visa by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Jul 2019 11:18:27 GMT -->

</html>