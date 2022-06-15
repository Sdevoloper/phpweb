﻿<?php include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($db,$query);
if(!$db){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="description" content="<?=$data['description']?>">
<meta name="author" content="<?=$data['author']?>">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?=$data['title']?></title>

<!-- STYLES -->
<link href="../../css2.css?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="../../css2-1.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/plugins.css">
<link rel="stylesheet" type="text/css" href="css/dark.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--<link rel="stylesheet" type="text/css" href="css/dark.css" />-->
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- /STYLES -->

</head>

<body> 
	
	<!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->
	
<!-- WRAPPER ALL -->
<div class="know_tm_all_wrap" data-magic-cursor="show"> <!-- If you want disable magic cursor change value to "hide" -->	
	
	<!-- MODALBOX -->
	<div class="know_tm_modalbox">
		<div class="box_inner">
			<div class="close">
				<a href="#"><img class="svg" src="img/svg/cancel.svg" alt=""></a>
			</div>
			<div class="description_wrap"></div>
		</div>
	</div>
	<!-- /MODALBOX -->
		
	<!-- TOPBAR -->
	<div class="know_tm_topbar">
		<div class="container">
			<div class="topbar_inner">
				<div class="logo">
					<a href="#"><img src="img/logo/dark.png" alt=""></a>
				</div>
				<div class="right">
					<div class="social">
						<ul>
						<?php 
        if($data['facebook']!=""){
            ?>
							<li><a href="<?=$data['facebook']?>"><img class="svg" src="img/svg/social/facebook.svg" alt=""></a></li>
							<?php
        }    
        if($data['twitter']!=""){
            ?>
							<li><a href="<?=$data['twitter']?>"><img class="svg" src="img/svg/social/twitter.svg" alt=""></a></li>
							<?php
        }    
        if($data['instagram']!=""){
            ?>
							<li><a href="<?=$data['instagram']?>"><img class="svg" src="img/svg/social/youtube.svg" alt=""></a></li>
							<?php
        }    
        if($data['instagram']!=""){
            ?>
							<li><a href="<?=$data['instagram']?>"><img class="svg" src="img/svg/social/instagram.svg" alt=""></a></li>
							<?php
        } 
        ?>
      
						</ul>
					</div>
					<div class="know_tm_button">
						<a href="img/cv/<?=$data['cv']?>" download="">Download CV</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /TOPBAR -->
	
	<!-- HERO -->
	<div class="know_tm_hero">
		<div class="background_shape"></div>
		<div class="hero_content">
			<div class="container">
				<div class="content_inner">
					<div class="main_info">
						<div class="left">
							<span class="subtitle">I'm</span>
							<h3 class="name"><?=$data['titel']?></h3>
							<p class="text"><?=$data['herotitel']?></p>
							<div class="know_tm_video">
								<div class="video_inner">
									<div class="circle"></div>
									<h3 class="play">Play Video</h3>
									<a class="know_tm_full_link popup-youtube" href="../../watch.html?v=7e90gBu4pas"></a>
								</div>
							</div>
						</div>
						<div class="right">
							<div class="image">
								<img src="img/thumbs/47-60.jpg" alt="">
								<div class="main" data-img-url="img/hero/<?=$data['title']?>"></div>
							</div>
						</div>
					</div>
					<div class="main_menu">
						<ul>
							<li>
								<img class="svg" src="img/svg/archive.svg" alt="">
								<span>About Me</span>
								<a class="know_tm_full_link" href="#about"></a>
							</li>
							<li>
								<img class="svg" src="img/svg/contacs.svg" alt="">
								<span>Resume</span>
								<a class="know_tm_full_link" href="#resume"></a>
							</li>
							<li>
								<img class="svg" src="img/svg/briefcase.svg" alt="">
								<span>Portfolio</span>
								<a class="know_tm_full_link" href="#portfolio"></a>
							</li>
							<li>
								<img class="svg" src="img/svg/gear.svg" alt="">
								<span>Service</span>
								<a class="know_tm_full_link" href="#service"></a>
							</li>
							<li>
								<img class="svg" src="img/svg/message.svg" alt="">
								<span>Testimonial</span>
								<a class="know_tm_full_link" href="#testimonials"></a>
							</li>
							<li>
								<img class="svg" src="img/svg/writing.svg" alt="">
								<span>Blog</span>
								<a class="know_tm_full_link" href="#news"></a>
							</li>
							<li>
								<img class="svg" src="img/svg/letter.svg" alt="">
								<span>Contact</span>
								<a class="know_tm_full_link" href="#contact"></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Hero Shapes -->
		<span class="one anim_scale"><img class="svg" src="img/svg/shapes/9.svg" alt=""></span>
		<span class="two anim_moveLeft"><img class="svg" src="img/svg/shapes/dot.svg" alt=""></span>
		<span class="three anim_moveTop"><img class="svg" src="img/svg/shapes/dot-2.svg" alt=""></span>
		<span class="four anim_circle"><img class="svg" src="img/svg/shapes/1.svg" alt=""></span>
		<span class="five anim_circle"><img class="svg" src="img/svg/shapes/8.svg" alt=""></span>
		<span class="six anim_circle"><img class="svg" src="img/svg/shapes/3.svg" alt=""></span>
		<span class="seven anim_right"><img class="svg" src="img/svg/shapes/4.svg" alt=""></span>
		<span class="eight anim_scale"><img class="svg" src="img/svg/shapes/9.svg" alt=""></span>
		<span class="nine anim_circle"><img class="svg" src="img/svg/shapes/3.svg" alt=""></span>
		<span class="ten anim_moveLeft"><img class="svg" src="img/svg/shapes/4.svg" alt=""></span>
		<span class="eleven anim_scale"><img class="svg" src="img/svg/shapes/9.svg" alt=""></span>
		<span class="twelve anim_extra"><img class="svg" src="img/svg/shapes/2.svg" alt=""></span>
		<span class="thirteen anim_circle"><img class="svg" src="img/svg/shapes/5.svg" alt=""></span>
		<span class="fourteen anim_scale"><img class="svg" src="img/svg/shapes/9.svg" alt=""></span>
		<span class="fifteen anim_circle"><img class="svg" src="img/svg/shapes/3.svg" alt=""></span>
		<span class="sixteen anim_scale"><img class="svg" src="img/svg/shapes/9.svg" alt=""></span>
		<span class="seventeen anim_circle"><img class="svg" src="img/svg/shapes/5.svg" alt=""></span>
		<span class="eighteen anim_scale"><img class="svg" src="img/svg/shapes/9.svg" alt=""></span>
		<span class="nineteen anim_scale"><img class="svg" src="img/svg/shapes/9.svg" alt=""></span>
		<span class="twenty anim_circle"><img class="svg" src="img/svg/shapes/1.svg" alt=""></span>
		<!-- /Hero Shapes -->
		
	</div>
	<!-- /HERO -->
	
	<!-- MAINPART -->
	<div class="container">
		<div class="know_tm_mainpart">
	
			<!-- ABOUT -->
			<div id="about" class="know_tm_main_section">
				<div class="know_tm_about">
					<div class="left">
						<div class="left_inner">
							<div class="image">
								<img src="img/thumbs/35-44.jpg" alt="">
								<div class="main" data-img-url="img/about/1.jpg"></div>
							</div>
							<div class="details">
								<ul>
									<li>
										<h3>Name</h3>
										<span><?=$data['name']?></span>
									</li>
									<li>
										<h3>Birthday</h3>
										<span><?=$data['birthday']?></span>
									</li>
									<li>
										<h3>Mail</h3>
										<span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3b535e5757547b5a555f5e4948545515585456">[email&#160;protected]</a></span>
									</li>
									<li>
										<h3>Phone</h3>
										<span><?=$data['phone']?></span>
									</li>
									<li>
										<h3>Address</h3>
										<span><?=$data['address']?></span>
									</li>
									<li>
										<h3>Nationality</h3>
										<span><?=$data['nationality']?></span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="right">
						<div class="know_tm_main_title">
							<span>About Me</span>
							<h3><?=$data['aboutme']?></h3>
						</div>
						<div class="bigger_text">
							<p><?=$data['smalltext']?></p>
						</div>
						<div class="text">
							<p><?=$data['bigtext']?></p>
						</div>
						<div class="know_tm_button">
							<a href="img/cv/<?=$data['cv']?>" download="">Download CV</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /ABOUT -->
			
			<!-- RESUME -->
			<div id="resume" class="know_tm_main_section">
				<div class="know_tm_resume">
					<div class="know_tm_main_title">
						<span>Resume</span>
						<h3>Combination of Skill &amp; Experience</h3>
					</div>
					<div class="resume_inner">
						<div class="left">
							<div class="info_list">
								<div class="know_tm_resume_title">
									<h3>Education</h3>
									<span class="shape"></span>
								</div>
								<ul>
									<li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>Cognitive Sciences</h3>
													<span>University of Maine</span>
												</div>
												<div class="year">
													<span>2018 - 2020</span>
												</div>
											</div>
											<div class="text">
												<p>The goal of cognitive science is to understand the principles of intelligence with the hope that this will lead to better comprehension.</p>
											</div>
										</div>
									</li>
									<li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>Civil Engineering</h3>
													<span>University of Texas</span>
												</div>
												<div class="year">
													<span>2016 - 2017</span>
												</div>
											</div>
											<div class="text">
												<p>Civil engineering is arguably the oldest engineering discipline. It deals with the built environment and can be dated to the first time someone placed a roof.</p>
											</div>
										</div>
									</li>
									<li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>Bachelor of Science</h3>
													<span>Univercity of Dhaka</span>
												</div>
												<div class="year">
													<span>2012 - 2015</span>
												</div>
											</div>
											<div class="text">
												<p>This project is called a thesis and is usually presented in front of a group of people, including university professors who will evaluate it and let the student..</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="info_list">
								<div class="know_tm_resume_title">
									<h3>Experience</h3>
									<span class="shape"></span>
								</div>
								<ul>
									<li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>UI/UX Designer</h3>
													<span>Envato Market</span>
												</div>
												<div class="year">
													<span>2018 - running</span>
												</div>
											</div>
											<div class="text">
												<p>Web Developers are build a website’s core structure using coding languages, while designers are more visually creative and user-focused.</p>
											</div>
										</div>
									</li>
									<li>
										<div class="list_inner">
											<div class="short">
												<div class="job">
													<h3>Creative Designer</h3>
													<span>Bahanno Digital</span>
												</div>
												<div class="year">
													<span>2015 - 2017</span>
												</div>
											</div>
											<div class="text">
												<p>Web Developers are build a website’s core structure using coding languages, while designers are more visually creative and user-focused.</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="right">
							<div class="skills_list">
								<div class="know_tm_resume_title">
									<h3>Personal Skills</h3>
									<span class="shape"></span>
								</div>
								<div class="personal">
									<div class="dodo_progress">
										<div class="progress_inner" data-value="90">
											<span><span class="label">Time Management</span><span class="number">90%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="70">
											<span><span class="label">Effeciency</span><span class="number">70%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
										<div class="progress_inner" data-value="80">
											<span><span class="label">Intigrity</span><span class="number">80%</span></span>
											<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="skills_list">
								<div class="know_tm_resume_title">
									<h3>Software Skills</h3>
									<span class="shape"></span>
								</div>
								<div class="software">
									<div class="circular_progress_bar">
										<ul>
											<li>
												<div class="list_inner">
													<div class="myCircle" data-value="0.8"></div>
													<div class="title"><h3>Ms Office</h3></div>
												</div>
											</li>
											<li>
												<div class="list_inner">
													<div class="myCircle" data-value="0.75"></div>
													<div class="title"><h3>Photoshop</h3></div>
												</div>
											</li>
											<li>
												<div class="list_inner">
													<div class="myCircle" data-value="0.9"></div>
													<div class="title"><h3>Illustrator</h3></div>
												</div>
											</li>
											<li>
												<div class="list_inner">
													<div class="myCircle" data-value="0.65"></div>
													<div class="title"><h3>Figma</h3></div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /RESUME -->
			
			<!-- PORTFOLIO -->
			<div id="portfolio" class="know_tm_main_section">
				<div class="know_tm_portfolio">
					<div class="know_tm_main_title">
						<span>Resume</span>
						<h3>My works that I did for clients</h3>
					</div>
					<div class="portfolio_filter">
						<ul>
							<li><a href="#" class="current" data-filter="*">All</a></li>
							<li><a href="#" data-filter=".vimeo">Vimeo</a></li>
							<li><a href="#" data-filter=".youtube">Youtube</a></li>
							<li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
							<li><a href="#" data-filter=".detail">Detail</a></li>
						</ul>
					</div>
					<div class="portfolio_list">
						<ul class="gallery_zoom">
							<li class="vimeo">
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/1-1.jpg" alt="">
										<div class="main" data-img-url="img/portfolio/1.jpg"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="img/svg/social/vimeo.svg" alt="">
									<div class="details">
										<span>Vimeo</span>
										<h3>Aumeo Audio</h3>
									</div>
									<a class="know_tm_full_link popup-vimeo" href="../../337293658.html"></a>
								</div>
							</li>
							<li class="youtube">
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/1-1.jpg" alt="">
										<div class="main" data-img-url="img/portfolio/2.jpg"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="img/svg/social/youtube-2.svg" alt="">
									<div class="details">
										<span>Youtube</span>
										<h3>Bicker &amp; Jenna</h3>
									</div>
									<a class="know_tm_full_link popup-youtube" href="../../watch.html?v=7e90gBu4pas"></a>
								</div>
							</li>
							<li class="soundcloud">
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/1-1.jpg" alt="">
										<div class="main" data-img-url="img/portfolio/3.jpg"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="img/svg/social/soundcloud.svg" alt="">
									<div class="details">
										<span>Soundcloud</span>
										<h3>Botanical Escape</h3>
									</div>
									<a class="know_tm_full_link soundcloude_link mfp-iframe audio" href="../../player/index.htm?url=https%3A//api.soundcloud.com/tracks/471954807&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
								</div>
							</li>
							
							<li class="youtube">
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/1-1.jpg" alt="">
										<div class="main" data-img-url="img/portfolio/6.jpg"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="img/svg/social/youtube-2.svg" alt="">
									<div class="details">
										<span>Youtube</span>
										<h3>Model Car</h3>
									</div>
									<a class="know_tm_full_link popup-youtube" href="../../watch-1.html?v=l-epKcOA7RQ"></a>
								</div>
							</li>
							<li class="vimeo">
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/1-1.jpg" alt="">
										<div class="main" data-img-url="img/portfolio/7.jpg"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="img/svg/social/vimeo.svg" alt="">
									<div class="details">
										<span>Vimeo</span>
										<h3>Smart Watch</h3>
									</div>
									<a class="know_tm_full_link popup-vimeo" href="../../337292310.html"></a>
								</div>
							</li>
							<li class="detail">
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/1-1.jpg" alt="">
										<div class="main" data-img-url="img/portfolio/8.jpg"></div>
									</div>
									<div class="overlay"></div>
									<img class="svg" src="img/svg/text.svg" alt="">
									<div class="details">
										<span>Detail</span>
										<h3>Teresa Melbig</h3>
									</div>
									<a class="know_tm_full_link portfolio_popup" href="#"></a>
									
									<div class="hidden_content">
										<div class="popup_details">
											<div class="main_details">
												<div class="textbox">
													<p>We live in a world where we need to move quickly and iterate on our ideas as flexibly as possible. Building mockups strikes the ideal balance ease of modification.</p>
													<p>Mockups are useful both for the creative phase of the project - for instance when you're trying to figure out your user flows or the proper visual hierarchy - and the production phase when they will represent the target product.</p>
												</div>
												<div class="detailbox">
													<ul>
														<li>
															<span class="first">Client</span>
															<span>Alvaro Morata</span>
														</li>
														<li>
															<span class="first">Category</span>
															<span><a href="#">Detail</a></span>
														</li>
														<li>
															<span class="first">Date</span>
															<span>March 07, 2021</span>
														</li>
														<li>
															<span class="first">Share</span>
															<ul class="share">
																<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt=""></a></li>
																<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt=""></a></li>
																<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt=""></a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
											<div class="additional_images">
												<ul>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="img/thumbs/4-2.jpg" alt="">
																<div class="main" data-img-url="img/portfolio/1.jpg"></div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="img/thumbs/4-2.jpg" alt="">
																<div class="main" data-img-url="img/portfolio/2.jpg"></div>
															</div>
														</div>
													</li>
													<li>
														<div class="list_inner">
															<div class="my_image">
																<img src="img/thumbs/4-2.jpg" alt="">
																<div class="main" data-img-url="img/portfolio/3.jpg"></div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- /PORTFOLIO -->
			
			<!-- SERVICES -->
			<div id="service" class="know_tm_main_section">
				<div class="know_tm_services">
					<div class="know_tm_main_title">
						<span>Service</span>
						<h3>Never compromise with quality</h3>
					</div>
					<div class="service_list">
						<ul>
							<li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="img/svg/squares.svg" alt=""></span>
									<h3 class="title">Wireframing</h3>
									<p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
									<a class="know_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="img/thumbs/4-2.jpg" alt="">
												<div class="main" data-img-url="img/service/1.jpg"></div>
											</div>
											<div class="description">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="img/svg/physics.svg" alt=""></span>
									<h3 class="title">Prototype</h3>
									<p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
									<a class="know_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="img/thumbs/4-2.jpg" alt="">
												<div class="main" data-img-url="img/service/2.jpg"></div>
											</div>
											<div class="description">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="img/svg/web.svg" alt=""></span>
									<h3 class="title">UI Design</h3>
									<p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
									<a class="know_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="img/thumbs/4-2.jpg" alt="">
												<div class="main" data-img-url="img/service/3.jpg"></div>
											</div>
											<div class="description">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="img/svg/user.svg" alt=""></span>
									<h3 class="title">Personal Creation</h3>
									<p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
									<a class="know_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="img/thumbs/4-2.jpg" alt="">
												<div class="main" data-img-url="img/service/4.jpg"></div>
											</div>
											<div class="description">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="img/svg/briefcase.svg" alt=""></span>
									<h3 class="title">Case Study</h3>
									<p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
									<a class="know_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="img/thumbs/4-2.jpg" alt="">
												<div class="main" data-img-url="img/service/5.jpg"></div>
											</div>
											<div class="description">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="list_inner">
									<span class="icon"><img class="svg" src="img/svg/writing_2.svg" alt=""></span>
									<h3 class="title">Experience Design</h3>
									<p class="text">Web development is the building and maintenance of websites. it’s the work that...</p>
									<a class="know_tm_full_link" href="#"></a>
									<div class="hidden_content">
										<div class="service_informations">
											<div class="image">
												<img src="img/thumbs/4-2.jpg" alt="">
												<div class="main" data-img-url="img/service/6.jpg"></div>
											</div>
											<div class="description">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /SERVICES -->
			
			<!-- TESTIMONIALS -->
			<div id="testimonials" class="know_tm_main_section">
				<div class="know_tm_testimonials">
					<div class="know_tm_main_title">
						<span>Testimonials</span>
						<h3>What people say about me</h3>
					</div>
					<div class="testimonials_list owl-carousel owl-theme">
						<div class="list_inner">
							<div class="in">
								<div class="text">
									<p>These people really know what they are doing! Great customer support availability and supperb kindness. I am very happy that I've purchased this liscense!!!</p>
								</div>
								<div class="details">
									<div class="left">
										<div class="avatar">
											<div class="main" data-img-url="img/testimonials/1.jpg"></div>
										</div>
										<div class="info">
											<h3>Jecob Oramson</h3>
											<span>Designer</span>
										</div>
									</div>
									<div class="right">
										<img class="svg" src="img/svg/left-quote.svg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="list_inner">
							<div class="in">
								<div class="text">
									<p>The design is elegant. The customer support on this product is also amazing. I would highly recommend you to purchase templates from the Marketify team!</p>
								</div>
								<div class="details">
									<div class="left">
										<div class="avatar">
											<div class="main" data-img-url="img/testimonials/2.jpg"></div>
										</div>
										<div class="info">
											<h3>Kerry Hudson</h3>
											<span>IBO. Corp</span>
										</div>
									</div>
									<div class="right">
										<img class="svg" src="img/svg/left-quote.svg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="list_inner">
							<div class="in">
								<div class="text">
									<p>Not only was customer support very fast, but the design is very professional. Will definitely be looking for new products in the future from this author.</p>
								</div>
								<div class="details">
									<div class="left">
										<div class="avatar">
											<div class="main" data-img-url="img/testimonials/3.jpg"></div>
										</div>
										<div class="info">
											<h3>Albert Walker</h3>
											<span>Singer</span>
										</div>
									</div>
									<div class="right">
										<img class="svg" src="img/svg/left-quote.svg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="list_inner">
							<div class="in">
								<div class="text">
									<p>The Author had done a great job, it's clean and easy to understand the code. Comment blocks made it really easy to read the code.</p>
								</div>
								<div class="details">
									<div class="left">
										<div class="avatar">
											<div class="main" data-img-url="img/testimonials/4.jpg"></div>
										</div>
										<div class="info">
											<h3>Arnold Hookins</h3>
											<span>Photographer</span>
										</div>
									</div>
									<div class="right">
										<img class="svg" src="img/svg/left-quote.svg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="list_inner">
							<div class="in">
								<div class="text">
									<p>I can't believe I got support and my problem resolved in minutes from posting my question. Simply amazing team and amazing theme! Thank you!</p>
								</div>
								<div class="details">
									<div class="left">
										<div class="avatar">
											<div class="main" data-img-url="img/testimonials/5.jpg"></div>
										</div>
										<div class="info">
											<h3>Aura Brooklyn</h3>
											<span>Fashion Model</span>
										</div>
									</div>
									<div class="right">
										<img class="svg" src="img/svg/left-quote.svg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /TESTIMONIALS -->
			
			<!-- NEWS -->
			<div id="news" class="know_tm_main_section">
				<div class="know_tm_news">
					<div class="know_tm_main_title">
						<span>Blog</span>
						<h3>Latest tips, tricks &amp; Updates</h3>
					</div>
					<div class="news_list">
						<ul>
							<li>
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/37-27.jpg" alt="">
										<div class="main" data-img-url="img/news/1.jpg"></div>
										<a class="know_tm_full_link" href="#"></a>
									</div>
									<div class="details">
										<span class="category"><a href="#">Web Design</a></span>
										<h3 class="title"><a href="#">How to create a website using WordPress</a></h3>
									</div>
									
									<div class="hidden_content">
										<div class="news_informations">
											<div class="text">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
									
								</div>
							</li>
							<li>
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/37-27.jpg" alt="">
										<div class="main" data-img-url="img/news/2.jpg"></div>
										<a class="know_tm_full_link" href="#"></a>
									</div>
									<div class="details">
										<span class="category"><a href="#">Branding</a></span>
										<h3 class="title"><a href="#">Angular team streamlines requests</a></h3>
									</div>
									
									<div class="hidden_content">
										<div class="news_informations">
											<div class="text">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
									
								</div>
							</li>
							<li>
								<div class="list_inner">
									<div class="image">
										<img src="img/thumbs/37-27.jpg" alt="">
										<div class="main" data-img-url="img/news/3.jpg"></div>
										<a class="know_tm_full_link" href="#"></a>
									</div>
									<div class="details">
										<span class="category"><a href="#">UI Design</a></span>
										<h3 class="title"><a href="#">How to handle errors in React Javascript</a></h3>
									</div>
									
									<div class="hidden_content">
										<div class="news_informations">
											<div class="text">
												<p>Know is a leading web design agency with an award-winning design team that creates innovative, effective websites that capture your brand, improve your conversion rates, and maximize your revenue to help grow your business and achieve your goals.</p>
												<p>In today’s digital world, your website is the first interaction consumers have with your business. That's why almost 95 percent of a user’s first impression relates to web design. It’s also why web design services can have an immense impact on your company’s bottom line.</p>
												<p>That’s why more companies are not only reevaluating their website’s design but also partnering with Kura, the web design agency that’s driven more than $2.4 billion in revenue for its clients. With over 50 web design awards under our belt, we're confident we can design a custom website that drives sales for your unique business.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /NEWS -->
			
			<!-- CONTACT -->
			<div id="contact" class="know_tm_main_section">
				<div class="know_tm_contact">
					<div class="know_tm_main_title">
						<span>Contact Me</span>
						<h3>Contact me to get your work done</h3>
					</div>
					<div class="wrapper">
						<div class="left">
							<ul>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="img/svg/smartphone.svg" alt=""></span>
										<div class="short">
											<h3>Call Me</h3>
											<span>+123 456 7890</span>
										</div>
									</div>
								</li>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="img/svg/letter.svg" alt=""></span>
										<div class="short">
											<h3>Email Us</h3>
											<span><a href="#"><span class="__cf_email__" data-cfemail="365e535a5a59765f5d5859411855595b">[email&#160;protected]</span></a></span>
										</div>
									</div>
								</li>
								<li>
									<div class="list_inner">
										<span class="icon"><img class="svg" src="img/svg/placeholder.svg" alt=""></span>
										<div class="short">
											<h3>Address</h3>
											<span>20, Bardeshi, Amin Bazar</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="right">
							<div class="fields">
								<form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
									<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
									<div class="empty_notice"><span>Please Fill Required Fields</span></div>
									<div class="input_list">
										<ul>
											<li><input id="name" type="text" placeholder="Your Name"></li>
											<li><input id="email" type="text" placeholder="Your Email"></li>
											<li><input id="phone" type="number" placeholder="Your Phone"></li>
											<li><input id="subject" type="text" placeholder="Subject"></li>
										</ul>
									</div>
									<div class="message_area">
										<textarea id="message" placeholder="Your message here"></textarea>
									</div>
									<div class="know_tm_button">
										<a id="send_message" href="#">Submit Now</a>
									</div>

									<!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /CONTACT -->

		</div>
	</div>
	<!-- /MAINPART -->
	
	<!-- COPYRIGHT -->
	<div class="know_tm_copyright hidden">
		<div class="container">
			<div class="inner">
				<div class="left">
					<p>Designed By <?=$data['copyright']?></a></p>
				</div>
				<div class="right">
					<ul>
						<li><a href="#">Terms &amp; Condition</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /COPYRIGHT -->
	
	<!-- MAGIC CURSOR -->
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>
	<!-- /MAGIC CURSOR -->
		
</div>
<!-- / WRAPPER ALL -->
<script><?=$data['googleanil']?></script>	
<!-- SCRIPTS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->	
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<!-- /SCRIPTS -->

</body>
</html>