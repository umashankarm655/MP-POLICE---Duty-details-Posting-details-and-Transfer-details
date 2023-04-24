
<?php include("connection.php");
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP POLICE </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
  <div class="top-navbar">

    <a>
      <img alt="Police Mail" class="ulimg" data-entity-type="file" data-entity-uuid="" height="100" src="./images/MP12.png" width="99">
      <p>MADHYA PRADESH POLICE </p></br>
        <h5>धन्यः अस्मि भारतत्वेन</h5>
      

    </a>

      
      <div class="icons">
           

<a>
        <img alt="MadhyaPradesh Shasan" class="ulimg" data-entity-type="file" data-entity-uuid="519b0e59-4cbe-4785-bded-d7c54022a1ab"  height ="100"src="./images/Madhya_Pradesh_sashan-home.jpg"width="99">
      </a>
      <a>
        <img alt="Police Mail" class="ulimg" data-entity-type="file" data-entity-uuid="" height="100" src="./images/mp-police-mail.jpg" width="99">
      </a>

      <a>
       
        <img alt="aipdm" class="ulimg" data-entity-type="file" data-entity-uuid="" height="100" src="./images/AIPDM1.png" width="99">
        
      </a>


          <!--
          <a href="register.html"><img src="./images/register.png" alt="" width="18px">Register</a> -->
      </div>
  </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" id="logo"><span id="span1">P</span>olice <span>Record</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link" href="#">Rules</a>
              </li> 

            -->
              
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    
      <div class="container" id="contact">







<!-- New Code -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<div class="container header">
		<div class="row">
			
			<div class="col-md-6 header-center">
				<h4>Assign Transfer Form</h4>
			</div>

            <div class="col-md-6 header-left">
				<!--<i class="">form for duty allocation</i>-->
			</div>
		</div>		
	</div>

<!-- form -->

  <form action="#" method="post">
	<div class="container content">
			<div class="form-content">
			<h4>Please fill out the details to continue...</h4>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Full Name</span>
				  </div>
				  <input type="text" class="form-control" name="full_name" aria-label="Full Name" aria-describedby="basic-addon1">
				</div>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2">Police Id</span>
				  </div>
				  <input type="text" class="form-control"name="police_id" aria-label="Police Id" aria-describedby="basic-addon2">
				</div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon2">From Station Name</span>
                    </div>
                    <input type="text" class="form-control" name="from_station_name" aria-label="Station" aria-describedby="basic-addon2">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon2">To Station Name</span>
                    </div>
                    <input type="text" class="form-control" name="to_station_name" aria-label="Area of Duty" aria-describedby="basic-addon2">
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon2">Date</span>
                    </div>
                    <input type="date" class="form-control"  name="date" aria-label="Date" aria-describedby="basic-addon2">
                  </div>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon2">Start Time</span>
                    </div>
                    <input type="time" class="form-control"  name="start_time" aria-label="Area of Duty" aria-describedby="basic-addon2">
                  </div>


                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon2">End Time</span>
                    </div>
                    <input type="time" class="form-control" name="end_time" aria-label="End Time" aria-describedby="basic-addon2">
                  </div>




				<div class="input-group mb-3">
                <input type="submit" onclick='return transfermessage()' name="register" class="btn btn-default" value="Submit">
				</div>
			</div>
		</div>
  </form>

<!-- form -->

      </div>
      <script>
  function transfermessage(){
    return alert('your information assigned');
  }
</script>
<!-- New Code -->

<!-- footer -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Police Record </h3>/
            <p>
              MP Police <br>
            
            </p>
            <strong>Phone number:</strong> 100 <br>
            <strong>Website :</strong> dgpmp@mppolice.gov.in.<br>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Usefull Links</h4>
           <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Rules</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact Us</a></li>
            
           </ul>
          </div>



         

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>

           <ul>
            <li><a href="#">Attendence</a></li>
            <li><a href="#">Posting</a></li>
            <li><a href="#">Transfer</a></li>
            <li><a href="#">Mobile Phone</a></li>
            <li><a href="#">Police Record</a></li>
           </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Connect our Social Network .</p>

            <div class="socail-links mt-3">
              <a href="#"><i class="fa-brands fa-twitter"></i></a>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
          
          </div>

        </div>
      </div>
    </div>
    <hr>
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Police Record</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">Force Team</a>
      </div>
    </div>

  </footer>
    
  <!-- footer -->


  <?php

  if($_POST['register'])
  {

    $full_name =  $_POST['full_name'];
    $police_id =  $_POST['police_id'];
    $from_station_name =  $_POST['from_station_name'];
    $to_station_name =  $_POST['to_station_name'];
    $date =  $_POST['date'];
    $start_time =  $_POST['start_time'];
    $end_time =  $_POST['end_time'];

      $query=" INSERT INTO transfertable values (' $full_name',' $police_id',' $from_station_name',' $to_station_name',' $date',' $start_time',' $start_time')";
      $query =mysqli_query($conn,$query);
      if($data){


        echo "DATA INSERT";
      }
      else{

        echo"Failed";
      }
  }

// if($_POST['register'])
// {

//   $full_name =  $_POST['full_name'];
//   $police_id =  $_POST['police_id'];
//   $station_name =  $_POST['station_name'];
//   $area_of_duty =  $_POST['area_of_duty'];
//   $date =  $_POST['date'];
//   $start_time =  $_POST['start_time'];
//   $end_time =  $_POST['end_time'];
  
//   $query=" INSERT INTO dutytable1 values (' $full_name',' $police_id',' $station_name',' $area_of_duty',' $date',' $start_time',' $start_time')"; 
//   $query =mysqli_query($conn,$query);

//   if($date)
//   {
//     echo "Insert";
//   }
//   else{

//     echo "Faild";
//   }
// }


?>

