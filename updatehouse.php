<html>
<head><title>Update House</title></head>
<body>

<?php
echo "<form action=\"update_house.php\" method=post>";

	$conn = mysql_connect("cronus.cs.uleth.ca","tymj3660","mkirch") or die(mysql_error());
	mysql_select_db("tymj3660",$conn); 

	$sql = "select PostalCode from HOUSES"; 
	$result = mysql_query($sql,$conn);
    if(mysql_num_rows($result) != 0)
	{
	   echo "House Postal Code: <select name=\"postalCode\">";
	      
	        while($val = mysql_fetch_row($result))
		{
			echo "<option value=$val[0]>$val[0]</option>"; 

		}
		echo "</select>"; 
		echo "<input type=submit name=\"submit\" value=\"View\">"; 
	}
	else
	{
		echo "<p>No data found under HOUSES</p>"; 
	}

	echo "</form>";s
?>


 
</body>
</html>
