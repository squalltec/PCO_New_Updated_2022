<?php
session_start();

include 'db_connection.php';







if (isset($_POST['submit'])) {
    
    $_SESSION['checkflow']='yes';
    
    
    
	
	$_SESSION['country']=$_POST['country'];
	$_SESSION['city']=$_POST['city'];
	$_SESSION['event']=$_POST['event'];
$_SESSION['hotel']=$_POST['hotel'];
$_SESSION['sdate']=$_POST['sdate'];
$_SESSION['edate']=$_POST['edate'];

$_SESSION['sendroomnumbers']=$_POST['rooms'];

$_SESSION['counter']=1;

$_SESSION['sendcategory']=$_POST['star'];




  $ad= $_POST['adults'];
   $chi= $_POST['children'];
	
	if($ad==''){
	   	$_SESSION['adults']='0'; 
	}
	
	else{
	$_SESSION['adults']=$_POST['adults'];

	}
	
		if($chi==''){
	  	$_SESSION['children']='0'; 
	}
	else{
	    	$_SESSION['children']=$_POST['children'];
	}
	
	$_SESSION['roomnmb']=$_POST['rooms'];
		

	
	$_SESSION['adult1']=$_POST['adults1'];
	$_SESSION['children1']=$_POST['children1'];
	
	$_SESSION['adult2']=$_POST['adults2'];
	$_SESSION['children2']=$_POST['children2'];
	
	$_SESSION['adult3']=$_POST['adults3'];
	$_SESSION['children3']=$_POST['children3'];
	
	$_SESSION['adult4']=$_POST['adults4'];
	$_SESSION['children4']=$_POST['children4'];
	
	$_SESSION['adult5']=$_POST['adults5'];
	$_SESSION['children5']=$_POST['children5'];
	
	$_SESSION['adult6']=$_POST['adults6'];
	$_SESSION['children6']=$_POST['children6'];
	
	$_SESSION['adult7']=$_POST['adults7'];
	$_SESSION['children7']=$_POST['children7'];
	
	$_SESSION['adult8']=$_POST['adults8'];
	$_SESSION['children8']=$_POST['children8'];
	
	$_SESSION['adult9']=$_POST['adults9'];
	$_SESSION['children9']=$_POST['children9'];
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	echo "<script>location.replace('hotelsearch.php');</script>";
	

}






















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="stylesheet" href="styles/app.css">
    <title>PCO Connect</title>
</head>
<body>
    
        <style>
.whatsappp {

  position: fixed;
  bottom: 10px;
   right: 0;
z-index:1;
  padding-right: 10px;
}
</style>
        
      <a href='https://wa.me/+971506509976'> <img src='whatsappicon.png' style='max-width:80px;' class='whatsappp'></a> 
        
    <div class = "main-holder">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="index.php">
                  <img src="img/logo.png" />
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mx-auto mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                  </ul>

                  <div class = "navbar-contact-info">
                   <a href='tel:+971507142748'> <img src = "img/header-contact-img.png"></a>
                  </div>
              </div>
            </div>
          </nav>
    </header>
    <section class="banner" id='bg-banner' style="background: url('img/pcobanner.png') center/cover no-repeat;">
        <div class="container">
            <div class="inner_content">
                <form action='#' method='POST'>
                    <div>
                      <select class="form-select" id='country' name='country' aria-label="Default select example">
                        <option value="0" disabled selected>Select Country</option>
                       
			<!--			
<option value="United States">United States</option>
<option value="Canada">Canada</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antarctica">Antarctica</option>
<option value="Antigua">Antigua</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijani">Azerbaijani</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Netherlands">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia-Hercegovina">Bosnia-Hercegovina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British IOT">British IOT</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Rep">Central African Rep</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Croatia">Croatia</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Faeroe Islands">Faeroe Islands</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern">French Southern</option>
<option value="French Southern Ter">French Southern Ter</option>
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
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard">Heard</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Ivory Coast">Ivory Coast</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="MNP">MNP</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="NER">NER</option>
<option value="Netherlands">Netherlands</option>
<option value="Neutral Zone">Neutral Zone</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="North Korea">North Korea</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
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
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Pierre">Saint Pierre</option>
<option value="Saint Vincent">Saint Vincent</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Scotland">Scotland</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovak Republic">Slovak Republic</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somali Democratic">Somali Democratic</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia</option>
<option value="South Korea">South Korea</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
<option value="STP">STP</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="TCA">TCA</option>
<option value="Thailand">Thailand</option>
<option value="Toga">Toga</option>
<option value="Togolese">Togolese</option>
<option value="Tokelau">Tokelau</option>
<option value="Tongo">Tongo</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>-->
<option value="United Arab Emirates">United Arab Emirates</option>

