<!DOCTYPE html>
<html><!-- InstanceBegin template="../Templates/cds_layout1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Auburn University Career Center</title>
<!--#include virtual="/template/includes/head.html" -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12338791-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<style type="text/css">
@import url("http://www.auburn.edu/template/styles/sidebar.css");
</style>
</head>
<body>
<div id="pageWrap"> 
  <div id="headerWrap">
    <div id="header">
      <div id="logo">
      	<a href="http://www.auburn.edu"><img src="http://www.auburn.edu/template/styles/images/headerLogo.png" alt="Auburn University Homepage" /></a>
      </div>
      <div id="headerTitle">
        <div class="topLinks">
          <a href="http://www.auburn.edu/main/sitemap.php">A-Z Index</a> | 
          <a href="http://www.auburn.edu/map">Map</a> | 
          <a href="http://www.auburn.edu/main/auweb_campus_directory.html" class="lastTopLink">People Finder</a>
        </div>
        <form action="http://search.auburn.edu" id="searchForm" method="get">
          <div class="searchBox">
            <input type="text" name="q" id="q" accesskey="q" size="28" tabindex="1" class="searchField" onfocus="if(this.value=='Search AU...'){this.value='';this.style.color='black'}" onblur="if(this.value=='')this.value='Search AU...';this.style.color='grey'" value="Search AU..." />
            <input type="image" src="http://www.auburn.edu/template/styles/images/searchButton2.png" name="sa" accesskey="z" tabindex="2" alt="Search" value="Submit" class="searchButton" />
          </div>
          <input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm" />
          <input type="hidden" name="ie" value="utf-8" />
          <label for="q" style=" position:absolute; left:-9999px; visibility:hidden;">Enter your search terms</label>
        </form>
        <div class="titleArea"><h4>Career Center</h4>
        <!--span class="subHeading">Office of Undergraduate Studies</span--></div>
      </div>
    </div>
		<table class="nav">
      <tr>
        <tr>
        <td><a href="../students">Students</a></td>
        <td><a href="http://hire.auburn.edu">Employers</a></td>
        <td><a href="../alumni">Alumni</a></td>
        <td><a href="../faculty">Faculty/Staff</a></td>
        <td><a href="../parents">Parents</a></td>
        <td><a href="../aboutus">About Us</a></td>
      </tr>
      </tr>
    </table>
  </div>
  <div id="contentArea">
    <div class="contentDivision"> 
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --> <a href="../">Career Center</a> &gt; Strong Interest Inventory/TypeFocus Registration Complete<!-- InstanceEndEditable --> </p>
			<!-- InstanceBeginEditable name="body" -->
      <?php 


mysql_connect("acadmysql","cdsserv","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
	
 
 
if ($fname == "") {
      echo "<h3><center>You did not type your first name.<br>";
      echo "Please go back and type in your last name so your form can be submitted.</center></h3>\n\n";
      exit;

   }
   
if ($lname == "") {
      echo "<h3><center>You did not type your last name.<br>";
      echo "Please go back and type in your first name so your form can be submitted.</center></h3>\n\n";
      exit;

   }
   
if ($email == "") {
	  echo "<h3><center>You did not include your email address.<br>";
	  echo "Please go back and type in your email address.</center></h3>\n\n";
	  exit;
	  
  }
   
  
   
	$query="INSERT INTO assessments (id, studentid, fname, lname, email, status, reason, class, instructor, strong, typefocus, date, Monday, Tuesday, Wednesday, Thursday, Friday) VALUES (
         '$id',
         '$studentid',
         '$fname',
         '$lname',
		 '$email',
		 '$status',
		 '$reason',
		 '$class',
		 '$instructor',
		 '$strong',
		 '$typefocus',
		 '$date',
		 '$Monday',
		 '$Tuesday',
		 '$Wednesday',
		 '$Thursday',
		 '$Friday')";
$success=mysql_query($query);

?>

<?php

if ($typefocus == "tf") {
     
/* recipient */
$to = "$email";


//subject
$subject = "TypeFocus Assessment";

//message

$message=

"Welcome to TypeFocus, the personality and career assessment tool that can help you gain insight into your personality, interests and values in order to help you achieve your educational and career goals.  Features of TypeFocus include the following assessments:  Personality, Interests, Values, and Success Factors.   

The first step in using TypeFocus is to take the Personality Assessment.  To get started with TypeFocus, please follow the instructions below:

1.	Go to http://www.typefocus.com/ 
2.	Click on 'New Users Start Here'
3.	Complete the required information for New User Registration.  Your ‘Organizational Access Code’ is: au7788.  You will only have to use this code once.  After clicking on SUBMIT, you can re-enter with your email address and the password you enter in the registration form.  
4.	At the Welcome page, click on the ‘Self Assessments’ tab at top of page.
5.	Click on and take the Personality Assessment.
6.	Once you complete the Personality Assessment, your results will immediately appear and you can print your report. 
*Note:  After completing the Personality Assessment you will have the opportunity to change your type if you feel like one does not fit or describe you best.  To do this, click on ‘Change’ under the Personality tab on the left of the page.

There are additional assessments and tools available in TypeFocus that can help you further clarify your interests and values as they relate to your career goals.  We encourage you to utilize these features to assist you in your career planning process.

Please print your Personality Report and bring it with you to your group interpretation session, class, or appointment.  If you have questions or need assistance, contact the Career Center at 334-844-4744.



";

//To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = 'From: careers@auburn.edu' . "\r\n";


mail($to, $subject, $message, $headers);



   }
   
?>
<?php


/* recipient */
$to = "cdsserv@auburn.edu";

