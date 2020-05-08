<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Content Page</title>

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
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                             <ul class="navbar-nav ml-auto">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="catagory.php">Content</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" href="single-blog.php">Blog</a>
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
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bbb10.jpg);"></div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        <div class="world-catagory-area">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">Science</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Math</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">English</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Accounts</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="tab5" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">Computer Science</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link" id="tab6" data-toggle="tab" href="#world-tab-6" role="tab" aria-controls="world-tab-6" aria-selected="false">General Knowledge</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
									<?php
										include 'config.php';
										$sql="SELECT * FROM science";
										$query=mysql_query($sql,$conn);
										while($row=mysql_fetch_assoc($query))
										{
											$location=$row['location'];
											$description=$row['description'];?>
											<div class="single-blog-post post-style-4 d-flex align-items-center">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<?php echo "<video src='".$location."' controls width='200px' height='200px' >"; ?>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<!--<a href="#" class="headline">
														<h5></h5>
													</a>
													<p></p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p> <?php echo $description; ?></p>
													</div>
												</div>
											</div>
										<?php
										}
									?>
                                </div>

                                <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Single Blog Post -->
									<?php
										include 'config.php';
										$sql="SELECT * FROM math ORDER BY sn DESC";
										$query=mysql_query($sql,$conn);
										while($row=mysql_fetch_assoc($query))
										{
											$location=$row['location'];
											$description=$row['description'];?>
											<div class="single-blog-post post-style-4 d-flex align-items-center">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<?php echo "<video width='200' height='200' controls> <source src='".$location."' type='video/ogg'> </video>"; ?>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<!--<a href="#" class="headline">
														<h5></h5>
													</a>
													<p></p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p> <?php echo $description; ?></p>
													</div>
												</div>
											</div>
									<?php
										}
									?>
                                </div>

                                <div class="tab-pane fade" id="world-tab-3" role="tabpanel" aria-labelledby="tab3">
                                     <!-- Single Blog Post -->
									<?php
										include 'config.php';
										$sql="SELECT * FROM english";
										$query=mysql_query($sql,$conn);
										while($row=mysql_fetch_assoc($query))
										{
											$location=$row['location'];
											$description=$row['description'];?>
											<div class="single-blog-post post-style-4 d-flex align-items-center">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<?php echo "<video src='".$location."' controls width='200px' height='200px' >"; ?>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<!--<a href="#" class="headline">
														<h5></h5>
													</a>
													<p></p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p> <?php echo $description; ?></p>
													</div>
												</div>
											</div>
									<?php
										}
									?>
                                </div>

                                <div class="tab-pane fade" id="world-tab-4" role="tabpanel" aria-labelledby="tab4">
                                     <!-- Single Blog Post -->
									<?php
										include 'config.php';
										$sql="SELECT * FROM account";
										$query=mysql_query($sql,$conn);
										while($row=mysql_fetch_assoc($query))
										{
											$location=$row['location'];
											$description=$row['description'];?>
											<div class="single-blog-post post-style-4 d-flex align-items-center">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<?php echo "<video src='".$location."' controls width='200px' height='200px' >"; ?>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<!--<a href="#" class="headline">
														<h5></h5>
													</a>
													<p></p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p> <?php echo $description; ?></p>
													</div>
												</div>
											</div>
									<?php
										}
									?>
                                </div>

                                <div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
                                     <!-- Single Blog Post -->
									<?php
										include 'config.php';
										$sql="SELECT * FROM computer";
										$query=mysql_query($sql,$conn);
										while($row=mysql_fetch_assoc($query))
										{
											$location=$row['location'];
											$description=$row['description'];?>
											<div class="single-blog-post post-style-4 d-flex align-items-center">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<?php echo "<video src='".$location."' controls width='200px' height='200px' >"; ?>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<!--<a href="#" class="headline">
														<h5></h5>
													</a>
													<p></p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p> <?php echo $description; ?></p>
													</div>
												</div>
											</div>
									<?php
										}
									?>
                                </div>
								
								<div class="tab-pane fade" id="world-tab-6" role="tabpanel1" aria-labelledby="tab6">
                                     <!-- Single Blog Post -->
									<?php
										include 'config.php';
										$sql="SELECT * FROM general";
										$query=mysql_query($sql,$conn);
										while($row=mysql_fetch_assoc($query))
										{
											$location=$row['location'];
											$description=$row['description'];?>
											<div class="single-blog-post post-style-4 d-flex align-items-center">
												<!-- Post Thumbnail -->
												<div class="post-thumbnail">
													<?php echo "<video src='".$location."' controls width='200px' height='200px' >"; ?>
												</div>
												<!-- Post Content -->
												<div class="post-content">
													<!--<a href="#" class="headline">
														<h5></h5>
													</a>
													<p></p>
													<!-- Post Meta -->
													<div class="post-meta">
														<p> <?php echo $description; ?></p>
													</div>
												</div>
											</div>
									<?php
										}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                       
                        
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Today’s Pick</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/bg.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="https://www.forbes.com/forbes/welcome/?toURL=https://www.forbes.com/education/&refURL=https://www.google.com.np/&referrer=https://www.google.com.np/" class="headline">
                                            <h5>Forbes Education</h5>
                                        </a>
                                    </div>
                                </div>
								<!-- Load More btn -->
								<div class="row">
									<div class="col-12">
										<div class="load-more-btn mt-50 text-center">
											<a href="https://en.oxforddictionaries.com/definition/meet" class="btn world-btn">Online Dictionary</a>
										</div>
									</div>
								</div>
                            </div>
                        </div>
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
                            <li><a href="#">Content Page</a></li>
                            <li><a href="single-blog.php">Blog</a></li>
                            
                            
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