<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/cds_layout1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>
Career Services - Auburn University
</title>
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/sidebar.css" media="screen" type="text/css" />
<!--#include virtual="/template/includes/head.html" -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
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
            <input type="text" name="q" id="q" accesskey="q" size="28" tabindex="1" class="searchField" onFocus="if(this.value=='Search AU...'){this.value='';this.style.color='black'}" onBlur="if(this.value=='')this.value='Search AU...';this.style.color='grey'" value="Search AU..." />
            <input type="image" src="http://www.auburn.edu/template/styles/images/searchButton2.png" name="sa" accesskey="z" tabindex="2" alt="Search" value="Submit" class="searchButton" />
          </div>
          <input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm" />
          <input type="hidden" name="ie" value="utf-8" />
          <label for="q" style=" position:absolute; left:-9999px; visibility:hidden;">Enter your search terms</label>
        </form>
        <div class="titleArea">
       	<span class="mainHeading">Career Services</span></div>
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
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --> <a href="../">Career Development Services</a> &gt; <a href="index.html">Get Cookin' with CDS Cookout</a>&gt; Registration<!-- InstanceEndEditable --> </p>
			<!-- InstanceBeginEditable name="body" -->
      <table width="679" border="0">
    <tr>
      <td width="673" colspan="2" align="center"><img src="getcookin.jpg" width="525" height="112"></td>
      </tr>
    <tr bgcolor="#FFCBB3">
      <td colspan="2" align="right"><table width="662" border="0" align="center" cellpadding="2" cellspacing="3">
        <tr>
          <td width="120" bgcolor="#FFCBB3"><a href="http://www.auburn.edu/career/cookin/index.html" class="cdslinks">HOME</a></td>
          <td width="130" bgcolor="#FFCBB3"><a href="http://www.auburn.edu/career/cookin/form2.php" class="cdslinks">REGISTER</a></td>
          <td width="192" bgcolor="#FFCBB3"><a href="http://www.auburn.edu/career/cookin/sponsorshiplevels.html" class="cdslinks">SPONSORSHIP LEVELS</a></td>
          <td width="78" bgcolor="#FFCBB3"><a href="http://www.auburn.edu/career/cookin/maps.html" class="cdslinks">MAPS</a></td>
          <td width="104" bgcolor="#FFCBB3"><a href="http://www.auburn.edu/career/cookin/photos.html" class="cdslinks">PHOTOS</a></td>
        </tr>
      </table></td>
      </tr>
    <tr height="5">
      <td colspan="2" align="right">&nbsp;</td>
      </tr>
      <tr>
      <td><p>Thank you for being a <em><strong>SPONSOR</strong></em> for the Seventh (7th) Annual  Get Cookin with CDS Cookout, Wednesday, September 7, 2011, 11:00 a.m. - 1:00 p.m. on the Student Center Lawn.</p>
        <p> We are grateful for your continued cooperation and support!!</p>
      </table><?php

mysql_connect("web6","thornde","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
	
$query="INSERT INTO cooking (id, name, org, add1, add2, city, st, zip, phone, fax, email, url, cookinrep, smokinrep, sizzlinrep, cookin, smokin, sizzlin, cookintable, smokintable, sizzlintable, smokintickets, sizzlintickets, table1, table2, table3, comments, date) VALUES (
         '$id',
		 '$name',
		 '$org',
		 '$add1',
		 '$add2',
		 '$city',
		 '$st',
		 '$zip',
		 '$phone',
		 '$fax',
		 '$email',
		 '$url',
		 '$cookinrep',
		 '$smokinrep',
		 '$sizzlinrep',
		 '$cookin',
		 '$smokin',
		 '$sizzlin',
		 '$cookintable',
		 '$smokintable',
		 '$sizzlintable',
		 '$smokintickets',
		 '$sizzlintickets',
		 '$table1',
		 '$table2',
		 '$table3',
		 '$comments',
		 '$date')";
$success=mysql_query($query);

?>

<?php

$Email = $_POST['email'];

/* recipient */
$to = "$Email";

/* donation */
$donation = "$cookin $smokin $sizzlin";

//subject
$subject = "Get Cookin' with CDS Sponsorship";

//message

$message=

"Thank you for being a SPONSOR for the Seventh (7th) Annual Get Cookin' with CDS Cookout, Wednesday, September 7, 2011, 11:00 a.m. - 1:00 p.m. on the Student Center Lawn.  We are grateful for your continued cooperation and support!!  This is an EXCELLENT way to network and get your organization's name and/or services out to the student body.  Partnering with Career Development Services (CDS) is a WIN WIN for all involved!!!!  


Sponsorship $donation

You will receive an invoice for the sponsorship amount and please mail a check with a copy of the invoice to:

