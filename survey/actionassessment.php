<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0052)http://www.auburn.edu/includes/template_subpage.html -->
<HTML><!-- InstanceBegin template="/Templates/1column.dwt.php" codeOutsideHTMLIsLocked="false" --><HEAD>
<!-- InstanceBeginEditable name="doctitle" -->
<TITLE>Auburn University - Career Development Services</TITLE>
<!-- InstanceEndEditable -->
<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
<LINK 
media=screen href="../templates/ddcss_all.css" 
type=text/css rel=stylesheet>
<LINK media=print 
href="../templates/ddcss_print.css" type=text/css 
rel=stylesheet>
<LINK href="http://www.auburn.edu/includes/images/favicon.ico" 
rel="shortcut icon">
<META content="MSHTML 6.00.2900.2873" name=GENERATOR>
<script language="JavaScript" type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable --><!-- InstanceParam name="picture" type="boolean" value="true" --><!-- InstanceParam name="photo" type="boolean" value="true" --><!-- InstanceParam name="Photo" type="boolean" value="true" -->
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width=770 align=center border=0>
  <TBODY>
  <TR>
    <TD width=205 height=110 align=middle valign="top" bgColor=#03244d>
      <DIV>
        <div align="center"><A 
      style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none" 
      href="http://www.auburn.edu/"><IMG title="Auburn University" 
      style="MARGIN-TOP: 3px; MARGIN-BOTTOM: 5px" height=68 
      alt="Auburn University" 
      src="../templates/ddLogoEmblem2.gif" 
      width=113 border=0></A></div>
      </DIV><!--<div><img src="http://www.auburn.edu/includes/ddLogoEmblem.gif" alt="Auburn University" width="104" height="90" style="margin-top:7px;margin-bottom:7px;"></div> -->
      <DIV>        
        <div align="center"><IMG height=28 alt="Auburn University" 
      src="../templates/ddLogoAuburn.gif" 
      width=177></div>
      </DIV></TD>
    <TD width=565 vAlign=top 
    background="../images/banner.jpg" 
    bgColor=#052c5c>&nbsp; </TD>
  </TR>
  <TR>
    <TD vAlign=top width=205 bgColor=#03244d>
      <div align="right"><IMG height=2 
      src="../templates/ddLogoBar.gif" 
      width=190></div>
      <DIV style="MARGIN-TOP: 8px; MARGIN-BOTTOM: 8px" align=center><IMG 
      height=15 alt="Auburn University" 
      src="../templates/ddLogoUniversity.gif" 
      width=139></DIV></TD>
    <TD vAlign=top align=middle bgColor=#03244d>
      <DIV class=orangeDecorBar></DIV>
      <DIV id=topLinks align=center><A 
      href="http://www.auburn.edu/main/sitemap.php">Auburn A-Z Index</A> <IMG height=9 
      src="../templates/ddTopLinkDot.gif" 
      width=2> <A href="https://oitapps.auburn.edu/campusmap/">Campus Map </A> 
      <IMG height=9 
      src="../templates/ddTopLinkDot.gif" 
      width=2> <A 
      href="http://www.auburn.edu/main/auweb_campus_directory.html">People Finder </A> <IMG height=9 
      src="../templates/ddTopLinkDot.gif" 
      width=2> <A 
      href="http://www.auburn.edu/includes/template_subpage.html#">Search AU </A></DIV></TD></TR>
  <TR>
    <TD colSpan=2>
      <DIV class=orangeDecorBar 
  style="BACKGROUND-COLOR: #e1e1e1"></DIV></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=770 align=center border=0>
  <TBODY>
  <TR>
    <TD id=contentArea style="PADDING-TOP: 6px" vAlign=top width=770 
    bgColor=#ffffff colSpan=2><!-- BEGIN CONTENT AREA -->
      <table width="750" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#f9903f">
        <tr>
          <td><div align="center"><a href="http://www.auburn.edu/career" class="cdsmenulinkstop">CDS HOME</a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/career/students" class="cdsmenulinkstop">STUDENTS</a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/career/employers" class="cdsmenulinkstop">EMPLOYERS</a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/career/alumni" class="cdsmenulinkstop">ALUMNI</a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/career/faculty" class="cdsmenulinkstop">FACULTY &amp; STAFF </a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/career/parents" class="cdsmenulinkstop">PARENTS</a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/career/aboutus" class="cdsmenulinkstop">ABOUT US</a> </div></td>
        </tr>
      </table>
      <br>
      <table width="750" border="0" cellspacing="0" cellpadding="10">
        <tr>
          <td valign="top"><!-- InstanceBeginEditable name="Body" --><table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col"><h2 align="center" class="style1">Thank you for taking<br>
      the time to help us out! </h2>
    <h2 class="style1">Good luck and War Eagle!</h2></th>
  </tr>