<!--
<option value="United Kingdom">United Kingdom</option>
<option value="Upper Volta">Upper Volta</option>
<option value="Uruguay">Uruguay</option>
<option value="USSR(Former)">USSR(Former)</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="VI, British">VI, British</option>
<option value="Viet Nam">Viet Nam</option>
<option value="Virgin Islands, USA">Virgin Islands, USA</option>
<option value="Western Sahara">Western Sahara</option>
<option value="WLF">WLF</option>
<option value="Yemen">Yemen</option>
<option value="Yugoslavia">Yugoslavia</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
-->
                       
                      </select>   
                    </div>
                    <div>
                        <select class="form-select" id='city' aria-label="Default select example">
                            <option disabled selected>Select City</option>
                          
                          </select>   
                    </div>
                    <div>
                        <select id='event' name='event' class="form-select" aria-label="Default select example">
                            <option disabled selected>Select Event</option>
                           
                          </select>   
                    </div>
               
            </div>
        </div>
    </section>
    <section class="searchbox">
        <div class="container">
            <div class="search_image_ads">
                <a href="">
                    <img src="img/searchad1.png" alt="">
                </a>
                <a href="">
                    <img src="img/searchad1.png" alt="">
                </a>
            </div>
            <div class="search_inner_box">
                <div class="ads_img_contaainer">
                    <img src="img/searchad1.png" alt="">
                </div>
                <div class="form_field_group">
                    <div class="nav_forsearch">
                        <ul class="nav nav-pills form_item_slider mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Event</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Hotels</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Transfer</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-other-tab" data-bs-toggle="pill" data-bs-target="#pills-other" type="button" role="tab" aria-controls="pills-other" aria-selected="false">Visa</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-tour-tab" data-bs-toggle="pill" data-bs-target="#pills-tour" type="button" role="tab" aria-controls="pills-tour" aria-selected="false">Tour</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-restro-tab" data-bs-toggle="pill" data-bs-target="#pills-restro" type="button" role="tab" aria-controls="pills-restro" aria-selected="false">Restaurant</button>
                              </li>
                          </ul>
                    </div>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <br/> 
                            <div class="row g-3">
                                
                                 <div class="col-md-6">
                                    <select id="city2" name='city' class="form-select">
                                        <option disabled selected>Select City</option>
                                        
                                      </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <select id="star" name='star' class="form-select">
                                        <option disabled selected>Hotel Star rating</option>
                                        <option>5</option>
                                        <option>4</option>
                                        <option>3</option>
                                        <option>2</option>
                                        <option>1</option>
                                      </select>
                                </div>
                              
                                <div class="col-md-6">
                                    <select id="hotels" name='hotel' class="form-select">
                                        <option disabled selected>Hotel Name</option>
                                        
                                      </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <select id="rooms" name='rooms' class="form-select">
                                        <option disabled selected>Rooms</option>
                                        
                                      </select>
                                </div>
                             
                                
                                <div class="col-md-6">
                                    <label  style='color:#828282;'>Check In</label>
                                    <input id="sdate" type='date' name='sdate' class="form-select">
                                        
                                </div>
                                <div class="col-md-6">
                                     <label style='color:#828282;'>Check Out</label>
                                   <input id="edate" type='date' name='edate' class="form-select">
                                </div>
                                
                                
                                 <div class="col-md-6">  <div class="form-group">
                       
					   <label for="fname" style='color:#828282;'>Room 1:</label>
						
                         <input type='number' class='aad form-control' max='8' min='0' placeholder="Adults"  name="adults" id="adults">
                           
						   
                        </div></div>
						
						
					
						
						
                         <div class="col-md-6">  <div class="form-group">
                        <label style='color:#f2faff;' for="lname">Room 1</label>
						 
                         <input type='number' class='aac form-control' max='4' min='0'  placeholder="Children"  name="children" id="children">
                           
						   
                        </div></div>
						
						
						
						
						
						
						
						
						   <div style="display:none;"  id='la1' class="col-md-6">  <div class="form-group">
                       
					   <label  for="fname" style='color:#828282;'>Room 2:</label>
						
                         <input type='number' class='aad form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults1" id="adults1">
                          
                        </div></div>
						
						
						
						
						
                         <div  style="display:none;"  id='lc1' class="col-md-6">  <div class="form-group">
                        <label style='color:#f2faff;' for="lname">Room  2</label>
						
                         <input type='number' class='aac form-control' min='0' max='4'  style="display:none;"  placeholder="Children"  name="children1" id="children1">
                           
						    
						   
						   
                        </div></div>
						
						
						
						
						
						
						
						   <div style="display:none;"  id='la2'  class="col-md-6">  <div class="form-group">
                       
					   <label for="fname" style='color:#828282;'>Room  3:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults2" id="adults2">
                           
						   
						    
                        </div></div>
						
						
						
						
						
                         <div style="display:none;" id='lc2' class="col-md-6">  <div class="form-group">
                        <label style='color:#f2faff;' for="lname">Room  3</label>
						
                         <input type='number' class='form-control' min='0' max='4'  style="display:none;"  placeholder="Children"  name="children2" id="children2">
                           
						   
						   
						
                        </div></div>
						
						
						
						
						
						
					   <div  style="display:none;" id='la3'  class="col-md-6">  <div class="form-group">
                       
					   <label for="fname" style='color:#828282;'>Room  4:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults3" id="adults3">
                           
						   
						   
                        </div></div>
						
						
						
						
						
                         <div   style="display:none;"  id='lc3' class="col-md-6">  <div class="form-group">
                        <label style='color:#f2faff;' for="lname">Room  4</label>
						
                         <input type='number' class='form-control' min='0' max='4'  style="display:none;"  placeholder="Children"  name="children3" id="children3">
                           
						   
						   
						   
                        </div></div>	
						
						
						   <div style="display:none;"  id='la4'  class="col-md-6">  <div class="form-group">
                       
					   <label  for="fname" style='color:#828282;'>Room  5:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults4" id="adults4">
                           
						    
                        </div></div>
						
						
						
						
						
                         <div  style="display:none;"  id='lc4' class="col-md-6">  <div class="form-group">
                        <label  style='color:#f2faff;' for="lname">Room  5</label>
						
                         <input type='number' class='form-control' min='0'  max='4' style="display:none;"  placeholder="Children"  name="children4" id="children4">
                           
						   
						   
						   
						
                        </div></div>
						
						
						
						
						
						
						
						
						
						
						   <div style="display:none;"  id='la5'  class="col-md-6">  <div class="form-group">
                       
					   <label  for="fname" style='color:#828282;'>Room  6:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults5" id="adults5">
                           
						    
                        </div></div>
						
						
						
						
						
                         <div  style="display:none;"  id='lc5' class="col-md-6">  <div class="form-group">
                        <label  style='color:#f2faff;' for="lname">Room  6</label>
						
                         <input type='number' class='form-control' min='0'  max='4' style="display:none;"  placeholder="Children"  name="children5" id="children5">
                           
						   
						   
						   
						
                        </div></div>
						
						
						
						
						
						
						
						
						
						   <div style="display:none;"  id='la6'  class="col-md-6">  <div class="form-group">
                       
					   <label  for="fname" style='color:#828282;'>Room  7:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults6" id="adults6">
                           
						    
                        </div></div>
						
						
						
						
						
                         <div  style="display:none;"  id='lc6' class="col-md-6">  <div class="form-group">
                        <label  style='color:#f2faff;' for="lname">Room  7</label>
						
                         <input type='number' class='form-control' min='0'  max='4' style="display:none;"  placeholder="Children"  name="children6" id="children6">
                           
						   
						   
						   
						
                        </div></div>
						
						
						
						
						
						
						   <div style="display:none;"  id='la7'  class="col-md-6">  <div class="form-group">
                       
					   <label  for="fname" style='color:#828282;'>Room  8:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults7" id="adults7">
                           
						    
                        </div></div>
						
						
						
						
						
                         <div  style="display:none;"  id='lc7' class="col-md-6">  <div class="form-group">
                        <label  style='color:#f2faff;' for="lname">Room  8</label>
						
                         <input type='number' class='form-control' min='0'  max='4' style="display:none;"  placeholder="Children"  name="children7" id="children7">
                           
						   
						   
						   
						
                        </div></div>
						
						
						
						
						
                                
                                
                                
						   <div style="display:none;"  id='la8'  class="col-md-6">  <div class="form-group">
                       
					   <label  for="fname" style='color:#828282;'>Room  9:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults8" id="adults8">
                           
						    
                        </div></div>
						
						
						
						
						
                         <div  style="display:none;"  id='lc8' class="col-md-6">  <div class="form-group">
                        <label  style='color:#f2faff;' for="lname">Room  9</label>
						
                         <input type='number' class='form-control' min='0'  max='4' style="display:none;"  placeholder="Children"  name="children8" id="children8">
                           
						   
						   
						   
						
                        </div></div>
                                
                                
                                
                                
                            
						   <div style="display:none;"  id='la9'  class="col-md-6">  <div class="form-group">
                       
					   <label  for="fname" style='color:#828282;'>Room  10:</label>
						
                         <input type='number' class='form-control' max='8' min='0'  style="display:none;"  placeholder="Adults"  name="adults9" id="adults9">
                           
						    
                        </div></div>
						
						
						
						
						
                         <div  style="display:none;"  id='lc9' class="col-md-6">  <div class="form-group">
                        <label  style='color:#f2faff;' for="lname">Room  10</label>
						
                         <input type='number' class='form-control' min='0'  max='4' style="display:none;"  placeholder="Children"  name="children9" id="children9">
                           
						   
						   
						   
						
                        </div></div>
                            
                            
                            
                            
                            
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="col-md-2"></div>
                                <div class="col-12 text-center">
                                 <input type='submit' name='submit' class="btn btn-primary btn-main" value='Search Hotel'>
                                </div>
                                </div>
                              </form>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Default radio
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Default checked radio
                                        </label>
                                      </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <select id="inputState" class="form-select">
                                        <option selected>Select a Room</option>
                                        <option>...</option>
                                      </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="inputState" class="form-select">
                                        <option selected>No.of Travelers</option>
                                        <option>...</option>
                                      </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="inputState" class="form-select">
                                        <option selected>Check In</option>
                                        <option>...</option>
                                      </select>
                                </div>
                                <div class="col-md-6">
                                    <select id="inputState" class="form-select">
                                        <option selected>Check out</option>
                                        <option>...</option>
                                      </select>
                                </div>
                                
                                
						
						
						
						
						
						
						
						
						
						 
                                
                                
                                
                                
                                
                                
                                
                                
                                <div class="col-12 text-center">
                                  <!-- <button  class="">Search Hotel</button> -->
                                  <a href="https://fcoconnect.vercel.app/hotelsearch.html" class="btn btn-primary btn-main">Search Hotel</a>
                                </div>
                              </form>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <form class="row g-3">
                                        <div class="offset-md-2 col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                  One Way
                                                </label>
                                              </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                  Round Trip
                                                </label>
                                              </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <select id="inputState" class="form-select">
                                                <option selected>Pick Up From</option>
                                                <option>...</option>
                                              </select>
                                        </div>
                                        <div class="col-md-6">
                                            <select id="inputState" class="form-select">
                                                <option selected>Drop Off To</option>
                                                <option>...</option>
                                              </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" placeholder="name@example.com">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="date" class="form-control" placeholder="name@example.com">
                                        </div>
                                        <div class="col-12 text-center">
                                          <!-- <button  class="">Search Hotel</button> -->
                                          <a href="http://127.0.0.1:5500/transferseach.html" class="btn btn-primary btn-main">Search Transfer</a>
                                        </div>
                                      </form>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-other" role="tabpanel" aria-labelledby="pills-other-tab">...</div>
                        <div class="tab-pane fade" id="pills-tour" role="tabpanel" aria-labelledby="pills-tour-tab">...</div>
                        <div class="tab-pane fade" id="pills-restro" role="tabpanel" aria-labelledby="pills-restro-tab">Restaurant</div>
                      </div>
                </div>
                <div class="ads_img_contaainer">
                    <img src="img/searchad1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="termsbox">
        <div class="container">
            <ul class="termsgroup">
                <li class = "w-100">
                    <img src="img/terms/image1.png" alt="">
                    <p>No Booking Fees</p>
                </li>
                <li>
                    <img src="img/terms/image2.png" alt="">
                    <p>Flexible Cancellation Policies</p>
                </li>
                <li>
                    <img src="img/terms/image3.png" alt="">
                    <p>24 Hour Customer Service</p>
                </li>
                <li>
                    <img src="img/terms/image4.png" alt="">
                    <p>Booking Hotel Direct</p>
                </li>
                <li>
                    <img src="img/terms/image5.png" alt="">
                    <p>Privacy and Policy</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="aboutevent">
        <div class="container">
            <div class="about_inner">
                <div id='ei' class="about_inner_bg">
                    <h2><span style='color:#bf1e2e;'>About</span> Us</h2>
                    <p>
                        In 2009, founder & CEO Dilan Fernando saw the need for a simpler more streamlined, secure and optimal way for Congress organizers to book and manage events. His vision was a simple but powerful one to create a tool for professionals to access, manage, and share event information from anywhere in real time. Not a novel concept today, but it was for the early 2000’s. In those days, no one was using 100% web-based software or “cloud based” as we know it today. PCO Connect not only survived the “dot com” burst of the early 2000s but steadily grew, Today, PCO Connect has serves over 100,000 customers and companies.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id='bann22' style="display:none; height:750px; max-width:100%; background-image: url('pco/africa event images/bann22.png');" class="eventattraction">
        <div class="container">
            <div class="row">
               
                <div class="col-1">
                    <div class="event_title">
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section style='display:none;' id='ve' class='owl-item'>
        
        <div class='container'>
            <div class='row'>
                
                
                <div class='col-sm'>
                    <br/><br/><br/>
                     <h2 style='color:#dc3545;' id='evetitle'>Event Hightlight</h2>
                                <h6 style='color:#828282;' id='evedes'>Live Perfomances from  International & Local Artists</h6>
                               
                </div>
                
                <div class='col-sm'>
                    <img id='eveimg' style='width:600px;' src="img/highlights/highlights1.png" alt="">
                </div>
                
                
                
            </div>
        </div>
        
    </section>
    
    
    

    <section class="upcoming_event heightlights">
        <div class="container px-0">
            <div class="highlightsGroups eventsides owl-carousel">
                
                
                 <?php
    

