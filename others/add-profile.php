<?php 
	session_start(); 
	//unset($_SESSION["user"]);
	if (!isset($_SESSION["user"]))
	{
		die("Access denied.");
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="images/ednas-logo.ico" type="image/x-icon"/>
  <title>Ednas School</title>
   <!-- Chosen CSS -->
  <link href="css/chosen.min.css" rel="stylesheet">
  <!-- Chosen CSS -->
  <link href="css/dashboard.css" rel="stylesheet">
  <!-- Custom Main StyleSheet CSS -->
  <link href="style.css" rel="stylesheet">
  <!-- Color CSS -->
  <link href="css/color.css" rel="stylesheet">
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
              <li><a href="#">Student</a></li>
              <li><a href="meet-our-teacher.php">Faculty Staff</a></li>
              <li><a href="#">Parents</a></li>
              <li><a href="alumni.php">Alumni</a></li>
            </ul>
          </div>
          <div class="gt_hdr_2_ui_element">
            <ul>
              <li><i class ="fa fa-user"></i><a href="#"><?php echo $_SESSION["user"][0][0];?></a></li>
            </ul>
          </div>
          <div class="gt_login_element">
            
          </div>
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
					<li><a href="academics.php#primary_education">Primary Education</a></li>
					<li><a href="academics.php#secondary_education">Secondary Education</a></li>
					<li><a href="academics.php#framework&curriculum">Framework & Curriculum</a></li>
					<li><a href="academics.php#programs">Programs</a></li>
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">Campuses</a>
                <ul>
					<li><a href="#">Virtual Campus Tour</a></li>
					<li><a href="#">Dagupan</a></li>
					<li><a href="#">San Carlos</a></li>
					<li><a href="#">Alaminos</a></li>
					<li><a href="#">Campus Blog</a></li>
                
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">School</a>
                <ul>
					<li><a href="academic-calendar.php">Academic Calendar</a></li>
					<li><a href="#">Student Resources</a></li>
					<!--<li><a href="login-register.html">Parents Resources</a></li>-->
					<li><a href="alumni.php">Alumni</a></li>
					<li><a href="meet-our-teacher.php">Meet Our Teachers</a></li>
					<li><a href="digital-citizenship-program.php">Digital Citizenship Program</a></li>
                  
                </ul>
              </li>
              <li><a href="javascript:avoid(0);">News & Media</a>
                <ul>
					<li><a href="#">Latest News</a></li>
					<li><a href="#">Events</a></li>
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
            <div class="gt_sub_banner_hdg  default_width">
                <h2>New Account</h2>
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
                <li><a href="#">New Account</a></li>
            </ul>
        </div>
      </div>
    </div>
    <!--Breadcrumb Wrap End -->

    <!--Main Content Wrap Start-->
    <div class="gt_content_wrap">
      <!--Classes Wrap Start-->
      <section class="gt_courses_bg">
        <div class="container">
          
          <!-- Dashboard Side Bar Wrap Start -->
          <div class="col-md-4">
            <div class="gt-user-sidebar">
              <div class="gt_d_author_wrap">
                <div class="gt_d_author_pic">
                  <figure>
                    <img src="images/ednas_logo_admin.jpg" alt="">
                  </figure>
                </div>
                <div class="gt_d_author_pic_des">
                  <h5>ADMINISTRATOR</h5>
                  <span class="gt_hdg_span"></span>
                  <p>IT Department</p>
                  <label id = "user_id" hidden><?php echo $_SESSION["user"][0][1];?></label>
                </div>
                
              </div>
              <div class="gt-usser-account-list">
                <ul>
                  <li><a href="my-profile.php"><i class="fa fa-user-circle-o gt-color"></i>My Profile</a></li>
                  <li class="active"><a href="add-profile.php"><i class="fa fa-user-plus gt-color"></i>New Account</a></li>
                  <li><a href="list-profile.php"><i class="fa fa-list gt-color"></i>List of Subscribers</a></li>
                </ul>
                <a href="#" id = "btn_logout" class="gt-logout"><i class="icon-arrows-2 gt-color"></i>Logout</a>
              </div>
            </div>
          </div>
          <!-- Dashboard Side Bar Wrap End -->

          <!--Classes List Wrap Start-->
          <div class="col-md-8">
			<div class="gt_d_classes_wrap default_width mb20">
              <h4 class="gt_d_title">New Account</h4>
			  <input type="hidden" id="id_account">
			  <div class="gt_d_profile_setting default_width">
                <div class="row">
					<div class="col-md-12">
					<span><label id="err_message" style="color:red"></label></span>
					</div>
                  <div class="col-md-6">
                    <div class="gt_privacy_field default_width mb20">
                      <input id="p_fname" class="c_ph" type="text" placeholder="*Parent First Name :">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="gt_privacy_field default_width mb20">
                      <input id="p_lname" class="c_ph" type="text" placeholder="*Parent Last Name :">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="gt_privacy_field default_width mb20">
                      <input id="s_name" class="c_ph" type="text" placeholder="*Student Name :">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="gt_privacy_field default_width mb20">
                      <input id="s_id" class="c_ph" type="text" placeholder="*Student ID :">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="gt_privacy_field default_width mb20">
                      <input id="cell_no" class="c_ph" type="text" placeholder="Cellphone No :">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="gt_privacy_field default_width mb20">
                      <input id="address" class="c_ph" type="text" placeholder="Address :">
                    </div>
                  </div>
				  
				  <div class="col-md-12">
                    <div class="gt_privacy_field default_width mb20">
                      <select id="opt_type" class="gt_d_privacy_dd">
                           <option value="type_acc">*Type</option>
                           <option value="Administrator">Administrator</option>
                           <option value="Parent">Parent</option>
                        </select>
                    </div>
                  </div>
				  
				  
				  <div class="col-md-4">
						<div class="gt_privacy_field default_width mb20">
						  <input id="acc_username" class="c_ph" type="text" placeholder="*Username">
						</div>
					  </div>
					  <div class="col-md-4">
						<div class="gt_privacy_field default_width mb20">
						  <input id="acc_password" class="c_ph" type="text" placeholder="*Password">
						</div>
					</div>
				  
				  <div class="col-md-4">
					<div class="gt_privacy_field default_width">
                      <input id="btn_gen_account" type="submit" value="Generate Account" style="background-color:#0070bb;">
                    </div>
                  </div>
				  
				  <div class="col-md-7">
					<div class="gt_privacy_field default_width mb20">
                      <input id="btn_add_account" type="submit" value="Add Account" style="background-color:#008000;">
                    </div>
                  </div>
                  
              </div>
            </div>
          
		  </div>
		  <!--Classes List Wrap End-->
        </div>
      </section>
      <!--Classes Wrap End-->
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
					  <li><a href="login-register.html">Login</a></li>
                      <li><a href="contact-us.php">Contact Us</a></li>
                     
                  </ul>
                  <ul>
					  <li><a href="academic-calendar.php">Calendar</a></li>
					  <li><a href="alumni.php">Alumni</a></li>
                      <li><a href="meet-our-teacher.php">Meet Our Teachers</a></li>
                      <li><a href="#">Campus Blog</a></li>
                      <li><a href="#">Virtual Campus Tour</a></li>
					  <li><a href="#">Dagupan</a></li>
                      <li><a href="#">San Carlos</a></li>
                      <li><a href="#">Alaminos</a></li>
                  </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="gt_foo_news gt_widget2_hdg">
                <h5 style="color:#0070bb;">Latest News</h5>
                <ul>
				  <li>
                    <figure>
                      <img src="images/news4_footer.jpg" alt="">
                    </figure>
                    <div class="foo_news_content">
                      <a href="latest-news.php#news4">EDNAS Launches Its New Website and Official Social Media Accounts</a>
                    </div>
                  </li>
				
                  <li>
                    <figure>
                      <img src="images/news1_footer.jpg" alt="">
                    </figure>
                    <div class="foo_news_content">
                      <a href="latest-news.php#news1">EDNAS School 50th Anniversary Celebration</a>
                    </div>
                  </li>
                  <li>
                    <figure>
                      <img src="images/news2_footer.jpg" alt="">
                    </figure>
                    <div class="foo_news_content">
                      <a href="latest-news.php#news2">In-Service Training for Teachers</a>
                    </div>
                  </li>
                  <li>
                    <figure>
                      <img src="images/news3_footer.jpg" alt="">
                    </figure>
                    <div class="foo_news_content">
                      <a href="latest-news.php#news3">Robotics Engineering Competition</a>
                    </div>
                  </li>
				  
				  
				  
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
  <!--Chosen JavaScript-->
  <script src="js/chosen.jquery.min.js"></script>
  <!--Custom JavaScript-->
  <script src="js/custom.js"></script>
  
  <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
  <script src="js/add-profile.js"></script>

</body>
</html>
