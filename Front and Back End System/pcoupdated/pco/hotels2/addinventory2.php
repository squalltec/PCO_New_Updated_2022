<?php
require_once('db_connection.php');


include('header.php');

if (isset($_POST['submit'])) {
    
    
    
    
$hotel=$_SESSION['hotel'];	
    
$country=$_SESSION['country'];	

$city=$_SESSION['city'];	

$roomtype=$_POST['facilitiess'];

$singledouble=$_POST['singledouble'];


$nn=0;
foreach ($roomtype as $value) {


$sql = "INSERT INTO hotelsInventorydatabase (hotel,country,city,type,suite)
           VALUES ('$hotel','$country','$city','$value','$singledouble[$nn]')";
		  
 $resulta = $conn->query($sql);


if ($resulta === TRUE) {


	$_SESSION['alertme']=1;

}

$nn=$nn+1;
}


$_SESSION['roomname']=$roomtype;


$_SESSION['singledouble']=$singledouble;



$_SESSION['roomnamecount']='0';
	
	
echo "<script>location.replace('addinventory3.php');</script>";



  
}
                    
 
 
 ?>
 
 




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--start content-->
          <main class="page-content">
              
              <h1  align='center'>Add Inventory</h1>
<form action="#" method="post" enctype="multipart/form-data">
     <h3  align='center'>Room Names</h3>
<style>
    .delbtn{
        font-size:10px; 
        right:30px; 
        position:absolute;
    }
</style>


        <br/>
        <div>
        <button class='delbtn' onclick="this.parentNode.parentNode.removeChild(this.parentNode);">X</button>
        <input class='form-control' required name='facilitiess[]' placeholder='Room Name' >
        <input type='checkbox' name='singledouble[]'><label>  Doesn't Have Single or Double?</label>
       
        </div>
        
        
        <div id='aacctt2'>
            
        </div>
        
        
        
 <h1 align='center'><button class='btn btn-primary' id='addact2' onclick="myFunction2()">+</button></h1> 




<br/>


<br/>
<br/>


   <div class="form-group">
 <button style="float:right;"type="submit" name='submit'class="btn btn-primary">Next</button>
  </div>
  
  </div>
</form>
<br/><br/><br/>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
      $.ajax({
              
			  type:'POST',
			  
              url:'getalertme.php',
              success:function(result){
                  
				
			    if(result.includes('exists')){
			     Swal.fire('Updated Successfully')
			    }
               
               
                 
              }
			  
          }); 
		  
</script>













<script>
document.getElementById("addact2").addEventListener("click", function(event){
  event.preventDefault()
});



var n=1;

function myFunction2() {
 var act = document.getElementById("aacctt2"); 
 
 var ybo = document.createElement("div");
 
var ycx = document.createElement("br");



var yc = document.createElement("INPUT");

yc.setAttribute("class", "form-control");
yc.setAttribute("Name", "facilitiess[]");
yc.setAttribute("type", "text");
yc.setAttribute("placeholder", "Room Name");

var ycbtn = document.createElement("BUTTON");
ycbtn.setAttribute('name','delbtn');
ycbtn.setAttribute('onclick','this.parentNode.parentNode.removeChild(this.parentNode);')
ycbtn.innerHTML='X';
ycbtn.setAttribute('class','delbtn');







var ych = document.createElement("INPUT");


ych.setAttribute("Name", "singledouble[]");
ych.setAttribute("type", "checkbox");

var ychl = document.createElement("label");


ychl.innerHTML="Doesn't Have Single or Double?";














ybo.appendChild(ycx);
ybo.appendChild(ycbtn);
ybo.appendChild(yc);

ybo.appendChild(ych);
ybo.appendChild(ychl);

act.appendChild(ybo);


 n=n+1;
 
}

</script>














</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

