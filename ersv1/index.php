<?php include('db.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>ERS - KAAF</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/customClass.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body style="overflow-x: hidden; font-family: 'Montserrat', sans-serif;">

<div class="container-fuild">
<div class="row">
  <div class="col-md-3 responsive" >

  <!-- Short Navigation -->
  <div class="nav" style="background-color: #CFBFBF;
  height:max-content; padding: 15px; display:flex">
    <img src="img/logo.png" alt="Logo" style="height: 50px; width: 50px">
    <h5 id="sch_name" 
      style="text-transform: uppercase; font-size: 16px; margin-left: 12px">
      kaaf examination <br> reshuffling system
    </h5>
  </div>
<!-- End of short Navigation -->
  
  <!-- Selection of Level -->
  <div style="background-color: #460808; 
  padding: 20px; color: #FFFFFF; font-size:14px; height:90%; "><!--Main div for the left panel-->
    <!-Form for level selection -->
    <form method="POST" action="results.php">
      <label for="" style="font-weight:bold; margin-bottom: 7px;">SELECT LEVEL </label>
      <br>
      <div class="form-group">
        <div class="col-md">
          <input type="checkbox" id="" name="l1" value="100">
          <label for="">Level 100</label><br>
          <input type="checkbox" id="" name="l2" value="200">
          <label for="">Level 200</label><br>
          <input type="checkbox" id="" name="l3" value="300">
          <label for="">Level 300</label><br>
          <input type="checkbox" id="vehicle4" name="l4" value="400">
          <label for="">Level 400</label><br>
        </div>
      </div>
      

      <br>
      <!-- Course Options -->
      <label for="" style="font-weight:bold; margin-bottom: 7px;"">SELECT COURSES </label><br>
      <div style="height:200px; overflow:auto">          
        <input type="checkbox" id="me" name="me" value="Bsc. Mechnical Engineering">
        <label for="">Bsc. Mechnical Engineering</label><br>
        <input type="checkbox" id="cs" name="cs" value="Bsc. Computer Science">
        <label for="">Bsc. Computer Science</label><br>
        <input type="checkbox" id="ct" name="ct" value="Bsc. Construction Technology">
        <label for="">Bsc. Construction Technology</label><br>
        <input type="checkbox" id="" name="ee" value="Bsc. Electrical / Electronic Engineering">
        <label for="">Bsc. Electrical / Electronic Engin.</label><br>
        <input type="checkbox" id="" name="ge" value="Bsc. Geometic Engineering">
        <label for="">Bsc. Geometic Engineering</label><br>
        <input type="checkbox" id="" name="ce" value="Bsc. Civil Engineering">
        <label for="">Bsc. Civil Engineering</label><br>
        <input type="checkbox" id="" name="mk" value="Bsc. Marketing">
        <label for="">Bsc. Marketing</label><br>
        <input type="checkbox" id="" name="ac" value="Bsc. Accounting">
        <label for="">Bsc. Accounting</label><br>
        <input type="checkbox" id="" name="bf" value="Bsc. Banking and Finance">
        <label for="">Bsc. Banking and Finance</label><br>
        <input type="checkbox" id="" name="hr" value="Bsc. Human Resource Mgt">
        <label for="">Bsc. Human Resource Mgt</label><br>

        <input type="checkbox" id="" name="ml" value="Bsc. Medical Laborartory">
        <label for="">Bsc. Medical Laborartory</label><br>
        <input type="checkbox" id="" name="nu" value="Bsc. Nursing">
        <label for="">Bsc. Construction Technology</label><br>
        <input type="checkbox" id="" name="mf" value="Bsc. Midwifery">
        <label for="">Bsc. Midwifery</label><br>
        <input type="checkbox" id="" name="ch" value="Bsc. Community Health Nursing">
        <label for="">Bsc. Community Health Nursing</label><br>
        <input type="checkbox" id="" name="pa" value="Physician Assistantship">
        <label for="">Physician Assistantship</label><br>
        <input type="checkbox" id="" name="phn" value="Public Health Nursing">
        <label for="">Public Health Nursing</label><br>
        <input type="checkbox" id="" name="lw4" value="4 Years LL.B">
        <label for="">4 Years LL.B</label><br>
        <input type="checkbox" id="" name="lw3" value="3 Years LL.B">
        <label for="">3 Years LL.B</label><br>
      </div>

      <!-- Number of Rows-->
      <br>
      <label for="customRange" class="form-label" style="font-weight:bold">SELECT NUMBER OF ROWS</label>
      <select name='rows' id='rows' class='form-control' style="width:100%;height:40px" required>
      <!-- <option>10</option>
      <option>9</option> -->
      <option>8</option>
      <option>7</option>
      <option>6</option>
      <option>5</option>
      </select>

      <br>
      <!-- Buttons -->
      <div class="form-group">
        <div class="row">
          <div class="col-md">
            <input type="submit" name="submit" 
              value="Shuffle"  class="btn" 
              style="width:90%; background-color:#E49C0F; border-radius: 20px; 
              text-transform:uppercase; font-size: 14px; 
              color:white; letter-spacing: 1px;">
          </div>
          <!-- Second Button -->
          <div class="col-md">
            <a href="index.php" type="submit" 
            name="submit" value="SHAFFLE"  class="btn" 
            style="width:90%; background-color:#E49C0F; color:white;
            border-radius: 20px; text-transform:uppercase; 
            font-size: 14px; letter-spacing: 1px;">Reset</a>
          </div>
          <br>
        </div>
      </div>
  </div><!-- End of left panel-->

  
  
  

</div>

<!-- Output Section (Second Section to the Right) -->
<div class="col-md-9 responsive" style="padding: 25px;">
  <h5 style="text-align:center; color: #840000; font-weight: 600;">ALL STUDENTS  </h5>
  <div style="margin-left: 40px">
  <?PHP 
  $sql = "SELECT * FROM students ORDER BY rand() LIMIT 28";


  $result =mysqli_query($con,$sql);
  $i=0;
  $table ='<table border="0">';
  while ($row=mysqli_fetch_array($result)) {
  $id= $row['id'];


  $level= $row['level'];
  $index= $row['indexNo'];
  $dept= $row['dept'];



  //$index=shuffle($index);

  if($i % 7 == 0){

  /* $table .='<tr><td style="color:#FF6D28"><img class="h-8 mt-2 mx-4" style="color:red" src="./img/seat.png" width="50" height="50"></BR><b>'  .$index. '</b></td>';
  }else{
  $table .='<td style="color:#FF6D28"><img class="h-8 mt-2 mx-4" src="./img/seat.png" width="50" height="50"><b></BR>' .$index. '</b></td>';
  }*/


  $table .='<tr><td style="color:#FF6D28; padding:20px;" class="">
    <center style="border:1px solid #BEBEBE; border-radius:3px">  
      <b style="font-size: 14px;"> LEVEL '.$level.'</b><br>
        <img class="h-8 mt-2 mx-4 mb-2" style="color:#120605" src="./img/seat.png" width="30" height="30">
    </center>
    <b style="font-size: 14px;">'  .$index. '</b> 
    </td>';

  }else{
  $table .='<td style="color:#FF6D28;padding:10px">
      <center style="border:1px solid #BEBEBE;border-radius:3px"> 
        <b style="font-size: 14px;"> LEVEL  '.$level.'</b><br>
        <img class="h-8 mt-2 mx-4 mb-2" src="./img/seat.png" width="30" height="30">
      </center>
      <center>
        <b style="font-size: 14px;">' .$index. '</b><br> 
      </center>
      
    </td>';
  }
  $i++;
  } 
  $table .='</tr></table>';

  echo $table;

  //print_r($index);
  /*  $my_array = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"purple");

  shuffle($my_array);
  print_r($my_array); */
  ?>
  <!-- 
  <div class="col-md">
  <img class="h-8 mt-2 mx-4" src="./img/seat.png" width="50" height="50">
  <p class="mx-2 text-gray-400 text-sm"><?php //echo $index?></p>
  </div>
  -->
  <?php //} ?>


  </div>


</div>
</div>
</div>



</body>
</html>