<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/cds_layout1.dwt" codeOutsideHTMLIsLocked="false" -->
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
        <div class="titleArea">Career Center<br>
        <span class="subHeading">Office of Undergraduate Studies</span></div>
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
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --> <a href="http://www.auburn.edu/career">Career Center</a> &gt; <a href="index.html">Faculty&gt;</a> Tiger Research Link<!-- InstanceEndEditable --> </p>
			<!-- InstanceBeginEditable name="body" -->
      <h1>Tiger Research Link</h1>
     <?php
			
			
			
if ($title == "") {
      echo "<center>You did not specify a Project Title.<br>";
      echo "Please go back and enter your Project Title so your request can be submitted.</center>\n\n";
      exit;
}
	  
if ($unit == "") {
      echo "<center>You did not specify a Unit.<br>";
      echo "Please go back and enter your Unit so your request can be submitted.</center>\n\n";
      exit;
}
	  
	  if ($dept == "") {
      echo "<center>You did not specify a Department.<br>";
      echo "Please go back and specify your Department so your request can be submitted.</center>\n\n";
      exit;
}		
	  if ($email == "") {
      echo "<center>You did not specify a email.<br>";
      echo "Please go back and specify your Department so your request can be submitted.</center>\n\n";
      exit;
}	
	  if ($contact == "") {
      echo "<center>You did not specify a Contact.<br>";
      echo "Please go back and specify your Department so your request can be submitted.</center>\n\n";
      exit;
}	
	  if ($start == "") {
      echo "<center>You did not specify a Start Date.<br>";
      echo "Please go back and specify your Department so your request can be submitted.</center>\n\n";
      exit;
}	
 if ($receive == "") {
      echo "<center>You did not specify a method for receiving applications.<br>";
      echo "Please go back and specify your Department so your request can be submitted.</center>\n\n";
      exit;
}		

	  if ($descp == "") {
      echo "<center>You did not enter a description.<br>";
      echo "Please go back and enter a description so your request can be submitted.</center>\n\n";
      exit;
}			


?>

<?php

mysql_connect("acadmysql","cdsserv","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
	
$query="INSERT INTO research (ID, title, unit, dept, email, contact, start, dead, receive, descp, qual, keywords, web, loc, positions, major, hours, fund, date) VALUES (
         '$ID',
		 '$title',
		 '$unit',
		 '$dept',
		 '$email',
		 '$contact',
		 '$start',
		 '$dead',
		 '$receive',
		 '$descp',
		 '$qual',
		 '$keywords',
		 '$web',
		 '$loc',
		 '$positions',
		 '$major',
		 '$hours',
		 '$fund',
		 '$date')";
$success=mysql_query($query);

?>
<?php

/* recipient */
$to = "skipworth@auburn.edu";

//subject
$subject = "Graduate Assistant Job Posting";

//message

$message=

"<center><b>Graduate Assistant Job Posting</b></center>
<p>
<b>Project Title:</b> $title<br>
<b>Unit (College):</b> $unit<br>
<b>Department:</b> $dept<br>
<b>Email:</b> $email<br>
<b>Faculty1:</b> $faculty1<br>
<b>Faculty2:</b> $faculty2<br>
<b>Faculty3:</b> $faculty3<br>
<b>Start Date:</b> $start<br>
<b>Application Deadline:</b> $dead<br>
<b>Description:</b> $descp<br>
<b>Compensation:</b> $com<br>
<b>Qualifications:</b> $qual<br>
<b>Location:</b> $loc<br>
<b>Website:</b> $web<br>
<b>Number of positions:</b> $positions<br>
<b>Majors:</b> $major<br>
<b>GPA:</b> $gpa<br>
<b>Degree:</b> $degree<br>
<b>Hours:</b> $hours<br>
<b>Year:</b> $year<br>
<b>Travel:</b> $travel<br>



";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: Career Services <careers@auburn.edu>' . "\r\n";

mail($to, $subject, $message, $headers);


?>
      <p>Thank you for submitting your student opportunity.</p>
      <!-- InstanceEndEditable -->
      <p class="lastUpdated">Last Updated: <!-- InstanceBeginEditable name="lastUpdated" --> Oct 29, 2012<!-- InstanceEndEditable --> </p>
    </div>
    <div class="sidebar"> 
      <p class="sidebarTitle">I NEED A ...</p>
      <a href="http://www.auburn.edu/career/counselors">Career Counselor</a> <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/choose.html">Major/Career</a> <a href="http://www.auburn.edu/career/resume">Resume/Cover Letter</a> <a href="http://jobs.auburn.edu">Full-time job</a> <a href="http://jobs.auburn.edu">Part-time job</a> <a href="../internships/index.html">Internship</a><a href="http://www.auburn.edu/career/mock">Mock Interview</a><a href="http://www.auburn.edu/career/faculty/presentations.php">Presentation</a>
      <div class="orangeDecorBar">&nbsp;</div>
      <p class="sidebarTitle">POPULAR RESOURCES</p>
      <a href="http://www.auburn.edu/career/assessments">Career Assessments</a> <a href="http://www.auburn.edu/career/trl">Tiger Recruiting Link</a><a href="http://www.auburn.edu/career/students/handbook.pdf" target="_blank">Career Center Handbook</a><a href="../webresources/index.html">Web Resources</a><a href="http://www.auburn.edu/career/tipsheets">Tip Sheets</a> <a href="http://www.auburn.edu/career/eresume">e Resume Review</a> <a href="http://www.auburn.edu/career/events">Calendar of Events/Seminars</a><a href="http://whatcanidowiththismajor.com/major/majors" target="_blank">What can I do with a major in?</a> <a href="http://www.careershift.com/?sc=auburn" target="_blank">CareerShift</a> <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/resources/interviewstream.html" target="_blank">InterviewStream</a> </div>
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
        <script type="text/javascript">emailE='auburn.edu'; emailE=('cdsserv' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script>
      <br />
      <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; 
      <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
  </div>
  <script type="text/javascript" src="http://www.auburn.edu/template/js/features.js"></script>
  
</div>
</body>
<!-- InstanceEnd --></html>