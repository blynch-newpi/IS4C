<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
<HTML>

//<link rel="stylesheet" type="text/css" href="../../3column.css" />
//<link href="../../calendar/CalendarControl.css" rel="stylesheet" type="text/css">
//<script src="../../calendar/CalendarControl.js" language="javascript" type="text/javascript"></script>

<title>IS4C Web Reporting</title>
</head>
<!--<div class="content2">--!>
<body>

<?php
include("../../Documents/cat_headerlinks.html");
?>

<td>
<form method = "GET" action="UPCMerge.php">
<table>
  <caption>Sales By UPC/PLU</caption>
  <tr>
    <td>UPC/PLU Start</td>
    <td>
    <input type=text size= 14 name=upcStart maxlength="14"></td>
  </tr>
  <tr>
    <td>UPC/PLU End</td>
    <td>
 <input type=text size= 14 name=upcEnd maxlength="14"></td>
  </tr>
<?php
include("../../UniversalFormFillers/DateCalendarForm.html");
?>
  <tr>
    <td>Group info by:</td>
            <td>
       <input type="radio" name=sort value=Date default> Date
        <input type="radio" name=sort value="PLU">UPC/PLU<br>
        </td>
  </tr>
 <tr>   
    <td>Sort Order:</td>
    <td>
        <input type="radio" name=radio value=DESC default> Descending
        <input type="radio" name=radio value=ASC> Ascending<br>
        </td>
  </tr>
  <tr>
    <td>
        <input type=submit name=submit value="Submit"></td>
  </tr>
</table>
</form>
<td>
<form method = "GET" action="DeptMerge.php">
<table>
  <caption>Catapult Merged Sales By Department</caption>
  <tr>
<?php
include("../../UniversalFormFillers/Cat_DeptStartPopulater.html");
?></tr>
<tr>
<?php
include("../../UniversalFormFillers/Cat_DeptEndPopulater.html");
?> </tr>

  <tr>
   </tr>
<?php
include("../../UniversalFormFillers/DateCalendarForm.html");
?>
  <tr>
    <td>Group info by:</td>
            <td>
        <input type="radio" name=sort value=Date default> Date
        <input type="radio" name=sort value="PLU">UPC/PLU<br>
        </td>
  </tr>
 <tr>
    <td>Sort Order:</td>
    <td>
        <input type="radio" name=radio value=DESC default> Descending
        <input type="radio" name=radio value=ASC> Ascending<br>
        </td>
  </tr>
  <tr>
    <td>
        <input type=submit name=submit value="Submit"></td>
  </tr>

</table>
</form>
<td>
<form method = "GET" action="SubDeptMerge.php">
<table>
<caption>Catapult Merged Sales By Sub-Department</caption>
<tr> 
<td>
SubDepartment Start:
</td>
<td>
<?php
include('../../cat_connectdb.php');

$subdept=mysql_query("select distinct(PI1_Description) from v_inventoryMaster order by PI1_Description ASC");   

print"<select name=\"subdeptStart\">\n";
while ($row=mysql_fetch_assoc($subdept)){
	$subdeptStart=$row['PI1_Description'];
	print "<option value='$subdeptStart'>'$subdeptStart'\n";
	}
	print "</select>\n";
?>
</td>
  <tr>
   </tr>
<?php 
include("../../UniversalFormFillers/DateCalendarForm.html");
?>          
  <tr>  
    <td>Group info by:</td>
            <td>
        <input type="radio" name=sort value=Date default> Date
        <input type="radio" name=sort value="PLU">UPC/PLU<br>
        </td>
  </tr>
 <tr>   
    <td>Sort Order:</td>
    <td>
        <input type="radio" name=radio value=DESC default> Descending
        <input type="radio" name=radio value=ASC> Ascending<br>
        </td>
  </tr> 
<tr>
    <td>
        <input type=submit name=submit value="Submit"></td>
  </tr>

</table>
</form>

</div>
<div id="navAlpha">
<?php
include("../../navAlphabar.html");
?>
</div>
</body
</html>

