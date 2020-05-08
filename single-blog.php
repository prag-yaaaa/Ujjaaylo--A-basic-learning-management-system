<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Query Page</title>

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
                        <a class="navbar-brand" href="#"><b><h1 style="color:white;">उज्यालो</h1></b></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                             <ul class="navbar-nav ml-auto">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="catagory.php">Content</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="index.php">Logout</a>
                                </li>
                            </ul>
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
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url(img/blog-img/queries.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        
                        <h3>Have any Queries? </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
				<?php
					if(isset($_POST['submit']))
					{
						$name=$_POST['name'];
						$query=$_POST['message'];
						?>
							<div class='col-12 col-lg-8'>
										<div class='single-blog-content mb-100'>
											<!-- Post Meta -->
											<div class='post-meta'>
												<?php echo $name; ?>
											</div>
											<!-- Post Content -->
											<div class='post-content'>
												<h6>
													<?php echo $query; ?>
												</h6>
												
												<!-- Post Tags -->
												<!--<ul class='post-tags'>-->
												<form method="POST" action="">
													<div class="group">
														<input type="text" name="name1"/>
														<textarea name="message" id="message" required></textarea>
														<span class="highlight"></span>
														<span class="bar"></span>
														<br/>
														 <input type="submit" name="comment" class="btn world-btn" value="Place Comment?"/>
													</div>
												</form>
												
											</div>
										</div>
							</div>
				<?php
					}
				?>
				
				
                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area mb-100">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                                    <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                                    <a href="www.pinterest.com"><i class="fa fa-pinterest"></i></a>
                                    <a href="www.vimeo.com"><i class="fa fa-vimeo"></i></a>
                                    <a href="www.instagram.com"><i class="fa fa-instagram"></i></a>
                                    <a href="www.google.com"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

           

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="post-a-comment-area mt-70">
                        <h5>Post your Queries</h5>
                        <!-- Contact Form -->
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
                               <!-- <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter Title</label>
                                    </div>
                                </div>-->
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your query</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input type="submit" name="submit" class="btn world-btn" value="Post Query"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <ol> 
						<?php
							if(isset($_POST['comment']))
							{
								$name=$_POST['name1'];
								$comment=$_POST['message'];
								?>
								<!-- Single Comment Area -->
								<li class="single_comment_area">
									<!-- Comment Content -->
									<div class="comment-content">
										<!-- Comment Meta -->
										<div class="comment-meta d-flex align-items-center justify-content-between">
											<h5><?php echo $name; ?><h5>
											<a href="#" class="comment-reply btn world-btn">Comment Reply</a>
										</div>
										<label> <?php echo $comment; ?> </label>
									</div>
								</li>
						<?php
							}
							?>
                            
                        </ol>
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
                            
                            <li><a href="catagory.php">Content Page</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="footer-single-widget">
                        <h5>Subscribe</h5>
                        <form action="#" method="post">
                            <input type="email" name="email" id="eemail" placeholder="Enter your mail">
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