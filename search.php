<?php
$con=mysqli_connect("localhost","root","","frscdb");
if(isset($_POST['search_submit'])){
  $unique_id=$_POST['unique_id'];
 $query="SELECT * FROM offence_sheet WHERE unique_id='$unique_id';";
 $result=mysqli_query($con,$query);
    
    if ($result->num_rows > 0) {
    
 echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:;color:black;text-align:center;padding-top:50px;">
  <div class="container-fluid" style="text-align:left;">
  <center><h3>Search Results</h3></center><br>
   <center><a href="admin-panel.php"  class="btn btn-primary">Return to admin panel</a></center><br><br>
   <style>
   table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}  
table{
width: 100%;
}
   </style>
  <table class="table table-hover table width="100%;">
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
        <th>Payment</th>
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
        $payment=$row['payment'];
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
                      <td>'.$payment.'</td>
                    </tr>';

          
  } 
echo '</tbody></table></div> 

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>';
}
 else {
     header('Location: admin-panel.php');
 }   
}

?>