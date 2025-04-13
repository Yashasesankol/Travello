<!DOCTYPE html>
<html>
<head>
	<title>Travello</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="images/favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="override.css">
  
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="10">
	<!--navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand heading" href="#">Travello</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNavDropdown" class="navbar-collapse collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Upcoming">Upcoming Trips</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="https://www.google.com">FAQ</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown" id="in_nav">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Hi, <?php  
                             $servername = 'localhost';
    						 $username = 'root';
    						 $password = '';
     						 $db='letstravel';
    						 $conn = mysqli_connect($servername,$username,$password,$db);
    						if (!$conn) 	
        					{			
            					die("Connection failed: " . mysqli_connect_error());
        					}
                            session_start();
                            if($_SESSION['status']=='loggedin')
                            {                            	
                            	$email=$_SESSION['user_email'];
                                $sql="SELECT FirstName FROM user WHERE Email='".$email."'";
                                $fname = mysqli_query($conn,$sql);                                
                                while ($row=$fname->fetch_assoc()) {                            	
                            	echo $row['FirstName'];
                              }
                            }                         
                            ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <!-- <a class="dropdown-item" href="#">Edit Profile</a> -->
                        <a class="dropdown-item" href="logout.php" name="logout_link">Logout</a>
                    </div>
                </li>
                <li class="nav-item" id="outl_nav">
                    <a class="nav-link" href="userlogin.html">Login</a>
                </li>
                <li class="nav-item" id="outr_nav">
                    <a class="nav-link" href="register.html">Sign Up</a> 
                </li>
            </ul>
        </div>
    </nav>


    <!--carousel-->
    <div id="Home">
    	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img class="d-block w-100" src="images/slideshow/beach.png" alt="Andaman and Nicobar">
    			</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/taj.png" alt="Taj Mahal">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/munnar.png" alt="Munnar">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/chadar.png" alt="Chadar Trek">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/udaipur.png" alt="Udaipur">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/climbing.png" alt="Treks">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/para.png" alt="Sports">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/dal.png" alt="Srinagar">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/ladakh.png" alt="Leh Ladakh">
	    		</div>
	    		<div class="carousel-item">
	      			<img class="d-block w-100" src="images/slideshow/lotus.png" alt="Lotus Temple">
	    		</div>
    		
  			</div>
  			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		   		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		   		<span class="sr-only">Next</span>
  			</a>
		</div>

		<div class="survey">
			<div class="surveyText"> Can't decide where to go on your holiday? Take a quick survey and get instant recommendation of places in India to visit!</div>
			<div class="surveyBtn"><a href="survey.php"><button class="yellowBtn">Take Survey</button></a></div>
		</div>
	</div> <!--home ends-->

