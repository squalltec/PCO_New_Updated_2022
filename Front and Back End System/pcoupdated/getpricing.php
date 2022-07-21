<?php

session_start();


include 'db_connection.php';
$numberofdaysforprice=array();
$pricefordays=array();

$totalprice=0;

$country=$_SESSION['country'];
$city=$_SESSION['city'];
$hotel=$_SESSION['hotel'];

$roomtype=$_POST['roomtype'];

$adult=$_POST['adult'];

$children=$_POST['children'];

$sdate=$_POST['sdate'];

$edate=$_POST['edate'];

$rooms='1';





//$rooms='1';

//$roomtype='Deluxe';

//$adult='1';

//$children='1';

//$sdate='2022-10-20';

//$edate='2022-10-30';




 $sql3 = "SELECT * FROM basiccharges WHERE hotel='$hotel' && country='$country' && location='$city'";
 
 
 $result3=$conn->query($sql3);
 

 
while($row3=mysqli_fetch_assoc($result3)){
    $extrabedcost=$row3['extrabed'];
}


















 $sql2 = "SELECT * FROM hotelsInventorydatabase WHERE hotel='$hotel' && country='$country' && city='$city' && type='$roomtype'";
 
 
 $result2=$conn->query($sql2);
 

 
while($row2=mysqli_fetch_assoc($result2)){
    
$sa=$row2['singleadultoccupancy'];
$sc=$row2['singlechildoccupancy'];
$seb=$row2['singleextrabedsallowed'];

$da=$row2['doubleadultoccupancy'];
$dc=$row2['doublechildoccupancy'];
$deb=$row2['doubleextrabedsallowed'];



}




$max=intval($adult)+intval($children);

$singlemax=intval($sa)+intval($sc);

$doublemax=intval($da)+intval($dc);

$singlemaxwithextrabed=intval($singlemax)+intval($seb);

$doublemaxwithextrabed=intval($doublemax)+intval($deb);


				
$startTimeStamp = strtotime($sdate);
			$endTimeStamp = strtotime($edate);
			
			
			
$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);

$_SESSION['totaldays']=$numberDays;


			















$dates=array();

$datee=array();

$pr=array();



$prtoy='';






 $sqllas = "SELECT * FROM setprices WHERE hotel='$hotel' && country='$country' && location='$city' && name='$roomtype' && (class='TOY' || class='')";
 
 
 $result=$conn->query($sqllas);
 

 
while($row=mysqli_fetch_assoc($result)){
    
    
    if($row['class']==''){
    
     $period = new DatePeriod(new DateTime($row['sdate']), new DateInterval('P1D'), new DateTime($row['edate']));
     
     $period2 = new DatePeriod(new DateTime($sdate), new DateInterval('P1D'), new DateTime($edate));
     
     foreach ($period as $date) {
        $dt=$date->format("Y-m-d");
        
   
    foreach ($period2 as $date2) {
      $dt2=$date2->format("Y-m-d");
      
       if($dt2==$dt)
   {
       array_push($dates,$dt);
       array_push($datee,$row['edate']);
       
       if($max<=$singlemaxwithextrabed){
           
           if($max>$singlemax)
           {
               
           $pprr= intval($row['sellprice'])+intval($extrabedcost);
           
           array_push($pr,$pprr);   
               
           }
           else{
       array_push($pr,$row['sellprice']);
           }
       
       }
    else if($max<=$doublemaxwithextrabed){
        
        if($max>$doublemax)
           {
           $pprr= intval($row['dblsellprice'])+intval($extrabedcost);
           array_push($pr,$pprr);   
               
           }
        else{
       array_push($pr,$row['dblsellprice']);
        }
       }
       
   }
      
      
      
      
      
      
        
    }
    
   
  
   
  
   
     }
     
    }
     
     else{
        if($row['class']=='TOY') 
         {
             
     if($max<=$singlemaxwithextrabed){
         
         if($max>$singlemax)
           {
           $pprr= intval($row['sellprice'])+intval($extrabedcost);
          $prtoy=$pprr;   
               
           }
         else{
       $prtoy=$row['sellprice'];
         }
       }
    else if($max<=$doublemaxwithextrabed){
         if($max>$doublemax)
           {
           $pprr= intval($row['dblsellprice'])+intval($extrabedcost);
          $prtoy=$pprr;   
               
           }
         else{
        $prtoy=$row['dblsellprice'];
         }
       }
        
       
             
         }
             
         }
         
         
         
     
     
     
    
    
      
}

for($i=0; $i<count($dates); $i++)
{
   
   			
$startTimeStamp2 = strtotime($dates[$i]);
			$endTimeStamp2 = strtotime($datee[$i]);
			
			
			
$timeDiff2 = abs($endTimeStamp2 - $startTimeStamp2);

$numberDays2 = $timeDiff2/86400;  // 86400 seconds in one day

// and you might want to convert to integer

$numberDays2 = intval($numberDays2);

array_push($numberofdaysforprice,$numberDays2);

array_push($pricefordays,$pr[$i]);			
    
    
}

$left=intval($numberDays)-intval($numberofdaysforprice[0]);
//echo $left;
$toyprice=$left*intval($prtoy);
//echo $toyprice;

$total=intval($numberofdaysforprice[0])*intval($pricefordays[0]);


$totalprice=$total+$toyprice;
//echo $total;

$totalprice=intval($rooms)* $totalprice;
echo $totalprice;

?>