//subject
$subject = "SII/Typefocus Registration Form";

//message

$message=

"The Career Center
303 Martin Hall
334.844.4744
www.auburn.edu/career


Strong Interest Inventory and Type Focus Registration Form


Student ID Number	$studentid

Student Name		$lname  $fname  $mi

Email Address		$email  

Status				$status

Reason(s) for taking the inventories:		$reason

If for a class, class name & course number: $class $instructor

Test(s) I will be taking: $strong $typefocus

Group Interpretation Session Scheduled for: $Monday $Tuesday $Wednesday $Thursday $Friday


";


mail($to, $subject, $message);

?>

<table border="0" align="center">
  <tr>
    <td bgcolor="#FFCBB3"><strong>TypeFocus</strong></td>
  </tr>
  <tr>
    <td><p>If you are taking TypeFocus, <strong>YOU WILL RECEIVE AN EMAIL </strong>with the instructions for taking TypeFocus. </p>
      <p>&nbsp;</p></td>
  </tr>
  <tr>
    <td bgcolor="#FFCBB3"><strong>Strong Interest Inventory (SII)</strong></td>
  </tr>
  <tr>
    <td>
      <p align="left">To take the Strong Interest Inventory, use the login information below after you have clicked the Take the Assessment button.</p>
      <p align="left">Write down the login and password before you click the link to the SII.</p>
      <p>Account login: <span class="style2">1orange</span><br>
        Account Password: <span class="style3">2blue</span><br>
        User ID: <strong>leave blank</strong></p>    </td>
  </tr>
  <tr>
    <th scope="col"><a href="https://online.cpp.com"><img src="buttonsii.gif" width="131" height="42" border="0"></a></th>
  </tr>
</table>
      <!-- InstanceEndEditable -->
      <p class="lastUpdated">Last Updated: <!-- InstanceBeginEditable name="lastUpdated" --> June 2, 2011<!-- InstanceEndEditable --> </p>
    </div>
    <div class="sidebar"> 
      <p class="sidebarTitle">I NEED A ...</p>
      <a href="http://www.auburn.edu/career/counselors">Career Counselor</a> <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/choose.html">Major/Career</a> <a href="http://www.auburn.edu/career/resume">Resume/Cover Letter</a> <a href="http://jobs.auburn.edu">Full-time job</a> <a href="http://jobs.auburn.edu">Part-time job</a> <a href="../experience">Experience</a><a href="http://www.auburn.edu/career/mock">Mock Interview</a><a href="http://www.auburn.edu/career/faculty/presentations.php">Presentation</a>
      <div class="orangeDecorBar">&nbsp;</div>
      <p class="sidebarTitle">POPULAR RESOURCES</p>
      <a href="http://www.auburn.edu/career/assessments">Career Assessments</a> <a href="http://www.auburn.edu/career/trl">Tiger Recruiting Link</a><a href="http://www.auburn.edu/career/students/handbook.pdf" target="_blank">Career Center Handbook</a><a href="../webresources/index.html">Web Resources</a><a href="http://www.auburn.edu/career/tipsheets">Tip Sheets</a><a href="http://whatcanidowiththismajor.com/major/majors" target="_blank">What can I do with a major in?</a> <a href="http://www.auburn.edu/career/resources/careershift.html" target="_blank">CareerShift</a> <a href="http://www.auburn.edu/career/resources/interviewstream.html" target="_blank">InterviewStream</a> </div>
  </div>
<div id="footerWrap">
    <div id="footer">
    <div id="footSectionWrap">
      <div class="footSection">
        <ul>
          <li><a href="http://www.auburn.edu/academicsupport" target="_blank">Academic Support Services</a></li>
          <li>            <a href="http://www.auburn.edu/fye" target="_blank">First Year Experience </a></li>
          <li><a href="http://business.auburn.edu/student-services/office-of-professional-career-development/" target="_blank">College of Business  OPCD</a></li>
        </ul>
      </div>
      <div class="footSection"> 
        <ul>
          <li><a href="http://www.facebook.com/AUCareer" target="_blank"><br>
            <img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/fb_template.png" alt="Facebook" width="32" height="32" border="0"></a> &nbsp;<a href="http://twitter.com/AUCareer"><img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/twitter_template.png" alt="Twitter" width="32" height="32" border="0"></a> &nbsp;<a href="http://www.linkedin.com/groups?about=&gid=1878262" target="_blank"><img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/li_template.png" alt="LinkedIn" width="32" height="32" border="0"></a>&nbsp;<a href="http://www.youtube.com/user/AUCDS/featured" target="_blank"><img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/yt_template.png" width="32" height="32" alt="You Tube"></a><a href="http://tigersprepare.blogspot.com/" target="_blank">&nbsp;<img src="http://www.auburn.edu/academic/provost/undergrad_studies/career/images/blog_template.png" alt="Blog" width="32" height="32" border="0"></a></li>
        </ul>
      </div>
      <div class="footSection noBorder">
        <ul>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/" target="_blank">Office of Undergraduate Studies</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/academicadvising.html" target="_blank">Academic Advisors</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/majors/" target="_blank">Majors/Academic Departments</a></li>
        </ul>
      </div>
    </div>
    </div>  
    <div id="subfooter">
      Career Center | Auburn University | Auburn, Alabama 36849 | (334) 844-4744  | 
        <script type="text/javascript">emailE='auburn.edu'; emailE=('aucc' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script>
      <br />
      <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; 
      <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
  </div>
  <script type="text/javascript" src="http://www.auburn.edu/template/js/features.js"></script>
  
</div>
</body>
<!-- InstanceEnd --></html>