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
              <li class="active"><a href="javascript:avoid(0);">Academics</a>
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
			
                <h2>Academics</h2>
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
                <li><a href="#">Academics</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      
	  <!--Educational Philosophy Education Wrap Start-->
	  <a name="educational_philosophy">
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
                <h3>Educational Philosophy</h3>
                <span class="gt_hdg_left"></span>
                <p style="margin-left:10px;" class="text-justify">
					&nbsp &nbsp &nbsp The Ednas School follows a classical-traditional educational system using and integrating various and progressive approaches such as the New York Bank Street Method, Howard Gardner’s Multiple Intelligences Theory and Classroom Differentiated Learning, Rudolf Steiner’s Soul Theory or the renowned Waldorf Education, and Edward De Bono’s Six Thinking Hats Method.
				</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--Educational Philosophy Wrap End-->

      <!--School Profile Wrap Start-->
	  <a name="school_profile">
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
                <h3>School Profile</h3>
                <span class="gt_hdg_left"></span>
                <p style="margin-left:10px;" class="text-justify"><b>“One of the top performing schools in the country”</b> Manila Bulletin, 1995; National College Entrance Examinations, National Scholastic Aptitude Test, National Elementary Achievement Test, National Career Assessment Examination, National Achievement Test, 1970s – 1990s, Center for Educational Measurement, 2000s</p>

				<p style="margin-left:10px;" class="text-justify">“Biggest supplier of Philippine Science High School students from Region I” Philippine Science High School – Main, 1970s – 1980s, non-quota period, 1990s - recent</p>

				<p style="margin-left:10px;" class="text-justify">Five Decades of Competitions – Champions and Top Finalists, Best School Paper and Best Science Research – UP Subol, UP Palaris, National Mathematics and Quiz Bees, Metrobank-DepEd Mathematics Challenge, DepEd Press Conference, National Statistics Competition, National Science Research Awards, Impromptu Speech and Broadcasting Competitions, Reader’s Digest Pen Awards, Basketball, Taekwondo, Karate, Swimming, Tennis, Ballroom Dancing, Chess and Choral Singing Competitions, Milo Olympics, IRAA, Robotics Engineering</p>

				<p style="margin-left:10px;" class="text-justify">“Pioneer of hands-on computer education and e-learning in Pangasinan and Region I “Yapster e-Learning, Philippine Daily Inquirer, Philippine Star, 2003</p>

				<p style="margin-left:10px;" class="text-justify">Philippine Accrediting Association of Schools, Colleges, and Universities (PAASCU), Level I Status, 2002</p>

				<p style="margin-left:10px;" class="text-justify"><b>Exemplary School Performance Awards National, English, Math, Science, Center for Educational Measurement</b>, 2008, 2009</p>

				<p style="margin-left:10px;" class="text-justify"><b>Excellence in Educational Transformation Award (EETA)</b>, Outstanding Innovation in Learning Methodologies and Delivery Systems, Ednas School of San Carlos, 2012</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--School Profile Wrap End-->

      <!--School Characteristics Wrap Start-->
	  <a name="school_characteristics">
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
                <h3>School Characteristics</h3>
                <span class="gt_hdg_left"></span>
                <p style="margin-left:10px;" class="text-justify">
					Ednas School, founded in 1966, is a comprehensive private pre-school, grade school, and high school that attract applicants from the entire province of Pangasinan, the rest of the Philippines, and from abroad. In the past fifty years it has grown and expanded from one learning center of excellence to two more campuses – Ednas School of San Carlos and Ednas School of Alaminos.<br><br>
					The Ednas School’s Vision-Mission is inspired by the Maryknoll and Jesuit spirit. This spirit I AM, THEREFORE, I CAN LEARN, in Latin, EGO SUM, ERGO, APREHENSUS SUM, calls for tradition in the disciplines of academic and values formation, culture and sports, community action and service, and, above all, prayer life.<br><br>
					Core concentrations are offered in ENGLISH (Basic Reading and Language, Guided Reading, Practical Spoken English, Basic Grammar and Composition, Literature, Creative Writing, and Journalism), MATHEMATICS (Basic Mathematics, Secondary Mathematics, Calculus, Entrepreneurial Mathematics, and College Mathematics), SCIENCE (Basic and Advanced Sciences, Biology, Chemistry, Physics), SOCIAL STUDIES (Basic and Advanced Philippine History, Asian History, World History, Geography, and Current Events), FILIPINO (Basic Filipino Reading, Grammar, and Writing, Elementary and Secondary Filipino Literature), COMPUTER ASSISTED LEARNING, PHYSICAL AND SPORTS EDUCATION, VISUAL and PERFORMING ARTS, CULINARY ARTS, MUSIC, and CHRISTIAN LIVING.<br><br>
					All pupils and students are given a comprehensive curriculum in the basic skills integrated with a curriculum for gifted and talented learners. Using the progressive approaches in the Multiple Intelligences and Steiner education theories, pupils and students are prepared and encouraged to surpass the Department of Education’s minimum diploma requirements.<br><br>
					Aside from the Humanities, Logic, Math, and Science teachings which we are known for, our teachers currently integrate in the present lessons a wide variety of MI and Waldorf teaching tools such as Music, Art, Linguistic, Kinesthetic, Abstract, Form Drawing, Eurhythmy, and Interpersonal, Intrapersonal, and Environmental activities. Each child can now learn better not by being individualistic, but by using a dominant intelligence while learning with others. This progressive approach puts emphasis on the development of a child’s soul and emotional intelligence, or EQ, the intelligence necessary for success in the world today.<br><br>
					The school is organized into four ten-week cycles or quarters. Classes in the Pre-School, Grade School, and the High School are scheduled with the day as the repetitive factor. Major concentrations are taught daily from Monday to Friday, while Minor concentrations meet once, twice, or thrice weekly.<br><br>
					The school activities are offered during the school year and during the summer. These activities include Remedial and Advance classes in English and Mathematics, Toddler Workshop, Art, Ballet, Taekwondo, Languages, Classical Music Instrument, European Football, and Robotics Engineering. By design, the after school activities may be integrated into the curriculum as special electives in the process of curriculum enhancement and enrichment.<br><br>
					In addition, Understanding by Design (UBD) and De Bono’s 6 Thinking Hats, which is a way of separating our thinking to gain clarity and focus – are among the new educational trends sweeping all over the world which emphasizes the HOTS in the classroom that brings out the fullest potential of its administration and faculty, as it encompasses the complete formation of the learners in its continuous pursuit of excellence.<br><br>
					For school year 2012 – 2013, Ednas School Dagupan, Ednas School of San Carlos, and Ednas School of Alaminos, will be transitioning into the K + 12 program of the Department of Education. The three campuses have started to re-align their core curriculum to what the new curriculum offers. Important and vital changes were made to meet the demands of the competencies required for each grade levels of the new DepEd curriculum. <br><br>
					The school is still presently in the process of curriculum alignment and curriculum mapping in preparation for ASEAN 2015 which will be held in the Philippines. The ASEAN 2015 is a regional organization established on 08 August 1967. On its 30th anniversary, ASEAN leaders agreed on a shared vision of ASEAN as a concert of Southeast Asian nations, outward looking, living in peace, stability and prosperity, bonded together in partnership in dynamic development and in a community of caring societies. At the 9th ASEAN Summit in 2003, the ASEAN Leaders resolved to establish an “ASEAN Community”. On the 12th ASEAN Summit in January 2007, the Leaders affirmed their strong commitment, to accelerate the establishment of an ASEAN Community by 2015 and signed the Cebu Declaration on the Acceleration of the Establishment of an ASEAN Community by 2015.<br><br>
					The pursuit of serving quality education for the Pangasinenses continues as Ednas School offers the Robotics Engineering classes. This innovation is offered to Grade 3 pupils up to the Junior High 4 students. With this program, Ednas School engages the students in scientific inquiry and engineering enabling them to create, develop, and explore the digital technology. Ednas School hopes to produce graduates with the necessary skills that would usher them into a new era of information technology and into the 21st century.<br><br>
					To further boost the skills of the students in the field of science and math, the school incorporates the Singaporean Math in their Mathematics subjects. The Singaporean Math offers the CPA (Complete – Pictorial – Abstract) method and this method would greatly help the students of Ednas School develop a more intrinsic passion in learning Math.<br><br>
					These changes are mere tip of the iceberg as Ednas School intends to forge a partnership with ABS-CBN Bayan Academy and introduce the Entrepreneurial Literacy Program. This bold plan would inch the school closer to the fulfillment of their vision and mission in producing well-rounded and productive citizens of this land.<br><br>
					As a result of all of these innovations in the curriculum, and as a testament of the school’s commitment to academic excellence, Ednas School takes pride for the distinction in excellence award given by the Center for Educational Measurement (CEM) as being part of the Top Ten Performing Schools nationwide in diagnostic tests in English, Science, and Math. <br><br>
					The sweetest accolade of the school was attained this year as Ednas School reaped the rewards of 50 years of careful academic planning by obtaining the Excellence in Educational Transformation Awards (EETA), Innovation Learning Methodologies and Delivery Systems. The Excellence in Educational Transformation Awards is a nation-wide search for the best schools in the country that initiate transformation and innovation in the curriculum and methods of instruction. The EETA is a mutual sponsorship of ABS-CBN Bayan Academy, Rex Bookstore, Inc., and The Knowledge Channel. The said award is open to academic institutions engaged in advocating innovations and reforms in their curriculum. The EETA is further stratified into 7 categories namely, Sectarian/Religious (small school category), Sectarian/Religious (big school category), Sectarian/Diocesan (small school category) and Government Category. <br><br>
					With the honor, Ednas School Dagupan, Ednas School of San Carlos, and Ednas School of Alaminos take on the challenge of affecting other academic institutions nationwide to commit and strive to attain transformative and excellent education. Ednas School hopes to affect other academic institutions in the country to raise the standards of academic excellence and provide the Filipino people with a much-deserved quality education.
				</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--School Characteristics Wrap End-->
	
	  <!--School Minority Wrap Start-->
	  <a name="school_minority">
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
                <h3>School Minority</h3>
                <span class="gt_hdg_left"></span>
				<p style="margin-left:10px;">
					Ednas School is a cosmopolitan Filipino school in which the dominant citizenship of its students is Filipino. Minority include various foreign citizenships and nationalities such as Chinese, Indian, Korean, Japanese, American, British, Italian, other European ethnicities and Middle-Eastern.<br><br>
					As a non-sectarian private school, the dominant religion practiced is Roman Catholicism, and which Ecumenism is practiced with other Christian, Moslem, and Hindu faiths.<br><br>
					Ednas School fosters the values of unity, brotherhood, discipline, cooperation, collaboration and sharing with each other without discrimination of religion, race, creed, or social standing.
				</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--School Minority Wrap End-->
	  
	  <!--Student Accepted in Colleges/Universities Wrap Start-->
	  <a name="students_accepted_in_colleges&universities">
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
                <h3>COLLEGES / UNIVERSITIES TO WHICH OUR STUDENTS HAVE BEEN ACCEPTED</h3>
                <span class="gt_hdg_left"></span>
                <p style="margin-left:10px;">
					Assumption College<br>
					Arellano University<br>
					Ateneo de Manila University<br>
					Centro Escolar University<br>
					De La Salle University<br>
					Far Eastern University<br>
					Colegio de San Juan de Letran<br>
					Mapua Institute of Technology<br>
					Philippine Merchant Marine Academy (PMMA)<br>
					Philippine Military Academy<br>
					Philippine Normal University<br>
					Polytechnic University of the Philippines<br>
					San Beda College<br>
					Saint Louis University<br>
					Saint Paul’s College<br>
					Saint Scholastica’s College<br>
					Siliman University<br>
					Saint Theresa’s College<br>
					Technological Institute of the Philippines<br>
					University of the East<br>
					University of the Philippines – Baguio; Diliman; Los Baños; Manila<br>
					University of Santo Tomas<br>
					Wellesley College, USA<br>
					Colleges/Universities in the Locality<br>
					Colleges/Universities in the Philippines, United States, Canada, Europe, United Kingdom, and the Middle East
				</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--Student Accepted in Colleges/Universities Wrap End-->
	
	  <!--Students Accepted in Grade/High School Wrap Start-->
	  <a name="students_accepted_in_grade&highschool">
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
                <h3>GRADE SCHOOLS AND HIGH SCHOOLS TO WHICH OUR STUDENTS HAVE BEEN ACCEPTED</h3>
                <span class="gt_hdg_left"></span>
				<p style="margin-left:10px;">
					Assumption Convent – Antipolo; Makati<br>
					Ateneo de Manila University<br>
					Ateneo de Iloilo<br>
					Brent International School - Baguio<br>
					Don Bosco – Makati<br>
					La Salle Greenhills<br>
					Manila Science High School<br>
					Miriam/Maryknoll College<br>
					Philippine Science High School – Baguio; Ilocos; Manila<br>
					San Beda College<br>
					Saint Louis University Boys High / Science High School – Baguio<br>
					Saint Paul’s College<br>
					Saint Scholastica’s College – Cavite; Manila<br>
					Saint Theresa’s College<br>
					High Schools in the Locality<br>
					High Schools in the Philippines, United States, Canada, Europe, United Kingdom, and the Middle East
				</p>
				</div>
            </div>
          </div>
        </div>
      </section>
      </a>
	  <!--Students Accepted in Grade/High School Wrap End-->
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
