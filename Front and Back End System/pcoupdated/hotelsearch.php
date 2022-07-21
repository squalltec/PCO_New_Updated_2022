<?php
session_start();
include 'db_connection.php';



$roomsrecieved=$_SESSION['sendroomnumbers'];

$hn=$_SESSION['hotel'];
$cn=$_SESSION['country'];
$ln=$_SESSION['city'];

$eve=$_SESSION['event'];



$gcountry=$_SESSION['country'];
$gcity=$_SESSION['city'];
$gevent=$_SESSION['event'];
$ghotel=$_SESSION['hotel'];
$gsdate=$_SESSION['sdate'];
$gedate=$_SESSION['edate'];

$gsendroomnumbers=$_SESSION['sendroomnumbers'];

$gcounter=$_SESSION['counter'];

$gsendcategory=$_SESSION['sendcategory'];




$nmbrooms=$_SESSION['sendroomnumbers'];



	$rooms=$_SESSION['roomnmb'];
		
	$a0=(int)$_SESSION['adults'];
	$c0=(int)$_SESSION['children'];
	
	$a1=(int)$_SESSION['adult1'];
	$c1=(int)$_SESSION['children1'];
	
	$a2=(int)$_SESSION['adult2'];
	$c2=(int)$_SESSION['children2'];
	
	$a3=(int)$_SESSION['adult3'];
	$c3=(int)$_SESSION['children3'];
	
	$a4=(int)$_SESSION['adult4'];
	$c4=(int)$_SESSION['children4'];
	
	$a5=(int)$_SESSION['adult5'];
	$c5=(int)$_SESSION['children5'];
	
	$a6=(int)$_SESSION['adult6'];
	$c6=(int)$_SESSION['children6'];
	
	$a7=(int)$_SESSION['adult7'];
	$c7=(int)$_SESSION['children7'];
	
	$a8=(int)$_SESSION['adult8'];
	$c8=(int)$_SESSION['children8'];
	
	$a9=(int)$_SESSION['adult9'];
	$c9=(int)$_SESSION['children9'];
	
	$max0=$a0+$c0;
	$max1=$a1+$c1;
	$max2=$a2+$c2;
	$max3=$a3+$c3;
	$max4=$a4+$c4;
	$max5=$a5+$c5;
	$max6=$a6+$c6;
	$max7=$a7+$c7;
	$max8=$a8+$c8;
	$max9=$a9+$c9;
	
	
	$biggest=0;
	
	
	
	
	
	
	
	if($max0>$biggest){
	    $biggest=$max0;
	}
		if($max1>$biggest){
	    $biggest=$max1;
	}	if($max2>$biggest){
	    $biggest=$max2;
	}	if($max3>$biggest){
	    $biggest=$max3;
	}	if($max4>$biggest){
	    $biggest=$max4;
	}	if($max5>$biggest){
	    $biggest=$max5;
	}	if($max6>$biggest){
	    $biggest=$max6;
	}	if($max7>$biggest){
	    $biggest=$max7;
	}	if($max8>$biggest){
	    $biggest=$max8;
	}	if($max9>$biggest){
	    $biggest=$max9;
	}
	
	
	
	$_SESSION['biggest']=$biggest;

	
	


$today=date("Y-m-d");

$roomsnames=array();
$roomsnumbers=array();
$roomsdoubledescription=array();
$roomssingledescription=array();
$roomsimages='';

$roomscancellation=array();
$inroomf=array();
$kitchenf=array();
$privatebathroomf=array();
$discountedf=array();
$complimentaryf=array();

$adultsallowed=array();
$childrenallowed=array();
$extrabedsallowed=array();





$sqlrooms ="SELECT * FROM hotelsInventorydatabase WHERE hotel='$hn' && country='$cn' && city='$ln'";
	
		$resultrooms = $conn->query($sqlrooms);

if ($resultrooms->num_rows > 0) {
  // output data of each row
  while($rowrooms = $resultrooms->fetch_assoc()) {
      
      $countrums=0;
      $rname=$rowrooms['type'];
     
      $sqlavail ="SELECT * FROM roomnumbers WHERE hotel='$hn' && country='$cn' && location='$ln' && name='$rname' && dates>=$today";
	
		$resultavail = $conn->query($sqlavail);

if ($resultavail->num_rows > 0) {
  // output data of each row
  while($rowavail = $resultavail->fetch_assoc()) {
      
      
      $countrums=$countrums+(int)$rowavail['number'];
     
      
      
      
  }
}
if($countrums>0){
    
    $ao=intval($rowrooms['doubleadultoccupancy']);
    $co=intval($rowrooms['doublechildoccupancy']);
    $seb=intval($rowrooms['doubleextrabedsallowed']);
   
   $addme=$ao+$co+$seb;
    if($biggest<=$addme){
    
     array_push($roomsnames,$rowrooms['type']);  
     array_push($roomssingledescription,$rowrooms['singledescription']); 
     
     
     
      array_push($adultsallowed,$rowrooms['doubleadultoccupancy']);  
       array_push($childrenallowed,$rowrooms['doublechildoccupancy']);  
        array_push($extrabedsallowed,$rowrooms['doubleextrabedsallowed']);  
     
     
     
     
     
     array_push($roomscancellation,$rowrooms['cancellationpolicy']);
     array_push($inroomf,$rowrooms['inroomfacilities']);
     array_push($kitchenf,$rowrooms['kitchenfacilities']);
     array_push($privatebathroomf,$rowrooms['privatebathroomfacilities']);
     array_push($discountedf,$rowrooms['discountedfacilities']);
     array_push($complimentaryf,$rowrooms['complimentaryfacilities']);
     
     
     
     array_push($roomsnumbers,$countrums); 
     
     
     $bvb=$rowrooms['type'];
     
          
     
    }   
}
      
  }
}











