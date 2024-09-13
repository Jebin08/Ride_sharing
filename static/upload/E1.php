<html>
<head>
    <meta charset="utf-8">
    <title>Ride Sharing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../static/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../static/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../static/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../static/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3 px-lg-5 d-none d-lg-block">
        <div class="row">
            <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body pr-3" href=""><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</a>
                    <span class="text-body">|</span>
                    <a class="text-body px-3" href=""><i class="fa fa-envelope mr-2"></i>travel@info.com</a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body px-3" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-body px-3" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-body pl-3" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="position-relative px-lg-5" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-uppercase text-primary mb-1">Car Pooling</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="/home" class="nav-item nav-link">Home</a>
                        <a href="/shared" class="nav-item nav-link">Ride Shared</a>
						<a href="/logout" class="nav-item nav-link">Logout</a>
                        <!--<a href="../static/service.html" class="nav-item nav-link">Service</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Cars</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="../static/car.html" class="dropdown-item">Car Listing</a>
                                <a href="../static/detail.html" class="dropdown-item active">Car Detail</a>
                                <a href="../static/booking.html" class="dropdown-item">Car Booking</a>
                            </div>
                        </div>-->
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Search Start -->
    <div class="container-fluid bg-white pt-3 px-lg-5">
       
    </div>
    <!-- Search End -->


    <!-- Page Header Start -->
   
    <!-- Page Header Start -->


    <!-- Detail Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
		  <h2 class="display-4 text-uppercase mb-5">Driver Information</h2>
					<h3>Ride Service Issuer</h3>
            <div class="row">
                <div class="col-lg-4 mb-5">
                  
				
							
						
				
               </div>

                <div class="col-lg-6 mb-5">
			
                    <div class="bg-secondary p-5">
						<form name="form1" method="post">
						
                        <h3 class="text-primary text-center mb-4">Ride Share in Routine Trip</h3>
							{% if msg=="success" %}
						<span style="color:#00FF66">Added Success..</span>
						<script>
//Using setTimeout to execute a function after 5 seconds.
setTimeout(function () {
   //Redirect with JavaScript
   window.location.href= '/home';
}, 2000);
</script>
						{% endif %}
                        <div class="form-group">
                            <!--<select name="splace" class="custom-select px-4" style="height: 50px;">
                                <option selected>Source Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>-->
							<input type="text" name="splace" class="form-control px-4" placeholder="Source Location" style="height: 50px;" required>
                        </div>
                        <div class="form-group">
                            <!--<select name="dplace" class="custom-select px-4" style="height: 50px;">
                                <option selected>Destination Location</option>
                                <option value="1">Location 1</option>
                                <option value="2">Location 2</option>
                                <option value="3">Location 3</option>
                            </select>-->
							
							<input type="text" name="dplace" class="form-control px-4" placeholder="Destination Location" style="height: 50px;" required>
                        </div>
						<div class="form-group">
               
							<input type="text" name="route" class="form-control px-4" placeholder="Route" style="height: 50px;" required>
                        </div>
						
                       
                        <div class="form-group">
                            <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" name="ptime" class="form-control p-4 datetimepicker-input" placeholder="Pickup Time"
                                    data-target="#time1" data-toggle="datetimepicker" required />
                            </div>
                        </div>
						<div class="form-group">
                            <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" name="seats" class="form-control p-4" placeholder="Available Seats" />
                            </div>
                        </div>
						
						<div class="form-group">
                            <div class="time" id="time1" data-target-input="nearest">
                                <input type="text" name="rate" class="form-control p-4" placeholder="Rate" required />
                            </div>
                        </div>
                        
                        <div class="form-group mb-0">
                            <button class="btn btn-primary btn-block" type="submit" style="height: 50px;">Submit</button>
                        </div>
						</form>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
    <!-- Detail End -->


    <!-- Related Car Start -->
   
    <!-- Related Car End -->


    <!-- Vendor Start -->
    
    <!-- Vendor End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-white mr-3"></i>India</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-white mr-3"></i>+012 345 67890</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>travel@info.com</p>
                <h6 class="text-uppercase text-white py-2">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-dark btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Usefull Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="/home"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                    <a class="text-body mb-2" href="/share"><i class="fa fa-angle-right text-white mr-2"></i>Ride Share</a>
                    <a class="text-body mb-2" href="/logout"><i class="fa fa-angle-right text-white mr-2"></i>logout</a>
                </div>
            </div>
           
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
                <p class="mb-4">Share vehicle like a bike / car / van, connect drivers with passengers.</p>
                <div class="w-100 mb-3">
                    <!--<div class="input-group">
                        <input type="text" class="form-control bg-dark border-dark" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary text-uppercase px-3">Sign Up</button>
                        </div>
                    </div>-->
                </div>
                <i></i>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body">Ride Sharing <a href="#"></a></p>
        <p class="m-0 text-center text-body"><a href="https://htmlcodex.com"></a></p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../static/lib/easing/easing.min.js"></script>
    <script src="../static/lib/waypoints/waypoints.min.js"></script>
    <script src="../static/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../static/lib/tempusdominus/js/moment.min.js"></script>
    <script src="../static/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../static/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../static/js/main.js"></script>
</body>

</html>