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
    <td><h1 align="center" class="heading"><img src="0.png" width="747" height="58" alt="Welcome to Admin Panel" /></h1>
  <p align="center">
    <?php 
	 	 $link=mysql_connect("localhost","root","root123") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Name</b></td> <td><b>Roll No.</b></td><td><b>Reg No.</b></td><td><b>Deparment</b></td><td><b>Action</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td>
	<a href=\"modify2.php?id=".$result[0]."\"><img border=\"0\" src=\"images/8.png\"/></a>
	</td></tr>";
	} echo "</table>";
	 ?>

      </p>
  <p align="center">&nbsp;</p>
      <p align="center"><a href="./"><img border="0" src="images/1.png" onmouseover="this.src='images/1_MouseOver.png';" onmouseout="this.src='images/1.png';" /></a><a href="./"><img border="0" src="images/2.png" onmouseover="this.src='images/2_MouseOver.png';" onmouseout="this.src='images/2.png';" /></a></p>
    <p align="center"><a href="../about.php"></a></p></td>
  </tr>
</table>
<h1 align="center" class="heading">&nbsp;</h1>
</body>
</html>