<?php
require_once('db_connection.php');


include('header.php');



$hotel=$_SESSION['hotel'];	
    
$country=$_SESSION['country'];	

$city=$_SESSION['city'];	





if (isset($_POST['submit'])) {
    
	 
$sdate=$_POST['sdate'];	
$edate=$_POST['edate'];	
$room=$_POST['room'];	
$number=$_POST['number'];	
$release=$_POST['release'];		
$minimumstay=$_POST['minimumstay'];	
$single=$_POST['single'];	
$double=$_POST['double'];

$class='FIT';



$n=0;
foreach ($number as $value) {
if($value=='' || $value=='0'){
    
}

else{


$sql2 = "INSERT INTO setprices (hotel,country,location,name,sellprice,dblsellprice,sdate,edate,class)
           VALUES ('$hotel','$country','$city','$room[$n]','$single[$n]','$double[$n]','$sdate','$edate','$class')";
		  
 $resulta2 = $conn->query($sql2);


if ($resulta2 === TRUE) {


	
}

$date = date('Y-m-d');
$newdate = date('Y-m-d', strtotime($date.' + '.$release[$n]. 'days'));


$sql2 = "INSERT INTO roomnumbers (hotel,country,location,name,number,releasedate,dates,sdate,edate,minimumstay,class)
           VALUES ('$hotel','$country','$city','$room[$n]','$number[$n]','$release[$n]','$newdate','$sdate','$edate','$minimumstay[$n]','$class')";
		  
 $resulta2 = $conn->query($sql2);


if ($resulta2 === TRUE) {

$_SESSION['alertme']='1';

$_SESSION['decision']='1';
	
}


}


$n=$n+1;
}









  
}
                    
 
 
 
 
 
 
 
 

if (isset($_POST['submitt'])) {
    

$room=$_POST['room'];	
$number=$_POST['number'];	
$release=$_POST['release'];		
$minimumstay=$_POST['minimumstay'];	
$single=$_POST['single'];	
$double=$_POST['double'];

$class='TOY';



$n=0;
foreach ($number as $value) {
if($value=='' || $value=='0'){
    
}

else{


$sql2 = "INSERT INTO setprices (hotel,country,location,name,sellprice,dblsellprice,class)
           VALUES ('$hotel','$country','$city','$room[$n]','$single[$n]','$double[$n]','$class')";
		  
 $resulta2 = $conn->query($sql2);


if ($resulta2 === TRUE) {


	
}

$date = date('Y-m-d');
$newdate = date('Y-m-d', strtotime($date.' + '.$release[$n]. 'days'));


$sql2 = "INSERT INTO roomnumbers (hotel,country,location,name,number,releasedate,dates,sdate,edate,minimumstay,class)
           VALUES ('$hotel','$country','$city','$room[$n]','$number[$n]','$release[$n]','$newdate','$sdate','$edate','$minimumstay[$n]','$class')";
		  
 $resulta2 = $conn->query($sql2);


if ($resulta2 === TRUE) {

$_SESSION['alertme']='1';

$_SESSION['decision']='1';
	
}


}


$n=$n+1;
}









  
}
    
 
 
 
 
 
 
 
 
 
 ?>
 
 




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--start content-->
          <main class="page-content">
              
              <h1 style='margin-top:-60px;' align='center'>Add Prices</h1>
              
              <input style='display:none;' value='<?php echo $_SESSION['decision']?>' id='decision'>
              
              
              
              
              
              
              
              

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}
</style>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Throughout the Year</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">FIT</button>
</div>

<div id="London" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  
 
         
         
         
         
<form action="#" method="post" enctype="multipart/form-data">

         <div class="container">
      <div class='row'>
        
        
         <div class="col-sm">
         <label>Pricing</label>
         
         
         
         
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

<table>
  <tr>
    <th>Room Type</th>
    <th>Number of Rooms</th>
    <th>Release Days</th>
    <th>Minimum Stay</th>
     <th>Single Price</th>
      <th>Double Price</th>
  </tr>
  
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
     
           <?php
           
           