$images=array();

$sqllg ="SELECT * FROM hotelsdatabaseimages WHERE name='$hn' && country='$cn' && city='$ln'";
		$resulttg = $conn->query($sqllg);

if ($resulttg->num_rows > 0) {
  // output data of each row
  while($rowwg = $resulttg->fetch_assoc()) {
      
      array_push($images,$rowwg['image']);
      
  }
}







$sqll ="SELECT * FROM hotelsdatabase WHERE name='$hn' && country='$cn' && city='$ln'";
		$resultt = $conn->query($sqll);

if ($resultt->num_rows > 0) {
  // output data of each row
  while($roww = $resultt->fetch_assoc()) {
      
      $des=$roww['description'];
       
     $generalf=$roww['generalfacilities']; 
      $mainf=$roww['mainfacilities'];
       $frontf=$roww['frontdeskfacilities'];
        $sportsf=$roww['sportsfacilities'];
         $familyf=$roww['familyfacilities'];
         $cleaningf=$roww['cleaningfacilities'];
         $foodf=$roww['foodfacilities'];
         $businessf=$roww['businessfacilities'];
          $internetf=$roww['internetfacilities'];
           $parkingf=$roww['parkingfacilities'];
            $uniquef=$roww['uniquefacilities'];
            $safetyf=$roww['safetyfacilities'];
	  
	
  }
}








if (isset($_POST['modify'])) {
    
    
    if($_POST['hotel'] !='')
    {
    
    
$_SESSION['hotel']=$_POST['hotel'];
$_SESSION['city']=$_POST['city'];

$_SESSION['sendcategory']=$_POST['star'];

$_SESSION['sdate']=$_POST['sdate'];

$_SESSION['edate']=$_POST['edate'];


}



 echo "<script>location.replace('hotelsearch.php');</script>";   
    
}














if (isset($_POST['submit'])) {
	
	$_SESSION['numberofadults']=$_POST['adultsnumber'];
	$_SESSION['numberofchildren']=$_POST['childrennumber'];
    $_SESSION['sendroomnumbers']=$_POST['roomsrecieved'];
    
     $_SESSION['totalpaisay']=$_POST['totalpaisay'];
    
     $_SESSION['roomseachtype']=$_POST['roomseachtype'];
     
     $_SESSION['eachtype']=$_POST['eachtype'];
    
    $_SESSION['aallowed']=$adultsallowed;
    $_SESSION['callowed']=$childrenallowed;
    $_SESSION['eballowed']=$extrabedsallowed;
    
    
    
	echo "<script>location.replace('bookingdetails.php');</script>";
	
}








?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/app.css">
    <title>Search Result</title>
</head>
<body>
    
    <input style='display:none;' name='contry' id='contry' value='<?php echo $cn;?>'>
    
    
    
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
    
    <style>
        .swal2-confirm{
            background-color: #DC3545 !important;
        }
    </style>
    <section class="page_title">
        <div class="container">
            <h1>Search Result</h1>
            
            <a style='display:none;' href = "#" id='popalert' data-bs-toggle = "modal" data-bs-target = ".alertModal">pop</a>
        </div>
    </section>
    <section class="page_searchbox">
        <div class="container px-0">
            <div class="search_box">
                <h5>Modify Your Search</h5>
                
                <form method="POST" action='#' class="row g-3">
                    <div class="col-md-11">
                        <div class="row">
                            
                            <div class="col-4 col-lg-2 mb-3 mb-lg-0 pe-0">
                                <label style='color:#D3D3D3;'>City <?php $roomsnames[0];?></label>
                                <select id="city" name='city' class="form-select">
                                    
                                    <option selected><?php echo $gcity;?></option>
                                    
                                    
                                    
                                    <?php
                                    
        $sqllas = "SELECT * FROM hotelsdatabase WHERE country='$cn' GROUP BY city";
 
 
 

 $result=$conn->query($sqllas);
 


 
while($row=mysqli_fetch_assoc($result)){
    $checkcity=$row['city'];
    if($checkcity!=$ln){
     echo "<option>".$row['city']."</option><br>";
    }
}

                                    
                                    ?>
                                    
                                     
                                    
                                  </select>
                            </div>
                            <div class="col-4 col-lg-2 mb-3 mb-lg-0 pe-0">
                                  <label style='color:#D3D3D3;'>Hotel</label>
                                <select id="hotel" name='hotel' class="form-select">
                                    <option selected><?php echo $ghotel;?></option>
                                   
                                    
                                    
                                    
                                    
        <?php
                                    
        $sqllas = "SELECT * FROM hotelsdatabase WHERE country='$cn' && city='$ln' && star='$gsendcategory'";
 
 
 

 $result=$conn->query($sqllas);
 


 
