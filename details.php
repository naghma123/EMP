<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<body >
	<link rel="stylesheet" href="bootstrap.css"></link>
	<table width="100%" height="100%" >
	  <tr width="200" height="100" >
	     <td colspan="2">
	    <?php include 'header.php'; ?>
	    <br>
	    </td>
	  </tr>
	  <tr height="300">
	     <td width = "100" nowrap valign="top">
	     <?php include 'nav.php'; ?>
	     </td>
	     <td >
<?php
$con=mysqli_connect("localhost","root","","admin_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM employee");
echo "<table border='1'>
<tr>
<th>EmpID</th>
<th>Name</th>
<th>Age</th>
<th>Location</th>
<th>Salary</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['emp_id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['age'] . "</td>";
  echo "<td>" . $row['location'] . "</td>";
  echo "<td>" . $row['salary'] . "</td>";
  echo "</tr>";
  }
echo "</table>";
mysqli_close($con);
?>
	    </td>    
	    </tr>	   
    </table>		  
	</body>
</html>
