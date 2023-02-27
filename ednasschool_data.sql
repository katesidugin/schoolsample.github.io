-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 03, 2017 at 10:51 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ednasschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_fname` varchar(50) NOT NULL,
  `parent_lname` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `program` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `cell_no` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `parent_fname`, `parent_lname`, `student_name`, `student_id`, `program`, `username`, `password`, `type`, `cell_no`, `address`) VALUES
(1, 'Administrator', '', '', '', '', 'admin', 'admin', 'Administrator', '0', ''),
(2, 'test', 'account', 'test account', '12345', '', 'test_account', 'test', 'Parent', '99999999999', 'Philippines');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `link` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`link`, `title`, `content`) VALUES
('index.php#welcome_to_ednas', 'Welcome To Ednas', 'Ednas School, as an institution in a democracy, is concerned with creating learning opportunities that permit and encourage person to realize his or her fullest potential. This encompasses the complete formation of the entire man by the progressive and harmonious development of his moral, spiritual, intellectual, social aesthetic, and physical faculties. We are proud of our Traditional but Innovative and Progressive Teaching Methodologies. We take pride in our excellent, holistic, transformative program of education. We are home to Successful Alumni who have made a name for themselves in various fields and industries'),
('index.php#explore_ednas', 'Explore Ednas', 'What makes EDNAS School different and a cut above the rest? Our education program is Traditional but Innovative:, PROGRESSIVE – OPEN TO GLOBAL TRANSFORMATIVE EDUCATION, LEADING TOWARDS INTERNATIONALIZATION, FOCUSED ON PROFESSIONAL DEVELOPMENT'),
('index.php#why_choose_us', 'Why Choose Us', 'We take great care of your children’s present education and prepare immensely\r\nfor their future career., Excellent educational programs that are traditional but innovative and leading towards internationalization;, Well-trained Teachers and Professional Development Consultants;, Proud home to successful alumni in all fields; Learn more about the exemplary EDNASIANS who have made it to top Philippine universities.'),
('index.php#latest_news_events', 'Latest News And Events', ''),
('about.php#about_ednas_school', 'About Ednas School', 'Who We Are, Ednas School, as an institution in a democracy, is concerned with creating learning opportunities that permit and encourage person to realize his or her fullest potential. This encompasses the complete formation of the entire man by the progressive and harmonious development of his moral, spiritual, intellectual, social aesthetic, and physical faculties. As an educational community, Ednas School is committed to: 1. Developing in each student a knowledge and love of God through integration of values in all subjects. 2. Developing in each student a social convenience by educating them to be creative, imaginative and flexible in coping with problems. 3. Establishing for each student the highest possible standard of education to develop their intellectual and functional skills based on new developments and discoveries in the various academic disciplines. 4. Emphasizing the cultural traditions and values of our social system and communicating the wisdom which society has judged to be significant. Invariably, these commitments are interrelated, but sometimes they are in conflict. When conflicts occur and a choice of emphasis is necessary, we support those educational arrangements which deal with significant social issues and which treat each student as our responsibility.'),
('about.php#history', 'History', 'Thirty-five years ago, in a rented room at the Pece Compound, Tapuac District, Dagupan City, thirty-five youngsters met their preschool teacher for the first time. Starting their decades of education at an early age, those “wriggly whimpery”, wet-nosed kids unaware that before their very eyes, history was unfolding. One of today’s best institutions evolved from such humble beginnings. In 1966, when Filipino women were just starting to make their presence felt in this traditionally maledominated society, Edna Torio, aged twenty-two, started her own school. From then on, there was no turning back. Three years later, on a one-half hectare lot just few meters behind YMCA, foundation was laid for the first structures of what is Ednas School today.'),
('about.php#our_core', 'Our Core', 'Starting as a pre-school in 1966 founded by a young but visionary Edna Torio, we learned along with the students entrusted to our care to develop an emphasis on excellence in education as we grew to become a government accredited elementary and high school institution with a reputation for graduating future scholars who eventually become productive professionals and law-abiding citizens of our country., EDNASIAN MANIFESTO, EDNASIAN SPIRIT, MISSION, VISION, Ednas School is committed to the total formation of the entire man by the progressive and harmonious development of the moral, spiritual, intellectual, social, aesthetic, and physical quantities., A God-centered Filipino school with a global outlook committed to the goals of nation building and dedicated to the attainment of excellence in all facets of human life that lead to the advancement of knowledge and lifelong learning, skills enhanced with generosity, faith and life integration. A school that gives light to the North and spreads the flame of prayer ambition and excellence to the country devoted to a standard quality of service for all learners of the country and member of the community of nations.'),
('admissions.php#admissions_policies', 'Admissions Policies', 'Admission For New Students And Transferees Application for admission is scheduled on: DATE : January 2017 ONWARDS UNTIL ALL SLOTS ARE FILLED – UP TIME : 8:00 a. m. to 12:00 noon and 1: 30p.m. to 4:30 p.m. (Monday to Friday) VENUE : Guidance Office, Ednas School, Dagupan City               Guidance Office, Ednas School of San Carlos, San Carlos City Guidance Office, Ednas School of Alaminos, Alaminos City A. Who are qualified to apply: FOR NURSERY At least 3 to 3.5 years old on or before 1 August 2017. FOR KINDERGARTEN At least 4 to 4.5 years old on or before 1 August 2017. FOR PREPARATORY At least 5 to 5.5 years old on or before 1 August 2017. B. Requirements:1. NSO copy or Certified True Copy of Birth Certificate 2. Medical Certificate and/or Psychological Assessment 3. Passed the personal interview and assessment of the Guidance Counselor, Pre-School Faculty or School Administrators. NOTE: Assessment Result will be given immediately.'),
('admissions.php#admissions_process', 'Admissions Process', 'Application Requirements And Procedures:\r\nIncoming Grade 1\r\n1.	At least 6 years old on or before 1 August 2017.\r\n2.	Must present original and photocopy of the report card for the last completed school year (SY 2016-2017)\r\n3.	Must present original and photocopy of Birth Certificate (NSO)\r\n4.	If applicant is NOT a Filipino citizen, submit a photocopy of the following:\r\n      a.	Alien Certificate of Registration ( ACR), and\r\n      b.	A Special Study Permit issued by the Bureau of Immigration.\r\n5.	If Applicant has DUAL citizenship, submit a photocopy of your Philippine Passport or a Certificate of Recognition as a Filipino Citizen.\r\n6.	Submit a Medical Certificate and/or Psychological Assessment\r\n7.	Passed the Ednas School Entrance Exam\r\n8.	Testing Fee of Two Hundred Fifty Pesos ( Php 250.00) – non-refundable\r\n\r\nAdmission of Transferees to Grades 2, 3, 4, 5, 6, 7,8 ,9 ,10, 11\r\nApplicants to Ednas School Dagupan, Ednas School of San Carlos, and Ednas School of Alaminos must come from any recognized school in the Philippines or abroad and must meet the following requirements:\r\n1.	Obtain Application Form from the Registrar’s Office/Guidance Office.\r\n    Return the accomplished form to the Registrar’s Office/Guidance Office with the following:\r\n      a.	Original and Photocopy of Report Card (Form 138) with the confirmation for Promotion by the School Principal or Director\r\n      b.	Photocopy of Birth Certificate (PSA/NSO)\r\n      c.	Photocopy of Certificate of honor (Valedictorian)\r\n      d.	ESC Certification (applicable for ESC Grantees only)\r\n      e.	Certificate of Good Moral Character\r\n      f.	Medical Certificate and/or Psychological Assessment\r\n      g.	ESC Certification (applicable for ESC Grantees only)\r\n      h.	Passed the Ednas School Entrance Exam\r\n      i.	Testing Fee of Two Hundred Fifty Pesos (Php 250.00) – non-refundable\r\nAcceptance for Grade 12 students is on a case to case basis.\r\nScholarships and Grants Offered\r\n1.	ESC Grantees with Php 8,500.00 (For Grades 7-9 only)\r\n2.	SHS VP Grantees with Php 14,000.00 (for Grades 11-12)\r\n3.	Discount on Tuition Fee for First and Second in Over-all Rank\r\n4.	Sibling Discount\r\n5.	Alumni Discount'),
('admissions.php#enrollment_process', 'Enrollment Process', ''),
('admissions.php#school_fees', 'School Fees', ''),
('admissions.php#faqs', 'Frequently Asked Questions', ''),
('academics.php#educational_philosophy', 'EDUCATIONAL PHILOSOPHY', 'The Ednas School follows a classical-traditional educational system using and integrating various and progressive approaches such as the New York Bank Street Method, Howard Gardner’s Multiple Intelligences Theory and Classroom Differentiated Learning, Rudolf Steiner’s Soul Theory or the renowned Waldorf Education, and Edward De Bono’s Six Thinking Hats Method.'),
('academic-calendar.php', 'Academic Calendar', 'calendar'),
('login-register.html', 'Parents Resources', 'login'),
('alumni.php', 'Alumni', 'EDNASIANS ACCEPTED IN THE FOLLOWING COLLEGES/UNIVERSITIES, PHILIPPINE SCIENCE HIGH SCHOOL'),
('meet-our-teacher.php', 'Meet Our Teachers', 'Meet Our Teachers'),
('digital-citizenship-program.php', 'Digital Citizenship Program', 'Digital Citizenship Program'),
('social-media-feeds.php', 'Social Media Accounts', 'Social Media Accounts, Facebook, Instagram, Twitter, Youtube'),
('gallery.php', 'Gallery', 'Gallery, Pictures'),
('contact-us.php', 'Contact Us', ''),
('academics.php#school_profile', 'SCHOOL PROFILE', '“One of the top performing schools in the country” Manila Bulletin, 1995; National College Entrance Examinations, National Scholastic Aptitude Test, National Elementary Achievement Test, National Career Assessment Examination, National Achievement Test, 1970s – 1990s, Center for Educational Measurement, 2000s\r\n“Biggest supplier of Philippine Science High School students from Region I” Philippine Science High School – Main, 1970s – 1980s, non-quota period, 1990s - recent\r\nFive Decades of Competitions – Champions and Top Finalists, Best School Paper and Best Science Research – UP Subol, UP Palaris, National Mathematics and Quiz Bees, Metrobank-DepEd Mathematics Challenge, DepEd Press Conference, National Statistics Competition, National Science Research Awards, Impromptu Speech and Broadcasting Competitions, Reader’s Digest Pen Awards, Basketball, Taekwondo, Karate, Swimming, Tennis, Ballroom Dancing, Chess and Choral Singing Competitions, Milo Olympics, IRAA, Robotics Engineering\r\n“Pioneer of hands-on computer education and e-learning in Pangasinan and Region I “Yapster e-Learning, Philippine Daily Inquirer, Philippine Star, 2003\r\nPhilippine Accrediting Association of Schools, Colleges, and Universities (PAASCU), Level I Status, 2002\r\nExemplary School Performance Awards National, English, Math, Science, Center for Educational Measurement, 2008, 2009\r\nExcellence in Educational Transformation Award (EETA), Outstanding Innovation in Learning Methodologies and Delivery Systems, Ednas School of San Carlos, 2012'),
('academics.php#school_characteristics', 'SCHOOL CHARACTERISTICS', 'Ednas School, founded in 1966, is a comprehensive private pre-school, grade school, and high school that attract applicants from the entire province of Pangasinan, the rest of the Philippines, and from abroad. In the past fifty years it has grown and expanded from one learning center of excellence to two more campuses – Ednas School of San Carlos and Ednas School of Alaminos.\r\nThe Ednas School’s Vision-Mission is inspired by the Maryknoll and Jesuit spirit. This spirit I AM, THEREFORE, I CAN LEARN, in Latin, EGO SUM, ERGO, APREHENSUS SUM, calls for tradition in the disciplines of academic and values formation, culture and sports, community action and service, and, above all, prayer life.\r\nCore concentrations are offered in ENGLISH (Basic Reading and Language, Guided Reading, Practical Spoken English, Basic Grammar and Composition, Literature, Creative Writing, and Journalism), MATHEMATICS (Basic Mathematics, Secondary Mathematics, Calculus, Entrepreneurial Mathematics, and College Mathematics), SCIENCE (Basic and Advanced Sciences, Biology, Chemistry, Physics), SOCIAL STUDIES (Basic and Advanced Philippine History, Asian History, World History, Geography, and Current Events), FILIPINO (Basic Filipino Reading, Grammar, and Writing, Elementary and Secondary Filipino Literature), COMPUTER ASSISTED LEARNING, PHYSICAL AND SPORTS EDUCATION, VISUAL and PERFORMING ARTS, CULINARY ARTS, MUSIC, and CHRISTIAN LIVING\r\nAll pupils and students are given a comprehensive curriculum in the basic skills integrated with a curriculum for gifted and talented learners. Using the progressive approaches in the Multiple Intelligences and Steiner education theories, pupils and students are prepared and encouraged to surpass the Department of Education’s minimum diploma requirements.\r\nAside from the Humanities, Logic, Math, and Science teachings which we are known for, our teachers currently integrate in the present lessons a wide variety of MI and Waldorf teaching tools such as Music, Art, Linguistic, Kinesthetic, Abstract, Form Drawing, Eurhythmy, and Interpersonal, Intrapersonal, and Environmental activities. Each child can now learn better not by being individualistic, but by using a dominant intelligence while learning with others. This progressive approach puts emphasis on the development of a child’s soul and emotional intelligence, or EQ, the intelligence necessary for success in the world today.\r\nThe school is organized into four ten-week cycles or quarters. Classes in the Pre-School, Grade School, and the High School are scheduled with the day as the repetitive factor. Major concentrations are taught daily from Monday to Friday, while Minor concentrations meet once, twice, or thrice weekly.\r\nThe school activities are offered during the school year and during the summer. These activities include Remedial and Advance classes in English and Mathematics, Toddler Workshop, Art, Ballet, Taekwondo, Languages, Classical Music Instrument, European Football, and Robotics Engineering. By design, the after school activities may be integrated into the curriculum as special electives in the process of curriculum enhancement and enrichment.\r\nIn addition, Understanding by Design (UBD) and De Bono’s 6 Thinking Hats, which is a way of separating our thinking to gain clarity and focus – are among the new educational trends sweeping all over the world which emphasizes the HOTS in the classroom that brings out the fullest potential of its administration and faculty, as it encompasses the complete formation of the learners in its continuous pursuit of excellence.\r\nFor school year 2012 – 2013, Ednas School Dagupan, Ednas School of San Carlos, and Ednas School of Alaminos, will be transitioning into the K + 12 program of the Department of Education. The three campuses have started to re-align their core curriculum to what the new curriculum offers. Important and vital changes were made to meet the demands of the competencies required for each grade levels of the new DepEd curriculum. \r\nThe school is still presently in the process of curriculum alignment and curriculum mapping in preparation for ASEAN 2015 which will be held in the Philippines. The ASEAN 2015 is a regional organization established on 08 August 1967. On its 30th anniversary, ASEAN leaders agreed on a shared vision of ASEAN as a concert of Southeast Asian nations, outward looking, living in peace, stability and prosperity, bonded together in partnership in dynamic development and in a community of caring societies. At the 9th ASEAN Summit in 2003, the ASEAN Leaders resolved to establish an “ASEAN Community”. On the 12th ASEAN Summit in January 2007, the Leaders affirmed their strong commitment, to accelerate the establishment of an ASEAN Community by 2015 and signed the Cebu Declaration on the Acceleration of the Establishment of an ASEAN Community by 2015.\r\nThe pursuit of serving quality education for the Pangasinenses continues as Ednas School offers the Robotics Engineering classes'),
('academics.php#school_minority', 'SCHOOL MINORITY', 'Ednas School is a cosmopolitan Filipino school in which the dominant citizenship of its students is Filipino. Minority include various foreign citizenships and nationalities such as Chinese, Indian, Korean, Japanese, American, British, Italian, other European ethnicities and Middle-Eastern.\r\nAs a non-sectarian private school, the dominant religion practiced is Roman Catholicism, and which Ecumenism is practiced with other Christian, Moslem, and Hindu faiths.\r\nEdnas School fosters the values of unity, brotherhood, discipline, cooperation, collaboration and sharing with each other without discrimination of religion, race, creed, or social standing.'),
('academics.php#students_accepted_in_colleges&universities', 'COLLEGES/UNIVERSITIES TO WHICH OUR STUDENTS HAVE B', 'Assumption College\r\nArellano University\r\nAteneo de Manila University\r\nCentro Escolar University\r\nDe La Salle University\r\nFar Eastern University\r\nColegio de San Juan de Letran\r\nMapua Institute of Technology\r\nPhilippine Merchant Marine Academy (PMMA)\r\nPhilippine Military Academy\r\nPhilippine Normal University\r\nPolytechnic University of the Philippines\r\nSan Beda College\r\nSaint Louis University\r\nSaint Paul’s College\r\nSaint Scholastica’s College\r\nSiliman University\r\nSaint Theresa’s College\r\nTechnological Institute of the Philippines\r\nUniversity of the East\r\nUniversity of the Philippines – Baguio; Diliman; Los Baños; Manila\r\nUniversity of Santo Tomas\r\nWellesley College, USA\r\nColleges/Universities in the Locality\r\nColleges/Universities in the Philippines, United States, Canada, Europe, United Kingdom, and the Middle East'),
('academics.php#students_accepted_in_grade&highschool', 'GRADE SCHOOLS AND HIGH SCHOOLS TO WHICH OUR STUDEN', 'Assumption Convent – Antipolo; Makati\r\nAteneo de Manila University\r\nAteneo de Iloilo\r\nBrent International School - Baguio\r\nDon Bosco – Makati\r\nLa Salle Greenhills\r\nManila Science High School\r\nMiriam/Maryknoll College\r\nPhilippine Science High School – Baguio; Ilocos; Manila\r\nSan Beda College\r\nSaint Louis University Boys High / Science High School – Baguio\r\nSaint Paul’s College\r\nSaint Scholastica’s College – Cavite; Manila\r\nSaint Theresa’s College\r\nHigh Schools in the Locality\r\nHigh Schools in the Philippines, United States, Canada, Europe, United Kingdom, and the Middle East'),
('academics.php', 'Academics', 'Academic');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(76, 'aboutnew'),
(75, 'dfgdfg'),
(74, ';jkljklk'),
(73, 'hjhjh'),
(72, 'dddd'),
(71, 'dddd'),
(70, 'social_media'),
(69, 'social_media'),
(68, 'social_media'),
(67, 'social_media'),
(66, 'search'),
(65, 'profile_parent'),
(64, 'my_profile'),
(63, 'filesParent'),
(62, 'teacher'),
(61, 'teacher'),
(60, 'login'),
(59, 'subs'),
(58, 'gallery2'),
(57, 'gallery'),
(56, 'gallery'),
(55, 'gallery'),
(54, 'dig'),
(53, 'digital2'),
(52, 'digital'),
(51, 'digital'),
(50, 'contact'),
(77, 'adminnew'),
(78, 'acadsnew'),
(79, 'calnew'),
(80, 'loginnew'),
(81, 'my_profilenew'),
(82, 'add_profilenew'),
(83, 'listnew'),
(84, 'my_profile_parentnew'),
(85, 'aaaaa'),
(86, 'df'),
(87, 'asd'),
(88, 'abd'),
(89, 'fgfg'),
(90, 'sdf'),
(91, 'asdasd'),
(92, 'asdasd'),
(93, 'a'),
(94, 'ggg'),
(95, 'sdf'),
(96, 'asd'),
(97, 'asdasd'),
(98, 'asd'),
(99, 'asd'),
(100, 'jklkk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
