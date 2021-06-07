             <div class="fix-container">
                    <div class="">
                                    
                        <form action="includes/preview.php" id="apply-form" onsubmit="return atleast_onecheckbox(event)"  name="visa_validate" method="post">
                            <h3 class="apply-visa-title"><strong>Itinerary</strong></h3>
                            <div class="clearfix">
                                <div class="col-md-6 col-sm-6 no-padding-left xs-no-padding">
                                    <div class="form-group">
                                        <label for="txtDateOfArrival"> Date of Arrival <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtDateOfArrival" href="#" data-displayed="false" data-toggle="tooltip" data-placement="top" title="To get the visa on time and without delay, your service will be changed to Rush (Emergency) Service automatically"> <i class="fa fa-question-circle"></i> </span> </label>
                                        <div class='input-group date'>
                                            <input type="date" class="form-control api-control" id="txtDateOfArrival" placeholder="YYYY-MM-DD"  name="txtDateOfArrival" required="" value="">
                                            <label class="input-group-addon" for="txtDateOfArrival"> <span class="glyphicon glyphicon-calendar"></span> </label>
                                        </div> <span for="txtDateOfArrival" generated="true" class="help-inline"></span> </div>
                                    <div class="form-group">
                                        <label for="txtDateOfExit"> Date of Exit <span style="color: #ffa500">*</span> </label>
                                        <div class='input-group date'>
                                            <input type="date" class="form-control api-control" id="txtDateOfExit" placeholder="YYYY-MM-DD" name="txtDateOfExit" required="" value="">
                                            <label class="input-group-addon" for="txtDateOfExit"> <span class="glyphicon glyphicon-calendar"></span> </label>
                                        </div> <span for="txtDateOfExit" generated="true" class="help-inline"></span> </div>
                                        <div class="form-group order-checkbox-for">
                                           <label style="margin: 0;">Transportation Method (<span style="color: #ffa500">*</span>)</label><br>
                                       <Select id="transportselector" for="transport" name="chkMethod" class="form-control api-control selPortOfArrival" required>
                                           <option value="">--select--</option>
                                           <option value="landborders">Airport</option>
                                           <option value="landborders">Landborder</option>
                                           <option value="landborders">Seaport</option>
                                        </Select>
                                        </div>
                                        <label style="margin: 0;">Port of arrival (<span style="color: #ffa500">*</span>)</label><br>
                                      
                                        <div id="airport" class="colors" style="display:none" > 
                                        <select name="airport" class="form-control api-control selPortOfArrival" >
                                        <option value="">--select--</option>
                                        <option value="Eldoret">Eldoret </option>
                                        <option value="Garisa Airstrip">Garisa Airstrip</option>
                                        <option value="Jomo Kenyatta Nairobi">Jomo Kenyatta Nairobi</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Manda Laumu">Manda Laumu</option>
                                        <option value="Malaba - Uganda">Malaba - Uganda</option>
                                        <option value="Lokichogio">Lokichogio</option>
                                        <option value="Moi Mombasa">Moi Mombasa</option>
                                        <option value="Wajir">Wajir</option>
                                        <option value="Wilson Nairiobi">Wilson Nairiobi</option>
                                        </select>
                                        </div>
                                        <div id="landborders" class="colors" style="display:none" > 
                                        <select name="landborders" class="form-control api-control selPortOfArrival" >
                                            <option>--- PLEASE SELECT YOUR POINT OF ARRIVAL BELOW ---</option>
                                        <option style="color:navy; background-color:#ffa500;" select disabled>AIRPORTS:</option>
                                        <option value="Eldoret Int. Airport">Eldoret International Airport</option>
                                        <option value="Garisa Airstrip">Garisa Airstrip</option>
                                        <option value="Jomo Kenyatta Int. Airport (JKIA)">Jomo Kenyatta Int. Airport Nairobi (JKIA)</option>
                                        <option value="Kisumu Int. Airport">Kisumu International Airport</option>
                                        <option value="Manda / Lamu Airport">Manda / Lamu Airport</option>
                                        <option value="Lokichoggio Airport">Lokichoggio Airport</option>
                                        <option value="Moi Mombasa Int. Airport">Moi Mombasa International Airport</option>
                                        <option value="Waji Airport">Wajir Airport</option>
                                        <option value="Wilson Airport Nairiobi">Wilson Airport Nairiobi</option>
                                        <option style="background-color:#ffa500; color:navy;" select disabled>SEAPORTS:</option>
                                        <option value="Kilindi">Kilindini</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Kuinga">Kuinga</option>
                                        <option value="Lamu">Lamu</option>
                                        <option value="Malindi">Malindi</option>
                                        <option value="Mbita point">Mbita point</option>
                                        <option value="Muhuru bay">Muhuru bay</option>
                                        <option value="Old Port">Old Port</option>
                                        <option value="Shimoni">Shimoni</option>
                                        <option value="Vanga">Vanga</option>
                                        <option style="background-color:#ffa500; color:navy" select disabled><strong>LANDBORDERS:</strong></option>
                                        <option value="Busia - Uganda">Busia - Uganda</option>
                                        <option value="Isebania - Tanzania">Isebania - Tanzania</option>
                                        <option value="Liboi - Somalia">Liboi - Somalia</option>
                                        <option value="Loitoktok - Tanzania">Loitoktok - Tanzania</option>
                                        <option value="Lungalunga - Tanzania">Lungalunga - Tanzania</option>
                                        <option value="Malaba - Uganda">Malaba - Uganda</option>
                                        <option value="Mandera - Somalia">Mandera - Somalia</option>
                                        <option value="Moyale - Ethopia">Moyale - Ethopia</option>
                                        <option value="Nadapal - South Sudan'">Nadapal - South Sudan'</option>
                                        <option value="Namanga - Tanzania">Namanga - Tanzania</option>
                                        <option value="Taveta - Tanzania">Taveta - Tanzania</option>
                                        </select>
                                        </div>
                                        
                                        <div id="seaport" class="colors" style="display:none" >
                                        <select name="seaport" class="form-control api-control selPortOfArrival" >
                                        <option value="">--select--</option>
                                        <option value="Kilindi">Kilindi</option>
                                        <option value="Kisumu">Kisumu</option>
                                        <option value="Kuinga">Kuinga</option>
                                        <option value="Lamu">Lamu</option>
                                        <option value="Malindi">Malindi</option>
                                        <option value="Mbita point">Mbita point</option>
                                        <option value="Muhuru bay">Muhuru bay</option>
                                        <option value="Old Port">Old Port</option>
                                        <option value="Shimoni">Shimoni</option>
                                        <option value="Vanga">Vanga</option>
                                        </select></div>

                                <!--    <div class="form-group order-checkbox-for">-->
                                <!--      <label style="margin: 0;">Transportation Method (<span style="color: #ffa500">*</span>)</label><br>-->
                                <!--        <select id="transport" onchange="ChangetransportList();" class="form-control api-control selPortOfArrival" name="chkMethod" > -->
                                <!--            <option>----Please Select----</option>-->
                                <!--            <option value="airport">Airport</option>-->
                                <!--            <option value="landborders">Landborders</option>-->
                                <!--            <option value="seaport">Seaport</option>-->
                                <!--        </select>-->
                                <!--    </div>-->
                                <!--<br>-->
                                <!--    <div class="form-group">-->
                                <!--        <label style="margin: 0;">Port of Arrival(<span style="color: #ffa500">*</span>)</label><br>-->
                                <!--      <select id="port"  class="form-control api-control selPortOfArrival" name="txtPort" ><option>----Please Select---</option></select> -->
                                <!--    </div>-->




                                 <!--   <div class="form-group order-checkbox-for">-->
                                 <!--       <label style="margin: 0;">Transportation Method (<span style="color: #ffa500">*</span>)</label>&nbsp;&nbsp;&nbsp;&nbsp; -->
                                 <!--       <div class="hidden-lg hidden-md hidden-sm"></div>-->
                                        
                                 <!--                <label class="radio-inline checkbox" style="margin-top: -4px;">-->
                                 <!--              <input value="airport" type="radio" name="chkMethod" onClick="displayForm(this)"></input>Airport</label>-->
                                 <!--               <label class="radio-inline checkbox" style="margin-top: -4px;">-->
                                 <!--               <input value="seaport" type="radio" name="chkMethod" onClick="displayForm(this)"></input>Seaport</label>-->
                                 <!--                <label class="radio-inline checkbox" style="margin-top: -4px;">-->
                                 <!--               <input value="landborders" type="radio" name="chkMethod" onClick="displayForm(this)"></input>Land Borders</label>-->



                                 <!--   </div>-->
                                 <!--   <div class="form-group" style="visibility:hidden; position:relative" id="2">-->
                                 <!--       <label for="selPortOfArrival">Port of Arrival(Seaports) <span style="color: #ffa500">(*)</span></label>-->
                                 <!--       <select name="selPortOfArrival" id="selPortOfArrival" class="form-control api-control selPortOfArrival" required="">-->
                                 <!--           <option value="No Entry">--Select--</option>-->
                                 <!--           <option value="Kilindi">Kilindi</option>-->
                                 <!--           <option value="Kisumu">Kisumu</option>-->
                                 <!--           <option value="Kuinga">Kuinga</option>-->
                                 <!--           <option value="Lamu">Lamu</option>-->
                                 <!--           <option value="Malindi">Malindi</option>-->
                                 <!--           <option value="Mbita point">Mbita point </option>-->
                                 <!--           <option value="Muhuru bay">Muhuru bay</option>-->
                                 <!--           <option value="Old Port">Old Port</option>-->
                                 <!--           <option value="Shimoni">Shimoni</option>-->
                                 <!--           <option value="Vanga">Vanga</option>-->
                                 <!--       </select> <span for="selPortOfArrival" generated="true" class="help-inline"></span> </div>-->
                                   
                                 <!--<div class="form-group" style="visibility:hidden; position:relative" id="1">-->
                                 <!--       <label for="landborders">Port of Airport(airport) <span style="color: #ffa500">(*)</span></label>-->
                                 <!--       <select name="airport" id="airport" class="form-control api-control selPortOfArrival" required="">-->
                                 <!--           <option value="No Entry">--Select--</option>-->
                                 <!--           <option value="Eldoret">Eldoret (ELD)</option>-->
                                 <!--           <option value="Garisa Airstrip (GAR)">Garisa Airstrip (GAR)</option>-->
                                 <!--           <option value="Jomo Kenyatta I. Airport">Jomo Kenyatta - NBO - Nairobi</option>-->
                                 <!--           <option value="Kisumu (KIS)">Kisumu (KIS)</option>-->
                                 <!--           <option value="Manda Laumu (LAU)">Manda Lamu (LAU)</option>-->
                                 <!--           <option value="Lokichogio (LKG)">Lokichogio (LKG)</option>-->
                                 <!--           <option value="Malindi (MYD)">Malindi (MYD)</option>-->
                                 <!--           <option value="Moi Mombasa (MSA)">Moi Mombasa (MSA)</option>-->
                                 <!--           <option value="Wajir (WJR)">Wajir (WJR)</option>-->
                                 <!--           <option value="Wilson Nairiobi (WIL)">Wilson Nairiobi (WIL)</option>-->
                                 <!--       </select> <span for="selPortOfArrival" generated="true" class="help-inline"></span> </div>-->

                                 <!--<div class="form-group" style="visibility:hidden; position:relative" id="3">-->
                                 <!--       <label for="landborders">Port of Landborders(Landborders) <span style="color: #ffa500">(*)</span></label>-->
                                 <!--       <select name="landborders" id="landborders" class="form-control api-control selPortOfArrival" required="">-->
                                 <!--           <option value="No Entry">--Select--</option>-->
                                            
                                 <!--           <option value="Busia - Uganda">Busia - Uganda</option>-->
                                 <!--           <option value="Isebania - Tanzania">Isebania - Tanzania</option>-->
                                 <!--           <option value="Liboi - Somali">Liboi - Somalia</option>-->
                                 <!--           <option value="Loitoktok - Tanzania">Loitoktok - Tanzania</option>-->
                                 <!--            <option value="Lungalunga - Tanzania">Lungalunga - Tanzania</option>-->
                                 <!--            <option value="Malaba - Uganda">Malaba - Uganda</option>-->
                                 <!--            <option value="Mandera">Mandera</option>-->
                                 <!--            <option value="Moyale - Ethiopia">Moyale - Ethiopia</option>-->
                                 <!--            <option value="Nadapal - South Sudan">Nadapal - South Sudan</option>-->
                                 <!--            <option value="Namanga - Tanzania">Namanga - Tanzania</option>-->
                                 <!--            <option value="Taveta - Tanzania">Taveta - Tanzania</option>-->
                                 <!--       </select> <span for="selPortOfArrival" generated="true" class="help-inline"></span> </div>-->
                                    
                                 </div>
                                
                                <div class="col-md-1"></div>
                                <div class="col-md-5 col-sm-6 no-padding-right xs-no-padding">
                                        <div class="form-group">
                                        <label for="txtGivenName">Special Request (Not Mandatory)</label>
                                        <textarea name="txtSpecialRequest" class="form-control" rows="3" style="resize: none"></textarea>
                                    </div>
                                   
                                </div>
                            </div>
                            <h3 class="apply-visa-title"><strong>Passport Details</strong></h3>
                            <div class="list-passport-details">
                                <div class="item-passport-details">
                                    <div class="no-passport-details clearfix" style="border-bottom: 3px solid navy;margin-top: 15px;margin-bottom: 10px;">
                                        <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left"> <span></span> </div>
                                        <div class="col-md-11 col-sm-11 col-xs-10 text-right" style="margin-top: 10px;font-size: 15px;color: #148da9;padding-right: 0;">
                                            <p>
                                              
                                                <input type="file" name="imageToUpload"  id="imageToUpload_0" class="imageToUpload form-control-item-passport-details hide"> </p>
                                        </div>
                                    </div>
                                    <div style="text-align: right;"> <a class="remove-button text-right" href="javascript:;" style="display: none;">[<i class="fa fa-times"></i> Remove]</a> </div>
                                    <div class="clearfix">
                                        <div class="col-md-4 col-sm-4 no-padding-left xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtGivenName_0"> Given/First Name <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtGivenName_0" href="#" data-toggle="tooltip" data-placement="top" title="Enter your name as shown in your passport"> <i class="fa fa-question-circle"></i> </span> </label>
                                                <input type="text" id="txtGivenName_0" required="" name="txtGivenName" class="form-control form-control-item-passport-details notify-control txt" value="" /> <span for="txtGivenName_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtSurname_0"> Surname/Last Name <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtSurname_0" href="#" data-toggle="tooltip" data-placement="top" title="Enter your surname (last name) as shown in passport. If your surname is not specified in your travel document, enter UNKNOWN"> <i class="fa fa-question-circle"></i> </span> </label>
                                                <input type="text" id="txtSurname_0"   name="txtSurname" class="form-control form-control-item-passport-details notify-control txt" value="" required="" /> <span for="txtSurname_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 no-padding-right xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtbirthDay_0">Birthday <span style="color: #ffa500">*</span></label>
                                                <div class="input-group date">
                                                    <input type="date" id="txtbirthDay_0"  name="txtbirthDay" placeholder="YYYY-MM-DD" required="" class="form-control form-control-item-passport-details txtbirthDay" value="" />
                                                    <label class="input-group-addon" for="txtbirthDay_0"> <span class="glyphicon glyphicon-calendar"></span> </label>
                                                </div> <span for="txtbirthDay_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                       <div class="col-md-4 col-sm-4 xs-no-padding">
                                    <div class="form-group">
                                        <label for="drpCountryOfResidence">Country Citizenship <span style="color: #ffa500">*</span></label>
                                        <select name="drpCountryOfResidence" id="drpCountryOfResidence" required="" class="form-control drpSelect2" autocomplete="nope">
                                            <option value="">Select a Country</option>
                                            <option value="AFGHANISTAN">Afghanistan</option>
                                            <option value="ALAND ISLANDS">Åland Islands</option>
                                            <option value="ALBANIA">Albania</option>
                                            <option value="ALGERIA">Algeria</option>
                                            <option value="AMERICAN SAMOA">American Samoa</option>
                                            <option value="ANDORRA">Andorra</option>
                                            <option value="ANGOLA">Angola</option>
                                            <option value="ANGUILLA">Anguilla</option>
                                            <option value="ANTARTICA">Antarctica</option>
                                            <option value="ANTIGUA">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Ascension Island">Ascension Island</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas">Christmas Island</option>
                                            <option value="Cocos Highlands">Cocos Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d Ivoire">Côte d'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curaçao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equitorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatamela">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Macdonald Islands">Heard Island and McDonald Islands</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Lativa">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Linberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Lechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Lxemburg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malyasia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Masharll Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfork Island">Norfolk Island</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Nothern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory">Palestinian Territory</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of the Congo">Republic of the Congo</option>
                                            <option value="Reunion">Réunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthélemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint KItts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Aarbia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Marten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and South Sandwich">South Georgia and the South Sandwich Islands</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jay Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrai">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Thogo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trindad">Trinidad and Tobago</option>
                                            <option value="Tristan">Tristan da Cunha</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Is.">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Virgin Islands">U.S. Virgin Islands</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="UK - British Dependant Territory Citizen">Uk - British Dependant Territory Citizen</option>
                                            <option value="Uk - British Indian Ocean Territory">Uk - British Indian Ocean Territory</option>
                                            <option value="Uk - British Overseas Citizen">Uk - British Overseas Citizen</option>
                                            <option value="Uk - British Protected Person">Uk - British Protected Person</option>
                                            <option value="Uk - British Subjec">Uk - British Subject</option>
                                            <option value="Uk - British Virgin Islands">Uk - British Virgin Islands</option>
                                            <option value="Uk - British-Citizen (Great Britain)">Uk - British-Citizen (Great Britain)</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arabian Emi.">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United states">United States</option>
                                            <option value="US Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican">Vatican</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select> <span for="drpCountryOfResidence" generated="true" class="help-inline"></span> </div>
                                </div>
                                        <div class="col-md-4 col-sm-4 xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtPassportNumber_0"> Passport Number <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtPassportNumber_0" href="#" data-toggle="tooltip" data-placement="top" title="Enter your passport number as it appears on your passport. The passport number may contain numbers and/or characters. Please closely distinguish between the number zero and the letter O."> <i class="fa fa-question-circle"></i> </span> </label>
                                                <input type="text" id="txtPassportNumber_0"  name="txtPassportNumber" required="" class="form-control form-control-item-passport-details" value="" /> <span for="txtPassportNumber_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                        <div class="col-md-4 col-sm-3 no-padding-right xs-no-padding">
                                            <div class="form-group">
                                                <label for="selVisaType_0"> Type of Visa <span style="color: #ffa500">*</span> </label>
                                                <select name="selVisaType" required="" id="selVisaType_0" class="form-control form-control-item-passport-details drpSelect2 selVisaType" autocomplete="nope">
                                                    <option value="">Select a Type of Visa</option>
                                                    <option value="Kenyan e-Tourist Visa - single entry" data-entries="Kenyan e-Tourist Visa - single entry" data-stay="90 days" data-duration="120 days"> Kenyan e-Tourist Visa - single entry </option>
                                                    <option value="Kenyan e-Business Visa - single entry" data-entries="Kenyan e-Business Visa - single entry" data-stay="90 days" data-duration="120 days"> Kenyan e-Business Visa - single entry </option>
                                                    <option value="Kenyan e-Medical Visa - single entry" data-entries="Kenyan e-Medical Visa - single entry" data-stay="90 days" data-duration="120 days"> Kenyan e-Medical Visa - single entry </option>
                                                    <option value="Kenyan Transit Visa - single entry" data-entries="Kenyan Transit Visa - single entry" data-stay="3 days" data-duration="120 days"> Kenyan Transit Visa - single entry </option>
                                                </select> <span for="selVisaType_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                    </div>




                                <script type="text/javascript"><

                                    function add_fields() {
                                       var d = document.getElementById("content");
                                      
                                       d.innerHTML += "<div class="list-passport-details">
                                <div class="item-passport-details">
                                    <div class="no-passport-details clearfix" style="border-bottom: 3px solid navy;margin-top: 15px;margin-bottom: 10px;">
                                        <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left"> <span></span> </div>
                                        <div class="col-md-11 col-sm-11 col-xs-10 text-right" style="margin-top: 10px;font-size: 15px;color: #148da9;padding-right: 0;">
                                            <p>
                                                <a href="javascript:void(0)" class="btnUpLoadImage" name="btnUpLoadImage" style="color: #ffa500;font-weight: bold;" onclick="$(this).closest('p').find('input').click();"> <i class="fa fa-upload" style="border: 1px solid #ffa500;padding: 2px 5px;background: #ffa500;color: #fff;"></i> Auto Fill With Passport Image </a>
                                                <input type="file" name="imageToUpload" id="imageToUpload_0" class="imageToUpload form-control-item-passport-details hide"> </p>
                                        </div>
                                    </div>
                                    <div style="text-align: right;"> <a class="remove-button text-right" href="javascript:;" style="display: none;">[<i class="fa fa-times"></i> Remove]</a> </div>
                                    <div class="clearfix">
                                        <div class="col-md-4 col-sm-4 no-padding-left xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtGivenName_0"> Given/First Name <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtGivenName_0" href="#" data-toggle="tooltip" data-placement="top" title="Enter your name as shown in your passport"> <i class="fa fa-question-circle"></i> </span> </label>
                                                <input type="text" id="txtGivenName_0" name="txtGivenName" class="form-control form-control-item-passport-details notify-control txt" value="" /> <span for="txtGivenName_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtSurname_0"> Surname/Last Name <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtSurname_0" href="#" data-toggle="tooltip" data-placement="top" title="Enter your surname (last name) as shown in passport. If your surname is not specified in your travel document, enter UNKNOWN"> <i class="fa fa-question-circle"></i> </span> </label>
                                                <input type="text" id="txtSurname_0" name="txtSurname" class="form-control form-control-item-passport-details notify-control txt" value="" /> <span for="txtSurname_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 no-padding-right xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtbirthDay_0">Birthday <span style="color: #ffa500">*</span></label>
                                                <div class="input-group date">
                                                    <input type="date" id="txtbirthDay_0" name="txtbirthDay" placeholder="YYYY-MM-DD" class="form-control form-control-item-passport-details txtbirthDay" value="" />
                                                    <label class="input-group-addon" for="txtbirthDay_0"> <span class="glyphicon glyphicon-calendar"></span> </label>
                                                </div> <span for="txtbirthDay_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="col-md-4 col-sm-4 no-padding-left xs-no-padding">
                                            <div class="form-group">
                                                <label for="drpCountry_0">Country Citizenship <span style="color: #ffa500">*</span></label>
                                                <select name="drpCountry" id="drpCountry_0" class="form-control form-control-item-passport-details drpSelect2 drpCountry" autocomplete="nope">
                                                    <option value="">Select a Country</option>
                                                    <option data-zonenumber="+355" data-iso2="AL" value="2"> Albania </option>
                                                    <option data-zonenumber="+213" data-iso2="DZ" value="3"> Algeria </option>
                                                    <option data-zonenumber="+376" data-iso2="AD" value="5"> Andorra </option>
                                                    <option data-zonenumber="+244" data-iso2="AO" value="6"> Angola </option>
                                                    <option data-zonenumber="+1" data-iso2="AG" value="9"> Antigua and Barbuda </option>
                                                    <option data-zonenumber="+54" data-iso2="AR" value="11"> Argentina </option>
                                                    <option data-zonenumber="+61" data-iso2="AU" value="15"> Australia </option>
                                                    <option data-zonenumber="+43" data-iso2="AT" value="16"> Austria </option>
                                                    <option data-zonenumber="+973" data-iso2="BH" value="19"> Bahrain </option>
                                                    <option data-zonenumber="+880" data-iso2="BD" value="20"> Bangladesh </option>
                                                    <option data-zonenumber="+375" data-iso2="BY" value="22"> Belarus </option>
                                                    <option data-zonenumber="+32" data-iso2="BE" value="23"> Belgium </option>
                                                    <option data-zonenumber="+229" data-iso2="BJ" value="25"> Benin </option>
                                                    <option data-zonenumber="+975" data-iso2="BT" value="27"> Bhutan </option>
                                                    <option data-zonenumber="+591" data-iso2="BO" value="28"> Bolivia </option>
                                                    <option data-zonenumber="+387" data-iso2="BA" value="30"> Bosnia and Herzegovina </option>
                                                    <option data-zonenumber="+55" data-iso2="BR" value="33"> Brazil </option>
                                                    <option data-zonenumber="+359" data-iso2="BG" value="37"> Bulgaria </option>
                                                    <option data-zonenumber="+226" data-iso2="BF" value="38"> Burkina Faso </option>
                                                    <option data-zonenumber="+855" data-iso2="KH" value="40"> Cambodia </option>
                                                    <option data-zonenumber="+1" data-iso2="CA" value="42"> Canada </option>
                                                    <option data-zonenumber="+238" data-iso2="CV" value="44"> Cape Verde </option>
                                                    <option data-zonenumber="+236" data-iso2="CF" value="46"> Central African Republic </option>
                                                    <option data-zonenumber="+235" data-iso2="TD" value="47"> Chad </option>
                                                    <option data-zonenumber="+56" data-iso2="CL" value="48"> Chile </option>
                                                    <option data-zonenumber="+86" data-iso2="CN" value="49"> China </option>
                                                    <option data-zonenumber="+57" data-iso2="CO" value="52"> Colombia </option>
                                                    <option data-zonenumber="+269" data-iso2="KM" value="53"> Comoros </option>
                                                    <option data-zonenumber="+506" data-iso2="CR" value="55"> Costa Rica </option>
                                                    <option data-zonenumber="+225" data-iso2="CI" value="112"> Côte d'Ivoire </option>
                                                    <option data-zonenumber="+385" data-iso2="HR" value="56"> Croatia </option>
                                                    <option data-zonenumber="+53" data-iso2="CU" value="57"> Cuba </option>
                                                    <option data-zonenumber="+420" data-iso2="CZ" value="60"> Czech Republic </option>
                                                    <option data-zonenumber="+243" data-iso2="CD" value="61"> Democratic Republic of the Congo </option>
                                                    <option data-zonenumber="+45" data-iso2="DK" value="62"> Denmark </option>
                                                    <option data-zonenumber="+253" data-iso2="DJ" value="63"> Djibouti </option>
                                                    <option data-zonenumber="+1" data-iso2="DO" value="65"> Dominican Republic </option>
                                                    <option data-zonenumber="+670" data-iso2="TL" value="66"> East Timor </option>
                                                    <option data-zonenumber="+593" data-iso2="EC" value="67"> Ecuador </option>
                                                    <option data-zonenumber="+20" data-iso2="EG" value="68"> Egypt </option>
                                                    <option data-zonenumber="+503" data-iso2="SV" value="69"> El Salvador </option>
                                                    <option data-zonenumber="+240" data-iso2="GQ" value="70"> Equatorial Guinea </option>
                                                    <option data-zonenumber="+372" data-iso2="EE" value="72"> Estonia </option>
                                                    <option data-zonenumber="+358" data-iso2="FI" value="77"> Finland </option>
                                                    <option data-zonenumber="+33" data-iso2="FR" value="78"> France </option>
                                                    <option data-zonenumber="+241" data-iso2="GA" value="82"> Gabon </option>
                                                    <option data-zonenumber="+995" data-iso2="GE" value="84"> Georgia </option>
                                                    <option data-zonenumber="+49" data-iso2="DE" value="85"> Germany </option>
                                                    <option data-zonenumber="+30" data-iso2="GR" value="88"> Greece </option>
                                                    <option data-zonenumber="+299" data-iso2="GL" value="89"> Greenland </option>
                                                    <option data-zonenumber="+502" data-iso2="GT" value="93"> Guatemala </option>
                                                    <option data-zonenumber="+224" data-iso2="GN" value="95"> Guinea </option>
                                                    <option data-zonenumber="+245" data-iso2="GW" value="96"> Guinea-Bissau </option>
                                                    <option data-zonenumber="+592" data-iso2="GY" value="97"> Guyana </option>
                                                    <option data-zonenumber="+509" data-iso2="HT" value="98"> Haiti </option>
                                                    <option data-zonenumber="+504" data-iso2="HN" value="100"> Honduras </option>
                                                    <option data-zonenumber="+852" data-iso2="HK" value="101"> Hong Kong </option>
                                                    <option data-zonenumber="+36" data-iso2="HU" value="102"> Hungary </option>
                                                    <option data-zonenumber="+354" data-iso2="IS" value="103"> Iceland </option>
                                                    <option data-zonenumber="+91" data-iso2="IN" value="104"> India </option>
                                                    <option data-zonenumber="+62" data-iso2="ID" value="105"> Indonesia </option>
                                                    <option data-zonenumber="+98" data-iso2="IR" value="106"> Iran </option>
                                                    <option data-zonenumber="+353" data-iso2="IE" value="108"> Ireland </option>
                                                    <option data-zonenumber="+972" data-iso2="IL" value="110"> Israel </option>
                                                    <option data-zonenumber="+39" data-iso2="IT" value="111"> Italy </option>
                                                    <option data-zonenumber="+81" data-iso2="JP" value="114"> Japan </option>
                                                    <option data-zonenumber="+962" data-iso2="JO" value="116"> Jordan </option>
                                                    <option data-zonenumber="+7" data-iso2="KZ" value="117"> Kazakhstan </option>
                                                    <option data-zonenumber="+965" data-iso2="KW" value="121"> Kuwait </option>
                                                    <option data-zonenumber="+996" data-iso2="KG" value="122"> Kyrgyzstan </option>
                                                    <option data-zonenumber="+856" data-iso2="LA" value="123"> Laos </option>
                                                    <option data-zonenumber="+371" data-iso2="LV" value="124"> Latvia </option>
                                                    <option data-zonenumber="+231" data-iso2="LR" value="127"> Liberia </option>
                                                    <option data-zonenumber="+423" data-iso2="LI" value="129"> Liechtenstein </option>
                                                    <option data-zonenumber="+370" data-iso2="LT" value="130"> Lithuania </option>
                                                    <option data-zonenumber="+352" data-iso2="LU" value="131"> Luxembourg </option>
                                                    <option data-zonenumber="+853" data-iso2="MO" value="132"> Macao </option>
                                                    <option data-zonenumber="+389" data-iso2="MK" value="133"> Macedonia </option>
                                                    <option data-zonenumber="+261" data-iso2="MG" value="134"> Madagascar </option>
                                                    <option data-zonenumber="+356" data-iso2="MT" value="139"> Malta </option>
                                                    <option data-zonenumber="+692" data-iso2="MH" value="140"> Marshall Islands </option>
                                                    <option data-zonenumber="+222" data-iso2="MR" value="142"> Mauritania </option>
                                                    <option data-zonenumber="+52" data-iso2="MX" value="145"> Mexico </option>
                                                    <option data-zonenumber="+691" data-iso2="FM" value="146"> Micronesia </option>
                                                    <option data-zonenumber="+373" data-iso2="MD" value="147"> Moldova </option>
                                                    <option data-zonenumber="+377" data-iso2="MC" value="148"> Monaco </option>
                                                    <option data-zonenumber="+976" data-iso2="MN" value="149"> Mongolia </option>
                                                    <option data-zonenumber="+382" data-iso2="ME" value="150"> Montenegro </option>
                                                    <option data-zonenumber="+212" data-iso2="MA" value="152"> Morocco </option>
                                                    <option data-zonenumber="+258" data-iso2="MZ" value="153"> Mozambique </option>
                                                    <option data-zonenumber="+95" data-iso2="MM" value="154"> Myanmar </option>
                                                    <option data-zonenumber="+977" data-iso2="NP" value="157"> Nepal </option>
                                                    <option data-zonenumber="+31" data-iso2="NL" value="158"> Netherlands </option>
                                                    <option data-zonenumber="+64" data-iso2="NZ" value="161"> New Zealand </option>
                                                    <option data-zonenumber="+505" data-iso2="NI" value="162"> Nicaragua </option>
                                                    <option data-zonenumber="+227" data-iso2="NE" value="163"> Niger </option>
                                                    <option data-zonenumber="+47" data-iso2="NO" value="169"> Norway </option>
                                                    <option data-zonenumber="+968" data-iso2="OM" value="170"> Oman </option>
                                                    <option data-zonenumber="+92" data-iso2="PK" value="171"> Pakistan </option>
                                                    <option data-zonenumber="+680" data-iso2="PW" value="172"> Palau </option>
                                                    <option data-zonenumber="+507" data-iso2="PA" value="174"> Panama </option>
                                                    <option data-zonenumber="+595" data-iso2="PY" value="176"> Paraguay </option>
                                                    <option data-zonenumber="+51" data-iso2="PE" value="177"> Peru </option>
                                                    <option data-zonenumber="+63" data-iso2="PH" value="178"> Philippines </option>
                                                    <option data-zonenumber="+48" data-iso2="PL" value="180"> Poland </option>
                                                    <option data-zonenumber="+351" data-iso2="PT" value="181"> Portugal </option>
                                                    <option data-zonenumber="+974" data-iso2="QA" value="183"> Qatar </option>
                                                    <option data-zonenumber="+242" data-iso2="CG" value="184"> Republic of the Congo </option>
                                                    <option data-zonenumber="+262" data-iso2="RE" value="189"> Réunion </option>
                                                    <option data-zonenumber="+40" data-iso2="RO" value="186"> Romania </option>
                                                    <option data-zonenumber="+7" data-iso2="RU" value="187"> Russia </option>
                                                    <option data-zonenumber="+239" data-iso2="ST" value="199"> Sao Tome and Principe </option>
                                                    <option data-zonenumber="+966" data-iso2="SA" value="200"> Saudi Arabia </option>
                                                    <option data-zonenumber="+381" data-iso2="RS" value="202"> Serbia </option>
                                                    <option data-zonenumber="+421" data-iso2="SK" value="207"> Slovakia </option>
                                                    <option data-zonenumber="+386" data-iso2="SI" value="208"> Slovenia </option>
                                                    <option data-zonenumber="+82" data-iso2="KR" value="214"> South Korea </option>
                                                    <option data-zonenumber="+211" data-iso2="SS" value="213"> South Sudan </option>
                                                    <option data-zonenumber="+34" data-iso2="ES" value="215"> Spain </option>
                                                    <option data-zonenumber="+94" data-iso2="LK" value="216"> Sri Lanka </option>
                                                    <option data-zonenumber="+249" data-iso2="SD" value="217"> Sudan </option>
                                                    <option data-zonenumber="+597" data-iso2="SR" value="218"> Suriname </option>
                                                    <option data-zonenumber="+46" data-iso2="SE" value="221"> Sweden </option>
                                                    <option data-zonenumber="+41" data-iso2="CH" value="222"> Switzerland </option>
                                                    <option data-zonenumber="+886" data-iso2="TW" value="224"> Taiwan </option>
                                                    <option data-zonenumber="+66" data-iso2="TH" value="227"> Thailand </option>
                                                    <option data-zonenumber="+228" data-iso2="TG" value="229"> Togo </option>
                                                    <option data-zonenumber="+216" data-iso2="TN" value="234"> Tunisia </option>
                                                    <option data-zonenumber="+90" data-iso2="TR" value="235"> Turkey </option>
                                                    <option data-zonenumber="+993" data-iso2="TM" value="236"> Turkmenistan </option>
                                                    <option data-zonenumber="+380" data-iso2="UA" value="247"> Ukraine </option>
                                                    <option data-zonenumber="+971" data-iso2="AE" value="248"> United Arab Emirates </option>
                                                    <option data-zonenumber="+44" data-iso2="GB" value="249"> United Kingdom </option>
                                                    <option data-zonenumber="+1" data-iso2="US" value="250"> United States </option>
                                                    <option data-zonenumber="+598" data-iso2="UY" value="252"> Uruguay </option>
                                                    <option data-zonenumber="+998" data-iso2="UZ" value="253"> Uzbekistan </option>
                                                    <option data-zonenumber="+39" data-iso2="VA" value="255"> Vatican </option>
                                                    <option data-zonenumber="+58" data-iso2="VE" value="256"> Venezuela </option>
                                                    <option data-zonenumber="+84" data-iso2="VN" value="257"> Vietnam </option>
                                                </select> <span for="drpCountry_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 xs-no-padding">
                                            <div class="form-group">
                                                <label for="txtPassportNumber_0"> Passport Number <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtPassportNumber_0" href="#" data-toggle="tooltip" data-placement="top" title="Enter your passport number as it appears on your passport. The passport number may contain numbers and/or characters. Please closely distinguish between the number zero and the letter O."> <i class="fa fa-question-circle"></i> </span> </label>
                                                <input type="text" id="txtPassportNumber_0" name="txtPassportNumber"  class="form-control form-control-item-passport-details" value="" /> <span for="txtPassportNumber_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                        <div class="col-md-4 col-sm-3 no-padding-right xs-no-padding">
                                            <div class="form-group">
                                                <label for="selVisaType_0"> Type of Visa <span style="color: #ffa500">*</span> </label>
                                                <select name="selVisaType" id="selVisaType_0" class="form-control form-control-item-passport-details drpSelect2 selVisaType" autocomplete="nope">
                                                    <option value="">Select a Type of Visa</option>
                                                    <option value="1" data-entries="Kenyan e-Tourist Visa - single entry" data-stay="90 days" data-duration="120 days"> Kenyan e-Tourist Visa - single entry </option>
                                                    <option value="2" data-entries="Kenyan e-Business Visa - single entry" data-stay="90 days" data-duration="120 days"> Kenyan e-Business Visa - single entry </option>
                                                    <option value="3" data-entries="Kenyan e-Medical Visa - single entry" data-stay="90 days" data-duration="120 days"> Kenyan e-Medical Visa - single entry </option>
                                                    <option value="4" data-entries="Kenyan Transit Visa - single entry" data-stay="3 days" data-duration="120 days"> Kenyan Transit Visa - single entry </option>
                                                </select> <span for="selVisaType_0" generated="true" class="help-inline"></span> </div>
                                        </div>
                                    </div>"
                                }
                            </script>


                                    <input type="text" id="txtUrlImage_0"  class="txtUrlImage form-control-item-passport-details hide" name="txtUrlImage" readonly value="">
                                    <input type="hidden" id="txtVisaType_0"  class="txtVisaType form-control-item-passport-details" name="txtVisaType"> </div>
                            </div>
                            <div class="line" style="margin: 20px 0 10px 0;"></div>
                            <!--<div class="">-->
                            <!--    <a id="btn-add-person" class="rkmd-btn btn-indigo ripple-effect btn-md" onclick="add_fields();" href="javascript:;"> <i class="fa fa-plus"></i> Add person </a>-->
                            <!--</div>-->
                            <h3 class="apply-visa-title"><strong>Contact Detail</strong></h3>
                            <div class="clearfix">
                                <div class="col-md-4 col-sm-4 no-padding-left xs-no-padding">
                                    <div class="form-group">
                                        <label for="txtFirstName"> First Name <span style="color: #ffa500">*</span> </label>
                                        <input type="text" id="txtFirstName"  name="txtFirstName" required="" class="form-control" value="" /> <span for="txtFirstName" generated="true" class="help-inline"></span> </div>
                                </div>
                                <div class="col-md-4 col-sm-4 xs-no-padding">
                                    <div class="form-group">
                                        <label for="txtLastName"> Last Name <span style="color: #ffa500">*</span> </label>
                                        <input type="text" id="txtLastName"  name="txtLastName" required="" class="form-control" value="" /> <span for="txtLastName" generated="true" class="help-inline"></span> </div>
                                </div>
                                <div class="col-md-4 col-sm-4 no-padding-right xs-no-padding">
                                    <div class="form-group">
                                        <label for="txtEmail"> Email Address <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtEmail" href="#" data-toggle="tooltip" data-placement="top" title="You will receive an e-mail that confirms the receipt of your Application at the e-mail address you provide. You will also receive updates on the status of your Application."> <i class="fa fa-question-circle"></i> </span> </label>
                                        <input type="email" id="txtEmail" name="txtEmail" required="" class="form-control" value="" /> <span for="txtEmail" generated="true" class="help-inline"></span> </div>
                                </div>
                            </div>



                            <div class="clearfix">
                                <div class="col-md-4 col-sm-4 no-padding-left xs-no-padding">
                                    <div class="form-group" style="display: inline-block; width: 100%;">
                                        <label for="txtNumberPhone"> Mobile/Cell Telephone <span style="color:#ffa500">*</span> <span data-displayed="false" data-target="txtTelephone" href="#" data-toggle="tooltip" data-placement="top" title="Please indicate a mobile/cell telephone. It is important to indicate a correct phone number, since you may receive updates on the status of your Application. If you do not have a telephone number, you may provide an alternative third-party telephone number belonging to a point of contact."> <i class="fa fa-question-circle"></i> </span> </label>
                                        <div class="col-lg-12 col-sm-12 col-md-12 no-padding">
                                            <div style="width: 45%;float: left;">
                                                <select style="width: 100%;" for="txtTelephone" name="selZoneNumber" id="selZoneNumber" class="selZoneNumber form-control">
                                                    <option zonenumber="" value="">--- Please Select ---</option>
                                                    <option zonenumber="93" value="Afghanistan (+93)"> Afghanistan (+93) </option>
                                                    <option zonenumber="358" value=" Åland Islands (+358)"> Åland Islands (+358) </option>
                                                    <option zonenumber="355" value=" Albania (+355)"> Albania (+355) </option>
                                                    <option zonenumber="213" value="Algeria (+213)"> Algeria (+213) </option>
                                                    <option zonenumber="1" value="American Samoa (+1)"> American Samoa (+1) </option>
                                                    <option zonenumber="376" value="Andorra (+376)"> Andorra (+376) </option>
                                                    <option zonenumber="244" value="Angola (+244)"> Angola (+244) </option>
                                                    <option zonenumber="1" value=" Anguilla (+1)"> Anguilla (+1) </option>
                                                    <option zonenumber="672" value="Antarctica (+672)"> Antarctica (+672) </option>
                                                    <option zonenumber="1" value="Antigua and Barbuda (+1)"> Antigua and Barbuda (+1) </option>
                                                    <option zonenumber="54" value="Argentina (+54)"> Argentina (+54) </option>
                                                    <option zonenumber="374" value="Armenia (+374)"> Armenia (+374) </option>
                                                    <option zonenumber="297" value="Aruba (+297)"> Aruba (+297) </option>
                                                    <option zonenumber="247" value="Ascension Island (+247)"> Ascension Island (+247) </option>
                                                    <option zonenumber="61" value="Australia (+61)"> Australia (+61) </option>
                                                    <option zonenumber="43" value="Austria (+43"> Austria (+43) </option>
                                                    <option zonenumber="994" value="Azerbaijan (+994)"> Azerbaijan (+994) </option>
                                                    <option zonenumber="1" value="Bahamas (+1)"> Bahamas (+1) </option>
                                                    <option zonenumber="973" value="Bahrain (+973)"> Bahrain (+973) </option>
                                                    <option zonenumber="880" value="Bangladesh (+880))"> Bangladesh (+880) </option>
                                                    <option zonenumber="1" value="Barbados (+1)"> Barbados (+1) </option>
                                                    <option zonenumber="375" value="Belarus (+375)"> Belarus (+375) </option>
                                                    <option zonenumber="32" value="Belarus (+375)"> Belarus (+375) </option>
                                                    <option zonenumber="501" value="Belize (+501)"> Belize (+501) </option>
                                                    <option zonenumber="229" value="Benin (+229)"> Benin (+229) </option>
                                                    <option zonenumber="1" value="Bermuda (+1)"> Bermuda (+1) </option>
                                                    <option zonenumber="975" value="Bhutan (+975)"> Bhutan (+975) </option>
                                                    <option zonenumber="591" value="Bolivia (+591)"> Bolivia (+591) </option>
                                                    <option zonenumber="599" value="Bonaire, Sint Eustatius and Saba (+599)"> Bonaire, Sint Eustatius and Saba (+599) </option>
                                                    <option zonenumber="387" value="Bosnia and Herzegovina (+387)"> Bosnia and Herzegovina (+387) </option>
                                                    <option zonenumber="267" value="Botswana (+267)"> Botswana (+267) </option>
                                                    <option zonenumber="47" value="Bouvet Island (+47)"> Bouvet Island (+47) </option>
                                                    <option zonenumber="55" value="Brazil (+55)"> Brazil (+55) </option>
                                                    <option zonenumber="673" value="Brunei (+673)"> Brunei (+673) </option>
                                                    <option zonenumber="359" value="Bulgaria (+359)"> Bulgaria (+359) </option>
                                                    <option zonenumber="226" value="Burkina Faso (+226)"> Burkina Faso (+226) </option>
                                                    <option zonenumber="257" value="Burundi (+257)"> Burundi (+257) </option>
                                                    <option zonenumber="855" value="Cambodia (+855)"> Cambodia (+855) </option>
                                                    <option zonenumber="237" value="Cameroon (+237)"> Cameroon (+237) </option>
                                                    <option zonenumber="1" value="Canada (+1)"> Canada (+1) </option>
                                                    <option zonenumber="34" value="Canary Islands (+34)"> Canary Islands (+34) </option>
                                                    <option zonenumber="238" value="Cape Verde (+238)"> Cape Verde (+238) </option>
                                                    <option zonenumber="1" value="Cayman Islands (+1)"> Cayman Islands (+1) </option>
                                                    <option zonenumber="236" value="Central African Republic (+236)"> Central African Republic (+236) </option>
                                                    <option zonenumber="235" value="Chad (+235)"> Chad (+235) </option>
                                                    <option zonenumber="56" value="Chile (+56)"> Chile (+56) </option>
                                                    <option zonenumber="86" value="China (+86)"> China (+86) </option>
                                                    <option zonenumber="61" value="Christmas Island (+61)"> Christmas Island (+61) </option>
                                                    <option zonenumber="891" value="Cocos Islands (+891)"> Cocos Islands (+891) </option>
                                                    <option zonenumber="57" value="Colombia (+57)"> Colombia (+57) </option>
                                                    <option zonenumber="269" value="Comoros (+269)"> Comoros (+269) </option>
                                                    <option zonenumber="682" value="Cook Islands (+682)"> Cook Islands (+682) </option>
                                                    <option zonenumber="506" value="Costa Rica (+506)"> Costa Rica (+506) </option>
                                                    <option zonenumber="225" value="Côte d'Ivoire (+225)"> Côte d'Ivoire (+225) </option>
                                                    <option zonenumber="385" value="Croatia (+385)"> Croatia (+385) </option>
                                                    <option zonenumber="53" value="Cuba (+53) "> Cuba (+53) </option>
                                                    <option zonenumber="599" value="Curaçao (+599)"> Curaçao (+599) </option>
                                                    <option zonenumber="357" value="Cyprus (+357)"> Cyprus (+357) </option>
                                                    <option zonenumber="420" value="Czech Republic (+420)"> Czech Republic (+420) </option>
                                                    <option zonenumber="243" value="Democratic Republic of the Congo (+243)"> Democratic Republic of the Congo (+243) </option>
                                                    <option zonenumber="45" value="Denmark (+45)"> Denmark (+45) </option>
                                                    <option zonenumber="253" value="Djibouti (+253)"> Djibouti (+253) </option>
                                                    <option zonenumber="1" value="Dominica (+1)"> Dominica (+1) </option>
                                                    <option zonenumber="1" value="Dominican Republic (+1)"> Dominican Republic (+1) </option>
                                                    <option zonenumber="670" value="East Timor (+670)"> East Timor (+670) </option>
                                                    <option zonenumber="593" value="Ecuador (+593)"> Ecuador (+593) </option>
                                                    <option zonenumber="20" value="Egypt (+20)"> Egypt (+20) </option>
                                                    <option zonenumber="503" value="El Salvador (+503)"> El Salvador (+503) </option>
                                                    <option zonenumber="240" value="Equatorial Guinea (+240)"> Equatorial Guinea (+240) </option>
                                                    <option zonenumber="291" value="Eritrea (+291)"> Eritrea (+291) </option>
                                                    <option zonenumber="372" value="Estonia (+372)"> Estonia (+372) </option>
                                                    <option zonenumber="251" value="Ethiopia (+251)"> Ethiopia (+251) </option>
                                                    <option zonenumber="500" value="Falkland Islands (+500)"> Falkland Islands (+500) </option>
                                                    <option zonenumber="298" value="Faroe Islands (+298)"> Faroe Islands (+298) </option>
                                                    <option zonenumber="679" value="Fiji (+679)"> Fiji (+679) </option>
                                                    <option zonenumber="358" value="Finland (+358)"> Finland (+358) </option>
                                                    <option zonenumber="33" value="France (+33)"> France (+33) </option>
                                                    <option zonenumber="594" value="French Guiana (+594)"> French Guiana (+594) </option>
                                                    <option zonenumber="689" value="French Polynesia (+689)"> French Polynesia (+689) </option>
                                                    <option zonenumber="262" value="French Southern Territories (+262)"> French Southern Territories (+262) </option>
                                                    <option zonenumber="241" value="Gabon (+241)"> Gabon (+241) </option>
                                                    <option zonenumber="220" value="Gambia (+220)"> Gambia (+220) </option>
                                                    <option zonenumber="995" value="Georgia (+995)"> Georgia (+995) </option>
                                                    <option zonenumber="49" value="Germany (+49)"> Germany (+49) </option>
                                                    <option zonenumber="233" value="Ghana (+233)"> Ghana (+233) </option>
                                                    <option zonenumber="350" value="Gibraltar (+350)"> Gibraltar (+350) </option>
                                                    <option zonenumber="30" value="Greece (+30)"> Greece (+30) </option>
                                                    <option zonenumber="299" value="Greenland (+299)"> Greenland (+299) </option>
                                                    <option zonenumber="1" value="Grenada (+1)"> Grenada (+1) </option>
                                                    <option zonenumber="590" value="Guadeloupe (+590)"> Guadeloupe (+590) </option>
                                                    <option zonenumber="1" value="Guam (+1)"> Guam (+1) </option>
                                                    <option zonenumber="502" value="Guatemala (+502)"> Guatemala (+502) </option>
                                                    <option zonenumber="44" value="Guernsey (+44)"> Guernsey (+44) </option>
                                                    <option zonenumber="224" value="Guinea (+224)"> Guinea (+224) </option>
                                                    <option zonenumber="245" value="Guinea-Bissau (+245)"> Guinea-Bissau (+245) </option>
                                                    <option zonenumber="592" value="Guyana (+592)"> Guyana (+592) </option>
                                                    <option zonenumber="509" value="Haiti (+509)"> Haiti (+509) </option>
                                                    <option zonenumber="672" value="Heard Island and McDonald Islands (+672)"> Heard Island and McDonald Islands (+672) </option>
                                                    <option zonenumber="504" value="Honduras (+504)"> Honduras (+504) </option>
                                                    <option zonenumber="852" value="Hong Kong (+852)"> Hong Kong (+852) </option>
                                                    <option zonenumber="36" value="Hungary (+36)"> Hungary (+36) </option>
                                                    <option zonenumber="354" value="Iceland (+354)"> Iceland (+354) </option>
                                                    <option zonenumber="91" value="India (+91)"> India (+91) </option>
                                                    <option zonenumber="62" value="Indonesia (+62)"> Indonesia (+62) </option>
                                                    <option zonenumber="98" value="Iran (+98)"> Iran (+98) </option>
                                                    <option zonenumber="964" value="Iraq (+964)"> Iraq (+964) </option>
                                                    <option zonenumber="353" value="Ireland (+353)"> Ireland (+353) </option>
                                                    <option zonenumber="44" value="Isle of Man (+44)"> Isle of Man (+44) </option>
                                                    <option zonenumber="972" value="Israel (+972)"> Israel (+972) </option>
                                                    <option zonenumber="39" value="Italy (+39)"> Italy (+39) </option>
                                                    <option zonenumber="1" value="Jamaica (+1)"> Jamaica (+1) </option>
                                                    <option zonenumber="81" value="Japan (+81)"> Japan (+81) </option>
                                                    <option zonenumber="44" value="Jersey (+44)"> Jersey (+44) </option>
                                                    <option zonenumber="962" value="Jordan (+962)"> Jordan (+962) </option>
                                                    <option zonenumber="7" value="Kazakhstan (+7)"> Kazakhstan (+7) </option>
                                                    <option zonenumber="254" value="Kenya (+254)"> Kenya (+254) </option>
                                                    <option zonenumber="686" value="Kiribati (+686)"> Kiribati (+686) </option>
                                                    <option zonenumber="381" value="Kosovo (+381)"> Kosovo (+381) </option>
                                                    <option zonenumber="965" value="Kuwait (+965)"> Kuwait (+965) </option>
                                                    <option zonenumber="996" value="Kyrgyzstan (+996)"> Kyrgyzstan (+996) </option>
                                                    <option zonenumber="856" value="Laos (+856)"> Laos (+856) </option>
                                                    <option zonenumber="371" value="Latvia (+371)"> Latvia (+371) </option>
                                                    <option zonenumber="961" value="Lebanon (+961)"> Lebanon (+961) </option>
                                                    <option zonenumber="266" value="Lesotho (+266)"> Lesotho (+266) </option>
                                                    <option zonenumber="231" value="Liberia (+231)"> Liberia (+231) </option>
                                                    <option zonenumber="218" value="Libya (+218)"> Libya (+218) </option>
                                                    <option zonenumber="423" value="Liechtenstein (+423)"> Liechtenstein (+423) </option>
                                                    <option zonenumber="370" value="Lithuania (+370)"> Lithuania (+370) </option>
                                                    <option zonenumber="352" value="Luxembourg (+352)"> Luxembourg (+352) </option>
                                                    <option zonenumber="853" value="Macao (+853)"> Macao (+853) </option>
                                                    <option zonenumber="389" value="Macedonia (+389)"> Macedonia (+389) </option>
                                                    <option zonenumber="261" value="Madagascar (+261)"> Madagascar (+261) </option>
                                                    <option zonenumber="265" value="Malawi (+265)"> Malawi (+265) </option>
                                                    <option zonenumber="60" value="Malaysia (+60)"> Malaysia (+60) </option>
                                                    <option zonenumber="960" value="Maldives (+960)"> Maldives (+960) </option>
                                                    <option zonenumber="223" value="Mali (+223)"> Mali (+223) </option>
                                                    <option zonenumber="356" value="Malta (+356)"> Malta (+356) </option>
                                                    <option zonenumber="692" value="Marshall Islands (+692)"> Marshall Islands (+692) </option>
                                                    <option zonenumber="596" value="Martinique (+596)"> Martinique (+596) </option>
                                                    <option zonenumber="222" value="Mauritania (+222)"> Mauritania (+222) </option>
                                                    <option zonenumber="230" value="Mauritius (+230)"> Mauritius (+230) </option>
                                                    <option zonenumber="262" value="Mayotte (+262)"> Mayotte (+262) </option>
                                                    <option zonenumber="52" value="Mexico (+52)"> Mexico (+52) </option>
                                                    <option zonenumber="691" value="Micronesia (+691)"> Micronesia (+691) </option>
                                                    <option zonenumber="373" value="Moldova (+373)"> Moldova (+373) </option>
                                                    <option zonenumber="377" value="Monaco (+377)"> Monaco (+377) </option>
                                                    <option zonenumber="976" value="Mongolia (+976)"> Mongolia (+976) </option>
                                                    <option zonenumber="382" value="Montenegro (+382)"> Montenegro (+382) </option>
                                                    <option zonenumber="1" value="Montserrat (+1)"> Montserrat (+1) </option>
                                                    <option zonenumber="212" value="Morocco (+212)"> Morocco (+212) </option>
                                                    <option zonenumber="258" value="Mozambique (+258)"> Mozambique (+258) </option>
                                                    <option zonenumber="95" value="Myanmar (+95)"> Myanmar (+95) </option>
                                                    <option zonenumber="264" value="Namibia (+264)"> Namibia (+264) </option>
                                                    <option zonenumber="674" value="Nauru (+674)"> Nauru (+674) </option>
                                                    <option zonenumber="977" value="Nepal (+977)"> Nepal (+977) </option>
                                                    <option zonenumber="31" value="Netherlands (+31)"> Netherlands (+31) </option>
                                                    <option zonenumber="599" value="Netherlands Antilles (+599)"> Netherlands Antilles (+599) </option>
                                                    <option zonenumber="687" value="New Caledonia (+687)"> New Caledonia (+687) </option>
                                                    <option zonenumber="64" value="New Zealand (+64)"> New Zealand (+64) </option>
                                                    <option zonenumber="505" value="Nicaragua (+505)"> Nicaragua (+505) </option>
                                                    <option zonenumber="227" value="Niger (+227)"> Niger (+227) </option>
                                                    <option zonenumber="234" value="Nigeria (+234)"> Nigeria (+234) </option>
                                                    <option zonenumber="683" value="Niue (+683)"> Niue (+683) </option>
                                                    <option zonenumber="672" value="Norfolk Island (+672)"> Norfolk Island (+672) </option>
                                                    <option zonenumber="850" value="North Korea (+850)"> North Korea (+850) </option>
                                                    <option zonenumber="1" value="Northern Mariana Islands (+1)"> Northern Mariana Islands (+1) </option>
                                                    <option zonenumber="47" value="Norway (+47)"> Norway (+47) </option>
                                                    <option zonenumber="968" value="Norway (+47)"> Oman (+968) </option>
                                                    <option zonenumber="92" value="Pakistan (+92)"> Pakistan (+92) </option>
                                                    <option zonenumber="680" value="Palau (+680)"> Palau (+680) </option>
                                                    <option zonenumber="970" value="Palestinian Territory (+970)"> Palestinian Territory (+970) </option>
                                                    <option zonenumber="507" value="Panama (+507)"> Panama (+507) </option>
                                                    <option zonenumber="675" value="Papua New Guinea (+675)"> Papua New Guinea (+675) </option>
                                                    <option zonenumber="595" value="Paraguay (+595)"> Paraguay (+595) </option>
                                                    <option zonenumber="51" value="Peru (+51) "> Peru (+51) </option>
                                                    <option zonenumber="63" value="Philippines (+63)"> Philippines (+63) </option>
                                                    <option zonenumber="64" value="Pitcairn (+64)"> Pitcairn (+64) </option>
                                                    <option zonenumber="48" value="Poland (+48)"> Poland (+48) </option>
                                                    <option zonenumber="351" value="Portugal (+351)"> Portugal (+351) </option>
                                                    <option zonenumber="1" value="Puerto Rico (+1)"> Puerto Rico (+1) </option>
                                                    <option zonenumber="974" value="Qatar (+974)"> Qatar (+974) </option>
                                                    <option zonenumber="242" value="Republic of the Congo (+242)"> Republic of the Congo (+242) </option>
                                                    <option zonenumber="262" value="Réunion (+262)"> Réunion (+262) </option>
                                                    <option zonenumber="40" value=" Romania (+40)"> Romania (+40) </option>
                                                    <option zonenumber="7" value="Russia (+7) "> Russia (+7) </option>
                                                    <option zonenumber="250" value="Rwanda (+250)"> Rwanda (+250) </option>
                                                    <option zonenumber="590" value="Saint Barthélemy (+590)"> Saint Barthélemy (+590) </option>
                                                    <option zonenumber="290" value="Saint Helena (+290) "> Saint Helena (+290) </option>
                                                    <option zonenumber="1" value="Saint Kitts and Nevis (+1)"> Saint Kitts and Nevis (+1) </option>
                                                    <option zonenumber="1" value="Saint Lucia (+1)"> Saint Lucia (+1) </option>
                                                    <option zonenumber="590" value="Saint Martin (+590)"> Saint Martin (+590) </option>
                                                    <option zonenumber="508" value="Saint Pierre and Miquelon (+508)"> Saint Pierre and Miquelon (+508) </option>
                                                    <option zonenumber="1" value="Saint Vincent and the Grenadines (+1)"> Saint Vincent and the Grenadines (+1) </option>
                                                    <option zonenumber="685" value=" Samoa (+685)"> Samoa (+685) </option>
                                                    <option zonenumber="378" value="San Marino (+378)"> San Marino (+378) </option>
                                                    <option zonenumber="239" value="Sao Tome and Principe (+239)"> Sao Tome and Principe (+239) </option>
                                                    <option zonenumber="966" value="Saudi Arabia (+966)"> Saudi Arabia (+966) </option>
                                                    <option zonenumber="221" value="Senegal (+221)"> Senegal (+221) </option>
                                                    <option zonenumber="381" value="Serbia (+381)"> Serbia (+381) </option>
                                                    <option zonenumber="248" value="Seychelles (+248)"> Seychelles (+248) </option>
                                                    <option zonenumber="232" value="Sierra Leone (+232)"> Sierra Leone (+232) </option>
                                                    <option zonenumber="65" value="Singapore (+65)"> Singapore (+65) </option>
                                                    <option zonenumber="1" value="Sint Maarten (+1)"> Sint Maarten (+1) </option>
                                                    <option zonenumber="421" value="Slovakia (+421)"> Slovakia (+421) </option>
                                                    <option zonenumber="386" value="Slovenia (+386)"> Slovenia (+386) </option>
                                                    <option zonenumber="677" value="Solomon Islands (+677)"> Solomon Islands (+677) </option>
                                                    <option zonenumber="252" value="Somalia (+252)"> Somalia (+252) </option>
                                                    <option zonenumber="27" value="South Africa (+27)"> South Africa (+27) </option>
                                                    <option zonenumber="500" value="South Georgia and the South Sandwich Islands (+500)"> South Georgia and the South Sandwich Islands (+500) </option>
                                                    <option zonenumber="82" value="South Korea (+82)"> South Korea (+82) </option>
                                                    <option zonenumber="211" value="South Sudan (+211)"> South Sudan (+211) </option>
                                                    <option zonenumber="34" value="Spain (+34)"> Spain (+34) </option>
                                                    <option zonenumber="94" value="Sri Lanka (+94)"> Sri Lanka (+94) </option>
                                                    <option zonenumber="249" value="Sudan (+249)"> Sudan (+249) </option>
                                                    <option zonenumber="597" value="Suriname (+597)"> Suriname (+597) </option>
                                                    <option zonenumber="47" value="Svalbard and Jan Mayen (+47)"> Svalbard and Jan Mayen (+47) </option>
                                                    <option zonenumber="268" value="Swaziland (+268)"> Swaziland (+268) </option>
                                                    <option zonenumber="46" value="Sweden (+46)"> Sweden (+46) </option>
                                                    <option zonenumber="41" value="Switzerland (+41)"> Switzerland (+41) </option>
                                                    <option zonenumber="963" value="Syria (+963)"> Syria (+963) </option>
                                                    <option zonenumber="886" value="Taiwan (+886)"> Taiwan (+886) </option>
                                                    <option zonenumber="992" value="Tajikistan (+992)"> Tajikistan (+992) </option>
                                                    <option zonenumber="255" value="Tanzania (+255)"> Tanzania (+255) </option>
                                                    <option zonenumber="66" value="Thailand (+66)"> Thailand (+66) </option>
                                                    <option zonenumber="228" value="Togo (+228)"> Togo (+228) </option>
                                                    <option zonenumber="690" value="Tokelau (+690)"> Tokelau (+690) </option>
                                                    <option zonenumber="676" value="Tonga (+676)"> Tonga (+676) </option>
                                                    <option zonenumber="1" value="Trinidad and Tobago (+1)"> Trinidad and Tobago (+1) </option>
                                                    <option zonenumber="290" value="Tristan da Cunha (+290)"> Tristan da Cunha (+290) </option>
                                                    <option zonenumber="216" value="Tunisia (+216)"> Tunisia (+216) </option>
                                                    <option zonenumber="90" value="Turkey (+90) "> Turkey (+90) </option>
                                                    <option zonenumber="993" value="Turkmenistan (+993)"> Turkmenistan (+993) </option>
                                                    <option zonenumber="1" value="Turks and Caicos Islands (+1)"> Turks and Caicos Islands (+1) </option>
                                                    <option zonenumber="688" value="Tuvalu (+688)"> Tuvalu (+688) </option>
                                                    <option zonenumber="1" value="U.S. Virgin Islands (+1)"> U.S. Virgin Islands (+1) </option>
                                                    <option zonenumber="256" value="Uganda (+256)"> Uganda (+256) </option>
                                                    <option zonenumber="44" value="Uk - British Dependant Territory Citizen (+44)"> Uk - British Dependant Territory Citizen (+44) </option>
                                                    <option zonenumber="246" value="Uk - British Indian Ocean Territory (+246)"> Uk - British Indian Ocean Territory (+246) </option>
                                                    <option zonenumber="44" value="Uk - British Overseas Citizen (+44)"> Uk - British Overseas Citizen (+44) </option>
                                                    <option zonenumber="44" value="Uk - British Protected Person (+44)"> Uk - British Protected Person (+44) </option>
                                                    <option zonenumber="44" value="Uk - British Subject (+44)"> Uk - British Subject (+44) </option>
                                                    <option zonenumber="1" value="Uk - British Virgin Islands (+1)"> Uk - British Virgin Islands (+1) </option>
                                                    <option zonenumber="44" value="Uk - British-Citizen (Great Britain) (+44)"> Uk - British-Citizen (Great Britain) (+44) </option>
                                                    <option zonenumber="380" value="Ukraine (+380)"> Ukraine (+380) </option>
                                                    <option zonenumber="971" value="United Arab Emirates (+971)"> United Arab Emirates (+971) </option>
                                                    <option zonenumber="44" value="United Kingdom (+44)"> United Kingdom (+44) </option>
                                                    <option zonenumber="1" value="United States (+1)"> United States (+1) </option>
                                                    <option zonenumber="1" value="United States Minor Outlying Islands (+1)"> United States Minor Outlying Islands (+1) </option>
                                                    <option zonenumber="598" value="Uruguay (+598)"> Uruguay (+598) </option>
                                                    <option zonenumber="998" value="Uzbekistan (+998)"> Uzbekistan (+998) </option>
                                                    <option zonenumber="678" value="Vanuatu (+678)"> Vanuatu (+678) </option>
                                                    <option zonenumber="39" value="Vatican (+39)"> Vatican (+39) </option>
                                                    <option zonenumber="58" value="Venezuela (+58)"> Venezuela (+58) </option>
                                                    <option zonenumber="84" value="Vietnam (+84)"> Vietnam (+84) </option>
                                                    <option zonenumber="681" value=" Wallis and Futuna (+681)"> Wallis and Futuna (+681) </option>
                                                    <option zonenumber="212" value="Western Sahara (+212) "> Western Sahara (+212) </option>
                                                    <option zonenumber="967" value="Yemen (+967)"> Yemen (+967) </option>
                                                    <option zonenumber="243" value="Zaire (+243) "> Zaire (+243) </option>
                                                    <option zonenumber="260" value="Zaire (+243) "> Zambia (+260) </option>
                                                    <option zonenumber="263" value="Zimbabwe (+263)"> Zimbabwe (+263) </option>
                                                </select> <span for="selZoneNumber" generated="true" class="help-inline"></span> </div>
                                            <div style="width: 55%;float: left;padding-left: 5px;">
                                                <input type="number" class="form-control"  id="txtTelephone" name="txtTelephone" required="" placeholder="Telephone" value=""> <span for="txtTelephone" generated="true" class="help-inline"></span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="col-md-4 col-sm-4 xs-no-padding">
                                     
                                    <div class="form-group">
                                        
                                        <label for="drpCountryOfResidence">Country Citizenship <span style="color: #ffa500">*</span></label>
                                        <select name="drpCountryOfResidence" id="drpCountryOfResidence" required="" class="form-control drpSelect2" autocomplete="nope">
                                            <option value="">Select a Country</option>
                                            <option value="AFGHANISTAN">Afghanistan</option>
                                            <option value="ALAND ISLANDS">Åland Islands</option>
                                            <option value="ALBANIA">Albania</option>
                                            <option value="ALGERIA">Algeria</option>
                                            <option value="AMERICAN SAMOA">American Samoa</option>
                                            <option value="ANDORRA">Andorra</option>
                                            <option value="ANGOLA">Angola</option>
                                            <option value="ANGUILLA">Anguilla</option>
                                            <option value="ANTARTICA">Antarctica</option>
                                            <option value="ANTIGUA">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Ascension Island">Ascension Island</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas">Christmas Island</option>
                                            <option value="Cocos Highlands">Cocos Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d Ivoire">Côte d'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curaçao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equitorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatamela">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Macdonald Islands">Heard Island and McDonald Islands</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kosovo">Kosovo</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Lativa">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Linberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Lechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Lxemburg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malyasia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Masharll Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfork Island">Norfolk Island</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Nothern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory">Palestinian Territory</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of the Congo">Republic of the Congo</option>
                                            <option value="Reunion">Réunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Barthelemy">Saint Barthélemy</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint KItts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Martin">Saint Martin</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Aarbia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Sint Marten">Sint Maarten</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and South Sandwich">South Georgia and the South Sandwich Islands</option>
                                            <option value="South Korea">South Korea</option>
                                            <option value="South Sudan">South Sudan</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jay Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrai">Syria</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Thogo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trindad">Trinidad and Tobago</option>
                                            <option value="Tristan">Tristan da Cunha</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Is.">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Virgin Islands">U.S. Virgin Islands</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="UK - British Dependant Territory Citizen">Uk - British Dependant Territory Citizen</option>
                                            <option value="Uk - British Indian Ocean Territory">Uk - British Indian Ocean Territory</option>
                                            <option value="Uk - British Overseas Citizen">Uk - British Overseas Citizen</option>
                                            <option value="Uk - British Protected Person">Uk - British Protected Person</option>
                                            <option value="Uk - British Subjec">Uk - British Subject</option>
                                            <option value="Uk - British Virgin Islands">Uk - British Virgin Islands</option>
                                            <option value="Uk - British-Citizen (Great Britain)">Uk - British-Citizen (Great Britain)</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arabian Emi.">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United states">United States</option>
                                            <option value="US Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican">Vatican</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select> <span for="drpCountryOfResidence" generated="true" class="help-inline"></span> </div>
                                </div>
                                -->
                                <div class="col-md-4 col-sm-4 no-padding-right xs-no-padding">
                                    <div class="form-group">
                                        <label for="txtCity"> Street / House No: <span style="color: #ffa500">*</span> <span data-displayed="false" data-target="txtCity" href="#" data-toggle="tooltip" data-placement="top" title="Enter the city, town, village, or hamlet of your home address"> <i class="fa fa-question-circle"></i> </span> </label>
                                        <input type="text" id="txtCity" name="txtCity"  class="form-control" value="" autocomplete="nope" /> <span for="txtCity" generated="true" class="help-inline"></span> </div>
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="col-lg-4 col-md-3 col-sm-3 no-padding-left xs-no-padding">
                                    <div class="form-group">
                                        <label for="txtAddress"> Address <span style="color: #ffa500;">*</span> <span data-displayed="false" data-target="txtAddress" href="#" data-toggle="tooltip" data-placement="top" title="Enter the number, street and apartment number of your home address"> <i class="fa fa-question-circle"></i> </span> </label>
                                        <input type="text" id="txtAddress"  name="txtAddress" required="" maxlength="60" class="form-control" value="" placeholder="Ex: 1020 New York"  autocomplete="nope" /> <span for="txtAddress" generated="true" class="help-inline"></span> </div>
                                </div>

                            </div>
                            <h3 class="apply-visa-title"><strong>Please fill in with your order information</strong></h3>
                            <div class="clearfix">
                                  <div class="make-payment-field form-group clearfix">
                                    <!--                    <div class="make-payment-label-field col-lg-4 col-md-4 col-sm-4"> <label for="txtAmount">Amount <span style="color: #ffa500">(*)</span></label> </div>-->
                                    <!--                    <div class="col-lg-6 col-md-6 col-sm-6">-->
                                    <!--                        <div class="input-group"> <select id="txtAmount" name="txtAmount" class="form-control" maxlength="100">-->
                                    <!--<option value="" title="Normal">49</option>-->
                                    <!--<option value="" title="Emergency">79</option>-->
                                    <!--<option value="" title="Rush">99</option>-->
                                    <!--                        </select>-->
                                                            
                                                          <div class="make-payment-field form-group clearfix">
                                                        <div class="make-payment-label-field col-lg-4 col-md-4 col-sm-4"> <label for="txtAmount">Amount <span style="color: #ffa500">(*)</span></label> </div>
                                                        <div class="payment-checkbox-for col-lg-8 col-md-8 col-sm-8">
                                                            <div class="checkbox" style="margin-top: 0px;"> <label> <input type="checkbox" id="chkGovFee"  name="txtAmount" value="99">Normal $99 (Service Fee(US $49) + Government Fee(US $50))</label> </div>
                                                            <div class="checkbox"> <label> <input type="checkbox" id="chkVisaFee" name="txtAmount"  value="129"> Emergency $129 (Service Fee(US $79) + Government Fee(US $50))</label> </div>
                                                            <div class="checkbox"> <label> <input type="checkbox" id="chkOthers" name="txtAmount"  value="149"> Rush $149 (Service Fee(US $99) + Government Fee(US $50))</label> </div> <span for="txtAmount" generated="true" id="validate-error"></span> </div>   
                                                            
                                                            
                                                            
                                                            <!--<input type="text"  class="form-control" id="txtAmount" name="txtAmount" value="" placeholder="Ex: 1.00" maxlength="100">-->
                                                      
                                                                <div class="input-group-addon">CURRENCY IN USD</div>
                                                            </div> <span for="txtAmount" generated="true" class="help-inline"></span> </div>
                                        </div>
                                               <div class="make-payment-field form-group clearfix">
                                                   <!--
                                                        <div class="make-payment-label-field col-lg-4 col-md-4 col-sm-4"> <label for="chkPaymentFor">Payment For <span style="color: #ffa500">(*)</span></label> </div>
                                                        <div class="payment-checkbox-for col-lg-8 col-md-8 col-sm-8">
                                                            <div class="checkbox" style="margin-top: 0px;"> <label> <input type="checkbox" id="chkGovFee"  name="paymentFor" value="Government Fee"> Government Fee </label> </div>
                                                            <div class="checkbox"> <label> <input type="checkbox" id="chkVisaFee" name="paymentFor"  value="Visa Fee"> Visa Fee </label> </div>
                                                            <div class="checkbox"> <label> <input type="checkbox" id="chkOthers" name="paymentFor"  value="Others"> Others </label> </div> <span for="paymentFor" generated="true" id="validate-error"></span> </div>
                                                    </div>
                                                     <div class="make-payment-field form-group clearfix">
                                                        <div class="make-payment-label-field col-lg-4 col-md-4 col-sm-4"> <label for="txtNote">Note (Maximum 100 characters) <span style="color: #ffa500">(*)</span></label> </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8"> <input type="text" class="form-control" id="txtNote"  name="txtNote" value="" placeholder="Note" maxlength="100"> </div>
                                                    </div>
                                                    -->
                                </div>

                                <div class="wrap col-md-4 col-sm-3 xs-no-padding hidden">
                                    <div class="form-group">
                                        <div id="controlStateUS" class="form-group hidden">
                                            <label for="drpStateUs">State <span style="color: #ffa500;">(*)</span></label>
                                            <select name="txtState" id="drpStateUs" class="form-control slcState">
                                                <option value="">----- Please Select -----</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District of Columbia</option>
                                                <option value="FM">Federated States of Micronesia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="GU">Guam</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MI">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PW">Palau</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="VI">Virgin Islands</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                        <div id="controlStateCA" class="form-group hidden">
                                            <label for="drpStateCA">State <span style="color: #ffa500">(*)</span></label>
                                            <select name="txtState" id="drpStateCA" class="form-control slcState">
                                                <option value="">----- Please Select -----</option>
                                                <option value="AB">Alberta</option>
                                                <option value="BC">British Columbia</option>
                                                <option value="MB">Manitoba</option>
                                                <option value="NB">New Brunswick</option>
                                                <option value="NL">Newfoundland and Labrador</option>
                                                <option value="NT">Northwest Territories</option>
                                                <option value="NS">Nova Scotia</option>
                                                <option value="NU">Nunavut</option>
                                                <option value="ON">Ontario</option>
                                                <option value="PE">Prince Edward Island</option>
                                                <option value="QC">Quebec</option>
                                                <option value="SK">Saskatchewan</option>
                                                <option value="YT">Yukon</option>
                                            </select>
                                        </div>
                                        <div id="controlStateNormal" class="form-group">
                                            <label for="txtState">Street / House No: <span style="color: #ffa500">(*)</span></label>
                                            <input type="text" class="form-control" id="txtState" name="txtState" value="" autocomplete="nope"> <span for="txtState" generated="true" class="help-inline"></span> </div>
                                    </div>
                                </div>
                                <div class="wrap col-md-4 col-sm-3 no-padding-right xs-no-padding hidden">
                                    <div class="form-group">
                                        <label for="txtZipCode"> ZipCode <span style="color: #ffa500;display: none">*</span> <span data-displayed="false" data-target="txtZipCode" href="#" data-toggle="tooltip" data-placement="top" title="Enter the number, street and apartment number of your home address"> <i class="fa fa-question-circle"></i> </span> </label>
                                        <input type="text" id="txtZipCode" name="txtZipCode"  class="form-control" value="" autocomplete="nope" /> <span for="txtZipCode" generated="true" class="help-inline"></span> </div>
                                </div>
                                 <div class="wrap col-md-4 col-sm-3 no-padding-right xs-no-padding hidden">
                                    <div class="form-group">
                                        <label for="txtZipCode"> apply_visa_id<span style="color: #ffa500;display: none">*</span> <span data-displayed="false" data-target="apply_visa_id" href="#" data-toggle="tooltip" data-placement="top" title="Enter the number, street and apartment number of your home address"> <i class="fa fa-question-circle"></i> </span> </label>
                                        <input type="text" id="apply_visa_id" name="apply_visa_id"  class="form-control" value="" autocomplete="nope" /> <span for="apply_visa_id" generated="true" class="help-inline"></span> </div>
                                </div>



                            </div>


                                <img src="secure2.png" style="width: auto;">


                            <div class="clearfix btn-continue text-center">
                                <button type="submit" name="form_submitted" class="btn-apply-submit rkmd-btn btn-indigo ripple-effect btn-lg">Continue Payment</button>
                            </div>
                        </form>

 
                    </div>
                </div>
                <script>
                    function atleast_onecheckbox(e) {
                      if ($("input[type=checkbox]:checked").length === 0) {
                          e.preventDefault();
                          alert('Kindly select amount you prefer, thank you');
                          return false;
                      }
                    }
                    
                </script>
               
                         <script type="text/javascript"> 
                   
                            $(function() {
                                $('#transportselector').change(function(){
                                    $('.colors').hide();
                                    $('#' + $(this).val()).show();
                                });
                            });
                    </script>
                    
                <script type="text/javascript">
