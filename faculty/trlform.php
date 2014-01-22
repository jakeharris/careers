<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/cds_layout1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<title>Auburn University Career Center</title>
<!--#include virtual="/template/includes/head.html" -->
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style2 {color: #FF0000}
-->
</style>
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
      <p class="breadcrumb"> <!-- InstanceBeginEditable name="breadcrumb" --> <a href="/career/index.html">Career Center</a> &gt; Faculty&gt; Tiger Research Link<!-- InstanceEndEditable --> </p>
			<!-- InstanceBeginEditable name="body" -->
      <h1>Tiger Research Link Application      </h1>
      <form action="trlformlink.php" method="post" name="trlform" id="trlform">
        <table width="610">
          <tr>
                         <td bgcolor="#FF8000"><strong>Opportunity Summary</strong></td>
                       </tr>
                       <tr>
                         <td width="602">Project Title<strong>*</strong>:
<label for="title"></label>
                         <input type="text" name="title" id="title"></td>
                       </tr>
                       <tr>
                         <td>Unit (College)<strong>*</strong>:
<label for="unit"></label>
                         <input type="text" name="unit" id="unit"></td>
                       </tr>
                       <tr>
                         <td>Department<strong>*</strong>:
<label for="dept"></label>
                         <input type="text" name="dept" id="dept"></td>
                       </tr>
                       <tr>
                         <td>Contact e-mail<strong>*</strong>: 
                           <label for="email"></label>
                         <input type="text" name="email" id="email"></td>
                       </tr>
                       <tr>
                         <td>Contact Name<strong>*</strong>:
                           <label for="contact"></label>
                         <input type="text" name="contact" id="contact"> &nbsp;
                         <label for="faculty2"></label>
                         &nbsp;
                         <label for="faculty3"></label></td>
                       </tr>
                       <tr>
                         <td>Start Date<strong>*</strong>:
<label for="start"></label>
                         <input type="text" name="start" id="start"></td>
                       </tr>
                       <tr>
                         <td>Application Deadline (if any):
                           <label for="dead"></label>
                         <input type="text" name="dead" id="dead"></td>
                       </tr>
                       <tr>
                         <td>How would you like to receive applicant information? 
                           <label for="receive"></label>
                           <select name="receive" id="receive">
                             <option value="0">Select one</option>
                             <option value="online">Accumulate online and compile at deadline</option>
                             <option value="directly">Have applicant contact you directly</option>
                         </select></td>
                       </tr>
                                              <tr>
                         <td>Opportunity (short description)<strong>*</strong></td>
                       </tr>
                       <tr>
                         <td><label for="descp"></label>
                         <textarea name="descp" cols="75" id="descp"></textarea></td>
                       </tr>
                       <tr>
                         <td bgcolor="#FF6633"><strong>Full Description</strong></td>
                       </tr>
                       
                       <tr>
                         <td>Qualifications/Required Skills:
<label for="qual"></label>
                         <textarea name="qual" cols="75" id="qual"></textarea></td>
                       </tr>
                       <tr>
                         <td>Keywords (optional):
<label for="keywords"></label>
                         <textarea name="keywords" cols="75" id="keywords"></textarea></td>
                       </tr>
                       <tr>
                         <td>Related website (if any):
                           <label for="web"></label>
                         <input type="text" name="web" id="web"></td>
                       </tr>
                       <tr>
                         <td>Location:
<label for="loc"></label>
                         <input type="text" name="loc" id="loc"></td>
                       </tr>
                       
                       <tr>
                         <td>Number of Positions (optional):
<label for="positions"></label>
                         <input name="positions" type="text" id="positions" size="5"></td>
                       </tr>
                       <tr>
                         <td>Number of Hours a Week (optional):
<label for="positions"></label>
                         <input name="hours" type="text" id="hours" size="5"></td>
                       </tr>
                       <tr>
                         <td>Major(s):
<label for="major"></label>
                         <input type="text" name="major" id="major"></td>
                       </tr>
                       
                       <tr>
                         <td><p>Funded/Unfunded:
                             <label for="fund"></label>
                           <textarea name="fund" id="fund"></textarea>
                         </p>
                         <p>&nbsp; </p></td>
                       </tr>
                       
                     </table>
        <p><br><input name="date" type="hidden" id="date" value="<? echo $date=date("m/d/y   h:i A"); ?>">
        <p>
          <label>
                           <input type="submit" name="Submit" value="Submit">
                           </label>
                         </p>
                </form></p>
      <!-- InstanceEndEditable -->
      <p class="lastUpdated">Last Updated: <!-- InstanceBeginEditable name="lastUpdated" --> Feb 21, 2013<!-- InstanceEndEditable --> </p>
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