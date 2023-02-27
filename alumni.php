<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="images/ednas-logo.ico" type="image/x-icon"/>
  <title>Ednas School</title>
   <!-- SNIMATED TEXT CSS -->
  <link href="css/animated-text.css" rel="stylesheet">
  <!-- Chosen CSS -->
  <link href="css/chosen.min.css" rel="stylesheet">
  <!-- Chosen CSS -->
  <link href="css/login-register.css" rel="stylesheet">
  <!-- Swiper Slider CSS -->
  <link href="css/flexslider.css" rel="stylesheet">
  <!-- Pretty Photo CSS -->
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <!-- Swiper Slider CSS -->
  <link href="css/swiper.css" rel="stylesheet">
  <!-- Custom Main StyleSheet CSS -->
  <link href="style.css" rel="stylesheet">
  <!-- Color CSS -->
  <link href="css/color-2.css" rel="stylesheet">
  <link href="css/color.css" rel="stylesheet">
  <!-- Typography StyleSheet CSS -->
  <link href="css/typography-02.css" rel="stylesheet">
  <!-- Responsive CSS -->
  <link href="css/responsive.css" rel="stylesheet">
  
  </head>

<body>
  <!--gt Wrapper Start-->  
  <div class="gt_wrapper">
    <!--Header Wrap Start-->
    <header class="gt_hdr2_wrap">
      <div class="gt_top2_wrap default_width">
        <div class="container">
          <div class="gt_top_element">
            <ul>
              <li><a href="student-resources.php">Student</a></li>
              <li><a href="meet-our-teacher.php">Faculty Staff</a></li>
              <!--<li><a href="parents-resources.php">Parents</a></li>-->
              <li><a href="alumni.php">Alumni</a></li>
            </ul>
          </div>
          <!--<div class="gt_hdr_2_ui_element">
            <ul>
				<input type="hidden" id="cUser" value="<?php echo $_SESSION["user"][0][0];?>">
				<li><i id ="login_lock"></i><a id="login_index">Login</a></li>
              
            </ul>
          </div>
          <div class="gt_login_element">
            
          </div>-->
        </div>
      </div>
	  
	  
      <div class="gt_menu_bg default_width">
        <div class="container">
          <!--Logo Wrap Start-->
          <div class="gt_logo">
            <a href="#"><img src="images/ednas_logo_3.jpg" alt=""></a>
          </div>
          <!--Logo Wrap End-->
          <!--Search Wrap Start-->
          <div class="gt_search_wrap">
            <span class="search-fld"><i class="fa fa-search"></i></span>
              <div class="search-wrapper-area">
                 <form class="search-area" id="search-form" name="search-form" method="get" action="search.php">
                      <input type="text" name="search" placeholder="Search Here"/>
                      <input type="submit" value="Go"/>
                  </form>
                  <span class="gt_search_remove_btn"><i class="fa fa-remove"></i></span>
              </div>
          </div>
          <!--Search Wrap End-->
          <!--Navigation Wrap Start-->
          <nav class="gt_navigation2">
            <button class="gt_mobile_menu" style="background-color:#0070bb;">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <ul style="background-color:#ffffff;">
             <li><a href="index.php">Home</a>
                
              </li>
              <li><a href="about.php">About</a></li>
              <li><a href="admissions.php">Admissions</a>
                <ul>
                  <li><a href="admissions.php#admissions_policies">Admissions Policies</a></li>
				  <li><a href="admissions.php#admissions_process">Admissions Process</a></li>
                  <li><a href="admissions.php#enrollment_process">Enrollment Process</a></li>
				  <li><a href="admissions.php#school_fees">School Fees</a></li>
				  <li><a href="admissions.php#faqs">Frequently Asked Questions</a></li>
                  
                </ul>
              </li>
              <li><a href="academics.php">Academics</a>
                <ul>
					<li><a href="academics.php#educational_philosophy">Educational Philosophy</a></li>
					<li><a href="academics.php#school_profile">School Profile</a></li>
					<li><a href="academics.php#school_characteristics">School Characteristics</a></li>
					<li><a href="academics.php#school_minority">School Minority</a></li>
					<li><a href="academics.php#students_accepted_in_colleges&universities">COLLEGES/UNIVERSITIES TO WHICH OUR STUDENTS HAVE BEEN ACCEPTED</a></li>
					<li><a href="academics.php#students_accepted_in_grade&highschool">GRADE SCHOOLS AND HIGH SCHOOLS TO WHICH OUR STUDENTS HAVE BEEN ACCEPTED</a></li>  
                  
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">Campuses</a>
                <ul>
					<li><a href="virtual-campus-tour.php">Virtual Campus Tour</a></li>
					<li><a href="dagupan.php">Dagupan</a></li>
					<li><a href="san-carlos.php">San Carlos</a></li>
					<li><a href="alaminos.php">Alaminos</a></li>
					<li><a href="campus-blog.php">Campus Blog</a></li>
                 
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">School</a>
                <ul>
					<li><a href="academic-calendar.php">Academic Calendar</a></li>
					<li><a href="student-resources.php">Student Resources</a></li>
					<!--<li><a href="login-register.html" id="parents_resources">Parents Resources</a></li>-->
					<li class="active"><a href="#">Alumni</a></li>
					<li><a href="meet-our-teacher.php">Meet Our Teachers</a></li>
					<li><a href="digital-citizenship-program.php">Digital Citizenship Program</a></li>
                 
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">News & Media</a>
                <ul>
					<li><a href="latest-news.php">Latest News</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="social-media-feeds.php">Social Media Accounts</a></li>
					<li><a href="gallery.php">Gallery</a></li>
                  
                </ul>
				
              </li>
              
			  <li><a href="contact-us.php">Contact Us</a></li>
            </ul>
          </nav>
          <!--Navigation Wrap End-->
        </div>
      </div>
    
	
	</header>
    <!--Header Wrap End-->

    <!--Sub Banner Wrap Start -->
    <div class="gt_sub_banner_bg default_width">
        
		<div class="container">
			<div class="gt_sub_banner_hdg default_width" >
			
                <h2>Alumni</h2>
                <h6>Welcome To Ednas School</h6>
            </div>
        </div>
    </div>
    <!--Sub Banner Wrap End -->
    <!--Breadcrumb Wrap End -->
    <div class="gt_breadcrumb_bg default_width">
      <div class="container">
        <div class="gt_breadcrumb_wrap default_width">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Alumni</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      
	  <!--Alumni Policies Wrap Start-->
	  <a name="admissions_policies">
      <section class="gt_who_we_bg">
        <div class="container">
          <div class="row">
            <!--<div class="col-md-5">
              <div class="gt_who_we_img default_width">
                <img src="images/ednas_logo_about_us.jpg" alt="">
              </div>
            </div>-->
            <div class="col-md-12">
              <div class="gt_who_we_wrap default_width">
                <!--<h5>Who We Are</h5>-->
                <h3>EDNASIANS ACCEPTED IN THE FOLLOWING COLLEGES / UNIVERSITIES</h3>
                <span class="gt_hdg_left"></span>
					<h5 style="margin-left:10px;">SY 2014-2015</h5>
					
						<table style="margin-left:10px;" class="table_alumni">
							<tr>
								<td class="col-md-3">
									1.	Air Link International College
								</td>
								
								<td class="col-md-3">
									1
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									2.	Ateneo de Manila University
								</td>
								
								<td class="col-md-3">
									4
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									3.	Centro Escolar University
								</td>
								
								<td class="col-md-3">
									25
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									4.	De La Salle Health Sciences Institute
								</td>
								
								<td class="col-md-3">
									1
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									5.	Enderun College
								</td>
								
								<td class="col-md-3">
									2
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									6.	Far Eastern University
								</td>
								
								<td class="col-md-3">
									2
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									7.	Mapua Institute
								</td>
								
								<td class="col-md-3">
									4
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									8.	San Beda College
								</td>
								
								<td class="col-md-3">
									2
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									9.	Saint Louis University
								</td>
								
								<td class="col-md-3">
									86
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									10.	University of the East
								</td>
								
								<td class="col-md-3">
									39
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									11.	University of the Philippines
								</td>
								
								<td class="col-md-3">
									9
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									12.	University of Santo Tomas
								</td>
								
								<td class="col-md-3">
									34
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									13.	WCC Aeronautical and Technological College
								</td>
								
								<td class="col-md-3">
									28
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									14.	De La Salle University
								</td>
								
								<td class="col-md-3">
									10
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									15.	Philippine Merchant Marine Academy
								</td>
								
								<td class="col-md-3">
									1
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
						</table>
					
					<h5 style="margin-left:10px;">PHILIPPINE SCIENCE HIGH SCHOOL</h5>
						<table style="margin-left:10px;" class="table_alumni">
							
							<tr>
								<td class="col-md-3">
									SY 2014 – 2015
								</td>
								
								<td class="col-md-3">
									5
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									SY 2015 – 2016
								</td>
								
								<td class="col-md-3">
									10
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
							<tr>
								<td class="col-md-3">
									SY 2016 – 2017
								</td>
								
								<td class="col-md-3">
									13
								</td>
								<td class="col-md-3">
								</td>
								<td class="col-md-3">
								</td>
							</tr>
							
						</table>

				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--Alumni Wrap End-->

     
    </div>
    <!--Main Content Wrap End-->

    <!--Footer Wrap Start-->
    <footer>
      <!--Newletter Wrap Start-->
	  
      <div class="gt_newsletter02_bg default_width">
        <div class="container">
          <div class="row">
			 <div id="contact-result">
                  </div>
            <div class="col-md-4">
              <div class="gt_newslettr_hdg default_width">
                <h3>Subscribe</h3>
				<h6> to our Email Announcements</h6>
              </div>
            </div>
            <div class="col-md-8">
              <div class="gt_newsletter_form default_width">
                <form>
                  <input type="text" class="p_sub" id="subscriber" name="subscriber" placeholder="Enter Your E-Mail Address" required>
                  <button type="button" id="btn_subscribe"><i class="fa fa-send"></i></button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Newletter Wrap End-->

      <!--Footer List Wrap Start-->
      <div class="gt_footer2_bg default_width" style="background-color:#ffffff;">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="gt_foo_logo_wrap default_width">
                <a href="#"><img src="images/ednas-logo.jpg" alt=""></a>
                  <p style="color:#0070bb;">Ego Sum, Ergo, Apprehensus Sum<br>
						I Am, Therefore I Can Learn</p>
                  <!--<span><a href="#">Read More</a></span>-->
                  <ul class="gt_scl_icon">
                    <li><a class="bg_fb" href="https://www.facebook.com/groups/ednasofficial"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="bg_twitter" title="@ednasofficial" href="https://twitter.com/search?q=%40ednasofficial&src=typd"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="bg_instagram"  title="@ednasofficial" href="https://www.instagram.com/ednasofficial"><i class="fa fa-instagram"></i></a></li>
					<li><a class="bg_youtube" href="https://www.youtube.com/channel/UCIjeT6_6e6bcF2vwV-AMtNw"><i class="fa fa-youtube-play"></i></a></li>
					
                  </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="gt_foo2_link gt_widget2_hdg">
                  <h5 style="color:#0070bb;">Quick links</h5>
                  <ul >
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="admissions.php">Admissions</a></li>
                      <li><a href="academics.php">Academics</a></li>
                      
                      <li><a href="social-media-feeds.php">Social Media Accounts</a></li>
					  <li><a href="gallery.php">Gallery</a></li>
					  <!--<li><a href="parents-resources.php">Parents Resources</a></li>-->
                      <li><a href="contact-us.php">Contact Us</a></li>
                      <li><a href="academic-calendar.php">Calendar</a></li>
                  </ul>
                  <ul>
					  
					  <li><a href="alumni.php">Alumni</a></li>
                      <li><a href="meet-our-teacher.php">Meet Our Teachers</a></li>
                      <li><a href="campus-blog.php">Campus Blog</a></li>
                      <li><a href="virtual-campus-tour.php">Virtual Campus Tour</a></li>
					  <li><a href="dagupan.php">Dagupan</a></li>
                      <li><a href="san-carlos.php">San Carlos</a></li>
                      <li><a href="alaminos.php">Alaminos</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="gt_foo_news gt_widget2_hdg">
                <h5 style="color:#0070bb;">Latest News</h5>
                <ul>
				<?php
						include ("php/news.php");
					?>
                </ul>
				</div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="gt_widget2_hdg">
                <h5 style="color:#0070bb;">Contact Us</h5>
                <ul class="gt_team1_contact_info">
                  <li>EDNAS SCHOOL<br>Tapuac Dist., Dagupan City, 2400 Pangasinan<br>(075) 522-2440<br>dagupan@ednasschool.edu.ph</li>
                  <li>EDNAS SCHOOL OF SAN CARLOS<br>Roxas Blvd., San Carlos City, 2420 Pangasinan<br>(075) 532-2385<br>sancarlos@ednasschool.edu.ph</li>
                  <li>EDNAS SCHOOL OF ALAMINOS<br>San Jose Drive, Alaminos City, 2404 Pangasinan<br>(075) 551-2466<br>alaminos@ednasschool.edu.ph</li>
                </ul>
              </div>
            </div>
          </div>

          </div>
      </div>
      <!--Footer List Wrap End-->

      <!--Copyright Wrap End-->
      <div class="gt_copyright_wrap copyright2_bg">
        <div class="container">
            <div class="gt_copyright_des">  
                <p>Copyright © <a href="#">Ednas School </a> 2017. All rights reserved.</p>
                <!--<span>Created by: <a href="#">2goodtheme.com</a></span>-->
              </div>
          </div>
      </div>
      <!--Copyright Wrap Start-->
    </footer>
    
	<!--Footer Wrap End-->

    <!--Back to Top Wrap Start-->
    <div class="back-to-top">
        <a href="#home"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--Back to Top Wrap Start-->
    
  </div>
  <!--gt Wrapper End-->

  <!--Jquery Library-->
  <script src="js/jquery.js"></script>
  <!--Bootstrap core JavaScript-->
  <script src="js/bootstrap.min.js"></script>
  <!--Pretty Photo JavaScript-->
  <script src="js/jquery.prettyPhoto.js"></script>
  <!--Flex Slider JavaScript-->
  <script src="js/jquery.flexslider-min.js"></script>
  <!--Chosen JavaScript-->
  <script src="js/waypoints-min.js"></script>
  <!--Owl Carousel JavaScript-->
  <script src="js/owl.carousel.js"></script>
  <!--Accordian Javascript-->
  <script src="js/jquery.accordion.js"></script>
  <!--Custom JavaScript-->
  <script src="js/custom.js"></script>

  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <script src="js/index.js"></script>
</body>
</html>
