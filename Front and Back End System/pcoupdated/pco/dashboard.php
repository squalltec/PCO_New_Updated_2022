<?php

require_once('db_connection.php');

include('header.php');

				$count=0;  
$sqlla ="SELECT * FROM hotels";
		$resultta = $conn->query($sqlla);
		
		
if ($resultta->num_rows > 0) {
  // output data of each row
  while($rowww = $resultta->fetch_assoc()) {
	  $count=$count+1;
	  
	  
}}
		
		
		


?>






       <!--start content-->
          <main class="page-content">
		  
		  
		  
		   <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
              <div class="col">
                <div class="card overflow-hidden radius-10">
                    <div class="card-body">
                     <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
                      <div class="w-50">
                        <p>Total Hotels</p>
						
                        <h4 class=""><?php echo $count;?></h4>
                      </div>
                      <div class="w-50">
                         <p class="mb-3 float-end text-success">+ 1 <i class="bi bi-arrow-up"></i></p>
                         <div id="chart1"></div>
                      </div>
                    </div>
                  </div>
                </div>
               </div>
			   </div>
		  
		  
		  
            
</main>