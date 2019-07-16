<?php

$con=mysqli_connect("localhost","root","","frscdb");
if(isset($_POST['viewOffence'])){
 $query="SELECT * FROM offence_sheet";
 $result=mysqli_query($con,$query);
    echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
    <style>
   table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}


   </style>
  <body style="color:black;text-align:center;padding-top:50px;">
  <div class="container" style="text-align:left;">
  <center><h3>Offenders Records</h3></center><br>
   <center><a href="admin-panel.php"  class="btn btn-primary">Return to admin panel</a></center><br><br>
  <table class="table table-hover table table-bordered">
  <thead>
    <tr>
        <th>Offender ID</th>
        <th>Names</th>
        <th>Adress</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Telephone</th>
        <th>Reg Number</th>
        <th>Color</th>
        <th>Type</th>
        <th>Make</th>
        <th>Offence</th>
        <th>Number</th>
        <th>Date Issued</th>
        <th>Renewwal Date</th>
        <th>Expiry Date</th>
        <th>Issuing State</th>
        <th>Confistication</th>
    </tr>
  </thead>
  <tbody>
  ';
  while($row=mysqli_fetch_array($result)){
    $unique_id=$row['unique_id'];
    $names=$row['names'];
    $address=$row['address'];
    $age=$row['age'];
    $gender=$row['gender'];
    $telephone=$row['telephone'];
    $regno=$row['regno'];
    $color=$row['color'];
    $type=$row['type'];
    $make=$row['make'];
    $offence=$row['offence'];
    $number=$row['number'];
    $dateissued=$row['dateissued'];
    $renewaldt=$row['renewaldt'];
    $expiry=$row['expiry'];
    $issuing=$row['issuing'];
    $confistication=$row['confistication'];
      
    
    echo '<tr>
      <td>'.$unique_id.'</td>
      <td>'.$names.'</td>
      <td>'.$address.'</td>
      <td>'.$age.'</td>
      <td>'.$gender.'</td>
      <td>'.$telephone.'</td>
      <td>'.$regno.'</td>
      <td>'.$color.'</td>
      <td>'.$type.'</td>
      <td>'.$make.'</td>
      <td>'.$offence.'</td>
      <td>'.$number.'</td>
      <td>'.$dateissued.'</td>
      <td>'.$renewaldt.'</td>
      <td>'.$expiry.'</td>
      <td>'.$issuing.'</td>
      <td>'.$confistication.'</td>
    </tr>';
  }
echo '</tbody></table></div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>';
}

?>