</table>
<?php

mysql_connect("web6","thornde","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
	
$query="INSERT INTO surveyassessment (ID, reason1, reason2, reason3, reason4, reason5, reason6, other1, how1, how2, how3, how4, how5, how6, how7, how8, other2, three, four, five, six, seven, eight, comments, email, date) VALUES (
         '$ID',
		 '$reason1',
		 '$reason2',
		 '$reason3',
		 '$reason4',
		 '$reason5',
		 '$reason6',
		 '$other1',
		 '$how1',
		 '$how2',
		 '$how3',
		 '$how4',
		 '$how5',
		 '$how6',
		 '$how7',
		 '$how8',
		 '$other2',
		 '$three',
		 '$four',
		 '$five',
		 '$six',
		 '$seven',
		 '$eight',
		 '$comments',
		 '$email',
		 '$date')";
$success=mysql_query($query);

?>
<!--?php

/* recipient */
$to = "thornde@auburn.edu";

//subject
$subject = "Career Assessments Satisfaction Survey";

//message

$message=

"<table><tr><td colspan=3><center>Career Assessments Satisfaction Survey</center></td></tr>
<tr><td colspan=3><b>Experience</b></td></tr>
<tr><td>Reason:</td><td>&nbsp</td><td> $reason</td></tr>
<tr><td>Other:</td><td>&nbsp</td><td> $other</td></tr>
<tr><td>QSix:</td><td>&nbsp</td><td> $six</td></tr>
<tr><td>QSeven:</td><td>&nbsp</td><td> $seven</td></tr>
<tr><td>QEight:</td><td>&nbsp</td><td> $eight</td></tr>
<tr><td>QNine:</td><td>&nbsp</td><td> $nine</td></tr>
<tr><td>QTen:</td><td>&nbsp</td><td> $ten</td></tr>
<tr><td>QEleven:</td><td>&nbsp</td><td> $eleven</td></tr>
<tr><td colspan=3>&nbsp</td></tr>


<tr><td colspan=3><b>Comments</b></td></tr>
<tr><td colspan=3>$comments</td></tr>
</table>

";

//To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


mail($to, $subject, $message, $headers);

?--><!-- InstanceEndEditable --></td>
          </tr>
      </table>
      <br>
      <table width="750" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#f9903f">
        <tr>
          <td><div align="center"><a href="http://www.auburn.edu/academicsupport" class="cdsmenulinkstop">Academic Support </a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/fye" class="cdsmenulinkstop">Freshman Year Experience </a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu/scs" class="cdsmenulinkstop">Student Counseling </a></div></td>
          <td><div align="center"><a href="http://www.auburn.edu" class="cdsmenulinkstop">Auburn University </a></div></td>
        </tr>
      </table>
      <!-- END CONTENT AREA --></TD>
  </TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=770 align=center border=0>
  <TBODY>
  <TR>
    <TD colSpan=2>
      <DIV class=orangeDecorBar></DIV></TD></TR>
  <TR>
    <TD id=footer align=middle colSpan=2><BR><BR>
    Career Development Services | A Division of Undergraduate Studies <br>    
    &nbsp;303 Mary Martin Hall | Auburn, Alabama 36849 &nbsp;| &nbsp;Phone: (334) 844-4744&nbsp;| 
      &nbsp;Email: cdsserv@auburn.edu
      <SCRIPT language=JavaScript type=text/javascript>
		cd<!-- 
		emailE='cdsserv@auburn.edu'
		emailE=('webmaster' + '@' + emailE)
		document.write('<A href="mailto:' + emailE + '">' + emailE + '</a>')
		//-->
		</SCRIPT>
       <BR>©
      <SCRIPT language=JavaScript type=text/javascript>
		<!--
		date = new Date();
		document.write(date.getFullYear());
		//-->
	  	</SCRIPT>
       <A href="http://www.auburn.edu/it_policies/copyright.html">Copyright 
Regulations</A></TD></TR></TBODY></TABLE></BODY><!-- InstanceEnd --></HTML>