<?php

  echo '<!--upcoming section-->
  <div class="sectionHeader" id="Upcoming">
    <div class="header">
      <div class="headingText">Upcoming Trips</div>
      <div class="viewAllBtn"><button class="secondaryBtn" type="button" id="VABtn" data-toggle="collapse" data-target="#AllTrips" aria-expanded="false" aria-controls="AllTrips" onclick="javascript:toggleText();">View All</button></div>
    </div>
    <div id ="cards" class="row mx-auto">';

  $sql="SELECT * FROM trip WHERE Status=1";
  $result = mysqli_query($conn,$sql);
  $rows = mysqli_num_rows($result);
  if($rows<=4)
  {  $limit = $rows;}
  else
  {  $limit = 4;}
  for($i=0;$i<$limit;$i++)
  {
    $tripID = mysqli_fetch_assoc($result);
    $sql2='SELECT locations from trip_location where tripId="'.$tripID["TripId"].'"';
    $result2 = mysqli_query($conn,$sql2);
    $rows2 = mysqli_num_rows($result2);
    $temp =  mysqli_fetch_assoc($result2);
    /*$locs = $temp["locations"];*/$locs = isset($temp["locations"]) ? $temp["locations"] : null;

// Now you can safely use $locs

    for($j=1;$j<$rows2;$j++)
    {
      $temp =  mysqli_fetch_assoc($result2);
      $locs=$locs." - ".$temp["locations"];
    }

    echo 
        '<div class="col-sm-3">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="uploads/'.$tripID["Image"].'"Card image cap">
              <div class="card-body">
                <h5 class="card-title">'.$locs.'</h5>
                <p class="card-text">Starting from ₹'.$tripID["BasePrice"].'</p>
                <form action="home.php" method="post">
                 <a href="#" data-toggle="modal" data-target="#tripDetails'.$i.'" class="toggle" class="viewBtn"><input type="submit" name="trip_sel" value="View Details" class="viewBtn"> </a>
                </form>
              </div>
          </div>
        </div>'
      ;

      echo '<!--modal-->
      <form action="join.php" method="post">
      <input type="hidden" name="tripid" value="'.$tripID["TripId"].'">
    <div class="modal fade" id="tripDetails'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">'.$locs.'</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="carouselimg">
                <img class="img-fluid" src="uploads/'.$tripID["Image"].'">
                <div class="modalText">
                  <label><b>Date:</b> '.$tripID["StartDate"].' to '.$tripID["EndDate"].'<br>
                  <a href="uploads/'.$tripID["Itinerary"].'" download class="downloadFile">Download itinerary</a><br>
                  <label><b>Price:</b> ₹'.$tripID["BasePrice"].'*</label>
                  <p id="terms">* The charges mentioned above includes only the base price of the trip for the mentioned location, exclusive of accommodation and travel charges from your city. </p>
              </div>
           
            </div>
            <div class="modal-footer">
              <input type="submit" class="yellowBtn joinBtn" name="tripjoined" value="Join Now"></form>
            </div>
        </div>
      </div>
  </div>
    <!--modal ends-->'; 

  }
  if($rows>4)
  {
    echo '<div class="collapse" id="AllTrips">';
    for($i=4;$i<$rows;$i++)
  {
    $tripID = mysqli_fetch_assoc($result);
    $sql2='SELECT locations from trip_location where tripId="'.$tripID["TripId"].'";';
    $result2 = mysqli_query($conn,$sql2);
    $rows2 = mysqli_num_rows($result2);
    $temp =  mysqli_fetch_assoc($result2);
    $locs = $temp["locations"];
    for($j=1;$j<$rows2;$j++)
    {
      $temp =  mysqli_fetch_assoc($result2);
      $locs=$locs." - ".$temp["locations"];
    }

    echo 
        '<div class="col-sm-3">
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="uploads/'.$tripID["Image"].'"Card image cap">
              <div class="card-body">
                <h5 class="card-title">'.$locs.'</h5>
                <p class="card-text">Starting from ₹'.$tripID["BasePrice"].'</p>
                <form action="home.php" method="post">
                 <a href="#" data-toggle="modal" data-target="#tripDetails'.$i.'" class="toggle" class="viewBtn"><input type="submit" name="trip_sel" value="View Details" class="viewBtn"> </a>
                </form>
              </div>
          </div>
        </div>'
      ;

      echo '<!--modal-->
       <form action="join.php" method="post">
      <input type="hidden" name="tripid" value="'.$tripID["TripId"].'">
    <div class="modal fade" id="tripDetails'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">'.$locs.'</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="carouselimg">
                <img class="img-fluid" src="uploads/'.$tripID["Image"].'">
                <div class="modalText">
                  <label><b>Date:</b> '.$tripID["StartDate"].' to '.$tripID["EndDate"].'<br>
                  <a href="uploads/'.$tripID["Itinerary"].'" download class="downloadFile">Download itinerary</a><br>
                  <label><b>Price:</b> ₹'.$tripID["BasePrice"].'*</label>
                  <p id="terms">* The charges mentioned above includes only the base price of the trip for the mentioned location, exclusive of accommodation and travel charges from your city. </p>
              </div>
           
            </div>
            <div class="modal-footer">
               <input type="submit" class="yellowBtn joinBtn" value="Join Now" name="tripjoined"></form>
            </div>
        </div>
      </div>
  </div>
    <!--modal ends-->'; 

  }
      echo '</div>';
  }

  echo  '</div></div>';

  
      
    
    
  
  
  ?>
    
  
    
	
    <!--footer-->
    	<footer class="page-footer font-small pt-4">
    	<div class="container-fluid text-center text-md-left">
      		<div class="row">
        		<div class="col-md-6 mt-md-0 mt-3">
          			<h6 class="footerText">Contact Us</h6>
          			<p class="footerText"><i class="fa fa-envelope icon" aria-hidden="true"></i> help@travello.com</p>
          			<p class="footerText"><i class="fa fa-phone icon" aria-hidden="true"></i> 1800-676-333 (9:00 am to 9:00 pm)</p>	
        		</div>
        		<hr class="clearfix w-100 d-md-none pb-3">
        		<div class="col-md-3 mb-md-0 mb-3">
          		</div>
         	 	<div class="col-md-3 mb-md-0 mb-3">
              <div class="container">

    <div class="row">
        <!-- Your existing col-md-3 div -->
        <div class="col-md-3 mb-md-0 mb-3">
            <!-- Navigation list -->
            <ul class="nav flex-column">
                <!-- About Us Modal Link -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#aboutUsModal">About Us</a>
                </li>
                <!-- Terms and Conditions Modal Link -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#termsModal">Terms&Conditions</a>
                </li>

                <!-- Privacy Policy Modal Link -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#privacyModal">Privacy Policy</a>
                </li>
            </ul>
        </div>

        <!-- About Us Modal -->
        <div class="modal fade" id="aboutUsModal" role="dialog">
            <div class="modal-dialog">
                <!-- ... Modal content for About Us ... -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">About Us</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Welcome to TRAVELLO !! your passport to unforgettable journeys and extraordinary experiences! Established with a passion for wanderlust, we take pride in crafting seamless travel solutions for the discerning adventurer.