var airport_landborder_seaport = {};
airport_landborder_seaport['airport'] = [
'----Please Select----',
'Eldoret (ELD)',
'Garisa Airstrip (GAR)',
'Jomo Kenyatta Nairobi (JKIA)',
'Kisumu (KIS)',
'Manda Laumu (LAU)',
'Lokichogio (LKG)',
'Malindi (MYD)',
'Moi Mombasa (MSA)',
'Wajir (WJR)',
'Wilson Nairiobi (WIL)'];


airport_landborder_seaport['landborders'] = [
'----Please Select----',
'Busia - Uganda',
'Isebania - Tanzania',
'Liboi - Somalia',
'Loitoktok - Tanzania',
'Lungalunga - Tanzania',
'Malaba - Uganda',
'Mandera - Somalia',
'Moyale - Ethopia',
'Nadapal - South Sudan',
'Namanga - Tanzania',
'Taveta - Tanzania'];


airport_landborder_seaport['seaport'] = [
'----Please Select----',
'Kilindi',
'Kisumu',
'Kuinga',
'Lamu',
'Malindi',
'Mbita point',
'Muhuru bay',
'Old Port',
'Shimoni',
'Vanga'];

function ChangetransportList() {
  var transportList = document.getElementById("transport");
  var portList = document.getElementById("port");
  var selport= transportList.options[transportList.selectedIndex].value;
  while (portList.options.length) {
    portList.remove(0);
  }
  var ports = airport_landborder_seaport[selport];
  if (ports) {
    var i;
    for (i = 0; i < ports.length; i++) {
      var por = new Option(ports[i], i);
      portList.options.add(por);
    }
  }
} 
</script>
                <script>
                    document.getElementById("para1").innerHTML = formatAMPM();

                    function formatAMPM() {
                    var d = new Date(),
                        minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
                        hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
                        ampm = d.getHours() >= 12 ? 'pm' : 'am',
                        months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
                        days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
                    return days[d.getDay()]+' '+months[d.getMonth()]+' '+d.getDate()+' '+d.getFullYear()+' '+hours+':'+minutes+ampm;
                    }
                </script>             
  
<!-- <!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--Developed By Sudhanshu Pandey resulthosting.in-->
<!--<title>Visa Application</title>-->
<!--	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">-->
<!--	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<!--<meta http-equiv="refresh" content="0;URL=make_payment.php" />-->
   

<!--</head>-->
<!--<body>-->
   
<!--</body>-->
<!--</html>-->

 
          