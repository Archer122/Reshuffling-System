<?php include('db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ERSV1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/customClass.css">
</head>
<body style="overflow-x: hidden; font-family: 'Montserrat', sans-serif;">
<!-- Results Navigation -->
<div class="container-fuild">
  <nav class=" fixed-top" style="background-color: #460808;">
  <div class="container" style="display: flex; padding: 10px;">
  <img src="img/logo.png" alt="Logo" style="height: 50px; width: 50px">
    <h5 id="" 
      style="text-transform: uppercase; font-size: 16px;
       margin-left: 12px; color: white;">
      kaaf examination <br> reshuffling system
    </h5>
    
    <button type="button" style="background-color:#E49C0F;
       margin-left: auto; border-radius: 10px;  color: white; text-transform: uppercase; font-size: 14px;"
      class="btn form-group" onClick="window.print()">
        <img src="img/printer.png" alt="print_icon" srcset="" style="width: 20px; height: 20px; color: white;">
        Print
    </button>
  </div>
</nav>
</div>

<!-- <button class="btn btn-primary" onClick="window.print()">Print</button> -->
<br><br>
<br><br>
<div class="container">
 
  <div class="col-md-12 responsive" style='border:0px solid lightgrey; text-align: center; color: #840000'>
      
        <?PHP 
if(isset($_POST['submit'])){
          $l1=$_POST['l1'];
          $l2=$_POST['l2'];
          $l3=$_POST['l3'];
          $l4=$_POST['l4'];
          $cs=$_POST['cs'];
          $ct=$_POST['ct'];
          $me= $_POST['me']; 
          $cs= $_POST['cs']; 
          $ct= $_POST['ct']; 
          $ee= $_POST['ee']; 
          $ge= $_POST['ge']; 
          $ce= $_POST['ce']; 
          $mk= $_POST['mk']; 
          $ac= $_POST['ac']; 
          $bf= $_POST['bf']; 
          $hr= $_POST['hr']; 
          $ml= $_POST['ml']; 
          $nu= $_POST['nu']; 
          $mf= $_POST['mf']; 
          $ch= $_POST['ch']; 
          $pa= $_POST['pa']; 
          $phn= $_POST['phn'];
          $lw= $_POST['lw4'];
          $lw= $_POST['lw3'];
          $rows=$_POST['rows'];

   
 
   $sqls = "SELECT * FROM students WHERE  level IN ('$l1','$l2','$l3','$l4' ) AND 
 programme IN ('$me','$cs','$ct','$ee','$ge','$ce','$mk','$ac','$bf','$hr','$ml','$nu','$mf','$ch','$pa','$phn','$lw','$lw')
  ORDER BY rand()";

 $results =mysqli_query($con,$sqls);
  $row= mysqli_num_rows($results);
  if($row){

  }else{
        //echo "BAD".mysqli_error();
  }
 

  $col=$row/$rows;


 ?>

  <!-- main content - Results Aspect -->
  <div class="container" >
    
  <!-- <h5 style="font-weight:bold">CLASS NAME: </h5> -->
  <!-- <h5 style="font-weight:bold">CLASS SIZE : ROWS[<?PHP echo $rows?>] -- BY -- COLUMN[<?PHP echo ceil($col)?>] </h5> -->
  <h5 style="font-size: 15px; font-weight:bold; ">LEVEL     : <?PHP echo  $l1.' '.$l2.' '.$l3.' '.$l4 ?></h5>
  <h5 style="font-size: 15px; font-weight:bold;">PROGRAMME  : <?PHP echo  $ge.' '.$ct.' '.$me.' '.$cs.' '.$ct.' '.$ee.' '.$ge.' '.$ce.' '.$mk.' '.$ac.' '.$bf.' '.$hr.' '.$ml.' '.$nu.' '.$mf.' '.$ch.' '.$pa.' '.$phn.' '.$lw.' '.$lw ;     ?>
 </h5>
  <h5 style="font-size: 15px; font-weight:bold;">TOTAL NUMBER OF STUDENTS : <?PHP echo $row?></h5>
      <!-- Main Seating Section -->
  <div class="col-md-12 mt-4  bg-white md:block grid grid-cols-4 responsive" >
<!--         
mb-4 border rounded -->
  
  
<?php 
 
  $sql = "SELECT * FROM students WHERE  level IN ('$l1','$l2','$l3','$l4' ) AND 
 programme IN ('$me','$cs','$ct','$ee','$ge','$ce','$mk','$ac','$bf','$hr','$ml','$nu','$mf','$ch','$pa','$phn','$lw','$lw')
  ORDER BY rand()";
 
  $result =mysqli_query($con,$sql);
  $i=0;
  $dyt ='<table border="0">';
  while ($row=mysqli_fetch_array($result)) {
      $id= $row['id'];

      
      $level= $row['level'];
      $index= $row['indexNo'];
      $dept= $row['dept'];



      //$index=shuffle($index);
      
      if($i % $rows == 0){
 
     /* $dyt .='<tr><td style="color:#FF6D28"><img class="h-8 mt-2 mx-4" style="color:red" src="./img/seat.png" width="50" height="50"></BR><b>'  .$index. '</b></td>';
      }else{
      $dyt .='<td style="color:#FF6D28"><img class="h-8 mt-2 mx-4" src="./img/seat.png" width="50" height="50"><b></BR>' .$index. '</b></td>';
      }*/


      $dyt .='<tr><td style="color:#FF6D28;padding:20px;">
        <center style="border:1px solid #BEBEBE;border-radius:3px"> 
          <b style="font-size: 14px;"> LEVEL '.$level.' </b><br>
          <img class="h-8 mt-2 mx-4 mb-2" style="color:#FF6D28" src="./img/seat.png" width="30" height="30">
        </center><b>'  .$index. '</b> </td>';
      
      }else{
      $dyt .='<td style="color:#FF6D28;padding:10px">
        <center style="border:1px solid #BEBEBE;border-radius:3px"> 
          <b style="font-size: 14px;"> LEVEL '.$level.' </b>
          <br><img class="h-8 mt-2 mx-4 mb-2" src="./img/seat.png" width="30" height="30">
        </center>
        <center>
          <b style="font-size: 14px;">' .$index. '</b><br>
        </center>
        </td>';
      }

      $i++;
  } 
    $dyt .='</tr></table>';

    echo $dyt;
 
   ?>
 
  <?php } ?>


      </div>
      
      
  </div>

</div>
 




</body>
</html>