$sqllx ="SELECT * FROM newevents";
		$resulttx = $conn->query($sqllx);


	
if ($resulttx->num_rows > 0) {
  // output data of each row
  while($rowwx = $resulttx->fetch_assoc()) {

?>
                
                <div>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img style='max-width:550px !important; !important;' class="img-fluid mb-3" src="pco/eventhighlights/<?php echo $rowwx['name'];?>/<?php echo $rowwx['highimg'];?>" alt="Upcoming Event">
                        </div>
                        <div class="col-md-6">
                            <div class="hightlight_content">
                                <h2 class = "mt-4">Upcoming Events</h2>
                                <h6><?php echo $rowwx['name'];?></h6>
                                <h6><?php echo $rowwx['title'];?></h6>
                                <p><?php echo $rowwx['descr'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
             <?php
  }
}
  ?>
                
                
                
                
                
            </div>
        </div>
    </section>
    
    <!--<section class="previous_event">
        <div class="container px-0">
            <h1>Previous Events</h1>
            <ul class="eventcards preeventslides owl-carousel">
                <li class="eventcard">
                    <img src="img/highlights/eventcard.png" alt="">
                    <h4>
                        <a href="">From international & Local Artists</a>
                    </h4>
                    <span>Iris Dubai</span>
                </li>
                <li class="eventcard">
                    <img src="img/highlights/eventcard.png" alt="">
                    <h4>
                        <a href="">From international & Local Artists</a>
                    </h4>
                    <span>Iris Dubai</span>
                </li>
                <li class="eventcard">
                    <img src="img/highlights/eventcard.png" alt="">
                    <h4>
                        <a href="">From international & Local Artists</a>
                    </h4>
                    <span>Iris Dubai</span>
                </li>
                <li class="eventcard">
                    <img src="img/highlights/eventcard.png" alt="">
                    <h4>
                        <a href="">From international & Local Artists</a>
                    </h4>
                    <span>Iris Dubai</span>
                </li>
                <li class="eventcard">
                    <img src="img/highlights/eventcard.png" alt="">
                    <h4>
                        <a href="">From international & Local Artists</a>
                    </h4>
                    <span>Iris Dubai</span>
                </li>
                <li class="eventcard">
                    <img src="img/highlights/eventcard.png" alt="">
                    <h4>
                        <a href="">From international & Local Artists</a>
                    </h4>
                    <span>Iris Dubai</span>
                </li>
            </ul>
        </div>
    </section>-->
    
    <section class="footer">
        <div class="mainfooter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 px-0">
                        <div class="footer_col about">
                            <h2>About</h2>
                            <p>In 2009, founder & CEO Dilan Fernando saw the need for a simpler more streamlined, secure and optimal way for Congress organizers to book and manage events. His vision was a simple but powerful one to create a tool for professionals to access, manage, and share event information from anywhere in real time. Not a novel concept today, but it was for the early 2000’s. In those days, no one was using 100% web-based software or “cloud based” as we know it today.
                                PCO Connect not only survived the “dot com” burst of the early 2000s but steadily grew, Today, PCO Connect has serves over 100,000 customers and companies.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 px-0">
                        <div class="footer_col m-0">
                            <h2>Testinomials</h2>
                            <img src="img/quote.png" alt="">
                            <p>Excellent pre- and during-event results. Well-planned customer service solved all problems. I'd recommend the Services to any event organizer in Dubai or the Gulf Region. Thanks for attending.</p>
                            <hr/>
                            <ul class="footerslides owl-carousel">
                                <li>
                                    <h6>Drew Donavan</h6>
                                    <p>International Telecommuication Union 
                                        Head, Safety and Security Division</p>
                                </li>
                              
                              <!--  <li>
                                    <h6>Drew Donavan</h6>
                                    <p>International Telecommuication Union 
                                        Head, Safety and Security Division</p>
                                </li>
                                <li>
                                    <h6>Drew Donavan</h6>
                                    <p>International Telecommuication Union 
                                        Head, Safety and Security Division</p>
                                </li>
                                <li>
                                    <h6>Drew Donavan</h6>
                                    <p>International Telecommuication Union 
                                        Head, Safety and Security Division</p>
                                </li>
                                <li>
                                    <h6>Drew Donavan</h6>
                                    <p>International Telecommuication Union 
                                        Head, Safety and Security Division</p>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 m-0 px-4">
                        <div class="footer_col info m-0">
                            <h2>Connect with us</h2>
                            <ul class="socialmedia">
                                <li>
                                    <a href="https://www.facebook.com/Pcoconnect/">
                                        <img src="img/social/facebook.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/Pcoconnect/?_l=en_US">
                                        <img src="img/social/linkedin.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Pcoconnect/">
                                        <img src="img/social/twitter.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/Pcoconnect/">
                                        <img src="img/social/instagram.png" alt="">
                                    </a>
                                </li>
                            </ul>
                            <h6 class="address_title">Travel Synergies Tourism LLC</h6>
                            <ul class="addresses">
                                <li>
                                    Al Nassima Towers
                                </li>
                                <li>Sheikh Zayed Road
                                </li>
                                <li>Dubai, UAE</li>
                            </ul>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quickLinks">
            <div class="container px-0">
                <nav class="nav">
                    <a class="nav-link active" aria-current="page" href="#">About us</a>
                    <a class="nav-link" href="#">Add your property</a>
                    <a class="nav-link" href="#">customer Service</a>
                    <a class="nav-link" href="#">FAQ</a>
                    <a class="nav-link" href="#">Careers</a>
                    <a class="nav-link" href="#">Terms & Conditions</a>
                    <a class="nav-link" href="#">Privacy and Cookies</a>
                </nav>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="copylayout">
                    <div class="copy_text">Copyright 2022 PCO Connect | Design and Developed By <img style='width:100px;' src='squlogo.png'></div>
                    <div class="copy_text">A Sub Division Of <img style='width:100px;' src='tslogo.png'></div>
                </div>
            </div>
        </div>
        
    </section>
    </div>
    
    
        
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
  
  
  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    <script>
    
    
    
    $("[type='number']").keypress(function (evt) {
    evt.preventDefault();
});








$("#rooms").on('change', function() {

	var compzy1=$("#rooms").val();
	


	
for(i=1; i<10; i++){
    
	document.getElementById("adults"+i).value="";
	document.getElementById("la"+i).style.display = "none";
	document.getElementById("adults"+i).style.display = "none";
	document.getElementById("lc"+i).style.display = "none";
	document.getElementById("children"+i).style.display = "none";
	document.getElementById("children"+i).value="";
	
	
	
}
		
	
	
	
	for(i=1; i<compzy1; i++){
	    
	  
		
	document.getElementById("la"+i).style.display = "block";
		
	document.getElementById("adults"+i).style.display = "block";
	
	document.getElementById("lc"+i).style.display = "block";
	
	document.getElementById("children"+i).style.display = "block";
	
	
		  
	}
});	
	
    












        

$("#country").on('change', function() {
    
    	 var rooms=document.getElementById("rooms");
    	 rooms.innerHTML='';
	   rooms.innerHTML= rooms.innerHTML+'<option disabled selected>Rooms</option>';
    
    	var st=document.getElementById("star"); 
	st.innerHTML='<option selected disabled>Hotel Star Rating</option><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option>';
	
		var ht=document.getElementById("hotels"); 
		ht.innerHTML='<option selected disabled>Hotel Name</option>';
	
    
    
	var country=$("#country").val();
	
	
	  $.ajax({
              
			  type:'POST',
              url:'getcities2.php',
              data:{'country':country},
			  
              success:function(result){
                  
				
				$("#city").html(result);
			
				  
                
                 
              }
			  
          }); 
          
          
          
          
          	  $.ajax({
              
			  type:'POST',
              url:'getcities.php',
              data:{'country':country},
			  
              success:function(result){
                  
				
				
				$("#city2").html(result);
				  
                
                 
              }
			  
          }); 
		  
		  
		
	
})










$("#city").on('change', function() {
    var country=$("#country").val();
    var city=$("#city").val();
	
	
	  $.ajax({
              
			  type:'POST',
              url:'getevents.php',
              data:{'city':city,'country':country},
			  
              success:function(result){
                  
				
				$("#event").html(result);
				  
                
                 
              }
			  
          }); 
		  
		  
		
	
})










$("#hotels").on('change', function() {
    var country=$("#country").val();
    var city=$("#city2").val();
    var hotel=$("#hotels").val();
	
	 var rooms=document.getElementById("rooms");
	 rooms.innerHTML='';
	 
	  $.ajax({
              
			  type:'POST',
              url:'getroomnumbers.php',
              data:{'city':city,'country':country,'hotel':hotel},
			  
              success:function(result){
                  
				
				if(result>=10){
			    for (let i = 0; i < 10; i++) {
			   
			   var n=i+1;
			   
			   rooms.innerHTML= rooms.innerHTML+'<option>'+n+'</option>'
			    
				}
				
				}
				else{
				    for (let i = 0; i < result; i++) {
			   
			     var n=i+1;
			   
			   rooms.innerHTML= rooms.innerHTML+'<option>'+n+'</option>'
			    
				}  
				}
				  
                
                 
              }
			  
          }); 
		  
		  
		
	
})








$("#city2").on('change', function() {
   var country=$("#country").val();
    var city=$("#city2").val();
    
    	 var rooms=document.getElementById("rooms");
    	 rooms.innerHTML='';
	   rooms.innerHTML= rooms.innerHTML+'<option disabled selected>Rooms</option>';
	
	var st=document.getElementById("star"); 
	st.innerHTML='<option selected disabled>Hotel Star Rating</option><option>5</option><option>4</option><option>3</option><option>2</option><option>1</option>';
	
	  $.ajax({
              
			  type:'POST',
              url:'gethotels.php',
              data:{'city':city,'country':country},
			  
              success:function(result){
                
                 var hotels=document.getElementById("hotels");  
			
			    hotels.innerHTML=result;
				
				  
                
                 
              }
			  
          }); 
		  
		  
		
	
})










$("#star").on('change', function() {
   var country=$("#country").val();
    var city=$("#city2").val();
     var star=$("#star").val();
     
     	 var rooms=document.getElementById("rooms");
     	  rooms.innerHTML='';
	   rooms.innerHTML= rooms.innerHTML+'<option disabled selected>Rooms</option>';
	
	  $.ajax({
              
			  type:'POST',
              url:'gethotels2.php',
              data:{'city':city,'country':country,'star':star},
			  
              success:function(result){
                
                 var hotels=document.getElementById("hotels");  
			
			    hotels.innerHTML=result;
				
				  
                
                 
              }
			  
          }); 
		  
		  
		
	
})















$("#event").on('change', function() {
    var event=$("#event").val();
    
    
    
    var sdate='';
    var edate='';
    
    
var hg=document.getElementById("ve");

hg.style.display='block';





	if(event.includes('Africa Festival'))
	
	{ 
	    var ban2=document.getElementById("bg-banner");
			    
		var bann22=document.getElementById("bann22");	
		bann22.style.display='block';	
				ban2.style.backgroundImage="url('pco/africa event images/afr3.jpg')";
				
				
					var ei=document.getElementById("ei");
			    	ei.innerHTML="<h3 align='center' style='color:#bf1e2e;'>ABOUT "+event+"</h3><br/>Africa has many sides to her story and we want to share these with you. Come and experience a 3 day event starting from 1300 - 2200hrs daily ( 27-29 October'2022 ) at the Burj Park.<br/><br/>An Event not to be missed, showcasing the best of Africa - Live performances from local and international artists, Dance expressions, fashion shows, unique attractions, kiddies are, food and beverage stands. There is something for everyone.<br/><br/><b>Come see Africa in all her splendor.</b>";
			    	
			    	
			    	
			    const evetitle=document.getElementById('evetitle');
				 const evedes=document.getElementById('evedes');
				 const eveimg=document.getElementById('eveimg');
			    	
			    	evetitle.innerHTML='Stalls';
			    	evedes.innerHTML='This will be three (3) days of fun and excitement.Starting from 13:00 - 22:00 daily, this an event not to be missed. Your safety comes first. In line with government and Emaar requirements, strict COVID 19 protocols will be followed.';
			    	eveimg.src='pco/eventbanners/All Africa Festival/africabanner.jpg';
			    	
			    	
			    	
			    	
			
	    
	}
	
	else{
	    
//var ec=document.getElementById("bg-banner");
//ec.style.display='block';

 // var et=document.getElementById("slider");
//et.style.display='none';

var bc=document.getElementById("bann22");
bc.style.display='none';


	 $.ajax({
              
			  
	
	
			  type:'POST',
              url:'getbanner.php',
              dataType:'json', /*most important**/ 
              data:{'compy1':event},
			  
              success:function(result){
                  
				 const evetitle=document.getElementById('evetitle');
				 const evedes=document.getElementById('evedes');
				 const eveimg=document.getElementById('eveimg');
				evetitle.innerHTML='';
				 
				 
		evetitle.innerHTML=result.title;
		
		evedes.innerHTML=result.descriptionn;
	    eveimg.src = result.highimg;
	
				
			var ee=document.getElementById("bg-banner");
				var ei=document.getElementById("ei");
			    
			
				ee.style.backgroundImage=result.banner;
				ei.innerHTML="<h3 align='center' style='color:#bf1e2e;'>About "+event+"</h3><br/>"+result.descriptionn;
				
			
                
                 
              }
			  
          }); 
	
	
	}
	
	













    $.ajax({
              
			  type:'POST',
              url:'getdates.php',
              data:{'compy1':event},
			  
              success:function(result){
				  
				  
				  
				  
				  if(result.length>0)
				  {
					  
				result = jQuery.parseJSON(result);
				
				
				for(i=0; i<result.length; i++){

					sdate=result[i].sdate;
					edate=result[i].edate;
					
					

				}
			
			
			$("#sdate").val(sdate);
				$("#edate").val(edate);
				
			
			
				  }
              }
				
				  });








		  
		  
		
	
})

    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>
</body>
</html>