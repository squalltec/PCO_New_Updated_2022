<?php
require_once('db_connection.php');


include('header.php');



if (isset($_POST['submit'])) {
	
$name=$_POST['name'];
$desc=$_POST['desc'];
$title=$_POST['title'];

$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$region=$_POST['region'];	




if(!empty($_FILES['myfile']['name']) && !empty($_FILES['myfile2']['name']) ){
		
		mkdir("eventbanners/".$name);	
			mkdir("eventhighlights/".$name);
	
		$filename = $_FILES['myfile']['name'];
	  $destination = 'eventbanners/'. $name .'/'. $filename;
	  $extension = pathinfo($filename, PATHINFO_EXTENSION);
	  $file = $_FILES['myfile']['tmp_name'];
	  
	  
	  
	  	$filename2 = $_FILES['myfile2']['name'];
	  $destination2 = 'eventhighlights/'. $name .'/'. $filename2;
	  $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);
	  $file2 = $_FILES['myfile2']['tmp_name'];


 // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination) && move_uploaded_file($file2, $destination2)) {
            
            
            
            
            
            
            
            
			
$sql ="INSERT INTO newevents (name, region,sdate,edate,banner,highimg,descr,title) VALUES ('$name', '$region', '$sdate', '$edate', '$filename', '$filename2', '$desc', '$title')";

 $result = $conn->query($sql);


if ($result === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
}









		
}

 
 ?>
 
 




<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--start content-->
          <main class="page-content">
    <form method="POST" enctype="multipart/form-data" action="#">


<div class="form-group">


<h2 align='center'>Add Event</h2>

</div>
<div>
<div class="form-group">
    <label>Event Name</label>
    <input type="text" class="form-control" name='name' placeholder="Event Name">
  </div>
  
  
  
  <div class="form-group">
    <label>Banner</label>
    <input required accept="image/*" name="myfile" type="file" id="files" class="form-control">
  </div>
  
   <div class="form-group">
    <label>Hightlight Image</label>
    <input required accept="image/*" name="myfile2" type="file" id="files2" class="form-control">
  </div>
  
  <div class="form-group">
    <label>Highlight Title</label>
    <input type="text" class="form-control" name='title' placeholder="Title">
  </div>
  
  
  <div class="form-group">
    <label>Event Short Description</label>
    <textarea type="text" cols='30' rows='5' class="form-control" name='desc' placeholder="Short Description"></textarea>
  </div>
  
  
  
  
  
  
  <div class="form-group">
    <label>Region</label>
	
    <select class="form-control" name='region'>
	<option>CIS</option>
	<option>Asia</option>
	<option>Western Europe East</option>
	<option>GCC</option>
	<option>Rest of World</option>
	</select>
  </div>
  
  
  <div class="form-group">
    <label>Starting Date</label>
	
   <input required class='form-control' name='sdate' type='date'>
  </div>
  
   <div class="form-group">
    <label>Ending Date</label>
	
   <input required class='form-control' name='edate' type='date'>
  </div>
   
  
   <div class="form-group">
 <button style="float:right;"type="submit" name='submit'class="btn btn-primary">Submit</button>
  </div>
  
  </div>
</form>


</main>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

