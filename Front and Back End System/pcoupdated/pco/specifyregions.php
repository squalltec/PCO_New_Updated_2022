<?php
require_once('db_connection.php');


include('header.php');



if (isset($_POST['submit'])) {
	
	
	$country=array();
$region=$_POST['region'];	
$getcountry=$_POST['country'];	


foreach ($getcountry as $value) {
	
	array_push($country,$value);
 
  
}




$sqlTpl = "INSERT INTO regionspecified (region, country) VALUES (%s)";
		   
$sqlArr = array();

foreach( $country as $k => $v )

  $sqlArr[] = '"'.$region.'","'.$country[$k].'"';
$sqlStr = sprintf( $sqlTpl ,
            implode( ' ) , ( ' , $sqlArr ) );





 $result = $conn->query($sqlStr);


if ($result === TRUE) {
  echo "New record created successfully";
  
} else {
  echo "Error: " . $sqlTpl . "<br>" . $conn->error;
}



	















		
}

 
 ?>
 
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
 



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--start content-->
          <main class="page-content">
<form action="#" method="post" enctype="multipart/form-data">


<div class="form-group">


<h2 align='center'>Add Countries to Region</h2>

</div>
<div>

  <div class="form-group">
    <label>Region</label>
	
    <select class="form-control" name='region'>
	<option>CIS</option>
	<option>Asia</option>
	<option>Western Europe East</option>
	<option>GCC</option>
	<option>Rest of the World</option>
	</select>
  </div>
  
  
  
 
  <p id='myForm'>
  </p>
  
   <button type="button" id='a' style="background-color:#009CA4;" class="form-control">Add New Country</button>
   
   
  
   <div class="form-group">
 <button style="float:right;"type="submit" name='submit'class="btn btn-primary">Submit</button>
  </div>
  
  </div>
</form>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>	
 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	
<script>
 var idc=0;
 
 
  
$("#a").click(function() {
   idc=idc+1;
   
   
	
var y = document.createElement("SELECT");
y.setAttribute("class", "form-control");
y.setAttribute("Name", "country[]");
y.setAttribute("id", "country"+idc);


document.getElementById("myForm").appendChild(y);

	$.ajax({
		
	
   url : 'getcountries.php', // your php file
   type : 'GET', // type of the HTTP request
   success : function(result){
	  
   $('#country'+idc).html(result);
	   
	  
			 
   }
   
});

	  
   
});




</script>


</main>