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
					<li class="active"><a href="#">Academic Calendar</a></li>
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
			
                <h2>Academic Calendar</h2>
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
                <li><a href="#">Academic Calendar</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
		
		<section class="gt_courses_bg">
        <div class="container">
          <!--Classes List Wrap Start-->
          <div class="gt_classes_wrap">
			<!-- JULY Table Start-->
            <table class="gt_classes_table">
              <thead class="gt_table_head">
                <tr>
                  <th class="col-md-4">JULY 2017<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">JULY 2017<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">JULY 2017<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr>
                  <td>
						<table class="gt_classes_table">
						
                    	<tr>
							<td class="card text-center col-md-2">
								31
							</td>
							<td class="card text-center col-md-2">
								M
							</td>
							<td>
								<ul>
									<li style="margin-left:5px;">Parents Orientation (AM)</li>
									<li style="margin-left:5px;">Seminar: IT Laws, Etiquette, others</li>
								</ul>
								
							</td>
						</tr>
                        </table>
                      
                  </td>
                  <td>
                    <table class="gt_classes_table">
						
                    	<tr>
							<td class="card text-center col-md-2">
								31
							</td>
							<td class="card text-center col-md-2">
								M
							</td>
							<td>
								<ul>
									<li style="margin-left:5px;">Parents Orientation (AM)</li>
									<li style="margin-left:5px;">Seminar: IT Laws, Etiquette, others</li>
								</ul>
								
							</td>
						</tr>
                        </table>
                  </td>
                  <td>
                    
                  </td>
                  
                </tr>
              </tbody>
            </table>
            <!-- JULY Table End-->
			
			<!-- AUGUST Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am an Ednasian. I am a Filipino.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">AUGUST 2017<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">AUGUST 2017<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">AUGUST 2017<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr>
                  <td>
						
                      
                  </td>
                  <td>
				  
                  </td>
                  <td>
						<table class="gt_classes_table">
						
                    	<tr>
							<td class="card text-center col-md-2">
								1
							</td>
							<td class="card text-center col-md-2">
								T
							</td>
							<td>
								<ul>
									<li style="margin-left:5px;">Parents Orientation (AM)</li>
									<li style="margin-left:5px;">Seminar: IT Laws, Etiquette, others</li>
								</ul>
								
							</td>
						</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									2
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Classes Start</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									2
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Classes Start</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									2
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Classes Start</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									2 - 3
								</td>
								<td class="card text-center col-md-2">
									W - Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PEP Week</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									2 - 3
								</td>
								<td class="card text-center col-md-2">
									W - Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PEP Week</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									2 - 3
								</td>
								<td class="card text-center col-md-2">
									W - Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PEP Week</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									4
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PEP Week Culminating Activity</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									4
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PEP Week Culminating Activity</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									4
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PEP Week Culminating Activity</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td></td>
                  <td>
						<table class="gt_classes_table">
						   	<tr style="color:red;">
								<td class="card text-center col-md-2">
									8
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Feast of St. Dominic (Holiday)</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td></td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									11
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">AM - Induction of Officers</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									11
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PM - Induction of Officers</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									10
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Induction of Officers</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									12
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									12
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									12
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									14 - 18
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">SRI Pre Test</li>
										<li style="margin-left:5px;">Book Fair (Scholastic and Adarna)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									14 - 18
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">SRI Pre Test</li>
										<li style="margin-left:5px;">Book Fair (Scholastic and Adarna)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									14 - 18
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">SRI Pre Test</li>
										<li style="margin-left:5px;">Book Fair (Scholastic and Adarna)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									19
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									19
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									19
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr style="color:red;">
								<td class="card text-center col-md-2">
									21
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Ninoy Aquino Day (Special Non-working Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr style="color:red;">
								<td class="card text-center col-md-2">
									21
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Ninoy Aquino Day (Special Non-working Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr style="color:red;">
								<td class="card text-center col-md-2">
									21
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Ninoy Aquino Day (Special Non-working Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									26
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									26
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									26
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Student Leadership Training</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									28
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">National Heroes Day (Regular Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									28
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">National Heroes Day (Regular Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									28
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">National Heroes Day (Regular Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									29
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Culminating Activity Buwan ng Wika</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									29
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Culminating Activity Buwan ng Wika</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									29
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Culminating Activity Buwan ng Wika</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr style="color:#0070bb; ">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									30 - 31
								</td>
								<td class="card text-center col-md-2">
									W - Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Qtr Oral Exams</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									30 - 31
								</td>
								<td class="card text-center col-md-2">
									W - Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Qtr Oral Exams</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   <tr>
								<td class="card text-center col-md-2">
									30 - 31
								</td>
								<td class="card text-center col-md-2">
									W - Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Qtr Oral Exams</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				
				
			  </tbody>
            </table>
            <!-- AUGUST Table End-->
			
			<!-- SEPTEMBER Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am an Ednasian. I am a Filipino.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">SEPTEMBER 2017<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">SEPTEMBER 2017<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">SEPTEMBER 2017<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						
                    	<tr>
							<td class="card text-center col-md-2">
								1
							</td>
							<td class="card text-center col-md-2">
								F
							</td>
							<td>
								<ul>
									<li style="margin-left:5px;">Eid’l Adha (Special Non-working Holiday)</li>
								</ul>
								
							</td>
						</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						
                    	<tr>
							<td class="card text-center col-md-2">
								1
							</td>
							<td class="card text-center col-md-2">
								F
							</td>
							<td>
								<ul>
									<li style="margin-left:5px;">Eid’l Adha (Special Non-working Holiday)</li>
								</ul>
								
							</td>
						</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						
                    	<tr>
							<td class="card text-center col-md-2">
								1
							</td>
							<td class="card text-center col-md-2">
								F
							</td>
							<td>
								<ul>
									<li style="margin-left:5px;">Eid’l Adha (Special Non-working Holiday)</li>
								</ul>
								
							</td>
						</tr>
                        </table>
				  </td>
                  
                </tr>
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									5
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									5
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td> </td>
                  
                </tr>
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									8
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 8:00am</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									8
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									8
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									11 - 12
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Mid-Quarter Exams</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									11 - 12
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Mid-Quarter Exams</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									11 - 12
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Mid-Quarter Exams</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									15
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Career Fair</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									15
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Career Fair</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									15
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Career Fair</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									20
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Ateneo Talk</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									20
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Ateneo Talk</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									20
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Ateneo Talk</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									23
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">ACET</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									23
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">ACET</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									23
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">ACET</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									27
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									27
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									27
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									28
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">GS Cookfest</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									28
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">GS Cookfest</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									28
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">GS Cookfest</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									29
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">HS Cookfest</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									29
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">HS Cookfest</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									29
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">HS Cookfest</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- SEPTEMBER Table End-->
			
			<!-- OCTOBER Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am an Angel to others. I am a Saint with a capital S.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">OCTOBER 2017<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">OCTOBER 2017<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">OCTOBER 2017<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>2 - 3</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Quarter Exams</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>2 - 3</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Quarter Exams</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>2 - 3</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">1st Quarter Exams</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>4</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>4</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td> </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Confirmands Recollection with Confession</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Confirmands Recollection with Confession</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Confirmands Recollection with Confession</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>6</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 8:00am</li>
										<li style="margin-left:5px;">Confirmation General Rehearsal at St. John the Evangelist Cathedral, Dagupan</li>
									</ul>
									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>6</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
										<li style="margin-left:5px;">Confirmation General Rehearsal at St. John the Evangelist Cathedral, Dagupan</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>6</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
										<li style="margin-left:5px;">Confirmation General Rehearsal at St. John the Evangelist Cathedral, Dagupan</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Confirmation</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Confirmation</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Confirmation</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="font-style:bold;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Quarter Card Day</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Quarter Card Day</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Quarter Card Day</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>20</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Fieldtrip: Prep – Gr. 2</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>20</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Fieldtrip: Prep – Gr. 2</li>										
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>20</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Fieldtrip: Prep – Gr. 2</li>										
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>26</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Festival of Saints and Angels</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>26</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Festival of Saints and Angels</li>
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>26</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Festival of Saints and Angels</li>
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>27</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Faculty Development  Program</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>27</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Faculty Development  Program</li>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>27</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Faculty Development  Program</li>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- OCTOBER Table End-->
			
			<!-- NOVEMBER Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am an Angel to others. I am a Saint with a capital S.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">NOVEMBER 2017<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">NOVEMBER 2017<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">NOVEMBER 2017<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">All Saints Day (Special Non-working Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">All Saints Day (Special Non-working Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">All Saints Day (Special Non-working Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">All Souls Day (Special Non-working Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">All Souls Day (Special Non-working Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">All Souls Day (Special Non-working Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2 - 3</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Oral Exams<br>(if Nov. 2 is not a holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2 - 3</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Oral Exams<br>(if Nov. 2 is not a holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2 - 3</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Oral Exams<br>(if Nov. 2 is not a holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
                  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 & 6</b>
								</td>
								<td class="card text-center col-md-2">
									F & M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Oral Exams<br>(if Nov. 2 is holiday)</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 & 6</b>
								</td>
								<td class="card text-center col-md-2">
									F & M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Oral Exams<br>(if Nov. 2 is holiday)</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 & 6</b>
								</td>
								<td class="card text-center col-md-2">
									F & M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Oral Exams<br>(if Nov. 2 is holiday)</li>
										
									</ul>
									
								</td>
							</tr>
                        </table>     
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td></td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Field Trip: Gr. 3-6</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Field Trip: Gr. 3-6</li>										
									</ul>									
								</td>
							</tr>
                        </table>               
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Field Trip: Gr. 3-6</li>										
									</ul>									
								</td>
							</tr>
                        </table>         
                  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Pangasinan Day (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Pangasinan Day (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Pangasinan Day (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15 - 16</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Mid-Quarter Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15 - 16</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Mid-Quarter Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>           
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15 - 16</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Mid-Quarter Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>           
                  </td>
                  
                </tr>
			  
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Field Trip: JHS + SHS</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Field Trip: JHS + SHS</li>										
									</ul>									
								</td>
							</tr>
                        </table>               
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educational Field Trip: JHS + SHS</li>										
									</ul>									
								</td>
							</tr>
                        </table>         
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>										
									</ul>									
								</td>
							</tr>
                        </table>          
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>										
									</ul>									
								</td>
							</tr>
                        </table>  
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>27 - 29</b>
								</td>
								<td class="card text-center col-md-2">
									M - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Sir Rogelio Gonzales Intramurals</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>27 - 29</b>
								</td>
								<td class="card text-center col-md-2">
									M - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Sir Rogelio Gonzales Intramurals</li>										
									</ul>									
								</td>
							</tr>
                        </table>                                 
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>27 - 29</b>
								</td>
								<td class="card text-center col-md-2">
									M - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Sir Rogelio Gonzales Intramurals</li>										
									</ul>									
								</td>
							</tr>
                        </table>                        
                  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Bonifacio Day (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Bonifacio Day (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                       
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Bonifacio Day (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                 
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- NOVEMBER Table End-->
			
			<!-- DECEMBER Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am an Angel to others. I am a Saint with a capital S.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">DECEMBER 2017<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">DECEMBER 2017<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">DECEMBER 2017<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr style="font-style:italic;">
                  <td></td>
				  
                  <td></td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educator’s Day + Pamaskong Handog</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educator’s Day + Pamaskong Handog</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Educator’s Day + Pamaskong Handog</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>4</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>4</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>       
                  </td>
                  <td></td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2"  style="color:red;">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2"  style="color:red;">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px; color:red;">Immaculate Conception Day (Regular Holiday)</li>
										<li style="margin-left:5px;">Teachers’ Fieldtrip</li>
									</ul>
									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2"  style="color:red;">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2"  style="color:red;">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px; color:red;">Immaculate Conception Day (Regular Holiday)</li>
										<li style="margin-left:5px;">Teachers’ Fieldtrip</li>
									</ul>
									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2"  style="color:red;">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2"  style="color:red;">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px; color:red;">Immaculate Conception Day (Regular Holiday)</li>
										<li style="margin-left:5px;">Teachers’ Fieldtrip</li>
									</ul>
									
								</td>
							</tr>
                        </table>
                  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>11 - 12</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Exams (Gr. 1-6, JHS)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>11 - 12</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Exams (Gr. 1-6, JHS)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>11 - 12</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Exams (Gr. 1-6, JHS)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>         
                  </td>
                  <td></td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PS Christmas Presentation (AM)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PS Christmas Presentation (PM)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                        
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PS Christmas Presentation</li>										
									</ul>									
								</td>
							</tr>
                        </table>         
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Christmas Party</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Christmas Party</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Christmas Party</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- DECEMBER Table End-->
			
			<!-- JANUARY Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am LOVE.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">JANUARY 2018<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">JANUARY 2018<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">JANUARY 2018<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr>
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>3</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Classes resume</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>3</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Classes resume</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>3</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Classes resume</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>4 - 5</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Exams (PS, SHS)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>4 - 5</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Exams (PS, SHS)</li>										
									</ul>									
								</td>
							</tr>
                        </table>  
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>4 - 5</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">2nd Quarter Exams (PS, SHS)</li>										
									</ul>									
								</td>
							</tr>
                        </table>  
				  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Alternative Career Talk</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Alternative Career Talk</li>										
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Alternative Career Talk</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>
									</ul>
									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>
									</ul>
									
								</td>
							</tr>
                        </table>        
                  </td>
                  <td>
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>12</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>12</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>12</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Sat</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">2nd Quarter Card Day</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Sat</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">2nd Quarter Card Day</li></b>
									</ul>									
								</td>
							</tr>
                        </table>            
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Sat</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">2nd Quarter Card Day</li></b>
									</ul>									
								</td>
							</tr>
                        </table>    
				  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15 - 17</b>
								</td>
								<td class="card text-center col-md-2">
									M - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 10 Retreat </li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>18 - 20</b>
								</td>
								<td class="card text-center col-md-2">
									Th - Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 10 Retreat</li>										
									</ul>									
								</td>
							</tr>
                        </table>                        
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>18 - 20</b>
								</td>
								<td class="card text-center col-md-2">
									Th - Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 10 Retreat</li>										
									</ul>									
								</td>
							</tr>
                        </table>         
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PS Sportsfest</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PS Sportsfest</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">PS Sportsfest</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
								
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22 - 23</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Quarter Oral Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22 - 23</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Quarter Oral Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22 - 23</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Quarter Oral Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>24 - 26</b>
								</td>
								<td class="card text-center col-md-2">
									W - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 11 Retreat</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>24 - 26</b>
								</td>
								<td class="card text-center col-md-2">
									W - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 11 Retreat</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>24 - 26</b>
								</td>
								<td class="card text-center col-md-2">
									W - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 11 Retreat</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr>
                  <td></td>
                  <td></td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>26</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Recollection with Confession: First Communicants</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr>
                  <td></td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>29</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Recollection with Confession: First Communicants</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>29</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">General Rehearsal: First Holy Communion</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Recollection with Confession: First Communicants</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">General Rehearsal: First Holy Communion</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Holy Communion</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>31</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>31</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>31</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- JANUARY Table End-->
			
			<!-- FEBRUARY Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am LOVE.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">FEBRUARY 2018<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">FEBRUARY 2018<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">FEBRUARY 2018<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr>
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">General Rehearsal: First Holy Communion</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Holy Communion</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td></td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Holy Communion</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td></td>
                  <td></td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 10 – 11 Prom</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 10 – 11 Prom</li>										
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3</b>
								</td>
								<td class="card text-center col-md-2">
									Sat
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 10 – 11 Prom</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 5 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>6</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 5 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table>        
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 5 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table> 
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td></td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8 - 9</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Mid-Quarter Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8 - 9</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Mid-Quarter Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>            
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8 - 9</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Mid-Quarter Exams</li>
									</ul>									
								</td>
							</tr>
                        </table>    
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>12</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 6 Recollection</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 6 Recollection</li>										
									</ul>									
								</td>
							</tr>
                        </table>                         
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 6 Recollection</li>										
									</ul>									
								</td>
							</tr>
                        </table>           
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13 - 15</b>
								</td>
								<td class="card text-center col-md-2">
									T - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 12 Retreat </li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13 - 15</b>
								</td>
								<td class="card text-center col-md-2">
									T - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 12 Retreat </li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13 - 15</b>
								</td>
								<td class="card text-center col-md-2">
									T - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 12 Retreat </li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
								
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 8:00am</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>16</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Chinese New Year (Special Non-working Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>16</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Chinese New Year (Special Non-working Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>16</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Chinese New Year (Special Non-working Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>21</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 7 Recollection</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 7 Recollection</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 7 Recollection</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>27</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 8 Recollection</li>
									</ul>									
								</td>
							</tr>
                        </table>    
				  </td>
                  <td></td>
                  <td></td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>28</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>28</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>28</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Early dismissal (Faculty In-Service)</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- FEBRUARY Table End-->
			
			<!-- MARCH Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am Light and Salt.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">MARCH 2018<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">MARCH 2018<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">MARCH 2018<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr style="font-style:italic;">
                  <td>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 8 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 8 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5 - 6</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Quarter Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5 - 6</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Quarter Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>          
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5 - 6</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">3rd Quarter Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>          
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 9 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 9 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table>        
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Grade 9 Recollection</li>
									</ul>
									
								</td>
							</tr>
                        </table> 
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td></td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Sat</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Third Quarter Card Day</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Sat</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Third Quarter Card Day</li></b>
									</ul>									
								</td>
							</tr>
                        </table>            
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Sat</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Third Quarter Card Day</li></b>
									</ul>									
								</td>
							</tr>
                        </table>    
				  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>15 - 16</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">51st Foundation Anniversary</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>19 - 20</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">33rd Foundation Anniversary</li>										
									</ul>									
								</td>
							</tr>
                        </table>                         
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>21 - 22</b>
								</td>
								<td class="card text-center col-md-2">
									W - Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">12th Foundation Anniversary</li>										
									</ul>									
								</td>
							</tr>
                        </table>           
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td></td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass @ 9:30am</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td></td>
                  
                </tr>
								
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Faculty Development Program</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Faculty Development Program</li>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Faculty Development Program</li>
									</ul>									
								</td>
							</tr>
                        </table>       
                  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>26 - 30</b>
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Holy Week</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>26 - 30</b>
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Holy Week</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>26 - 30</b>
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Holy Week</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>29</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Holy Thursday (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>29</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Holy Thursday (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>29</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Holy Thursday (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>        
                  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Good Friday (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>    
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Good Friday (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>    
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>30</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Good Friday (Regular Holiday)</li>
									</ul>									
								</td>
							</tr>
                        </table>    
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- MARCH Table End-->
			
			<!-- APRIL Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am Light and Salt.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">APRIL 2018<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">APRIL 2018<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">APRIL 2018<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr style="font-style:italic;">
                  <td>	
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td></td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 - 4</b>
								</td>
								<td class="card text-center col-md-2">
									T - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Oral Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 - 4</b>
								</td>
								<td class="card text-center col-md-2">
									T - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Oral Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>         
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 - 4</b>
								</td>
								<td class="card text-center col-md-2">
									T - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Oral Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>        
				  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Pangasinan Day (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Pangasinan Day (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>5</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Pangasinan Day (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td></td>
                  <td></td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>6</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Friday Mass 9:30am</li>
									</ul>
									
								</td>
							</tr>
                        </table> 
                  </td>
                  
                </tr>
				
				<tr style="color:red;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Araw ng Kagitingan (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Araw ng Kagitingan (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>9</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Araw ng Kagitingan (Regular Holiday)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>11</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">APSA</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>12</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">APSA</li>
									</ul>									
								</td>
							</tr>
                        </table>                  
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>13</b>
								</td>
								<td class="card text-center col-md-2">
									F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">APSA</li>
									</ul>									
								</td>
							</tr>
                        </table>        
				  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>16 - 17</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Mid-Quarter Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>16 - 17</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Mid-Quarter Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>                         
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>16 - 17</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Mid-Quarter Exams</li>										
									</ul>									
								</td>
							</tr>
                        </table>           
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>18 - 20</b>
								</td>
								<td class="card text-center col-md-2">
									W - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">SRI Post Test</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>18 - 20</b>
								</td>
								<td class="card text-center col-md-2">
									W - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">SRI Post Test</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>18 - 20</b>
								</td>
								<td class="card text-center col-md-2">
									W - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">SRI Post Test</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
								
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Prime Math (Exit Assessment)</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Prime Math (Exit Assessment)</li>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									M
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Prime Math (Exit Assessment)</li>
									</ul>									
								</td>
							</tr>
                        </table>       
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- APRIL Table End-->
			
			<!-- APRIL Table Start-->
			<table class="gt_classes_table">
				
              <thead class="gt_table_head">
				<tr>
					<th colspan=3 style="background-color:#f5f5f5; padding-bottom:5px;"><h5 class="text-center monthly_top_hdg">Transdisciplinary Theme:<br>I am Light and Salt.</h5></th>
				
				</tr>
                <tr>
                  <th class="col-md-4">MAY 2018<span class="open-date">DAGUPAN</span></th>
                  <th class="col-md-4">MAY 2018<span class="open-date">SAN CARLOS</span></th>
                  <th class="col-md-4">MAY 2018<span class="open-date">ALAMINOS</span></th>
                  
                </tr>
              </thead>
              <tbody class="gt_class_body_bg">
                <tr style="color:red;">
                  <td>	
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Labor Day (Regular Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Labor Day (Regular Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
				  
                  <td>
						<table class="gt_classes_table">
							<tr>
								<td class="card text-center col-md-2">
									<b>1</b>
								</td>
								<td class="card text-center col-md-2">
									T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Labor Day (Regular Holiday)</li>
									</ul>
									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr style="font-style:italic;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 8:00am</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>         
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>2</b>
								</td>
								<td class="card text-center col-md-2">
									W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">First Wednesday Mass 9:30am</li>										
									</ul>									
								</td>
							</tr>
                        </table>        
				  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 - 4</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Exams (Prep, Gr. 6, & Gr. 12)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 - 4</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Exams (Prep, Gr. 6, & Gr. 12)</li>										
									</ul>									
								</td>
							</tr>
                        </table>      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>3 - 4</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Exams (Prep, Gr. 6, & Gr. 12)</li>										
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
				
				<tr style="color:#0070bb;">
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7 - 8</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Exams (Undergrads)</li>
									</ul>
									
								</td>
							</tr>
                        </table> 
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7 - 8</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Exams (Undergrads)</li>
									</ul>
									
								</td>
							</tr>
                        </table> 
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>7 - 8</b>
								</td>
								<td class="card text-center col-md-2">
									M - T
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">4th Quarter Exams (Undergrads)</li>
									</ul>
									
								</td>
							</tr>
                        </table> 
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>8 - 9</b>
								</td>
								<td class="card text-center col-md-2">
									T - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Submission of Fourth and Final Consolidated Grades (Prep, Gr. 6, Gr. 12)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Submission of Fourth and Final Consolidated Grades (Prep, Gr. 6, Gr. 12)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Submission of Fourth and Final Consolidated Grades (Prep, Gr. 6, Gr. 12)</li>										
									</ul>									
								</td>
							</tr>
                        </table>
				  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Culminating Activity (N & K)</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Culminating Activity (N & K)</li>
									</ul>									
								</td>
							</tr>
                        </table>                  
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10</b>
								</td>
								<td class="card text-center col-md-2">
									Th
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Culminating Activity (N & K)</li>
									</ul>									
								</td>
							</tr>
                        </table>        
				  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10 - 11</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Submission of Fourth and Final Consolidated Grades (N-K, Gr.1-5, Gr. 7-11)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10 - 11</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Submission of Fourth and Final Consolidated Grades (N-K, Gr.1-5, Gr. 7-11)</li>										
									</ul>									
								</td>
							</tr>
                        </table>                         
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>10 - 11</b>
								</td>
								<td class="card text-center col-md-2">
									Th - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Submission of Fourth and Final Consolidated Grades (N-K, Gr.1-5, Gr. 7-11)</li>										
									</ul>									
								</td>
							</tr>
                        </table>           
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14 - 16</b>
								</td>
								<td class="card text-center col-md-2">
									M - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Posting of Honors (4th & Final) (Prep, Gr. 6, Gr. 12)</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14 - 16</b>
								</td>
								<td class="card text-center col-md-2">
									M - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Posting of Honors (4th & Final) (Prep, Gr. 6, Gr. 12)</li>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14 - 16</b>
								</td>
								<td class="card text-center col-md-2">
									M - W
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Posting of Honors (4th & Final) (Prep, Gr. 6, Gr. 12)</li>
									</ul>									
								</td>
							</tr>
                        </table>   
				  </td>
                  
                </tr>
								
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14 - 18</b>
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Posting of Honors (4th & Final) (Gr.1-5, Gr. 7-11)</li>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14 - 18</b>
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Posting of Honors (4th & Final) (Gr.1-5, Gr. 7-11)</li>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>14 - 18</b>
								</td>
								<td class="card text-center col-md-2">
									M - F
								</td>
								<td>
									<ul>
										<li style="margin-left:5px;">Posting of Honors (4th & Final) (Gr.1-5, Gr. 7-11)</li>
									</ul>									
								</td>
							</tr>
                        </table>       
                  </td>
                  
                </tr>
								
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Th</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Prep Graduation 8:00AM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>17</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Th</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Prep Graduation PM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>19</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Sat</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Prep Graduation<br>Recognition (Gr. 1-5, Gr. 7-11)</li></b>
										<b><li style="margin-left:5px;">Thanksgiving Mass</li></b>
										<b><li style="margin-left:5px;">Grade 6 Graduation</li></b>
										<b><li style="margin-left:5px;">HS Graduation</li></b>
									</ul>									
								</td>
							</tr>
                        </table>       
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>18</b>
								</td>
								<td class="card text-center col-md-2">
									<b>F</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Recognition Day (Gr. 1-5) AM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>18</b>
								</td>
								<td class="card text-center col-md-2">
									<b>F</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Recognition Day (Gr. 1-5) PM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>21</b>
								</td>
								<td class="card text-center col-md-2">
									<b>M</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Grade 6 Graduation (AM)</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>21</b>
								</td>
								<td class="card text-center col-md-2">
									<b>M</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Grade 6 Graduation (PM)</li></b>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22</b>
								</td>
								<td class="card text-center col-md-2">
									<b>T</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Recognition (Gr. 7-11) AM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>22</b>
								</td>
								<td class="card text-center col-md-2">
									<b>T</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Recognition (Gr. 7-11) PM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									<b>W</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">HS Graduation AM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>23</b>
								</td>
								<td class="card text-center col-md-2">
									<b>W</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">HS Graduation PM</li></b>
									</ul>									
								</td>
							</tr>
                        </table>    
                  </td>
                  <td>
                  </td>
                  
                </tr>
				
				<tr>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>24 - 25</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Th - F</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Clearance</li></b>
									</ul>									
								</td>
							</tr>
                        </table>                      
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>24 - 25</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Th - F</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Clearance</li></b>
									</ul>									
								</td>
							</tr>
                        </table>     
                  </td>
                  <td>
						<table class="gt_classes_table">
						   	<tr>
								<td class="card text-center col-md-2">
									<b>24 - 25</b>
								</td>
								<td class="card text-center col-md-2">
									<b>Th - F</b>
								</td>
								<td>
									<ul>
										<b><li style="margin-left:5px;">Clearance</li></b>
									</ul>									
								</td>
							</tr>
                        </table>  
                  </td>
                  
                </tr>
				
				<tr style="font-style:italic;" class="text-center">
					<td colspan=3>
						*** Academic schedules are subject to change ***
					</td>
				</tr>
			  </tbody>
            </table>
            <!-- APRIL Table End-->
			
			<div class="gt_table_small default_width">
			 <div class="col-md-12">
              <div class="accor_outer_wrap">
                <div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>JULY 2017</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>31</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Parents Orientation (AM) <br>Seminar: IT  Laws, Etiquette, others</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>31</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Parents Orientation (PM) <br>Seminar: IT  Laws, Etiquette, others</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
				</div>
                
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>AUGUST 2017</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am an Ednasian. I am a Filipino. </h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Classes Start</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">W - Th</td>
									<td>PEP Week</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>4</b></td>
									<td class="text-center col-md-2">F</td>
									<td>PEP Week Culminating Activity</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>11</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Induction of Officers (AM)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 18</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>SRI Pre Test <br> Book Fair (Scholastic and Adarna)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>19</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>21</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Ninoy Aquino Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>26</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">M</td>
									<td>National Heroes Day (Regular Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Culminating Activity Buwan ng Wika</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>30 - 31</b></td>
									<td class="text-center col-md-2">W - Th</td>
									<td>1st Qtr Oral Exams</td>
								</tr>
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Classes Start</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">W - Th</td>
									<td>PEP Week</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>4</b></td>
									<td class="text-center col-md-2">F</td>
									<td>PEP Week Culminating Activity</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Feast of St. Dominic (Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>11</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Induction of Officers (PM)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 18</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>SRI Pre Test <br> Book Fair (Scholastic and Adarna)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>19</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>21</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Ninoy Aquino Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>26</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">M</td>
									<td>National Heroes Day (Regular Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Culminating Activity Buwan ng Wika</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>30 - 31</b></td>
									<td class="text-center col-md-2">W - Th</td>
									<td>1st Qtr Oral Exams</td>
								</tr>
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Parents Orientation (AM) <br> Seminar: IT  Laws, Etiquette, others</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Classes Start</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">W - Th</td>
									<td>PEP Week</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>4</b></td>
									<td class="text-center col-md-2">F</td>
									<td>PEP Week Culminating Activity</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Induction of Officers</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 18</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>SRI Pre Test <br> Book Fair (Scholastic and Adarna)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>19</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>21</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Ninoy Aquino Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>26</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Student Leadership Training</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">M</td>
									<td>National Heroes Day (Regular Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Culminating Activity Buwan ng Wika</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>30 - 31</b></td>
									<td class="text-center col-md-2">W - Th</td>
									<td>1st Qtr Oral Exams</td>
								</tr>
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
                 
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>SEPTEMBER 2017</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am an Ednasian. I am a Filipino. </h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Eid’l Adha (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">T</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 8:00am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>11 - 12</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>1st Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Career Fair</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>20</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Ateneo Talk</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>ACET</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>GS Cookfest</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">F</td>
									<td>HS Cookfest</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Eid’l Adha (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">T</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>11 - 12</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>1st Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Career Fair</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>20</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Ateneo Talk</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>ACET</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>GS Cookfest</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">F</td>
									<td>HS Cookfest</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Eid’l Adha (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 8:00am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>11 - 12</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>1st Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Career Fair</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>20</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Ateneo Talk</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>ACET</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>GS Cookfest</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">F</td>
									<td>HS Cookfest</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
                  
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>OCTOBER 2017</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am an Angel to others.<br>I am a Saint with a capital S.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>1st Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>4</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Confirmands Recollection with Confession</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>6</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 8:00am<br>Confirmation General Rehearsal at St. John the Evangelist Cathedral, Dagupan</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Confirmation</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>First Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>20</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Fieldtrip: Prep – Gr. 2</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>26</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Festival of Saints and Angels</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Faculty Development Program</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>1st Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>4</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Confirmands Recollection with Confession</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>6</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am<br>Confirmation General Rehearsal at St. John the Evangelist Cathedral, Dagupan</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Confirmation</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>First Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>20</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Fieldtrip: Prep – Gr. 2</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>26</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Festival of Saints and Angels</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Faculty Development Program</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>1st Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Confirmands Recollection with Confession</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>6</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am<br>Confirmation General Rehearsal at St. John the Evangelist Cathedral, Dagupan</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Confirmation</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>First Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>20</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Fieldtrip: Prep – Gr. 2</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>26</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Festival of Saints and Angels</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Faculty Development Program</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
                
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>NOVEMBER 2017</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am an Angel to others.<br>I am a Saint with a capital S.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">W</td>
									<td>All Saints Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>All Souls Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>2nd Quarter Oral Exams<br>(if Nov. 2 is not a holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 & 6</b></td>
									<td class="text-center col-md-2">F & M</td>
									<td>2nd Quarter Oral Exams<br>(if Nov. 2 is a holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 8:00am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Field Trip: Gr. 3-6</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Pangasinan Day (Regular Holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>15 - 16</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>2nd Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Field Trip: JHS + SHS</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>22</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27 - 29</b></td>
									<td class="text-center col-md-2">M - W</td>
									<td>Sir Rogelio Gonzales Intramurals</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Bonifacio Day (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">W</td>
									<td>All Saints Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>All Souls Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>2nd Quarter Oral Exams<br>(if Nov. 2 is not a holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 & 6</b></td>
									<td class="text-center col-md-2">F & M</td>
									<td>2nd Quarter Oral Exams<br>(if Nov. 2 is a holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Field Trip: Gr. 3-6</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Pangasinan Day (Regular Holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>15 - 16</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>2nd Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Field Trip: JHS + SHS</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>22</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27 - 29</b></td>
									<td class="text-center col-md-2">M - W</td>
									<td>Sir Rogelio Gonzales Intramurals</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Bonifacio Day (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">W</td>
									<td>All Saints Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>All Souls Day (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>2 - 3</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>2nd Quarter Oral Exams<br>(if Nov. 2 is not a holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 & 6</b></td>
									<td class="text-center col-md-2">F & M</td>
									<td>2nd Quarter Oral Exams<br>(if Nov. 2 is a holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Field Trip: Gr. 3-6</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Pangasinan Day (Regular Holiday)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>15 - 16</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>2nd Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Educational Field Trip: JHS + SHS</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>22</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>27 - 29</b></td>
									<td class="text-center col-md-2">M - W</td>
									<td>Sir Rogelio Gonzales Intramurals</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Bonifacio Day (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
                  
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>DECEMBER 2017</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am an Angel to others.<br>I am a Saint with a capital S.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Educator’s Day + Pamaskong Handog</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>4</b></td>
									<td class="text-center col-md-2">M</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Immaculate Conception Day (Regular Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b></b></td>
									<td class="text-center col-md-2"></td>
									<td>Teachers’ Fieldtrip</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>11 - 12</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>2nd Quarter Exams (Gr. 1-6, JHS)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Friday Mass 8:00am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>PS Christmas Presentation (AM)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Christmas Party</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Educator’s Day + Pamaskong Handog</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>4</b></td>
									<td class="text-center col-md-2">M</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Immaculate Conception Day (Regular Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b></b></td>
									<td class="text-center col-md-2"></td>
									<td>Teachers’ Fieldtrip</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>11 - 12</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>2nd Quarter Exams (Gr. 1-6, JHS)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>PS Christmas Presentation (PM)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Christmas Party</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Educator’s Day + Pamaskong Handog</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Immaculate Conception Day (Regular Holiday)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b></b></td>
									<td class="text-center col-md-2"></td>
									<td>Teachers’ Fieldtrip</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>11 - 12</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>2nd Quarter Exams (Gr. 1-6, JHS)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">W</td>
									<td>PS Christmas Presentation</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Christmas Party</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
                
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>JANUARY 2018</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am LOVE.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>3</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Classes resume</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>4 - 5</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>2nd Quarter Exams (PS, SHS)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Alternative Career Talk</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">T</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="font-style:italic">
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 8:00am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>2nd Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15 - 17</b></td>
									<td class="text-center col-md-2">M - W</td>
									<td>Grade 10 Retreat</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2">W</td>
									<td>PS Sportsfest</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>22 - 23</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>3rd Quarter Oral Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>24 - 26</b></td>
									<td class="text-center col-md-2">W - F</td>
									<td>Grade 11 Retreat</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Recollection with Confession: First Communicants</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>31</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>3</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Classes resume</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>4 - 5</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>2nd Quarter Exams (PS, SHS)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Alternative Career Talk</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">T</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="font-style:italic">
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>2nd Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>18 - 20</b></td>
									<td class="text-center col-md-2">Th - Sat</td>
									<td>Grade 10 Retreat</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2">W</td>
									<td>PS Sportsfest</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>22 - 23</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>3rd Quarter Oral Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>24 - 26</b></td>
									<td class="text-center col-md-2">W - F</td>
									<td>Grade 11 Retreat</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Recollection with Confession: First Communicants</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">T</td>
									<td>General Rehearsal: First Holy Communion</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>31</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>3</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Classes resume</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>4 - 5</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>2nd Quarter Exams (PS, SHS)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Alternative Career Talk</td>
								</tr>
																
								<tr style="font-style:italic">
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>2nd Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>18 - 20</b></td>
									<td class="text-center col-md-2">Th - Sat</td>
									<td>Grade 10 Retreat</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2">W</td>
									<td>PS Sportsfest</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>22 - 23</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>3rd Quarter Oral Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>24 - 26</b></td>
									<td class="text-center col-md-2">W - F</td>
									<td>Grade 11 Retreat</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>26</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Recollection with Confession: First Communicants</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">M</td>
									<td>General Rehearsal: First Holy Communion</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">T</td>
									<td>First Holy Communion</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>31</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
                
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>FEBRUARY 2018</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am LOVE.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>General Rehearsal: First Holy Communion</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Holy Communion</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>3</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Grade 10 – 11 Prom</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Grade 5 Recollection</td>
								</tr>
								
								<tr style="font-style:italic">
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>8 - 9</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>3rd Mid-Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Grade 6 Recollection</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>13 - 15</b></td>
									<td class="text-center col-md-2">T - W</td>
									<td>Grade 12 Retreat</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Friday Mass 8:00am</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>16</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Chinese New Year (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>21</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Grade 7 Recollection</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>27</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Grade 8 Recollection</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								<tr>
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>First Holy Communion</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>3</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Grade 10 – 11 Prom</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>6</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Grade 5 Recollection</td>
								</tr>
								
								<tr style="font-style:italic">
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>8 - 9</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>3rd Mid-Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Grade 6 Recollection</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>13 - 15</b></td>
									<td class="text-center col-md-2">T - W</td>
									<td>Grade 12 Retreat</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>16</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Chinese New Year (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>22</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Grade 7 Recollection</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>3</b></td>
									<td class="text-center col-md-2">Sat</td>
									<td>Grade 10 – 11 Prom</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Grade 5 Recollection</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>8 - 9</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>3rd Mid-Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>14</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Grade 6 Recollection</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>13 - 15</b></td>
									<td class="text-center col-md-2">T - W</td>
									<td>Grade 12 Retreat</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>15</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>16</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Chinese New Year (Special Non-working Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Grade 7 Recollection</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>28</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Early dismissal (Faculty In-Service)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
                
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>MARCH 2018</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am Light and Salt.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>5 - 6</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>3rd Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">W</td>
									<td>Grade 9 Recollection</td>
								</tr>
								
								<tr style="font-style:italic">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 8:00am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>Third Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>15 - 16</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>51st Foundation Anniversary</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Faculty Development Program</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>26 - 30</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>Holy Week</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Holy Thursday (Regular Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Good Friday (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Grade 8 Recollection</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>5 - 6</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>3rd Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>7</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>8</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Grade 9 Recollection</td>
								</tr>
								
								<tr style="font-style:italic">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>Third Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>19 - 20</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>33rd Foundation Anniversary</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>22</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>First Wednesday Mass @ 9:30am</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Faculty Development Program</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>26 - 30</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>Holy Week</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Holy Thursday (Regular Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Good Friday (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Grade 8 Recollection</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>5 - 6</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>3rd Quarter Exams</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Grade 9 Recollection</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>Third Quarter Card Day</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>21 - 22</b></td>
									<td class="text-center col-md-2">W - Th</td>
									<td>12th Foundation Anniversary</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Faculty Development Program</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>26 - 30</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>Holy Week</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>29</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Holy Thursday (Regular Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>30</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Good Friday (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
				
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>APRIL 2018</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am Light and Salt.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
																
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">M</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 - 4</b></td>
									<td class="text-center col-md-2">T - W</td>
									<td>4th Quarter Oral Exams</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Pangasinan Day (Regular Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Araw ng Kagitingan (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>11</b></td>
									<td class="text-center col-md-2">W</td>
									<td>APSA</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>16 - 17</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>4th Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>18 - 20</b></td>
									<td class="text-center col-md-2">W - F</td>
									<td>SRI Post Test</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Prime Math (Exit Assessment)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
																
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">M</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 - 4</b></td>
									<td class="text-center col-md-2">T - W</td>
									<td>4th Quarter Oral Exams</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Pangasinan Day (Regular Holiday)</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Araw ng Kagitingan (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>12</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>APSA</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>16 - 17</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>4th Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>18 - 20</b></td>
									<td class="text-center col-md-2">W - F</td>
									<td>SRI Post Test</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Prime Math (Exit Assessment)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
																
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 - 4</b></td>
									<td class="text-center col-md-2">T - W</td>
									<td>4th Quarter Oral Exams</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>5</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Pangasinan Day (Regular Holiday)</td>
								</tr>								
																
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>6</b></td>
									<td class="text-center col-md-2">F</td>
									<td>First Friday Mass 9:30am</td>
								</tr>
								
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>9</b></td>
									<td class="text-center col-md-2">M</td>
									<td>Araw ng Kagitingan (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>13</b></td>
									<td class="text-center col-md-2">F</td>
									<td>APSA</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>16 - 17</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>4th Mid-Quarter Exams</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>18 - 20</b></td>
									<td class="text-center col-md-2">W - F</td>
									<td>SRI Post Test</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2">F</td>
									<td>Prime Math (Exit Assessment)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
				
				<div class="ct_accord_list">
                    <div class="accord_hdg" id="accord2">
                        <h6>MAY 2018</h6>
                        <span class="fa fa-minus-circle"></span>
                    </div>
                    <div class="accord_des">
                       <div class="col-md-12">
							<h6 class="theme_hdg" >Transdisciplinary Theme:<br>I am Light and Salt.</h6>
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										DAGUPAN
									</th>
								</tr>
																
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Labor Day (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 8:00am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 - 4</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>4th Quarter Exams (Prep, Gr. 6, & Gr. 12)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>7 - 8</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>4th Quarter Exams (Undergrads)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>8 - 9</b></td>
									<td class="text-center col-md-2">T - W</td>
									<td>Submission of Fourth and Final Consolidated Grades (Prep, Gr. 6, Gr. 12)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Culminating Activity (N & K)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10 - 11</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>Submission of Fourth and Final Consolidated Grades (N-K, Gr.1-5, Gr. 7-11)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 16</b></td>
									<td class="text-center col-md-2">M - W</td>
									<td>Posting of Honors (4th & Final) (Prep, Gr. 6, Gr. 12)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 18</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>Posting of Honors (4th & Final) (Gr.1-5, Gr. 7-11)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2"><b>Th</b></td>
									<td><b>Prep Graduation 8:00AM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>18</b></td>
									<td class="text-center col-md-2"><b>F</b></td>
									<td><b>Recognition Day (Gr. 1-5) AM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>21</b></td>
									<td class="text-center col-md-2"><b>M</b></td>
									<td><b>Grade 6 Graduation (AM)</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>22</b></td>
									<td class="text-center col-md-2"><b>T</b></td>
									<td><b>Recognition (Gr. 7-11) AM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2"><b>W</b></td>
									<td><b>HS Graduation AM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>24 - 25</b></td>
									<td class="text-center col-md-2"><b>Th - F</b></td>
									<td><b>Clearance</b></td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										SAN CARLOS
									</th>
								</tr>
																
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Labor Day (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 - 4</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>4th Quarter Exams (Prep, Gr. 6, & Gr. 12)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>7 - 8</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>4th Quarter Exams (Undergrads)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Submission of Fourth and Final Consolidated Grades (Prep, Gr. 6, Gr. 12)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Culminating Activity (N & K)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10 - 11</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>Submission of Fourth and Final Consolidated Grades (N-K, Gr.1-5, Gr. 7-11)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 16</b></td>
									<td class="text-center col-md-2">M - W</td>
									<td>Posting of Honors (4th & Final) (Prep, Gr. 6, Gr. 12)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 18</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>Posting of Honors (4th & Final) (Gr.1-5, Gr. 7-11)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>17</b></td>
									<td class="text-center col-md-2"><b>Th</b></td>
									<td><b>Prep Graduation PM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>18</b></td>
									<td class="text-center col-md-2"><b>F</b></td>
									<td><b>Recognition Day (Gr. 1-5) PM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>21</b></td>
									<td class="text-center col-md-2"><b>M</b></td>
									<td><b>Grade 6 Graduation (PM)</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>22</b></td>
									<td class="text-center col-md-2"><b>T</b></td>
									<td><b>Recognition (Gr. 7-11) PM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>23</b></td>
									<td class="text-center col-md-2"><b>W</b></td>
									<td><b>HS Graduation PM</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>24 - 25</b></td>
									<td class="text-center col-md-2"><b>Th - F</b></td>
									<td><b>Clearance</b></td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
							<table class="table table-borderless table-condensed">
								<tr>
									<th colspan=3 class="small_calendar" >
										ALAMINOS
									</th>
								</tr>
																
								<tr style="color:red;">
									<td class="text-center col-md-2"><b>1</b></td>
									<td class="text-center col-md-2">T</td>
									<td>Labor Day (Regular Holiday)</td>
								</tr>
								
								<tr style="font-style:italic;">
									<td class="text-center col-md-2"><b>2</b></td>
									<td class="text-center col-md-2">W</td>
									<td>First Wednesday Mass 9:30am</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>3 - 4</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>4th Quarter Exams (Prep, Gr. 6, & Gr. 12)</td>
								</tr>
								
								<tr style="color:#0070bb;">
									<td class="text-center col-md-2"><b>7 - 8</b></td>
									<td class="text-center col-md-2">M - T</td>
									<td>4th Quarter Exams (Undergrads)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Submission of Fourth and Final Consolidated Grades (Prep, Gr. 6, Gr. 12)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10</b></td>
									<td class="text-center col-md-2">Th</td>
									<td>Culminating Activity (N & K)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>10 - 11</b></td>
									<td class="text-center col-md-2">Th - F</td>
									<td>Submission of Fourth and Final Consolidated Grades (N-K, Gr.1-5, Gr. 7-11)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 16</b></td>
									<td class="text-center col-md-2">M - W</td>
									<td>Posting of Honors (4th & Final) (Prep, Gr. 6, Gr. 12)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>14 - 18</b></td>
									<td class="text-center col-md-2">M - F</td>
									<td>Posting of Honors (4th & Final) (Gr.1-5, Gr. 7-11)</td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>19</b></td>
									<td class="text-center col-md-2"><b>Sat</b></td>
									<td><b>Prep Graduation<br>Recognition (Gr. 1-5, Gr. 7-11)<br>Thanksgiving Mass<br>Grade 6 Graduation<br>HS Graduation</b></td>
								</tr>
								
								<tr>
									<td class="text-center col-md-2"><b>24 - 25</b></td>
									<td class="text-center col-md-2"><b>Th - F</b></td>
									<td><b>Clearance</b></td>
								</tr>
								
								<tr style="font-style:italic;">
									<td colspan="3" class="text-center">
									*** Academic schedules are subject to change ***
									</td>
								</tr>
								
							</table>
							
					   </div>
					   
                    </div>
                
					
				</div>
				
              </div>
            </div>
            
			</div>
			
			
		  </div>
          <!--Classes List Wrap End-->
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
  
  <div class="modal fade" id="myModal" tabindex="2" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					REMARKS
				</div>
				<div class="modal-body" style="max-height: 130px; min-height:130px;">
					
					<div class="col-sm-12">
						<div class="form-group">
							<label for="date_remarks" class="col-sm-2" style="margin-top:5px;">DATE: </label>
							<div class="col-sm-5">
								<input type = "date" class="form-control" id="date_remarks">
							</div>
						</div>
					</div>
					<br><br>
					<div class="col-sm-12">
						<div class="form-group">
							<label for="remarks" class="col-sm-2 control-label" style="margin-top:5px;">REMARKS: </label>
							<div class="col-sm-10">
								
								<textarea class="form-control" rows="2" id="remarks"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button id="btnAdd_Remarks" type="button" class="btn btn-primary">Add</button>
					<button id="btnDelete_Remarks" type="button" class="btn btn-primary hidden">Delete</button>
					<button id="btnCancel_Remarks" type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
				</div>
				
			</div>
		</div>
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
