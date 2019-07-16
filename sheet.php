<!DOCTYPE html>
<?php include("func.php");  ?>
<html>
<head>
    
<title>Frsc Traffic Tracking System</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css" type="text/css">



</head>
<body>
	<div class="container" style="padding-top:50px;">
	 <div class="jumbotron reg">
         
	<h2>Add Offenders Records</h2><hr>
         <fieldset class="fieldset">
            
          
            <form class="form-group" method="POST" action="offenceSheet.php">
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Enter ID Number" name="unique_id"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Name Of Offender" name="names"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Address" name="address"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Age" name="age"></div><br>
            <div class="col-md-8">
                <select name="gender">
                <option value="select">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                </div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Telephone No" name="telephone"></div><br><hr>
            <h2>Vehicle</h2><hr>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Registration Number" name="regno"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Color" name="color"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Type" name="type"></div><br>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Make" name="make"></div><br><hr>
            <h2>Offence</h2>
            <div class="col-md-8">
                <select class="form-control" name="offence">
                    <option value="Select Offence">Select Offence</option>
                    <option value="Assaulting Marshal on Duty.. Penality N10,000">Assaulting Marshal on Duty.. Penality N10,000</option>
                    <option value="Attempting to Corrupt Marshal on Duty.. Penality  N10,000">Attempting to Corrupt Marshal on Duty.. Penality  N10,000</option>
                    <option value="Caution Sign Violation.. Penality  N3,000">Caution Sign Violation.. Penality  N3,000</option>
                    <option value="Dangerous Driving.. Penality  10,000">Dangerous Driving.. Penality  10,000</option>
                    <option value="Do not Move Violation.. Penality  N2,000">Do not Move Violation.. Penality  N2,000</option>
                    <option value="Driver’s License Violation.. Penality  N5,000">Driver’s License Violation.. Penality  N5,000</option>
                    <option value="Driving Under Alcohol/Drug Influence.. Penality  N8,000">Driving Under Alcohol/Drug Influence.. Penality  N8,000</option>
                    <option value="Riding Motorcycle Without Using Crash Helmet.. Penality  N6,000">Riding Motorcycle Without Using Crash Helmet.. Penality  N6,000</option>
                    <option value="Construction Area Speed Limit Violation.. Penality  N7,000">Construction Area Speed Limit Violation.. Penality  N7,000</option>
                    <option value="Under Age Driving/Riding N20,000">Under Age Driving/Riding N20,000</option>
                   
                </select>
     
                </div><br><hr>
                <h2>Drivers Licence</h2><hr>
            <div class="col-md-8"><input type="text" class="form-control" placeholder="Number" name="number"></div><br>
                <div class="col-md-8"><input type="text" class="form-control" placeholder="Date Issued" name="dateissued"></div><br>
                 <div class="col-md-8"><input type="text" class="form-control" placeholder="Renewal Date" name="renewaldt"></div><br>
                 <div class="col-md-8"><input type="text" class="form-control" placeholder="Expiry Date" name="expiry"></div><br>
                 <div class="col-md-8"><input type="text" class="form-control" placeholder="Issuing State" name="issuing"></div><br><hr>
                <h2>Confistication</h2>
                 <div class="col-md-8"><select class="form-control" name="confistication">
                     <option value="Selct Confistication">Select Confistication</option>
                    <option value="Vehicle Lience">Vehicle Licence</option>
                    <option value="Driver Licence">Driver Licence</option>
                    <option value="Vehicle Key">Vehicle Key</option>
                    <option value="Insurance">Insurance</option>
                    <option value="ID Card">ID Card</option>
                    <option value="Passport">Passport</option>
                </select>
                </div><hr>
                <h2>Payment</h2><hr>
                <div class="col-md-8">
                    <select name="payment" class="form-control" >
                    <option>Select Payment</option>
                      <option value="Paid">Paid</option>
                      <option value="Not Paid">Not Paid</option>
                    </select>
                  </div><br>
                <hr>
                <h2>CAUTION</h2>
            
            <div class="col-sm-12">
                        
                    <p>If you do not wish to be PROSECUTED, then pay the prescribed penality to the specified bank and present the original teller to FRSC Office (See details overleaf).</p>
                    <p>This notice of Offences expires after 7 days from the date of issue, you may be PROSECUTED.</p>
            </div>
            
		<br>
		<br>
        <div class="col-md-4">
                  <input type="submit" class="btn btn-primary" name="btnsubmt" value="Submit"> 
                    <a href="admin-panel.php"><button type="button" class="btn btn-default">Back</button></a>
                  </div>
        
                <br>
                 
   
            
	
 <script src="js/valid.js"></script>	

      
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>


      
      