At TRAVELLO  we believe that travel is more than just a destination; it's about the enriching encounters, the diverse cultures, and the stories that unfold along the way. Our dedicated team of travel enthusiasts and experts are committed to curating bespoke itineraries tailored to your dreams, ensuring every moment is filled with discovery and delight.
With a commitment to excellence, we strive to redefine your travel experience. Whether you're seeking a tranquil beach escape, a cultural immersion, or an adrenaline-fueled adventure, we have the expertise to make your travel aspirations a reality.
What sets us apart is our unwavering dedication to customer satisfaction. From the moment you dream of your next getaway to the time you return home with a heart full of memories, we are with you every step of the way. 
Explore the world with confidence, guided by Travello. Let us transform your travel dreams into an immersive reality, creating a tapestry of experiences that will linger in your heart forever. Embark on a journey with us, and let the adventure begin!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Terms and Conditions Modal -->
        <div class="modal fade" id="termsModal" role="dialog">
            <div class="modal-dialog">
                <!-- ... Modal content for Terms and Conditions ... -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Terms and Conditions</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Terms and Conditions
Welcome to Travello!! By using our website, you agree to comply with and be bound by the following terms and conditions. Please read these terms carefully before accessing or using our services.<br>
1.	Booking and Payments:<br>
•	All bookings are subject to availability.<br>
•	A deposit is required to secure your reservation.<br>
•	Full payment must be made before the commencement of your journey.<br>
2.	Cancellation and Refund:<br>
•	Cancellation fees may apply, depending on the time of cancellation.<br>
•	Refund policies vary for different services and are outlined in your booking details.<br>
3.	Travel Insurance:<br>
•	We strongly recommend purchasing comprehensive travel insurance.<br>
•	Travello is not responsible for any loss, damage, or injury sustained during your travels.<br>
4.	Itinerary Changes:<br>
•	Travello reserves the right to modify itineraries for reasons beyond our control.<br>
•	We will make every effort to provide suitable alternatives.<br>
5.	Travel Documents:<br>
•	It is the traveller's responsibility to ensure all necessary travel documents are valid and obtained.<br>
•	Travello is not liable for any issues arising from incomplete or incorrect documentation.<br>
6.	Health and Safety:<br>
•	Travellers should ensure they are in good health for the chosen journey.<br>
•	TRAVELLO is not responsible for any health-related issues during the trip.<br>
7.	Liability:<br>
•	TRAVELLO is not liable for any loss, damage, injury, or additional expenses incurred due to delays, natural disasters, or other unforeseen circumstances.<br>
8.	Privacy:<br>
•	We respect your privacy and handle personal information in accordance with our Privacy Policy.<br>
9.	Code of Conduct:<br>
•	Travellers are expected to adhere to local customs and laws.<br>
•	Disruptive or inappropriate behaviour may result in expulsion from the tour without refund.<br>
10.	Complaints:<br>
•	Any complaints should be reported promptly to our local representative to allow for resolution during your journey.<br>
11.	Intellectual Property:<br>
•	All content on our website is the property of Travello. Unauthorized use is prohibited.<br>
These terms and conditions are subject to change without notice. By using our services, you agree to the most recent version of the terms. For any questions or concerns, please contact <mark>Tanishaashok2003@gmail.com.</mark></</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Privacy Policy Modal -->
        <div class="modal fade" id="privacyModal" role="dialog">
            <div class="modal-dialog">
                <!-- ... Modal content for Privacy Policy ... -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Privacy Policy</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Privacy Policy
