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
					<!--<li><a href="parents-resources.php">Parents Resources</a></li>-->
					<li><a href="alumni.php">Alumni</a></li>
					<li><a href="meet-our-teacher.php">Meet Our Teachers</a></li>
					<li><a href="digital-citizenship-program.php">Digital Citizenship Program</a></li>
                  
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">News & Media</a>
                <ul>
					<li class="active"><a href="#">Latest News</a></li>
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
			
                <h2>Latest News</h2>
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
                <li><a href="#">Latest News</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
		<!-- LATEST NEWS START -->
			<section> <!-- GRAY BACKGROUND -->
				<div class="container">
				  <!--Course Detail Wrap Start-->
				  <div class="col-md-2"></div>
				  <div class="col-md-8">
					<!-- NEWS NAME FOR LINKS -->
					<a name="news7"></a>
					<div class="gt_cdd_outer_wrap default_width">
					  <figure>
						<!-- DISPLAYED IMAGE FOR NEWS -->
						<img src="images/news7_detail.jpg">
					  </figure>
					  <div class="gt_cd_hdg_wrap default_width">
						<!-- NEWS TITLE -->
						<h5 style="text-transform:none;">Announcement</h5>
						
					  </div>
					  
					  <div class="gt_cd_des_wrap default_width">
						<!-- NEWS CONTENT -->
						<p class="mb20">ANNOUNCEMENT--- For EDNAS School - Dagupan, San Carlos, and Alaminos campuses. Please be guided by the following schedules:</p>

						<p>Scholastic Reading Inventory (SRI) Pre-Test<br>
						&nbsp &nbsp &nbsp &nbsp - Grade 1 - 12<br>
						&nbsp &nbsp &nbsp &nbsp - Monday-Friday, 14-18 August 2018</p>

						<p>Student Leadership Training<br>
						&nbsp &nbsp &nbsp &nbsp - Saturday, 12 August 2017 and Saturday, 19 August 2017</p>
					  </div>
					  
					</div>
					
				  </div>
				  <!--Course Detail Wrap End-->

				 
				</div>
			  </section>
		
		<!-- LATEST NEWS END -->
		
		<section class="gt_courses_bg"> <!-- GRAY BACKGROUND -->
        <div class="container">
          <!--Course Detail Wrap Start-->
		  <div class="col-md-2"></div>
          <div class="col-md-8">
			<!-- NEWS NAME FOR LINKS -->
			<a name="news5"></a>
            <div class="gt_cdd_outer_wrap default_width">
              <figure>
				<!-- DISPLAYED IMAGE FOR NEWS -->
                <img src="images/news5_detail.jpg">
              </figure>
              <div class="gt_cd_hdg_wrap default_width">
				<!-- NEWS TITLE -->
                <h5 style="text-transform:none;">Math-Inic Schedule</h5>
                
              </div>
              
              <div class="gt_cd_des_wrap default_width">
                <!-- NEWS CONTENT -->
                <p class="mb20">The first cycle of the Math-Inic enrichment program – an after-school activity – for the school year 2017-2018 begins on Saturday, 2 September 2017, 8:00 – 10:00 am; 10:00 am – 12:00 nn. Non-Ednasians are most welcome as well to take advantage of this program and enhance their Mathematics potential. A Diagnostic test will be given to new enrollees.</p>
                <p>Schedule during the week: 2 hrs/week – 4:00 – 5:00 pm or 4:30 – 5:30 pm</p>
				<p>Summer Fee/First time: Php 5000/module<br>School Year Fee/ Re-enrollees: Php 4500/module (20 hrs)</p>
				
				<p>Deadline of Payments:<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp First Deadline, 50%           :     Monday – Friday, 29 August 2017 – 1 September 2017<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp Second Deadline, 50%      :     Monday – Friday, 25 – 29 September 2017</p>
              </div>
              
			</div>
			
          </div>
          <!--Course Detail Wrap End-->

         
        </div>
      </section>
		
		
		<section> <!-- WHITE BACKGROUND -->
        <div class="container">
          
		  <div class="col-md-2"></div>
          <div class="col-md-8">
			<a name="news6"></a>
            <div class="gt_cdd_outer_wrap default_width">
              <figure>
                <img src="images/news6_detail.jpg">
              </figure>
              <div class="gt_cd_hdg_wrap default_width">
                <h5 style="text-transform:none;">Pep Week at Ednas Dagupan</h5>
                
              </div>
              
              <div class="gt_cd_des_wrap default_width">
				<div class="col-md-1"></div>
				<div class="col-md-10">
				  <div class="get_started_video">
					  <img src="images/news6_detail.jpg" alt="">
					  <div class="get_video_icon">
						  <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=7gGBMCx-Dik&t=4s"><i class="fa fa-play"></i></a>
						  <span>Watch The Video</span>
					  </div>
				  </div>
				</div>


              </div>
              
			</div>
			
          </div>
          

         
        </div>
      </section>
    
		<section class="gt_courses_bg">
        <div class="container">
          <!--Course Detail Wrap Start-->
		  <div class="col-md-2"></div>
          <div class="col-md-8">
			<a name="news4">
            <div class="gt_cdd_outer_wrap default_width">
              <figure>
                <img src="images/news4_detail.jpg">
              </figure>
              <div class="gt_cd_hdg_wrap default_width">
                <h5 style="text-transform:none;">EDNAS Launches Its New Website and Official Social Media Accounts</h5>
                
              </div>
              
              <div class="gt_cd_des_wrap default_width">
                
                <p class="mb20">EDNAS School actively promotes the appropriate use of technology in education. We recognise the role that social media plays in the development of education and as such, we have launched our official social media platforms further achieve the goals and objectives of our school in light of all the technological advancements today.</p>
                <p class="mb20">Today, August 7th, we officially launch our website and social media accounts in view of our goal to promote traditional but innovative education. Establishing a healthy presence in social media is another step towards internationalization.</p>
				<p class="mb20">However, to ensure that all members of our community are protected, we have policies and guidelines that must be complied with.</p>
				<p class="mb20">BEFORE POSTING and participating in our social media space, please READ THE 2017 TECHNOLOGY CODE OF CONDUCT.</p>
				<p>We aim to create a Culture of Kindness in our social media pages. We encourage everyone to show and promote kindness in all their dealings in our social media community.</p>
				<p>We also encourage a healthy discussion of topics related to our beloved school. To make these discussions orderly and easier to find (for new members, for example), we have devoted THREADS per topic.</p>
				<p>For example, all discussions related to ENROLMENT will be consolidated in one thread only. Posts and other comments about the said topic which is not posted in the dedicated thread shall be deleted.</p>
				<p>We reserve the right to:<br>
					1. Delete posts, messages, and comments which we deem are not compliant with the guidelines;<br>
					2. Block and ban members who violate the posting guidelines and technology code of conduct;<br>
					3. Issue corresponding sanctions as may be allowed by our student handbook for all violations committed in this social media platform;<br>
					Please be reminded that we have zero tolerance for:<br>
					- Cyberbullying<br>
					- Online Libel<br>
					- Identity Theft / Poser Accounts<br>
					- Other cybercrimes</p>
				<p>Any appeals regarding sanctions arising from violations must be raised in the manner provided for in the Handbook and not posted/discussed in any of our Social Media Accounts.</p>
				<p>Again, we encourage everyone to make use of this social media space as a means of creating and promoting a Culture of Kindness in EDNAS SCHOOL.</p>
				<p>Please take note of the following OFFICIAL SOCIAL MEDIA ACCOUNTS of EDNAS School. All other accounts are therefore unofficial and neither affiliated nor authorised by EDNAS:</p>
				<p>Instagram: <a href ="https://www.instagram.com/ednasofficial">www.instagram.com/ednasofficial</a><br>
				Twitter: <a href="https://www.twitter.com/ednasofficial">www.twitter.com/ednasofficial</a><br>
				YouTube Channel: <a href="https://www.youtube.com/channel/UCIjeT6_6e6bcF2vwV-AMtNw">www.youtube.com/channel/UCIjeT6_6e6bcF2vwV-AMtNw</a></p>
				<p>Let us use social media as a tool to further develop our educational programs and never as a portal of negativity.</p>


              </div>
              
			</div>
			</a>
          </div>
          <!--Course Detail Wrap End-->

         
        </div>
      </section>
    
		<section>
        <div class="container">
          <!--Course Detail Wrap Start-->
		  <div class="col-md-2"></div>
          <div class="col-md-8">
			<a name="news1">
            <div class="gt_cdd_outer_wrap default_width">
              <figure>
                <img src="images/news1_detail.jpg">
              </figure>
              <div class="gt_cd_hdg_wrap default_width">
                <h5 style="text-transform:none;">EDNAS School 50th Anniversary Celebration</h5>
                
              </div>
              
              <div class="gt_cd_des_wrap default_width">
                
                <!--<p class="mb20">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
                <p>Tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.Quis autem vel eum iure reprehender.a</p>-->
              </div>
              
			</div>
			</a>
          </div>
          <!--Course Detail Wrap End-->

         
        </div>
      </section>
	  
	  <section class="gt_courses_bg">
        <div class="container">
          <!--Course Detail Wrap Start-->
		  <div class="col-md-2"></div>
          <div class="col-md-8">
			<a name="news2">
            <div class="gt_cdd_outer_wrap default_width">
              <figure>
                <img src="images/news2_detail.jpg">
              </figure>
              <div class="gt_cd_hdg_wrap default_width">
                <h5 style="text-transform:none;">In-Service Training for Teachers</h5>
                
              </div>
              
              <div class="gt_cd_des_wrap default_width">
                
                <!--<p class="mb20">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
                <p>Tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.Quis autem vel eum iure reprehender.a</p>-->
              </div>
              
			</div>
			</a>
          </div>
          <!--Course Detail Wrap End-->

         
        </div>
      </section>
	  
	  <section>
        <div class="container">
          <!--Course Detail Wrap Start-->
		  <div class="col-md-2"></div>
          <div class="col-md-8">
			<a name="news3">
            <div class="gt_cdd_outer_wrap default_width">
              <figure>
                <img src="images/news3_detail.jpg">
              </figure>
              <div class="gt_cd_hdg_wrap default_width">
                <h5 style="text-transform:none;">Robotics Engineering Competition</h5>
                
              </div>
              
              <div class="gt_cd_des_wrap default_width">
                
                <!--<p class="mb20">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi</p>
                <p>Tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.Quis autem vel eum iure reprehender.a</p>-->
              </div>
              
			</div>
			</a>
          </div>
          <!--Course Detail Wrap End-->

         
        </div>
      </section>
    
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