while($row=mysqli_fetch_assoc($result)){
    $checkhotels=$row['name'];
    if($checkhotels!=$hn){
     echo "<option>".$row['name']."</option><br>";
    }
}

                                    
                                    ?>
                                                                 
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                  </select>
                            </div>
                            <div class="col-4 col-lg-2 mb-3 mb-lg-0 pe-0">
                                  <label style='color:#D3D3D3;'>Star Rating</label>
                                <select id="star" name='star' class="form-select">
                                    <option selected><?php echo $gsendcategory;?></option>
                                    
                                    
                                    <?php
                                    
                                    for ($x = 5; $x > 0; $x--) {
                                        if($x!=$gsendcategory){
                                        echo '<option>'.$x.'</option>';
                                        }
                                    }
                                    ?>
                                    
                                    
                                    
                                    
                                  </select>
                            </div>
                        
                            <div class="col-4 col-lg-2 mb-3 mb-lg-0 pe-0">
                                  <label style='color:#D3D3D3;'>Check In</label>
                                <input id="sdate" name='sdate' value='<?php echo $gsdate;?>' type='date' class="form-select">
                                    
                            </div>
                            <div class="col-4 col-lg-2 mb-3 mb-lg-0 pe-0">
                                  <label style='color:#D3D3D3;'>Check Out</label>
                        <input id="edate" name='edate' value='<?php echo $gedate;?>' type='date' class="form-select">
                            </div>
                        </div>
                    </div>
                    <div class="col-1 search_submit">
                        <br/>
                      <button id='donotclick' onclick="myFunction()" class="btn btn-primary"><i class="bi bi-search"></i></button>
                      
                      <button style='display:none;' id='clickmodify' type="submit" name='modify' class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                    
                    
                  </form>
            </div>
        </div>
    </section>











    <section class="searchlist">
        <div class="container p-0">
            
            
            
            
            
            <!--hotel item start-->
            
            <?php
             if(count($roomsnames)>0)
                     {
                     ?>
            
            
            
            <div class="searchitem">
                <div class="item_details">
                    <div class="item_main_title">
                        <h2><?php echo $ghotel;?></h2>
                        <!--
                        <a href=""><i class="bi bi-heart"></i></a>
                        -->
                    </div>
                    <div class="reviews">
                        <ul class="rating">
                           <?php 
                           for ($x = 0; $x < $gsendcategory; $x++) {
                          
                          ?>
                            <li><i class="bi bi-star-fill"></i></li>
                            <?php
                           }
                           ?>
                            
                        </ul>
                        <span><?php echo $gsendcategory;?> Star Hotel</span>
                    </div>
                    <span class="item_address"><i class="bi bi-geo-alt me-1"></i><?php echo $gcity;?>, <?php echo $gcountry;?></span>
                    <div class="room_galary">
                        <?php 
                        for ($x = 0; $x <count($images); $x++) {
                        ?>
                        
                        
                        <a href="pco/Hotel Images/<?php echo $ghotel;?>/<?php echo $images[$x];?>" data-lightbox="room_gal_1">
                            <img src="pco/Hotel Images/<?php echo $ghotel;?>/<?php echo $images[$x];?>" alt="">
                        </a>
                        <?php
                        }
                        ?>
                        
                        
                        
                        
                        
                    </div>
                    <div class="room_aminities">
                        <span class="room_meta_title">Amenities Includes:</span>
                        <ul>
                            <li>
                                <a href = "#" data-bs-toggle = "modal" data-bs-target = ".amenitiesModal">
                                    <img src="img/aminities/dinner.svg" alt="">
                                    <span>Dinner</span>
                                </a>
                            </li>
                            <li>
                                <a href = "#" data-bs-toggle = "modal" data-bs-target = ".amenitiesModal">
                                    <img src="img/aminities/fork.svg" alt="">
                                    <span>Breakfast</span>
                                </a>
                            </li>
                            <li>
                                <a href = "#" data-bs-toggle = "modal" data-bs-target = ".amenitiesModal">
                                    <img src="img/aminities/ac.svg" alt="">
                                    <span>AC</span>
                                </a>
                            </li>
                            <li>
                                <a href = "#" data-bs-toggle = "modal" data-bs-target = ".amenitiesModal">
                                    <img src="img/aminities/tv.svg" alt="">
                                    <span>TV</span>
                                </a>
                            </li>
                        </ul>
                        <a href = "#" class="see_more_btn" data-bs-toggle = "modal" data-bs-target = ".detailsModal">See More</a>
                    </div>
                  
                 <!-- 
                    <div class="customer_review">
                        <span class="room_meta_title">Customer Reviews</span>
                        <ul class="c_reviewlist">
                            <li><i class="bi bi-heart-fill"></i></li>
                            <li><i class="bi bi-heart-fill"></i></li>
                            <li><i class="bi bi-heart-fill"></i></li>
                            <li><i class="bi bi-heart-fill"></i></li>
                            <li><i class="bi bi-heart"></i></li>
                        </ul>
                    </div>
                    -->
                    
                   
                   
                  <!--hotel terms copied from here--> 
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                </div>
                
                <form action='#' method='POST'>
                    <input style='display:none;' name='roomsrecieved' id='roomsrecieved' value='<?php echo $roomsrecieved;?>'>
                <div class="other_room_list">
                    
                    <style>
                        
    
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #DC3545; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
                    </style>
                  <div style="overflow-y: scroll; height:400px;">
                    
                    
                    
                    
                    <?php
                    
                    
                    for ($x = 0; $x <count($roomsnames); $x++) {
                       
                        
                    ?>
                    
                    <div class="room_box">
                        
                        <div class = "room_box_img">
                            <a href = "#" class="see_more_btn" data-bs-toggle = "modal" data-bs-target = ".detailsModalR<?php echo $x;?>">

                                
                                 <?php
                                 $ig=array();
                           $rmvs=$roomsnames[$x];
                           
                           $sqlimgsv ="SELECT * FROM hotelsInventoryImagesdatabase WHERE hotel='$hn' && country='$cn' && location='$ln' && type='$rmvs'";
	
		$resultimgsv = $conn->query($sqlimgsv);

if ($resultimgsv->num_rows > 0) {
  // output data of each row
  while($rowimgsv = $resultimgsv->fetch_assoc()) {
    
    array_push($ig,$rowimgsv['image']);
  }
}
?>
               <img src="pco/Room Uploads/<?php echo $ghotel;?>/<?php echo $rmvs;?>/<?php echo $ig[0];?>" alt="">                 
                            </a>
                        </div>
                      
                        <div class="inner_room_meta">
                            <div class="room_metas">
                                <div class="room_type"><?php echo $roomsnames[$x];?></div>
                                
                        <input class='rtp' style='display:none;' name='eachtype[]' value="<?php echo $roomsnames[$x];?>">        
                                
                                <span class="status text-capitalize mt-2">available</span>
                                <nonsense class="row g-3">
                                   <!--      <div class="col-md-6">
                                      
                                      
                                        <div class="form-control_input">
                                       <input onclick='checkadultoccupancy(this)' name='adultsnumber[]' type="number" min='0' id="ad" class="adult form-control" value="0">
                                            
                                           <input class='adultsallowed' style='display:none;' value="<?php echo $adultsallowed[$x];?>">
                                           <input class='childrenallowed' style='display:none;' value="<?php echo $childrenallowed[$x];?>">
                                           <input class='extrabedsallowed' style='display:none;' value="<?php echo $extrabedsallowed[$x];?>">
                                            
                                            
                                            <div class="pre_value"><i class="bi bi-people"></i>Adults:</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-control_input">
                                            <input onclick='checkadultoccupancy(this)' name='childrennumber[]' id='ch' type="number" min='0' class="children form-control" value="0">
                                            <div class="pre_value"><i class="bi bi-people"></i>Children:</div>
                                        </div>
                                    </div>-->
                                    
                                    
                                    <div class="col-md-6">
                                        <div class="form-control_input">
                                            <input onclick='totall()' type="number" name='roomseachtype[]' min='0' max='<?php echo $roomsnumbers[$x];?>' class="roms form-control" value="0">
                                            <div class="pre_value"><i class="bi bi-people"></i>Rooms:</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 align-self-center">
                                        <div class="hotel_info">
                                            <!--<span><i class="bi bi-info-circle"></i>Deluxe is a Luxury...</span>-->
                                            <span><i class="bi bi-info-circle"></i>Available: <?php echo $roomsnumbers[$x];?> Rooms</span>
                                            
                                            <input class='ava' style='display:none;' value='<?php echo $roomsnumbers[$x];?>'>
                                        </div>
                                        
                                        
                                          
                                    </div>
                                </nonsense>
                            </div>
                            <div class="price_details">
                                <span>Starts as low as</span>
                                
                                <?php
                                $pricecompare=11111111111111111;
                                  $sqlprice = "SELECT * FROM setprices WHERE country='$cn'&& location='$ln' && hotel='$hn' && name='$roomsnames[$x]' && (class='TOY' || class='')";
 
 
 

 $resultprice=$conn->query($sqlprice);
 

if ($resultprice->num_rows > 0) {
 
while($rowprice=mysqli_fetch_assoc($resultprice)){
    
    
    
 $period = new DatePeriod(new DateTime($gsdate), new DateInterval('P1D'), new DateTime($gedate));
 
 $check='0';
    foreach ($period as $date) {
        $dt=$date->format("Y-m-d");
   
   
   if(($dt>=$rowprice['sdate'] && $dt<=$rowprice['edate']) || $rowprice['sdate']='0000-00-00')
   {
       
 
    if($pricecompare>$rowprice['sellprice']){
        $pricecompare=$rowprice['sellprice'];
        
        
    }
    $check='0';
   }
    }
    
    
    
    
    
    
    
    
    
    
    
    }
}

else{
     $pricecompare='Price Unavailable';
}


?>
                                
                                <h2><?php echo 'AED '.$pricecompare;?></h2>
                                <span>Per Night</span>
                                <!--<button class="theme_btn_sm btn btn-outline-primary">Select</button>-->
                                
                                
                                
                                <div style='margin-top:-30px; margin-bottom:-30px;' class='item_details'>
                             <div class="hotel_terms">
                       
                        <ul>
                            <li>
                                <a href = "#" data-bs-toggle = "modal" data-bs-target = ".termsModal<?php echo $x;?>"><img src = "img/terms/terms_icon_1.png"></a>
                            </li>
                            <li>
                                <a href = "#" data-bs-toggle = "modal" data-bs-target = ".termsModal<?php echo $x;?>"><img src = "img/terms/terms_icon_2.png"></a>
                            </li>
                            <li>
                                <a href = "#" data-bs-toggle = "modal" data-bs-target = ".termsModal<?php echo $x;?>"><img src = "img/terms/terms_icon_3.png"></a>
                            </li>
                        </ul>
                    </div>
                            
                            
                         </div>   
                         
                         
                         
                         <div style='margin-bottom:-30px;'>
                           <a href = "#" data-bs-toggle = "modal" data-bs-target = ".roomamsModal<?php echo $x;?>">   <span>Amenities...</span></a>
                         </div>
                         
                         
                         
                            </div>
                            
                            
                            
                            
                           
                            
                            
                            
                            
                            
                            
                        </div>
                        
                        
                        
                       
                        
                        
                            
                            
                           
                        
                        
                        
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                     <!-- room ams modal -->
    <div class="modal fade roomamsModal<?php echo $x;?>" tabindex="-1" aria-labelledby="roomamsModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Amenities</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                      
                      
                       <div class='container'><div class='row'>
                            
                            
                             <?php
     if($inroomf[$x]!=''){
         ?>
                            <div class='col-sm'>
                                <label>In Room:</label>
                        <ul class = "small text-black-50">
     
     <?php
   
     $gf=explode(",",$inroomf[$x]);
     
     for ($p = 0; $p < count($gf); $p++) {
     ?>
     
                            <li class = "my-2"><?php echo $gf[$p];?></li>
                     
                     <?php
     
     }
                     ?>
                        </ul>
                        </div>
                        
                        
                         <?php
                         }
                          if($kitchenf[$x]!=''){
         ?>
                            <div class='col-sm'>
                                <label>Kitchen:</label>
                        <ul class = "small text-black-50">
     
     <?php
   
     $gf=explode(",",$kitchenf[$x]);
     
     for ($p = 0; $p < count($gf); $p++) {
     ?>
     
                            <li class = "my-2"><?php echo $gf[$p];?></li>
                     
                     <?php
     
     }
                     ?>
                        </ul>
                        </div>
                         
                         <?php
                         }
                          if($privatebathroomf[$x]!=''){
                         ?>
                         
                         
                         
                          <div class='col-sm'>
                                <label>Private Bathroom:</label>
                        <ul class = "small text-black-50">
     
     <?php
   
     $gf=explode(",",$privatebathroomf[$x]);
     
     for ($p = 0; $p < count($gf); $p++) {
     ?>
     
                            <li class = "my-2"><?php echo $gf[$p];?></li>
                     
                     <?php
     
     }
                     ?>
                        </ul>
                        </div>
                         
                         <?php
                         }
                     if($discountedf[$x]!=''){      
                         ?>
                         
                        <div class='col-sm'>
                                <label>Discounts:</label>
                        <ul class = "small text-black-50">
     
     <?php
   
     $gf=explode(",",$discountedf[$x]);
     
     for ($p = 0; $p < count($gf); $p++) {
     ?>
     
                            <li class = "my-2"><?php echo $gf[$p];?></li>
                     
                     <?php
     
     }
                     ?>
                        </ul>
                        </div>
                           <?php
                         }
                     if($complimentaryf[$x]!=''){      
                         ?>
                         
                         
                          
                        <div class='col-sm'>
                                <label>Complimentary:</label>
                        <ul class = "small text-black-50">
     
     <?php
   
     $gf=explode(",",$complimentaryf[$x]);
     
     for ($p = 0; $p < count($gf); $p++) {
     ?>
     
                            <li class = "my-2"><?php echo $gf[$p];?></li>
                     
                     <?php
     
     }
                     ?>
                        </ul>
                        </div>
                           <?php
                         }
                         ?>
                         
                         
                         
                         
                         
                         
                         
                         
                         </div></div>
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of room ams modal -->

                
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
    <!-- terms and condition modal -->
    <div class="modal fade termsModal<?php echo $x;?>" tabindex="-1" aria-labelledby="termsModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p class = "small text-black-50 lh-base"><?php echo $roomscancellation[$x];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of terms and condition modal -->

                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!--rooms modal-->
                    
                    
                    
    <div class="modal fade detailsModalR<?php echo $x;?> modal-dialog-scrollable" tabindex="-1" aria-labelledby="detailsModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="detailsModal"><?php echo $ghotel;?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                   
                        <div class="item_main_title">
                            <h2><?php echo $roomsnames[$x];?></h2>
                          
                        </div>
                 
                       
                         <div class="item_details">
                        <div class="room_galary">
                            
                           
                           <?php
                           $rms=$roomsnames[$x];
                           
                           $sqlimgs ="SELECT * FROM hotelsInventoryImagesdatabase WHERE hotel='$hn' && country='$cn' && location='$ln' && type='$rms'";
	
		$resultimgs = $conn->query($sqlimgs);

if ($resultimgs->num_rows > 0) {
  // output data of each row
  while($rowimgs = $resultimgs->fetch_assoc()) {
   
    ?>
     <a style='min-width:60px;' href="pco/Room Uploads/<?php echo $ghotel;?>/<?php echo $rms;?>/<?php echo $rowimgs['image'];?>" data-lightbox="room_gal_1">
                            <img src="pco/Room Uploads/<?php echo $ghotel;?>/<?php echo $rms;?>/<?php echo $rowimgs['image'];?>" alt="">
                        </a>
    <?php
    
     
     
  }
}

                           
                           
                   ?>        
                        
                           
                            
                        </div>
                      
                     </div>
                        
                        <div>
                            <h6><?php echo $roomssingledescription[$x];?></h6>
                          
                        
                          
                        </div>
                        
                        
                        <br/><br/>
                        
                        
                
                        
                        
                   
                </div>
            </div>
        </div>
    </div>
                    
                    
                    
                    
                    
                    <!--rooms modal end-->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <?php
                    }
                    
                    
                    
                    
                 
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    
                    
                    <hr/>
                    <div class="total_costing">
                       <div>
                           <!-- <h2>Total</h2>
                            <span class="room_meta_title">(inclusive of all taxes)</span>-->
                        </div>
                        <div class="ttal_amt">
                         <!-- <h2>AED&nbsp;</h2><h2 id='ttl'>0</h2><input class='form-control' style='display:none;' id='ttl2'><input class='form-control' style='display:none;'  name='totalpaisay' id='totalpaisay'>-->
                         <br/>
                            <input type='submit' name='submit' class="theme_btn btn active btn-outline-primary" value='Continue'>
                        </div>
                    </div>
                </div>
                
                </form>
            </div>
            
            
            
            <?php
                     }
                     else{
                        echo 'No Room Available for This Much Occupancy in this Hotel';
                     }
                     ?>
            
            
            
            
             <!-- hotel details modal -->
    <div class="modal fade detailsModal modal-dialog-scrollable" tabindex="-1" aria-labelledby="detailsModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="detailsModal"><?php echo $ghotel;?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="item_details">
                        <div class="item_main_title">
                            <h2><?php echo $ghotel;?></h2>
                          
                        <!--    <a href=""><i class="bi bi-heart"></i></a>-->
                            
                        </div>
                        <div class="reviews">
                            <ul class="rating">
                                 <?php 
                           for ($x = 0; $x < $gsendcategory; $x++) {
                          
                          ?>
                                <li><i class="bi bi-star-fill"></i></li>
                               <?php
                           }
                           ?>
                            </ul>
                            <span><?php echo $gsendcategory;?> Star Hotel</span>
                        </div>
                        <span class="item_address"><i class="bi bi-geo-alt me-1"></i><?php echo $gcity;?>, <?php echo $gcountry;?></span>
                        
                        <div class="room_galary">
                            
                            
                              <?php 
                        for ($x = 0; $x <count($images); $x++) {
                        ?>
                        
                        
                        <a href="pco/Hotel Images/<?php echo $ghotel;?>/<?php echo $images[$x];?>" data-lightbox="room_gal_1">
                            <img src="pco/Hotel Images/<?php echo $ghotel;?>/<?php echo $images[$x];?>" alt="">
                        </a>
                        <?php
                        }
                        ?>
                            
                           
                            
                        </div>
                      
                       <!--
                       <div class="customer_review">
                            <span class="room_meta_title">Customer Reviews</span>
                            <ul class="c_reviewlist">
                                <li><i class="bi bi-heart-fill"></i></li>
                                <li><i class="bi bi-heart-fill"></i></li>
                                <li><i class="bi bi-heart-fill"></i></li>
                                <li><i class="bi bi-heart-fill"></i></li>
                                <li><i class="bi bi-heart"></i></li>
                            </ul>
                        </div>
                        -->
                        
                        
                        
                        <div>
                            <h6>About Hotel:</h6>
                          
                          <?php echo $des;?>
                          
                        </div>
                        <br/><br/>
                       
                       
                       
                        <div class='container'><div class='row'>
                            
                            
                            <h5 align=center>Facilities</h5><br/><br/>
                            
                             <?php
     if($generalf!=''){
         ?>
                            <div class='col-sm'>
                                <label>General:</label>
                        <ul class = "small text-black-50">
     
     <?php
   
     $gf=explode(",",$generalf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                     
                     <?php
     
     }
                     ?>
                        </ul>
                        </div>
                        
                        
                         <?php
                         }
                         
     if($mainf!=''){
         ?>
                         <div class='col-sm'>
                                <label>Main:</label>
                        <ul class = "small text-black-50">
                            
                            <?php
   
     $gf=explode(",",$mainf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                     
                     <?php
     }
    
                     ?>
                           
                            
                        </ul>
                        </div>
                         <?php
                         }
                         
     if($frontf!=''){
         ?>
                          <div class='col-sm'>
                                <label>Front Desk:</label>
                        <ul class = "small text-black-50">
                              <?php
   
     $gf=explode(",",$frontf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                            
                        </ul>
                        </div>
                        
                                            <?php
                         }
                         
     if($familyf!=''){
         ?>
               
                        
                          <div class='col-sm'>
                                <label>Family:</label>
                        <ul class = "small text-black-50">
                            
                           <?php
   
     $gf=explode(",",$familyf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                           
                            
                        </ul>
                        </div>
                        
                        
                                            <?php
                         }
                         
     if($sportsf!=''){
         ?>
               
                        
                          <div class='col-sm'>
                                <label>Sports:</label>
                        <ul class = "small text-black-50">
                            <?php
   
     $gf=explode(",",$sportsf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                           
                            
                        </ul>
                        </div>
                        
                         <?php
                         }
                         
     if($cleaningf!=''){
         ?>
                        
                        
                          <div class='col-sm'>
                                <label>Cleaning:</label>
                        <ul class = "small text-black-50">
                            
                            <?php
   
     $gf=explode(",",$cleaningf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                           
                            
                        </ul>
                        </div>
                        
                          <?php
                         }
                         
     if($foodf!=''){
         ?>
                        
                          
                          <div class='col-sm'>
                                <label>Food:</label>
                        <ul class = "small text-black-50">
                            
                           <?php
   
     $gf=explode(",",$foodf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                           
                            
                        </ul>
                        </div>
                        
                         <?php
                         }
                         
     if($businessf!=''){
         ?>
                        
                          
                          <div class='col-sm'>
                                <label>Business:</label>
                        <ul class = "small text-black-50">
                            
                             
                           <?php
   
     $gf=explode(",",$businessf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                            
                        </ul>
                        </div>
                        
                          <?php
                         }
                         
     if($internetf!=''){
         ?>
                        
                        
                          
                          <div class='col-sm'>
                                <label>Internet:</label>
                        <ul class = "small text-black-50">
                            
                           <?php
   
     $gf=explode(",",$internetf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                            
                        </ul>
                        </div>
                        
                          <?php
                         }
                         
     if($parkingf!=''){
         ?>
                          
                          <div class='col-sm'>
                                <label>Parking:</label>
                        <ul class = "small text-black-50">
                            
                            <?php
   
     $gf=explode(",",$parkingf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                            
                        </ul>
                        </div>
                        
                        
                         <?php
                         }
                         
     if($uniquef!=''){
         ?>
                        
                          
                          <div class='col-sm'>
                                <label>Unique:</label>
                        <ul class = "small text-black-50">
                            
                             <?php
   
     $gf=explode(",",$uniquef);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                            
                        </ul>
                        </div>
                        
                         
                         <?php
                         }
                         
     if($safetyf!=''){
         ?>
                        
                          
                          <div class='col-sm'>
                                <label>Safety:</label>
                        <ul class = "small text-black-50">
                            
                         <?php
   
     $gf=explode(",",$safetyf);
     
     for ($x = 0; $x < count($gf); $x++) {
     ?>
     
                           
                            <li class = "my-2"><?php echo $gf[$x];?></li>
                              <?php
     }
    
                     ?>  
                            
                        </ul>
                        </div>
                        
                        <?php
     }
     ?>
                        
                        
                        
                        </div></div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of hotel details modal -->



















    <!-- amenities modal -->
    <div class="modal fade amenitiesModal" tabindex="-1" aria-labelledby="amenitiesModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="amenitiesModal">Amenities</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p class = "small text-black-50 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ut! Deleniti, sed. Exercitationem, a hic dolorum quod deleniti iusto delectus sint voluptate, tempora repellat animi aspernatur accusamus, laborum accusantium? Aspernatur.</p>
                    </div>
                    <ul class = "small">
                        <li class = "my-2 text-black-75">24-Hour room service</li>
                        <li class = "my-2 text-black-75">Free wireless internet access</li>
                        <li class = "my-2 text-black-75">Complimentary use of hotel bicycle</li>
                        <li class = "my-2 text-black-75">Laundry service</li>
                        <li class = "my-2 text-black-75">Tour & excursions</li>
                        <li class = "my-2 text-black-75">24 Hour concierge</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end of amenities modal -->

            
            
            
            
            
            
            
            
            
           
           
           
           
           
           
           <!--hotel item end--> 
            
            
            
            
            
      <!--      
            <div class="pagination_wrap">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="hotelsearch.html" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="hotelsearch.html">1</a></li>
                      <li class="page-item"><a class="page-link" href="hotelsearch2.html">2</a></li>
                      <li class="page-item"><a class="page-link" href="hotelsearch3.html">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="hotelsearch2.html" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
            -->
            
            
            
            
            
            
        </div>
    </section>
   
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




 <!-- terms and condition modal -->
    <div class="modal fade alertModal" tabindex="-1" aria-labelledby="alertModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">Select Hotel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                      <h2>Please Select Hotel</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of terms and condition modal -->













    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
  
  
  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    
    
    
    
    
    
    <script>
    
    function checkadultoccupancy($this){
        
           var idd = $this.id;
       
       
         
        var total=0;
        
        
        var sd = document.getElementById("sdate").value;
        var ed = document.getElementById("edate").value;
        
        var adult = document.getElementsByClassName("adult");
        var children = document.getElementsByClassName("children");
        
        var rtp = document.getElementsByClassName("rtp");
        var romsy = document.getElementsByClassName("roms");
        
        
        var adultsallowed = document.getElementsByClassName("adultsallowed");
        var childrenallowed = document.getElementsByClassName("childrenallowed");
        var extrabedsallowed = document.getElementsByClassName("extrabedsallowed");
         
       for(var i = 0; i < adult.length; i++) {
           
           var max= parseInt(adultsallowed[i].value)+parseInt(childrenallowed[i].value)+parseInt(extrabedsallowed[i].value);
           
           
           if(parseInt(adult[i].value)+parseInt(children[i].value)>max){
              
            
                   if(idd=='ad'){
                   adult[i].value=parseInt(adult[i].value)-1;
                   Swal.fire('Max Occupancy Reached for this Room');
                    
                   }
                   else if(idd=='ch'){
                     children[i].value=parseInt(children[i].value)-1;
                   Swal.fire('Max Occupancy Reached for this Room');   
                   }
                   
               }
               
               
           
           
           
           
            
           
       }
     
        
        
      
        
    }
    
    
    
    
    
    
    
    
    
    function totall(){
        
      
        
    }
    
    
    
    
    
     var checktotal=0;
    
    
    setInterval(function () {
      
        
        
        
        
      
        var total=0;
        
        
        var sd = document.getElementById("sdate").value;
        var ed = document.getElementById("edate").value;
        
        var adult = document.getElementsByClassName("adult");
        var children = document.getElementsByClassName("children");
        
        var rtp = document.getElementsByClassName("rtp");
        var romsy = document.getElementsByClassName("roms");
        
        
        var adultsallowed = document.getElementsByClassName("adultsallowed");
        var childrenallowed = document.getElementsByClassName("childrenallowed");
        var extrabedsallowed = document.getElementsByClassName("extrabedsallowed");
         
       for(var i = 0; i < adult.length; i++) {
           
          // var max= parseInt(adultsallowed[i].value)+parseInt(childrenallowed[i].value)+parseInt(extrabedsallowed[i].value);
           
           
          // if(parseInt(adult[i].value)+parseInt(children[i].value)>max){
               
            //   if(adult[i].value=='0' || adult[i].value==''){
                   
                 //  children[i].value=parseInt(children[i].value)-1;
                 //  Swal.fire('Max Occupancy Reached for this Room');
              // }
             //  else{
                 //  adult[i].value=parseInt(adult[i].value)-1;
                 //  Swal.fire('Max Occupancy Reached for this Room');
               //}
               
               
          // }
           
           
           
           
          var adultz=adult[i].value;
          var childrenz=children[i].value;
          var romsn=romsy[i].value;
          var rtpp=rtp[i].value;
          
         
          
           
           var ttl2 = document.getElementById("ttl2");
          
            $.ajax({
              
			  type:'POST',
              url:'getpricing.php',
              data:{'adult':adultz,'children':childrenz,'sdate':sd,'edate':ed,'roomtype':rtpp,'rooms':romsn},
			  
              success:function(result){
                  
                  total=total+parseInt(result);
                
				ttl2.value=total;
                  
              }
			  
          }); 
          
            
           
       }
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    var roomsrecieved = document.getElementById("roomsrecieved").value;
    
        var roms = document.getElementsByClassName("roms");
        var tot=0;
       var bb=0;
for(var i = 0; i < roms.length; i++) {
    
    
    if(roms[i].value.includes("-"))
    {
      roms[i].value=0;  
    }
    
    
    
    
   tot=tot+parseInt(roms[i].value);
 
   if(tot>parseInt(roomsrecieved)){
      roms[i].value=parseInt(roms[i].value)-1; 
      tot=tot-1;
        
        bb=i;
      
    const { value: text }= Swal.fire({
  title: 'Rooms Exceeded!',
  input: 'number',
  inputPlaceholder:'Number of Rooms',
  inputLabel:'Want to Add more Rooms?',
  
  placeholder:'Number of Rooms',
  inputAttributes: {
    autocapitalize: 'on'
  },
  showCancelButton: true,
  confirmButtonText: 'Add',
  showLoaderOnConfirm: true,
 
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.isConfirmed) {
   
   if(result.value==''){
       result.value=0;
   }
  
   var ava = document.getElementsByClassName("ava");
       
var az=parseInt(result.value)+parseInt(roms[bb].value);

    if(az>parseInt(ava[bb].value))
    {
     Swal.fire(az+' Rooms are not Available');
    }
    else{
    
   var roomsrecieved2 = document.getElementById("roomsrecieved"); 
   roomsrecieved2.value=parseInt(roomsrecieved2.value)+parseInt(result.value);
  Swal.fire('Total Rooms Allowed: '+roomsrecieved2.value);
}
    
    
    
    
    
    
  }

})
      
      
      
      
      
      
      
   }
   
}
 

    var totalpaisay = document.getElementById("totalpaisay");
	var ttl = document.getElementById("ttl");
    var ttll = document.getElementById("ttl2").value;
    
  if(checktotal!=ttll){
                  checktotal=ttll;
				ttl.innerHTML=ttll;
				totalpaisay.value=ttll;
  }









}, 600);

    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <script>
    
    
        document.getElementById("donotclick").addEventListener("click", function(event){
  event.preventDefault()
});


    function myFunction() {
        var ht= document.getElementById("hotel").value;
        
        if(ht!='')
        {
 document.getElementById("clickmodify").click();
        }
 
 else{
    document.getElementById("popalert").click(); 
 }
 
 
}
    
    
    
    
    
    
    
    
    
    
    
    $("[type='number']").keypress(function (evt) {
    evt.preventDefault();
});




$("#city").on('change', function() {
   
    var country=$("#contry").val();
    var city=$("#city").val();
	
	
	  $.ajax({
              
			  type:'POST',
              url:'getmodifiedhotels.php',
              data:{'city':city,'country':country},
			  
              success:function(result){
                  
				
				$("#hotel").html(result);
				
				const st = document.getElementById('star');
				st.innerHTML='';
				
				for (let i = 5; i > 0; i--) {
                
                  	       
                  	 
                  	 
                  	 st.innerHTML=st.innerHTML+'<option>'+i+'</option>';
                  	 
                  	 
                  	 
                  	 
                  	    
                }
                
				  
                
                 
              }
			  
          }); 
          
          
		
	
})










$("#star").on('change', function() {
   
    var country=$("#contry").val();
    var city=$("#city").val();
    var star=$("#star").val();
	
	
	  $.ajax({
              
			  type:'POST',
              url:'getmodifiedhotelsbystar.php',
              data:{'city':city,'country':country,'star':star},
			  
              success:function(result){
                  
				
				$("#hotel").html(result);
				  
                
                 
              }
			  
          }); 
          
          
		
	
})

















$("#hotel").on('change', function() {
   
    var country=$("#contry").val();
    var city=$("#city").val();
    var hotel=$("#hotel").val();
	
	
	  $.ajax({
              
			  type:'POST',
              url:'getmodifiedstar.php',
              data:{'city':city,'country':country,'hotel':hotel},
			  
              success:function(result){
                  $("#star").html('');
                 
                 var sel='<option>'+result+'</option>';
                
               if (!$.trim(result)){
                  
                }
                else{
                   	$("#star").html(sel); 
                }
                
                
                for (let i = 5; i > 0; i--) {
                
                   if(result!=i){
                  	       
                  	 const st = document.getElementById('star');
                  	 
                  	 st.innerHTML=st.innerHTML+'<option>'+i+'</option>';
                  	 
                  	 
                  	 
                  	 
                  	    }	
                  
                  	    
                }
                
                 
              }
			  
          }); 
          
          
		
	
})













</script>









    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
    <script src="js/main.js"></script>
</div>
</body>
</html>