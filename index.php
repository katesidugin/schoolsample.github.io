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
			<!-- id="parents_resources2"-->
          </div>
          <!--<div class="gt_hdr_2_ui_element">
            <ul>
				<input type="hidden" id="cUser" value="<?php echo $_SESSION["user"][0][0];?>">
			
              <li><i id="login_lock"></i><a id="login_index">Login</a></li>
              
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
            <ul>
              <li class="active"><a href="#">Home</a>
                
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
					<!--<li><a href="parents-resources.php" id="parents_resources">Parents Resources</a></li>-->
					<li><a href="alumni.php">Alumni</a></li>
					<li><a href="meet-our-teacher.php">Meet Our Teachers</a></li>
					<li><a href="digital-citizenship-program.php">Digital Citizenship Program</a></li>
                 
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">News</a>
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

    <!--Banner Wrap Start-->
    <div class="gt_banner default_width">
      <div class="swiper-container" id="swiper-container">
         <ul class="swiper-wrapper">
            <li class="swiper-slide" >
                <img src="images/EDNAS_ALAMINOS.jpg" alt="">
                <div class="gt_banner_text gt_slide_1">
                  <h2 style="font-family: 'EB Garamond', serif;color:#FFD700;">EDNAS SCHOOL OF ALAMINOS</h2>
                  <a id="see_more_alaminos" style="cursor:pointer;">see More<i class="fa fa-arrow-right"></i></a>
                </div>
            </li>
            <li class="swiper-slide">
                <img src="images/EDNAS DAGUPAN.jpg" alt="">
                <div class="gt_banner_text gt_slide_2">
                  <h2 style="font-family: 'EB Garamond', serif; color:#0070bb;">EDNAS SCHOOL</h2>
                  <a id="see_more_dagupan" style="cursor:pointer;">see More<i class="fa fa-arrow-right"></i></a>
                </div>
            </li>
            <li class="swiper-slide">
                <img src="images/EDNAS_SAN_CARLOS.jpg" alt="">
                <div class="gt_banner_text gt_slide_3">
                  <h2 style="font-family: 'EB Garamond', serif; color:#FFD700;">EDNAS SCHOOL OF SAN CARLOS</h2>
                  <a id="see_more_sancarlos" style="cursor:pointer;">see More<i class="fa fa-arrow-right"></i></a>
                </div>
            </li>
			
			
         </ul>
       </div>
      <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
      <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>
    </div>
    <!--Banner Wrap End-->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <!--Services Wrap Start-->
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="get_started_services mb30">
                  <i style="color:#000000" class="icon-classroom-with-students-group-and-the-teacher"></i>
                  <div class="get_icon_des">
                    <h5 style="color:#000000">EXPERT FACULTY & CONSULTANTS</h5>
                  <!--  <p>Diet and health, human osteology,paleopathology epidemiology, human evolution, disease ecology human adaptation, Stable.</p>
                    <a href="#">View More <i class="fa fa-arrow-right"></i></a>-->
                  </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-12">
              <div class="get_started_services mb30">
                  <i  class="fa fa-globe" style="color:#000000"></i>
                  <div class="get_icon_des">
                    <h5 style="color:#000000">DRIVEN TOWARDS INTERNATIONALIZATION</h5>
                    <!--<p>Diet and health, human osteology,paleopathology epidemiology, human evolution, disease ecology human adaptation, Stable.</p>
                    <a href="#">View More <i class="fa fa-arrow-right"></i></a>-->
                  </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-12">
              <div class="get_started_services mb30">
                  <i class="icon-education-1" style="color:#000000"></i>
                  <div class="get_icon_des">
                    <h5 style="color:#000000">TRADITIONAL BUT<br>INNOVATIVE</h5>
                    <!--<p>Diet and health, human osteology,paleopathology epidemiology, human evolution, disease ecology human adaptation, Stable.</p>
                    <a href="#">View More <i class="fa fa-arrow-right"></i></a>-->
                  </div>
              </div>
            </div>
          </div>
		
          <div class="row">
            <div class="col-md-6">
              <div class="get_started_video">
                  <img src="images/welcome.jpg" alt="">
                  <div class="get_video_icon">
                      <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=06na5DPZyBs"><i class="fa fa-play"></i></a>
                      <span>Watch The Video</span>
                  </div>
              </div>
            </div>
		<a name="welcome_to_ednas">
            <div class="col-md-6">
              <div class="get_started_content_wrap ct_blog_detail_des_list">
                  <h3 style="text-transform:none;">Welcome to EDNAS SCHOOL</h3>
                  <p>Ednas School, as an institution in a democracy, is concerned with creating learning opportunities that permit and encourage person to realize his or her fullest potential. 
				  This encompasses the complete formation of the entire man by the progressive and harmonious development of his moral, spiritual, intellectual, social aesthetic, and physical faculties.</p><br><br>
                  <ul>
                    <li style="color:#000000">We are proud of our Traditional but Innovative and Progressive Teaching Methodologies</li>
                      <li style="color:#000000">We take pride in our excellent, holistic, transformative program of education</li>
                      <li style="color:#000000">We are home to Successful Alumni who have made a name for themselves in various fields and industries</li>
                  </ul>
              </div>
            </div>
          </div>
		</a>
        </div>
      </section>
      <!--Services Wrap End-->

      <!--Figures & Facts Wrap Start-->
	  <div class="gt_hdg_1 default_width">
            <h3>EDNAS SCHOOL IN NUMBERS</h3>
			<span class="gt_hdg02_span"></span>
		</div>
      <section class="ct_facts_bg">
		
        <div class="container">
          <ul class="gt_facts2_wrap">
            <li>
                <i class="fa fa-users"  style="color:#0070bb;"></i>
                
				<h3 class="counter">52</h3>
				<span>Dagupan Teachers</span>
				
            </li>
            <li>
                <!--<i class="fa fa-university"></i>
                <h3 class="counter">248</h3>
                <span>Ednasians Accepted in Major Universities<br>(2014 - 2015)</span>-->
				<i class="fa fa-users" style="color:#FFD700;"></i>
				<h3 class="counter">40</h3>
				<span>San Carlos Teachers</span>
				
            </li>
            <li>
                <!--<i class="icon-student"></i>
                <h3 class="counter">28</h3>
                <span>Accepted in Philippine Science High School<br>(2014 – 2017)</span>-->
				<i class="fa fa-users" style="color:#008000;"></i>
				<h3 class="counter">23</h3>
				<span>Alaminos Teachers</span>
            </li>
            
          </ul>
        </div>
      </section>
      <!--Figures & Facts Wrap End-->

      <!--Explore the Courses 02 Wrap Start-->
      <section class="gt_exp_course_bg">
        <div class="container">
          <!--Heading 02 Wrap Start-->
		  <a name="explore_ednas">
          <div class="gt_hdg_1 default_width">
            <h3>Explore Ednas</h3>
            <p>What makes EDNAS School different and a cut above the rest?<br>Our education program is Traditional but Innovative:</p>
            <span class="gt_hdg02_span"></span>
          </div>
		  </a>
          <!--Heading 02 Wrap End-->

          <!--Explore Courses List Wrap Start-->
          <div class="row">
            <div class="col-md-4 col-sm-12">
              <div class="gt_expl_course_wrap exp_course1 default_width">
                <figure>
                  <img src="images/explore2.jpg" alt="">
                  <figcaption class="gt_expl_course_tag exp_course1">Ednas School</figcaption>
                </figure>
                <div class="gt_exp_course_hdg">
                  <i class="fa fa-globe"></i>
                  <h6>Progressive – Open to Global Transformative Education</h6>
                </div>
                <div class="gt_exp_hvr_des">
                  <span><i class="fa fa-globe"></i></span>
                  <h6 style="color:#000000">Progressive – Open to Global Transformative Education</h6>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="gt_expl_course_wrap exp_course2 default_width">
                <figure>
                  <img src="images/explore4.jpg" alt="">
                  <figcaption class="gt_expl_course_tag exp_course2">Ednas School</figcaption>
                </figure>
                <div class="gt_exp_course_hdg">
                  <i class="icon-business"></i>
                  <h6>Leading Towards Internationalization</h6>
                </div>
                <div class="gt_exp_hvr_des">
                  <span><i class="icon-business"></i></span>
                  <h6 style="color:#000000">Leading Towards Internationalization</h6>
                  
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <div class="gt_expl_course_wrap exp_course3 default_width">
                <figure>
                  <img src="images/explore1.jpg" alt="">
                  <figcaption class="gt_expl_course_tag exp_course3">Ednas School</figcaption>
                </figure>
                <div class="gt_exp_course_hdg">
                  <i class="icon-people"></i>
                  <h6>Focused on Professional Development</h6>
                </div>
                <div class="gt_exp_hvr_des">
                  <span><i class="icon-people"></i></span>
                  <h6 style="color:#000000">Focused on Professional Development</h6>
                 
                </div>
              </div>
            </div>
            
            
            
          </div>
          <!--Explore Courses List Wrap End-->

        </div>
      </section>
      <!--Explore the Courses 02 Wrap End-->

      <!--Why Choose Us 02 Wrap Start-->
      <section class="gt_choose02_wrap">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="gt_choose2_slider_wrap flexslider" id="gt_choose2_slider_wrap">
                <ul class="slides">
                  <!--<li>
                    <!--<img src="images/why_choose_us1.jpg" alt="">
                    <div class="get_video_icon">
                      <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=H9QLeO2CPPs"><i class="fa fa-play"></i></a>
                      <span>Watch The Video</span>
                    </div>
                  </li>-->
                  <li>
                    <img src="images/why_choose_us2.jpg" alt="">
					<div class="get_video_icon">
                      <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=9nTC843sj_c"><i class="fa fa-play"></i></a>
                      <span>Watch The Video</span>
                    </div>
                  </li>
                  <!--<li>
                    <img src="extra-images/choose-01.jpg" alt="">
                  </li>
                  <li>
                    <img src="extra-images/choose-01.jpg" alt="">
                  </li>-->
                </ul>
              </div>
               <!--<div class="gt_choose_slider2_thumb flexslider" id="gt_choose2_slider_thumb">
                <ul class="slides">
                 <li>
                    <img src="images/why_choose_us1.jpg" alt="">
					
                  </li>
                  <li>
                    <img src="images/why_choose_us2.jpg" alt="">
                  </li>
                 <!-- <li>
                    <img src="extra-images/choose-01.jpg" alt="">
                  </li>
                  <li>
                    <img src="extra-images/choose-01.jpg" alt="">
                  </li>
                </ul>
              </div>-->
            </div>
			
			<a name="why_choose_us">
            <div class="col-md-6">
              <!--Heading 02 Wrap Start-->
              <div class="gt_hdg_1 default_width align_left">
                <h3>WHY CHOOSE US?</h3>
                <p>We take great care of your children’s present education and prepare immensely<br>for their future career.</p>
                <span class="gt_hdg02_span"></span>
              </div>
			</a>
              <!--Heading 02 Wrap End-->
              <div class="gt_choose2_list_wrap default_width">
                <ul>
                  <li>
                    <div class="gt_choose2_icon">
                      <i class="icon-medal"></i>
                    </div>
                    <div class="gt_chooose_2_list_des">
                      <h6><a href="#">Quality Education</a></h6>
                      <p>Excellent educational programs that are traditional but innovative and leading towards internationalization;</p>
                    </div>
                  </li>
                  <li>
                    <div class="gt_choose2_icon">
                      <i class="icon-teacher-pointing-blackboard"></i>
                    </div>
                    <div class="gt_chooose_2_list_des">
                      <h6><a href="#">Expert Faculty</a></h6>
                      <p>Well-trained Teachers and Professional Development Consultants;</p>
                    </div>
                  </li>
                  <li>
                    <div class="gt_choose2_icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="gt_chooose_2_list_des">
                      <h6><a href="#">Amazing Community</a></h6>
                      <p>Proud home to successful alumni in all fields; <a href="alumni.php" style="color:#0070bb;">Learn more</a> about the exemplary EDNASIANS who have made it to top Philippine universities.</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Why Choose Us 02 Wrap End-->

      <!--Latest News and Events Wrap Start-->
      <section>
        <div class="container">
          <!--Heading 02 Wrap Start-->
		  <a name="latest_news_events">
          <div class="gt_hdg_1 default_width">
            <h3>Latest News &#38; events</h3>
            <!--<p>Aenean commodo ligal geate dolor. Aenan massa. Loren ipsum dolor sit amet,color<br>tetuer adiois elit, aliquam eget nibh etibra</p>-->
            <span class="gt_hdg02_span"></span>
          </div>
		  </a>
          <!--Heading 02 Wrap End-->

          <!-- Event List Wrap Start -->
          <div class="row">
			<!-- START NEWS 1-->
			<div class="col-md-3 col-sm-12">
              <div class="gt_latest_news_wrap default_width" style="height:410px;">
                <figure>
					<!-- IMAGE DISPLAYED ALONG WITH THE AUTHOR AND DATE -->
                    <img src="images/news7.jpg" alt="">
                    <figcaption class="gt_news_figcaption">
                        <ul>
							<!-- IMAGE DISPLAYED WHEN EXPAND ICON IS CLICKED ON THE NEWS IMAGE -->
                            <li><a href="images/news7_expand.jpg" data-rel="prettyPhoto"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="gt_news_des_wrap default_width">
                    <ul class="gt_blog_meta">
					  <!-- AUTHOR -->
                      <li style="color:#000000;"><i class="fa fa-user" style="color:#000000;"></i> By Ednas School</li>
                     
                    </ul>
					
					<ul class="gt_blog_meta">
						<!-- DATE -->
                      <li style="color:#000000;"><i class="fa fa-calendar" style="color:#000000;"></i>Aug 14 2017</li>
                     </ul>
					  <!-- NEWS TITLE -->
                    <h6><a href="latest-news.php#news7" style="text-transform:none;">Announcement</a></h6>
                   
                </div>
              </div>
            </div>
			
			<!-- END NEWS 1-->
			
			<!-- START NEWS 2-->
			<div class="col-md-3 col-sm-12">
              <div class="gt_latest_news_wrap default_width" style="height:410px;">
                <figure>
					<!-- IMAGE DISPLAYED ALONG WITH THE AUTHOR AND DATE -->
                    <img src="images/news5.jpg" alt="">
                    <figcaption class="gt_news_figcaption">
                        <ul>
							<!-- IMAGE DISPLAYED WHEN EXPAND ICON IS CLICKED ON THE NEWS IMAGE -->
                            <li><a href="images/news5_expand.jpg" data-rel="prettyPhoto"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="gt_news_des_wrap default_width">
                    <ul class="gt_blog_meta">
					  <!-- AUTHOR -->
                      <li style="color:#000000;"><i class="fa fa-user" style="color:#000000;"></i> By Ednas School</li>
                     
                    </ul>
					
					<ul class="gt_blog_meta">
						<!-- DATE -->
                      <li style="color:#000000;"><i class="fa fa-calendar" style="color:#000000;"></i>Aug 12 2017</li>
                     </ul>
					  <!-- NEWS TITLE -->
                    <h6><a href="latest-news.php#news5" style="text-transform:none;">Math-Inic Schedule</a></h6>
                   
                </div>
              </div>
            </div>
			
			<!-- END NEWS 2-->
			
			<!-- START NEWS 3-->
			<div class="col-md-3 col-sm-12">
              <div class="gt_latest_news_wrap default_width" style="height:410px;">
                <figure>
					<!-- IMAGE DISPLAYED ALONG WITH THE AUTHOR AND DATE -->
                    <img src="images/news6.jpg" alt="">
                    <figcaption class="gt_news_figcaption">
                        <ul>
							<!-- IMAGE DISPLAYED WHEN EXPAND ICON IS CLICKED ON THE NEWS IMAGE -->
                            <li><a href="images/news6_expand.jpg" data-rel="prettyPhoto"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="gt_news_des_wrap default_width">
                    <ul class="gt_blog_meta">
						<!-- AUTHOR -->
                      <li style="color:#000000;"><i class="fa fa-user" style="color:#000000;"></i> By Ednas School</li>
                     
                    </ul>
					
					<ul class="gt_blog_meta">
						<!-- DATE -->
                      <li style="color:#000000;"><i class="fa fa-calendar" style="color:#000000;"></i>Aug 12 2017</li>
                     </ul>
					 <!-- NEWS TITLE -->
                    <h6><a href="latest-news.php#news6" style="text-transform:none;">Pep Week at Ednas Dagupan</a></h6>
                   
                    
                </div>
              </div>
            </div>
			<!-- END NEWS 3-->
		  
			<!-- START NEWS 4-->
			<div class="col-md-3 col-sm-12">
              <div class="gt_latest_news_wrap default_width" style="height:410px;">
                <figure>
					<!-- IMAGE DISPLAYED ALONG WITH THE AUTHOR AND DATE -->
                    <img src="images/news4.jpg" alt="">
                    <figcaption class="gt_news_figcaption">
                        <ul>
							<!-- IMAGE DISPLAYED WHEN EXPAND ICON IS CLICKED ON THE NEWS IMAGE -->
                            <li><a href="images/news4_expand.jpg" data-rel="prettyPhoto"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </figcaption>
                </figure>
                <div class="gt_news_des_wrap default_width">
                    <ul class="gt_blog_meta">
					  <!-- AUTHOR -->
                      <li style="color:#000000;"><i class="fa fa-user" style="color:#000000;"></i> By Ednas School</li>
                     
                    </ul>
					
					<ul class="gt_blog_meta">
						<!-- DATE -->
                      <li style="color:#000000;"><i class="fa fa-calendar" style="color:#000000;"></i>Aug 07 2017</li>
                     </ul>
						<!-- NEWS TITLE -->
                    <h6><a href="latest-news.php#news4" style="text-transform:none;">EDNAS Launches Its New Website and Official Social Media Accounts</a></h6>
                   
                </div>
              </div>
            </div>
			<!-- END NEWS 4-->
			
          </div>
          <!-- Event List Wrap End -->

        </div>
      </section>
      <!--Latest News and Events Wrap End-->

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
					  <li><a href="alumni.php">Alumni</a></li>
                  </ul>
                  <ul>
					  
					  
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
  <!--Flex Slider JavaScript-->
  <script src="js/jquery.flexslider-min.js"></script>
  <!--Swiper Slider JavaScript-->
  <script src="js/swiper.jquery.min.js"></script>
  <!--Owl Carousel JavaScript-->
  <script src="js/owl.carousel.js"></script>
  <!--Chosen JavaScript-->
  <script src="js/chosen.jquery.min.js"></script>
  <!--Chosen JavaScript-->
  <script src="js/waypoints-min.js"></script>
  <!--Pretty Photo Javascript-->
  <script src="js/jquery.prettyPhoto.js"></script>
  <!-- ANIMATED TEXT JS-->
  <script src="js/animated-text.js"></script>
  <!--Custom JavaScript-->
  <script src="js/custom.js"></script>

  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <script src="js/index.js"></script>
</body>
</html>