Welcome to TRAVELLO! We are committed to protecting your privacy and ensuring the security of your personal information. Here's a brief overview of our privacy practices:<br>
1.	Information Collection:<br>
•	We collect only the necessary personal information required for booking and providing our services.<br>
•	Information may include names, contact details, travel preferences, and payment details.<br>
2.	Use of Information:<br>
•	Personal information is used for booking purposes, communication, and improving our services.<br>
•	We do not sell, rent, or share your information with third parties for marketing purposes.<br>
3.	Data Security:<br>
•	We implement security measures to safeguard your information.<br>
•	Payment details are processed securely, and we use encryption for data transmission.<br>
4.	Cookies:<br>
•	We use cookies to enhance your browsing experience and gather information about website usage.<br>
•	You can manage cookie preferences through your browser settings.
5.	Third-Party Links:<br>
•	Our website may contain links to third-party websites. We are not responsible for their privacy practices.<br>
6.	Access and Control:<br>
•	You have the right to access, correct, or delete your personal information.<br>
•	Contact us to exercise these rights or for any privacy-related inquiries.<br>
7.	Updates to Privacy Policy:<br>
•	Our privacy policy may be updated periodically. Check the latest version on our website.<br>
By using our services, you agree to the terms outlined in our privacy policy. For detailed information, please review our complete Privacy Policy on our website or contact <mark>tanishaashok2003@gmail.com</mark> for assistance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-JF0h+AwMFSv2MIrRbPv5JPv8Id6VAJoS6be8iTQrjNBK8fNz0I3U7GGDZ0JFO4Gv" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy6nQ7z/6QQgvmPhoyxu6bWhmMEfdIeN2e" crossorigin="anonymous"></script>
          		</div>
      		</div>
    	</div>
    	
    	<div class="text-center py-3">
    		<a class="social-icon" href="https://www.facebook.com/"><i class="fa fa-facebook mr-md-5 mr-3 social-icon"> </i></a>
          	<a class="social-icon" href="https://www.twitter.com/"><i class="fa fa-twitter mr-md-5 mr-3 social-icon"> </i></a>
       		<a class="social-icon" href="https://www.instagram.com/"><i class="fa fa-instagram mr-md-5 mr-3 social-icon"> </i></a>
    	</div>
    	<div class="footer-copyright text-center py-3 madeby">
    		Made by<font style="color: #ffc312;"> Yashas.E.Sankol and Tanisha.A</font>
    	</div>
  	</footer>
<!--Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
  window.onload=function(){
    if(window.location.href.indexOf("status=loggedin")!=-1)
    {
      document.getElementById('in_nav').style.display = "block";
      document.getElementById('outl_nav').style.display = "none";
      document.getElementById('outr_nav').style.display = "none";
    }
    else
    {
      document.getElementById('in_nav').style.display = "none";
      document.getElementById('outl_nav').style.display = "block";
      document.getElementById('outr_nav').style.display = "block";
    }
  }

  function toggleText()
  {
    var but = document.getElementById("VABtn");
    if(but.innerHTML=="View All")
      but.innerHTML="Hide";
    else if(but.innerHTML=="Hide")
      but.innerHTML="View All";
  }

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/animations.js"></script>
</body>
</html>


