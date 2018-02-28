<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Control Panel :: Student Information Panel:: BSNL</title>
<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>

<body background="images/tiles_background_.jpg">

<br />
<br />
<br />
<table align="center" cellpadding="0" bgcolor="#FFFFFF" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="images/0.png" width="747" height="58" alt="Welcome to Admin Panel" /></h1>
  <p align="center">
    <?php 
	 $sname=$_REQUEST['name']; 
	 $roll=$_REQUEST['rollno'];
	 $reg=$_REQUEST['reg'];
	 $dept=$_REQUEST['dept']; 
	 $marks=$_REQUEST['marks']; 
	 $link=mysql_connect("localhost","root","root123") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO students (sname, rollno, regno, dname, marks) values('".$sname."', '".$roll."', '".$reg."', '".$dept."', '".$marks."')";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "New record saved successfully!";}
	 ?>

      </p>
      <p align="center"><img onclick="javascript: history.go(-1)" src="images/1.png" onmouseover="this.src='images/1_MouseOver.png';" onmouseout="this.src='images/1.png';" /><a href="../"><img border="0" src="images/2.png" onmouseover="this.src='images/2_MouseOver.png';" onmouseout="this.src='images/2.png';" /></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>