Melvin K. Smith
Special Events Coordinator
Get Cookin' with CDS Cookout
Career Development Services
303 Martin Hall (Thach Avenue)
Auburn University, AL 36849-5139

Please feel free to call or email me any questions you might have.  I am looking forward to a 'SIZZLIN' good time!  Again, thank you for your involvement!!  War Eagle.

Sincerely,  

Melvin K. Smith
Special Events Coordinator
Career Development Services
Auburn University
(334) 844-4744
mks@auburn.edu  
";

//To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = 'From: smithmk@auburn.edu' . "\r\n";

mail($to, $subject, $message, $headers);

?>

<?php


/* recipient */
$to = "mks@auburn.edu";

//from
$from = "cdsserv@auburn.edu";

//subject
$subject = "Get Cookin with CDS Registration Form";

//message

$message=

"$name
$org
$add1
$add2
$city, $st  $zip

phone: $phone    fax: $fax
$email   $url

Sponsorship: $cookin $smokin $sizzlin

$comments
";


$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = 'From: cdsserv@auburn.edu' . "\r\n";

mail($to, $subject, $message, $headers);

?>
      <!-- InstanceEndEditable -->
      <p class="lastUpdated">Last Updated: <!-- InstanceBeginEditable name="lastUpdated" --> Apr. 13, 2011<!-- InstanceEndEditable --> </p>
    </div>
    <div class="sidebar"> 
      <p class="sidebarTitle">I NEED A ...</p>
      <a href="http://www.auburn.edu/career/counselors">Career Counselor</a> <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/choose.html">Major/Career</a> <a href="http://www.auburn.edu/career/resume">Resume/Cover Letter</a> <a href="http://jobs.auburn.edu">Full-time job</a> <a href="http://jobs.auburn.edu">Part-time job</a> <a href="https://auburn-csm.symplicity.com/students">Internship</a><a href="http://www.auburn.edu/career/mock">Mock Interview</a><a href="http://www.auburn.edu/career/faculty/presentations.php">Presentation</a>
      <div class="orangeDecorBar">&nbsp;</div>
      <p class="sidebarTitle">POPULAR RESOURCES</p>
      <a href="http://www.auburn.edu/career/assessments">Career Assessments</a> <a href="http://www.auburn.edu/career/trl">Tiger Recruiting Link</a><a href="../resources/webresources.html">Web Resources</a><a href="http://www.auburn.edu/career/tipsheets">Tip Sheets</a> <a href="http://www.auburn.edu/career/eresume">e Resume Review</a> <a href="http://www.auburn.edu/career/events">Calendar of Events/Seminars</a><a href="http://www.auburn.edu/career/resources/majors">What can I do with a major in?</a> <a href="http://www.careershift.com/?sc=auburn" target="_blank">CareerShift</a> <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/resources/interviewstream.html" target="_blank">InterviewStream</a> </div>
  </div>
<div id="footerWrap">
    <div id="footer">
    <div id="footSectionWrap">
      <div class="footSection">
        <ul>
          <li><a href="http://www.auburn.edu/ess" target="_blank">Educational Support Services</a></li>
          <li><a href="http://www.auburn.edu/academicsupport" target="_blank">Academic Support Services</a></li>
          <li><a href="http://business.auburn.edu/OPCD/" target="_blank">College of Business  OPCD</a></li>
        </ul>
      </div>
      <div class="footSection"> 
        <ul>
          <br>
            <a href="http://www.facebook.com/home.php#/pages/Auburn-AL/AU-Career-Development-Services/114131891055?ref=nf"><img src="../buttons/icofacebook.png" alt="Facebook" width="25" height="25" border="0"></a> &nbsp;<a href="http://twitter.com/AUCDS"><img src="../buttons/icotwitter.png" alt="Twitter" width="25" height="25" border="0"></a> &nbsp;<a href="http://www.linkedin.com/groups?about=&gid=1878262" target="_blank"><img src="../buttons/icolinked.png" alt="LinkedIn" width="25" height="25" border="0"></a> <a href="http://tigersprepare.blogspot.com/" target="_blank">&nbsp;<img src="../buttons/icoblog.png" alt="Blog" width="25" height="25" border="0"></a></li>
        </ul>
      </div>
      <div class="footSection noBorder">
        <ul>
          <li><a href="http://www.auburn.edu/studentaffairs" target="_blank">Student Affairs</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/academicadvising.html" target="_blank">Academic Advisors</a></li>
          <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/majors/" target="_blank">Majors/Academic Departments</a></li>
        </ul>
      </div>
    </div>
    </div>  
    <div id="subfooter">
      Career Development Services | Auburn University | Auburn, Alabama 36849 | (334) 844-4744  | 
        <script type="text/javascript">emailE='auburn.edu'; emailE=('cdsserv' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script>
      <br />
      <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; 
      <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" --> 
</div>
</body>
<!-- InstanceEnd --></html>