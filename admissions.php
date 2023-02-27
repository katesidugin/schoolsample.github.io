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
              <li class="active"><a href="javascript:avoid(0);">Admissions</a>
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
			    <h2>Admissions</h2>
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
                <li><a href="#">Admissions</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      
	  <!--Admissions Policies Wrap Start-->
	  <a name="admissions_policies">
      <section class="gt_who_we_bg">
        <div class="container">
          <div class="row">
           
            <div class="col-md-12">
              <div class="gt_who_we_wrap default_width">
                <!--<h5>Who We Are</h5>-->
                <h3>Admissions policies</h3>
                <span class="gt_hdg_left"></span>
					<h5 style="margin-left:10px;">Admission for New Students and Transferees</h5>
					<p style="margin-left:10px;">Application for admission is scheduled on:<br>
						DATE : <b>January 2017 ONWARDS UNTIL ALL SLOTS ARE FILLED – UP</b><br>
						TIME : <b>8:00 a. m. to 12:00 noon and 1: 30p.m. to 4:30 p.m. (Monday to Friday)</b><br>
						VENUE : <b>Guidance Office, Ednas School, Dagupan City<br>
									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Guidance Office, Ednas School of San Carlos, San Carlos City<br>
									&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Guidance Office, Ednas School of Alaminos, Alaminos City</b><br><br>
						
						<div class="col-md-6" style="color:#000000;">
						<b>A.	Who are qualified to apply:</b><br>

						<b style="margin-left:50px;">FOR NURSERY</b><br>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp •	At least 3 to 3.5 years old on or before 1 August 2017.<br><br>

						<b style="margin-left:50px;">FOR KINDERGARTEN</b><br>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp •	At least 4 to 4.5 years old on or before 1 August 2017.<br><br>

						<b style="margin-left:50px;">FOR PREPARATORY</b><br>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp •	At least 5 to 5.5 years old on or before 1 August 2017.<br><br>
						</div>
						
						<div class="col-md-6" style="color:#000000;">
						<b>B.	Requirements:</b><br>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 1.	NSO copy or Certified True Copy of Birth Certificate<br>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 2.	Medical Certificate and/or Psychological Assessment<br>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 3.	Passed the personal interview and assessment of the Guidance Counselor, Pre-School Faculty or School Administrators.<br><br><br>
						<b>NOTE:</b><br>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp •	Assessment Result will be given immediately.
						</div>

					</p>
					
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--Admissions Policies Wrap End-->

      <!--Admissions Process Wrap Start-->
	  <a name="admissions_process">
      <section class="gt_campus_bg">
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
                <h3>Admissions Process</h3>
                <span class="gt_hdg_left"></span>
					<h5 style="margin-left:10px;">Application Requirements and Procedures:</h5>
					<p style="margin-left:10px; color:#000000;"><b>Incoming Grade 1</b><br>
					1.	At least 6 years old on or before 1 August 2017.<br>
					2.	Must present original and photocopy of the report card for the last completed school year (SY 2016-2017)<br>
					3.	Must present original and photocopy of Birth Certificate (NSO)<br>
					4.	If applicant is NOT a Filipino citizen, submit a photocopy of the following:<br>
					&nbsp &nbsp &nbsp a.	Alien Certificate of Registration ( ACR), and<br>
					&nbsp &nbsp &nbsp b.	A Special Study Permit issued by the Bureau of Immigration.<br>
					5.	If Applicant has DUAL citizenship, submit a photocopy of your Philippine Passport or a Certificate of Recognition as a Filipino Citizen.<br>
					6.	Submit a Medical Certificate and/or Psychological Assessment<br>
					7.	Passed the Ednas School Entrance Exam<br>
					8.	Testing Fee of Two Hundred Fifty Pesos ( Php 250.00) – non-refundable
					</p>
					
					<p style="margin-left:10px;"><b>Admission of Transferees to Grades 2, 3, 4, 5, 6, 7,8 ,9 ,10, 11</b><br>
					Applicants to Ednas School Dagupan, Ednas School of San Carlos, and Ednas School of Alaminos must come from any recognized school in the Philippines or abroad and must meet the following requirements:<br>
					1.	Obtain Application Form from the Registrar’s Office/Guidance Office.<br>
					&nbsp &nbsp Return the accomplished form to the Registrar’s Office/Guidance Office with the following:<br>
					&nbsp &nbsp &nbsp a.	Original and Photocopy of Report Card (Form 138) with the confirmation for Promotion by the School Principal or Director<br>
					&nbsp &nbsp &nbsp b.	Photocopy of Birth Certificate (PSA/NSO)<br>
					&nbsp &nbsp &nbsp c.	Photocopy of Certificate of honor (Valedictorian)<br>
					&nbsp &nbsp &nbsp d.	ESC Certification (applicable for ESC Grantees only)<br>
					&nbsp &nbsp &nbsp e.	Certificate of Good Moral Character<br>
					&nbsp &nbsp &nbsp f.	Medical Certificate and/or Psychological Assessment<br>
					&nbsp &nbsp &nbsp g.	ESC Certification (applicable for ESC Grantees only)<br>
					&nbsp &nbsp &nbsp h.	Passed the Ednas School Entrance Exam<br>
					&nbsp &nbsp &nbsp i.	Testing Fee of Two Hundred Fifty Pesos (Php 250.00) – non-refundable<br>
					<center style="color:#000000;"> Acceptance for Grade 12 students is on a case to case basis. </center>
					</p>
					
					<p style="margin-left:10px;"><b>Scholarships and Grants Offered</b><br>
					1.	ESC Grantees with Php 8,500.00 (For Grades 7-9 only)<br>
					2.	SHS VP Grantees with Php 14,000.00 (for Grades 11-12)<br>
					3.	Discount on Tuition Fee for First and Second in Over-all Rank<br>
					4.	Sibling Discount<br>
					5.	Alumni Discount
					</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--Admissions Process Wrap End-->

      <!--Enrollment Process Wrap Start-->
	  <a name="enrollment_process">
      <section>
       <div class="container">
          <div class="row">
           
            <div class="col-md-12">
              <div class="gt_who_we_wrap default_width">
                <!--<h5>Who We Are</h5>-->
                <h3>Enrollment Process</h3>
                <span class="gt_hdg_left"></span>
				<h5 style="margin-left:10px;">Student who attended summer classes:</h5>
				<p style="margin-left:10px;">
					Step 1:	Please proceed to Room 1 for orientation of basic school and security rules. Read the Rules and Regulations, Calendar of School Activities, Dismissal Times, etc.<br>
					Step 2:	Must present the summer grade to the School Registrar.<br>
					Step 3:	Get your enrolment form/s from the School Registrar.<br> 	
					Step 4:	Fill up the enrolment form/s neatly and completely.<br>
					Step 5:	Submit your assessed enrolment form/s in the Office. Take your seat on the chairs located at the shed and wait for your number to be called.<br>
					Step 6:	Secure list of tuition and other fees, things needed, sketch of uniform and diploma in Room 1.<br>
					Step 7:	Submit your enrolment form/s for assessment.<br>
					Step 8:	Proceed to the Cashier's Office and pay.<br>	
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Note: We only accept CASH or DATED CHECKS.<br>
					Step 9:	Get your fetcher's pass/parent's pass/gate pass from the office.<br>
					Step 10:	Get your class schedule (AM/PM) from the Principal's Admission Desk (Office).<br>
					Step 11:	Registration Card (Principal's copy) to be submitted to the computer teachers for encoding/updating of student's information.<br>
					<center style="color:#000000;">
						NO SHORT CUTS PLEASE.<br>			
						FIRST COME, FIRST SERVE BASIS.<br>
						PLEASE BE GUIDED ACCORDINGLY.<br>		
						THANK YOU VERY MUCH.

					</center>
				</p>
				
				<h5 style="margin-left:10px;">New Student:</h5>
				<p style="margin-left:10px;">
					Step 1:	Please proceed to Room 1 for orientation of basic school and security rules. Read the Rules and Regulations, Calendar of School Activities, Dismissal Times, etc.<br>
					Step 2:	Pre-school:<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp - must present original and photocopy of Birth Certificate to the School Registrar.<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbspGrade School/High School:<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp - must present the result of Entrance Examination to the School Registrar.<br>
					Step 3:	Get your enrolment form/s from the School Registrar.<br>
					Step 4:	Fill up the enrolment form/s neatly and completely.<br>
					Step 5:	Proceed to the Office for Enrolment Form/s checking.<br>
					Step 6:	Secure list of tuition and other fees, things needed, sketch of uniform and diploma in Room 1.<br>
					Step 7:	Submit your assessed enrolment form/s in the Office. Take your seat on the chairs located at the shed and wait for your number to be called.<br>
					Step 8:	Proceed to the Cashier's Office and pay.<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Note: We only accept CASH or DATED CHECKS.<br>
					Step 9:	Get your fetcher's pass/parent's pass/gate pass from the office.<br>
					Step 10: Get your class schedule (AM/PM) from the Principal's Admission Desk (Office).<br>
					Step 11: Registration Card (Principal's copy) to be submitted to the computer teachers for encoding/updating of student's information.<br>

					<center style="color:#222222;">
						NO SHORT CUTS PLEASE.<br>			
						FIRST COME, FIRST SERVE BASIS.<br>
						PLEASE BE GUIDED ACCORDINGLY.<br>		
						THANK YOU VERY MUCH.

					</center>
				</p>
				
				<h5 style="margin-left:10px;">Old Student: (Pre-School/Grade School/Junior High School/Senior High School)</h5>
				<p style="margin-left:10px;">
					Step 1:	Please proceed to Room 1 for orientation of basic school and security rules. Read the Rules and Regulations, Calendar of School Activities, Dismissal Times, etc.<br>
					Step 2:	Get the card of your child/children from the Office.<br>
					Step 3:	Get your enrolment form/s from the School Registrar.<br>	 	
					Step 4:	Fill up the enrolment form/s neatly and completely.<br>
					Step 5:	Secure list of tuition and other fees, things needed, sketch of uniform and diploma in Room 1.<br>
					Step 6:	Submit your enrolment form/s for assessment in the Office.<br>
					Step 7:	Submit your assessed enrolment form/s in the Office. Take your seat on the chairs located at the shed and wait for your number to be called.<br>
					Step 8:	Proceed to the Cashier's Office and pay.<br>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Note: We only accept CASH or DATED CHECKS.<br>
					Step 9:	Get your fetcher's pass/parent's pass/gate pass from the office.<br>
					Step 10: Get your class schedule (AM/PM) from the Principal's Admission Desk (Office).<br>
					Step 11: Registration Card (Principal's copy) to be submitted to the computer teachers for encoding/updating of student's information.<br>

					<center style="color:#222222;">
						NO SHORT CUTS PLEASE.<br>			
						FIRST COME, FIRST SERVE BASIS.<br>
						PLEASE BE GUIDED ACCORDINGLY.<br>		
						THANK YOU VERY MUCH.

					</center>
				</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--Enrollment Process Wrap End-->
		
		<!--School Fees Wrap Start-->
		<a name="school_fees">
      <section class="gt_campus_bg">
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
                <h3>School Fees</h3>
                <span class="gt_hdg_left"></span>
				<br>
				
				<center><img src="images/contact_us_b.png" alt=""></center>
				<h5 class="text-center" style="text-transform:none;">Please contact us for the latest information on our school tuition and fees.<br>Thank you.</h5>
				
               
				</div>
            </div>
          </div>
        </div>
      </section>
		</a>
	  <!--School Fees Wrap End-->
	  
	   <!--Faqs Wrap Start-->
      <a name="faqs">
	  <section>
		
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
                <h3>Frequently Asked Questions</h3>
                <span class="gt_hdg_left"></span>
				<h5 class="text-center" style="text-transform:none;">Come back soon for updates.</h5>
               
				</div>
            </div>
          </div>
        </div>
		
      </section>
	  </a>
      <!--Faqs Wrap End-->
	  
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