$sqlzl ="SELECT * FROM hotelsInventorydatabase WHERE hotel='$hotel' && country='$country' && city='$city' GROUP BY type";
		$resultzt = $conn->query($sqlzl);

if ($resultzt->num_rows > 0) {
  // output data of each row
  while($rowwz = $resultzt->fetch_assoc()) {
      ?>
      
     <tr>
         <td><input type='text' readonly name='room[]' class='form-control' value='<?php echo $rowwz['type'];?>'></td>
            <td><input type='number' min='0' name='number[]' class='form-control'></td>
            <td><input type='number' min='0' name='release[]' class='form-control'></td>
            <td><input type='number' min='0' name='minimumstay[]' class='form-control'></td>
              <td><input type='number' min='0' name='single[]' class='form-control'></td>
                <td><input type='number' min='0' name='double[]' class='form-control'></td>
     </tr>
     <?php
	  
  }
}
           
           
           ?>
      </table>
       
            </div> </div> </div>  



<br/><br/>
   <div class="form-group">
 <button style="float:right;"type="submit" name='submitt'class="btn btn-danger">Submit</button>
  </div>
  
</form>

  </div>
 
  

<div id="Paris" class="tabcontent">
  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
  
  
  
  
  
  
  
         
         
         
         
<form action="#" method="post" enctype="multipart/form-data">


         
         <div class="container">
      <div class='row'>
        
        
         <div class="col-sm">
         <label>Starting Date</label>
         <input type='date' required class='form-control' id='sdate' name='sdate' value='<?php echo ''; ?>'>
         
         </div>
         
         <div class="col-sm">
         <label>Ending Date</label>
         <input type='date' required class='form-control' id='edate' name='edate' value='<?php echo ''; ?>'>
         
         </div>
         
         </div>
         </div>
      
       
      
        
        <br/></br/>
        
        
         <div class="container">
      <div class='row'>
        
        
         <div class="col-sm">
         <label>Pricing</label>
         
         
         
         
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

<table>
  <tr>
    <th>Room Type</th>
    <th>Number of Rooms</th>
    <th>Release Days</th>
    <th>Minimum Stay</th>
     <th>Single Price</th>
      <th>Double Price</th>
  </tr>
  
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
     
           <?php
           
           
$sqlzl ="SELECT * FROM hotelsInventorydatabase WHERE hotel='$hotel' && country='$country' && city='$city' GROUP BY type";
		$resultzt = $conn->query($sqlzl);

if ($resultzt->num_rows > 0) {
  // output data of each row
  while($rowwz = $resultzt->fetch_assoc()) {
      ?>
      
     <tr>
         <td><input type='text' readonly name='room[]' class='form-control' value='<?php echo $rowwz['type'];?>'></td>
            <td><input type='number' min='0' name='number[]' class='form-control'></td>
            <td><input type='number' min='0' name='release[]' class='form-control'></td>
            <td><input type='number' min='0' name='minimumstay[]' class='form-control'></td>
              <td><input type='number' min='0' name='single[]' class='form-control'></td>
                <td><input type='number' min='0' name='double[]' class='form-control'></td>
     </tr>
     <?php
	  
  }
}
           
           
           ?>
      </table>
       
            </div> </div> </div>  



<br/><br/>
   <div class="form-group">
 <button style="float:right;"type="submit" name='submit'class="btn btn-danger">Submit</button>
  </div>
  
</form>

  
  
  
  
  
  
  
  
  
  
  
</div>











<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  
              
              
              
              
              
              
              
              
              
              
              
              
              











<br/><br/><br/>




        
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
  
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  
  
  
  
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


























<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>
    var dec=document.getElementById("decision").value;
    if(dec=='1'){
       
    <?php 
    $_SESSION['decision']='0';
    ?>
    
    location.replace('add_new_prices.php');
    
    
    }
    
</script>








</main>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

