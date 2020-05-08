
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Login page</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
	
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php"><b><h1 style="color:white;">उज्यालो</h1></b></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="regular-page.php">About</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Signup</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="registrationLecturer.php">As a Lecturer</a>
                                        <a class="dropdown-item" href="registrationStudent.php">As a Student</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                            <!-- Search Form  -->
                            <div id="search-wrapper">
                                <form action="#">
                                    <input type="text" id="search" placeholder="Search something...">
                                    <div id="close-icon"></div>
                                    <input class="d-none" type="submit" value="">
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="regular-page-wrap section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="page-content">
						<?php
								
											$aerr=$berr="";
											$state="true";
											
										if ($_SERVER["REQUEST_METHOD"] == "POST")
										{											
											if(empty($_POST["uname"]))
											{
												$aerr='Please fill your username';
												$state="false";
											}
											if(empty($_POST["pass"]))
											{
												$berr='Please fill your password';
												$state="false";
											}
											if($state=="true")
												{
															include 'config.php'; 
															$sql= "SELECT sn From login 
																	WHERE username=$_POST[uname],
																		  password=$_POST[pass]";
															$query=mysql_query($sql,$conn);
																if($query="true")
																{
																	 echo "<script type='text/javascript'>window.location.href = 'catagory.php';</script>";
																}
																else{
																	?>
																<script type="text/javascript"> alert("Invalid username or password"); </script>
																<?php
																}
															
															mysql_close($conn);	
												}		
										}
									?>
									
									
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" name="Form"  style="margin:5% auto;width:400px;min-height:600px;background:white;padding:2.5% 5% 2.5%;border-radius:2.5%;">
                                      <img src="signup.png" style="text-align:center;width:35%;margin:0 auto;display:block;padding:0;"/>
                                      <h2 style="font-size:2em;padding:0;margin:0;text-align:center;">Login</h2>
                                      <br>
                                      <label for="names" style="color:#BDC3C7;text-transform:uppercase;font-size:0.8em;letter-spacing:4px;">Username</label>
                                      <br>
                                      <input id="uname" type="text" name="uname" style="margin:5% 0;border:none;width:100%;font-size:1.5em;padding:0 0 2%;background:none;border-bottom:2px solid #8cca8c;">
                                      <span style="color:red;"><?php echo $aerr;?></span>
									  <br>
                                      <label for="grade" style="color:#BDC3C7;text-transform:uppercase;font-size:0.8em;letter-spacing:4px;">Password</label>
                                      <br>
                                      <input id="pass" type="password" name="pass" style="margin:5% 0;border:none;width:100%;font-size:1.5em;padding:0 0 2%;background:none;border-bottom:2px solid #8cca8c;">
                                      <span style="color:red;"><?php echo $berr;?></span>
									  <br>
                                      <input id="button" type="submit" value="Submit" style="background:none;
				border:none;
				width:100%;
				min-height:50px;
				margin:10px 0 10px;
				border-radius:2.5%;
				color:white;
				padding:0.5% 0 0;
				font-size:1.75em;
				
				-webkit-transition: background 1s ease-out;  
				-moz-transition: background 1s ease-out;  
				-o-transition: background 1s ease-out;  
				transition: background 1s ease-out; 
				
				
				/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#8cca8c+0,fbd75c+100 */
				background: #8cca8c; /* Old browsers */
				background: -moz-linear-gradient(left,  #8cca8c 0%, #fbd75c 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, right top, color-stop(0%,#8cca8c), color-stop(100%,#fbd75c)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(left,  #8cca8c 0%,#fbd75c 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(left,  #8cca8c 0%,#fbd75c 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(left,  #8cca8c 0%,#fbd75c 100%); /* IE10+ */
				background: linear-gradient(to right,  #8cca8c 0%,#fbd75c 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8cca8c', endColorstr='#fbd75c',GradientType=1 ); /* IE6-9 */ ">
                                      <br>
									  <a href="registrationstudent.php"  style="color:#BDC3C7;text-transform:uppercase;font-size:0.8em;letter-spacing:4px;" center>Donot Have an Account?</a>
                         </form>
					</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                         <a class="navbar-brand" href="index.html"><b><h1 style="color:white;">उज्यालो</h1></b></a>
                        <div class="copywrite-text mt-30">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Pragya</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="regular-page.php">about</a></li>
                            <li><a href="registration.php">Signup</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="email" placeholder="Enter your mail">
                            <button type="button"><i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>