<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>

<?php

mysql_connect("web6","thornde","career") or die("Unable to connect to server");
	mysql_select_db("gisignup") or die("Unable to select database");
	
$query="INSERT INTO upromise (ID, Contact_Person, Title, Organization, Campus_Address, Phone, Fax, Email, Website, Purpose_of_Activity, Purpose_Other,
		Program_Title, Primary_Goal, Program_Website, Program_Inception_Date, Contact_Person_2, Title_2, Organization_2, Address_2, Phone_2, Fax_2, Email_2,
		Website_2, WishList, Primary_Promise_Provided, OnCampus_Partners, OnCampus_Partner_Other, Off_Campus_Partners, Focus_of_Service_Arts, Focus_of_Service_Education,
		Focus_of_Service_Growth_Development, Focus_of_Service_Community, Focus_of_Service_Health, Focus_of_Service_Other, Frequency_of_Service, Frequency_of_Service_Other,
		Population_Served, Population_Served_Other, Counties_Served, Counties_Served_Other, T1, T2, Total_Population_Served, Total_Service_Hours) VALUES (
        '$ID',
		'$Contact_Person',
		'$Title',
		'$Organization',
		'$Campus_Address',
		'$Phone',
		'$Fax',
		 '$Email',
		 '$Website',
		 '$Purpose_of_Activity',
		 '$Purpose_Other',
		 '$Program_Title',
		 '$Primary_Goal',
		 '$Program_Website',
		 '$Program_Inception_Date',
		 '$Contact_Person_2',
		 '$Title_2',
		 '$Organization_2',
		 '$Address_2',
		 '$Phone_2',
		 '$Fax_2',
		 '$Email_2',
		'$Website_2',
		'$WishList',
		'$Primary_Promise_Provided',
		'$OnCampus_Partners',
		'$OnCampus_Partner_Other',
		'$Off_Campus_Partners',
		'$Focus_of_Service_Arts',
		'$Focus_of_Service_Education',
		'$Focus_of_Service_Growth_Development',
		'$Focus_of_Service_Community',
		'$Focus_of_Service_Health',
		'$Focus_of_Service_Other',
		'$Frequency_of_Service',
		'$Frequency_of_Service_Other',
		'$Population_Served',
		'$Population_Served_Other',
		'$Counties_Served',
		'$Counties_Served_Other',
		'$T1',
		'$T2',
		'$Total_Population_Served',
		'$Total_Service_Hours')";

$success=mysql_query($query);

?>

</body>
</html>
