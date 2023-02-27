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
         <!-- <div class="gt_hdr_2_ui_element">
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
              <li class="active"><a href="#">About</a></li>
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
			
                <h2>About</h2>
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
                <li><a href="#">About Us</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <!--Who We Are Wrap Start-->
      <section class="gt_who_we_bg">
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="gt_who_we_img default_width">
                <img src="images/ednas_logo_about_us.jpg" alt="">
              </div>
            </div>
			<a name="about_ednas_school">
            <div class="col-md-7">
              <div class="gt_who_we_wrap default_width">
                <h5>Who We Are</h5>
                <h3>About Ednas School</h3>
                <span class="gt_hdg_left"></span>
                <p>Ednas School, as an institution in a democracy, is concerned with
					creating learning opportunities that permit and encourage person to
					realize his or her fullest potential. This encompasses the complete
					formation of the entire man by the progressive and harmonious
					development of his moral, spiritual, intellectual, social aesthetic, and
					physical faculties.</br></br>
					As an educational community, Ednas School is committed to:</br></br>
					1. Developing in each student a knowledge and love of God through
					integration of values in all subjects.</br>
					2. Developing in each student a social convenience by educating them to
					be creative, imaginative and flexible in coping with problems.</br>
					3. Establishing for each student the highest possible standard of education
					to develop their intellectual and functional skills based on new
					developments and discoveries in the various academic disciplines.</br>
					4. Emphasizing the cultural traditions and values of our social system and
					communicating the wisdom which society has judged to be significant.</br></br>
					Invariably, these commitments are interrelated, but sometimes they are
					in conflict. When conflicts occur and a choice of emphasis is necessary, 
					we support those educational arrangements which deal with significant
					social issues and which treat each student as our responsibility.</p>
				</div>
            </div>
			</a>
          </div>
        </div>
      </section>
      <!--Who We Are Wrap End-->

      <!--Campus History Wrap Start-->
      <section class="gt_campus_bg">
        <div class="container">
          <!--Heading Wrap Start-->
		  <a name="history">
          <div class="gt_hdg_1 default_width">
            <h3>History</h3>
            <p>Fifty years ago, in a rented room at the Pece
				Compound, Tapuac District, Dagupan City, thirty-five
				youngsters met their preschool teacher for the first time.
				Starting their decades of education at an early age, those
				“wriggly whimpery”, wet-nosed kids unaware that before their
				very eyes, history was unfolding.<br><br>
				One of today’s best institutions evolved from such humble
				beginnings. In 1966, when Filipino women were just starting
				to make their presence felt in this traditionally maledominated
				society, Edna Torio, aged twenty-two, started her
				own school.<br><br>
				From then on, there was no turning back.<br><br>
				Three years later, on a one-half hectare lot just few meters
				behind YMCA, foundation was laid for the first structures of
				what is Ednas School today.</p>
              <span class="gt_hdg_left"></span>
              <i class="icon-school"></i>
              <span class="gt_hdg_right"></span>
          </div>
		  </a>
          <!--Heading Wrap End-->

          <!--History List Wrap Start-->
          <!-- Add Pagination -->
          <div class="gt_history_pagination flexslider" id="gt_history_pagination">
            <ul class="slides">
              <li><div class="gt_history_date">1973</div></li>
              <li><div class="gt_history_date">1991</div></li>
              <li><div class="gt_history_date">1997</div></li>
              <li><div class="gt_history_date">2000</div></li>
              <li><div class="gt_history_date">2017</div></li>
            </ul>
          </div>
          <div class="gt_history_slider flexslider" id="gt_history_slider">
            <ul class="slides">
              <li>
                <div class="row">
                  <div class="col-md-6">
                      <div class="get_started_content_wrap">
                          <h4>1973</h4>
                          <p style="color:#000000;">The school offered a complete two-level instruction [pre-school and grade
							school] and in 1977, Ednas School graduated its first batch of high school
							seniors.<br><br>
							To accommodate out-of-towners eager to join the ever-increasing flock of
							Ednasians, Ednas School of San Carlos was opened in 1984. Then with
							its rustic atmosphere of grass-laid grounds, hovering trees and brickfronted
							buildings complete with a gym, now offers it a curricula of
							preschool, elementary, and high school.<br><br>
							As a result, records would show that its students and graduates generally
							attain academic excellence. In 1978, the high school department hurdled
							the NCEE a hundred percent. Qualified elementary graduates have since
							then enjoyed scholarship grants at the prestigious Philippine High School,
							earning for the school the reputation of being the biggest supplier of PSHS
							students from Region I.</p>
                         
                      </div>
                  </div>
              
                  <div class="col-md-6">
						<img src="images/banner_history.jpg" alt="">
                      <!--<div class="get_started_video">
                         
                          <div class="get_video_icon">
                              <a data-rel="prettyPhoto" href="https://www.youtube.com/watch?v=Z_Qb-BOAVac"><i class="fa fa-play"></i></a>
                              <span>Watch The Video</span>
                          </div>
                      </div>-->
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-6">
                      <div class="get_started_content_wrap">
                          <h4>1991</h4>
                          <p style="color:#000000;">In 1991, to meet the technological needs of the time, the school made
							another historic first when it integrated computer education in the
							curriculum of all grade levels [including the preschool] using the hands-on
							technique [combined lecture and actual application]. To further ensure its
							success and maintenance, Dr. Edna Torio-Gonzales purchased the
							franchise rights of Hands-on Computers, Dagupan City Branch. From there
							on, even grade computations were computerized.<br><br>
							At its birth this institution was named Edna’s School then sometime in the
							early-part 1990’s a group of students coined as acronyms for EDNAS
							which stands for Educational Development for Nice and Attractive
							Students and from there on it was called EDNAS School.</p>
                         
                      </div>
                  </div>
              
                  <div class="col-md-6">
                      <img src="images/banner_history.jpg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-6">
                      <div class="get_started_content_wrap">
                          <h4>1997</h4>
                          <p style="color:#000000;">In 1997, Ednas School turned 31 years old. For its Pearl Anniversary
							celebration, the school staged Peter Pan - The Musicale which cast
							students from all three levels.<br><br>
							Peter Pan – The Musicale captured the interest of people from nearby
							towns and cities to flock to the show. Despite hardships and difficulties in
							its preparation, it was a huge success.</p>
                          
                      </div>
                  </div>
              
                  <div class="col-md-6">
                      <img src="images/banner_history.jpg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-6">
                      <div class="get_started_content_wrap">
                          <h4>2000</h4>
                          <p style="color:#000000;">In the year 2000, a three-storey building was built which houses the
							accounting office, Academic Director’s Office, and the computer room.
							The second floor houses the library while the third is used for meetings
							and assemblies. During this year the school cafeteria was also built.<br><br>
							Today, Ednas School is in its 36th year of sustaining excellence in its
							endeavor. In preparing itself for the PAASCU accreditation, the
							administration and the faculty joined efforts in gathering data and
							information to complete the accreditation requirements.</p>
                          
                      </div>
                  </div>
              
                  <div class="col-md-6">
                      <img src="images/banner_history.jpg" alt="">
                  </div>
                </div>
              </li>
              <li>
                <div class="row">
                  <div class="col-md-6">
                      <div class="get_started_content_wrap">
                          <h4>2017</h4>
                          <p style="color:#000000;">Now, Ednas school is proud to be one of the best, if not the best, fully
							established institutions not only in the region but in the whole country. This
							is proven by its roster of successful graduates and alumni.</p>
                         
                      </div>
                  </div>
              
                  <div class="col-md-6">
                      <img src="images/banner_history.jpg" alt="">
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!--History List Wrap End-->
        </div>
      </section>
      <!--Campus History Wrap End-->

      <!--Core Values Wrap Start-->
      <section>
        <div class="container">
          <!--Heading Wrap Start-->
		  <a name="our_core">
          <div class="gt_hdg_1 default_width">
            <h3>Our Core</h3>
            <p>Starting as a pre-school in 1966 founded by a young but visionary Edna
				Torio, we learned along with the students entrusted to our care to develop an
				emphasis on excellence in education as we grew to become a government
				accredited elementary and high school institution with a reputation for
				graduating future scholars who eventually become productive professionals
				and law-abiding citizens of our country.</p>
              <span class="gt_hdg_left"></span>
              <i class="icon-school"></i>
              <span class="gt_hdg_right"></span>
          </div>
		  </a>
          <!--Heading Wrap End-->

          <!--Core Values List Wrap Start-->
          <div class="row">
            <!--Faqs and Terms Wrap Start-->
            <div class="col-md-6">
              <div class="accor_outer_wrap">
                <div class="ct_accord_list">
                    <div class="accord_hdg" id="accord1">
                        <h6>EDNASIAN MANIFESTO</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                        <p>Life is one grand adventure<br>
						I do not belong<br>
						to the legions of losers,<br>
						and whose only choice is to survive.<br><br>
						I am meant to be<br>
						the Master of the Universe<br>
						the crown of creation<br><br>
						I may emery from daily battles<br>
						wounded, but not defeated.<br><br>
						I believe in myself<br>
						I've got what it takes.<br>
						I AM A WINNER.</p>
                    </div>
                </div>
                  <div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>EDNASIAN SPIRIT</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                        <p>Ego Sum, Ergo, Apprehensus Sum<br>
							I Am, Therefore I Can Learn</p>
                    </div>
                  </div>
                  
              </div>
            </div>
            <!--Faqs and Terms Wrap End-->

            <!--Company Core Value Wrap Start-->
            <div class="col-md-6">
              <div class="gt_core_value_wrap gt_heading_2">
                    <ul data-tabs="tabs">
                      <li class="active"><a data-toggle="tab" href="#quality">Mission</a></li>
                        <li><a data-toggle="tab" href="#commitment">Vision</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                  <div class="tab-pane active" id="quality">
                    <div class="gt_core_value_tab">
                        <div class="gt_core_value_des">
                            <figure>
                                <img src="images/vision-mission.jpg" alt="">
                            </figure>
                            <div class="gt_core_img_des">
                                <p>Ednas School is committed to the total formation of the entire man
									by the progressive and harmonious development of the moral, spiritual, intellectual, social, aesthetic, and physical quantities.</p>
                            </div>
                        </div>
                        <p></p>
                    </div>
                  </div>
                    
                  <div class="tab-pane" id="commitment">
                    <div class="gt_core_value_tab">
                        <div class="gt_core_value_des">
                            <figure>
                                <img src="images/vision-mission.jpg" alt="">
                            </figure>
                            <div class="gt_core_img_des">
                                <p>A God-centered Filipino school with a global outlook committed to
								the goals of nation building and dedicated to the attainment of excellence in
								all facets of human life that lead to the advancement of knowledge and lifelong
								learning, skills enhanced with generosity, faith and life integration.</p>
                            </div>
							<p>
								A school that gives light to the North and spreads the flame of prayer
								ambition and excellence to the country devoted to a standard quality of
								service for all learners of the country and member of the community of
								nations.</p>
                        </div>
                    </div>
                  </div>
                  
                </div>
            </div>
            <!--Company Core Value Wrap End-->
          </div>
          <!--Core Values List Wrap End-->
        </div>
      </section>
      <!--Core Values Wrap End-->

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
                      <li><a href="vitual-campus-tour.php">Virtual Campus Tour</a></li>
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
