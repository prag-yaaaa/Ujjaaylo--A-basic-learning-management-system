<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Contact Page</title>

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                         <a class="navbar-brand" href="index.php"><b><h1 style="color:white;">उज्यालो</h1></b></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
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
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                            </ul>
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

    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg.jpg);"></div>

    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        <h5>Get in Touch</h5>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input id="button" type="submit" value="Send Message" style="background:none;
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
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                         <a class="navbar-brand" href="index.html"><b><h1 style="color:white;">उज्यालो</h1></b></a>
                        <div class="copywrite-text mt-30">
                            <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Pragya</a>
</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <ul class="footer-menu d-flex justify-content-between">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="regular-page.php">About</a></li>
                            <li><a href="registration.php">Signup</a></li>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="#">contact</a></li>
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

</body>

</html>
