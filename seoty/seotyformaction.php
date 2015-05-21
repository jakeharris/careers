<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/jobs.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>hire.auburn.edu - Auburn University</title>
<link rel="stylesheet" href="http://www.auburn.edu/template/styles/main.css" media="screen" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
h2 {
	font-size: 2em;
}
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
        <div class="titleArea"><!-- InstanceBeginEditable name="unitTitle" -->Tiger Recruiting Link<!-- InstanceEndEditable --></div>
      </div>
    </div>
		<table class="nav">
      <tr>
        <td><a href="http://www.auburn.edu/career">Career Center HOME</a></td>
        <td><a href="http://business.auburn.edu/student-services/office-of-professional-career-development/" target="_blank">College of Business OPCD</a></td>
        </tr>
    </table>
  </div>
  <div id="contentArea">
    <div class="contentDivision"> 
      <p class="breadcrumb"><!-- InstanceBeginEditable name="breadcrumb" --><a href="index.html">hire.auburn.edu</a> &gt; Student Employee of the Year Nomination Form<!-- InstanceEndEditable --> </p>
			<!-- InstanceBeginEditable name="body" -->
      <?php 


mysql_connect("acadmysql","cdsserv","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
	
		$query="INSERT INTO seotynoms (ID, name, lstreet, lcity, lstate, lzip, phone, email, title, length, hours, stat, description, nomname, nomtitle, nomdept, nomadd, nomphone, nomemail, guests, date, dept) VALUES (
		'$ID',
		'$name',
		'$lstreet',
		'$lcity',
		'$lstate',
		'$lzip',
		'$phone',
		'$email',
		'$title',
		'$length',
		'$hours',
		'$stat',
		'$description',
		'$nomname',
		'$nomtitle',
		'$nomdept',
		'$nomadd',
		'$nomphone',
		'$nomemail',
		'$guests',
		'$date',
		'$dept')";

$success=mysql_query($query);

?>
<?php

$Email = $_POST['nomemail'];

/* recipient */
$to = "$nomemail";

//subject
$subject = "SEOTY Nomination";

//message

$message=

"Thank you for nominating a student for Auburn University’s Student Employee of the Year.  To complete the process, please send a nomination letter to employs@auburn.edu by Wednesday, February 6th at 5:00 p.m.  In this letter, please describe the reasons your student employee should be selected as this year’s winner, discussing in detail the student employee's work ethic as well as contributions and accomplishments to the workplace. Specifically, describe the reliability, quality of work, initiative, professionalism and uniqueness of contribution of the student employee. Please make the nomination letter as comprehensive as possible to give your nominee the best chance to win the award.
 
Judges will score nominees on the five (5) criteria listed above. Your nomination letter must be limited to two (2) pages. Only one nomination letter will be considered for each student.  The information you provide may be shared with the public through press releases and other promotional opportunities. The nomination package will not be reviewed until the letter has been received.

An awards reception will be held on Tuesday, April 9, 2013 during National Student Employment Week to honor the nominees and nominators. The winner of the On- and Off-Campus Student Employee of the Year will be announced at this time. In the near future, nominators will be asked to provide pictures of the nominee for the event. You will receive more information on this event during the month of March.

Again, thank you for taking the time to recognize a deserving student.


Sincerely,
Haven Hart 
Student Employment Coordinator
Auburn University Career Center


";

//To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = 'From: employs@auburn.edu' . "\r\n";


mail($to, $subject, $message, $headers);

?>

              <p>Thank  you for nominating your outstanding student employee!!! The  Student&nbsp;Employee of the Year program is a great way to recognize your  amazing student&nbsp;worker for hard work and dedication to your office.</p>
              <p>You will receive an email with information on submitting the nomination letter and the recognition reception. If you do not receive an email within the next 30 minutes, please contact me directly at 844-3867.<br>
                            </p>
            <p> Sincerely,<br>
              Haven Hart<br>
              Student Employment Coordinator<br>
              Auburn University Career Center</p>
      <!-- InstanceEndEditable -->
      <p class="lastUpdated">Last Updated: <!-- InstanceBeginEditable name="lastUpdated" -->Jan 4, 2013<!-- InstanceEndEditable --> </p>
    </div>
  </div>
  <div id="contentArea_bottom"></div>
  <div id="footerWrap">
    <div id="footer">
    <div id="footSectionWrap">
      <div class="footSection">
        <ul>
          <li></li>
        </ul>
      </div>
      <div class="footSection"> 
        <ul>
          <li><a href="http://www.facebook.com/AUCareer" target="_blank"><br>
            <img src="../images/fb_template.png" alt="Facebook" width="32" height="32" border="0"></a> &nbsp;<a href="https://twitter.com/AUCareer" target="_blank"><img src="../images/twitter_template.png" alt="Twitter" width="32" height="32" border="0"></a> &nbsp;<a href="http://www.linkedin.com/groups?about=&gid=1878262" target="_blank"><img src="../images/li_template.png" alt="LinkedIn" width="32" height="32" border="0"></a> &nbsp;<a href="http://tigersprepare.blogspot.com/" target="_blank"><img src="../images/blog_template.png" width="32" height="32" alt="Blog"></a></li>
        </ul></div><div class="footSection noBorder">
        <ul>
          <li></li>
        </ul>
      </div>
    </div>
    </div>  
    <div id="subfooter">
      Auburn University Career Center | Auburn, Alabama 36849 | (334) 844-4744  | <a href="mailto:cdsserv@auburn.edu">cdsserv@auburn.edu</a><br/>
      <a href="https://fp.auburn.edu/ocm/auweb_survey">Website Feedback</a> | <a href="http://www.auburn.edu/privacy">Privacy</a> | <a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; 
      <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a>
    </div>
  </div>
  <!--#include virtual="/template/includes/gatc.html" --> 
</div>
</body>
<!-- InstanceEnd --></html>