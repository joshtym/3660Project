<html>
	<head>
		<style type="text/css">
			body
			{
				background-image:url("real_estate_background.gif");
			}
			
			h1 {
        position: relative;
        font-size: 70px;
        margin-top: 0;
        font-family: 'Lobster', helvetica, arial;
    }
     
    h1 a {
        text-decoration: none;
        color: #666;
        position: absolute;
         
        -webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), color-stop(50%, rgba(0,0,0,.5)), to(rgba(0,0,0,1)));
    }
     
    h1:after {
        content : 'Real Estate Database';
        color: #d6d6d6;
        text-shadow: 0 1px 0 white;
    }
			
			nav ul ul
			{
				display: none;
			}

			nav ul li:hover > ul
			{
				display: block;
			}
	
			nav ul
			{
				background: #efefef; 
				background: linear-gradient(top, #efefef 0%, #bbbbbb 100%);  
				background: -moz-linear-gradient(top, #efefef 0%, #bbbbbb 100%); 
				background: -webkit-linear-gradient(top, #efefef 0%,#bbbbbb 100%); 
				box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
				padding: 0 20px;
				border-radius: 10px;  
				list-style: none;
				position: relative;
				display: inline-table;
			}
			
			nav ul:after
			{
				content: ""; clear: both; display: block;
			}
			
			nav ul li
			{
				float: left;
			}
			nav ul li:hover
			{
				background: #4b545f;
				background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
				background: -moz-linear-gradient(top, #4f5964 0%, #5f6975 40%);
				background: -webkit-linear-gradient(top, #4f5964 0%,#5f6975 40%);
			}
			nav ul li:hover a
			{
				color: #fff;
			}
	
			nav ul li a
			{
				display: block; padding: 25px 80px;
				color: #757575; text-decoration: none;
			}
			
			nav ul ul
			{
				background: #5f6975; border-radius: 0px; padding: 0;
				position: absolute; top: 100%;
			}
			
			nav ul ul li
			{
				float: none;
				border-top: 1px solid #6b727c;
				position: relative;
			}
			
			nav ul ul li a
			{
				padding: 15px 80px;
				color: #fff;
			}
			
			nav ul ul li a:hover
			{
				background: #4b545f;
			}
			
			table {
					border-collapse:collapse;
					background:#EFF4FB url(http://www.roscripts.com/images/teaser.gif) repeat-x;
					border-left:1px solid #686868;
					border-right:1px solid #686868;
					font:0.8em/145% 'Trebuchet MS',helvetica,arial,verdana;
					color: #333;
			}

			td, th {
					padding:5px;
			}

			caption {
					padding: 0 0 .5em 0;
					text-align: left;
					font-size: 1.4em;
					font-weight: bold;
					text-transform: uppercase;
					color: #333;
					background: transparent;
			}

			/* =links
			----------------------------------------------- */

			table a
			{
					color:#950000;
					text-decoration:none;
			}

			table a:link {}

			table a:visited {
					font-weight:normal;
					color:#666;
					text-decoration: line-through;
			}

			table a:hover {
					border-bottom: 1px dashed #bbb;
			}

			/* =head =foot
			----------------------------------------------- */

			thead th, tfoot th, tfoot td {
					background:#333 url(http://www.roscripts.com/images/llsh.gif) repeat-x;
					color:#fff
			}

			tfoot td {
					text-align:right
			}

			/* =body
			----------------------------------------------- */

			tbody th, tbody td {
					border-bottom: dotted 1px #333;
			}

			tbody th {
					white-space: nowrap;
			}

			tbody th a {
					color:#333;
			}

			.odd {}

			tbody tr:hover {
					background:#fafafa
			}

		</style>
	</head>
	<center><h1></h1></center>
	<body>
		<center>
		<nav>
			<ul> 
				<li><a href="loguser.php">Login</a></li>
				<li><a href="mainSelectAgents.php">Agents</a></li>
				<li><a href="mainSelectHouses.php">Houses</a></li>
				<li><a href="index.php">Back to Main Page</a></li>
			</ul>
		</nav>
<?php

$username = "tymj3660"; 
$password = "mkirch";

$conn = mysql_connect("cronus.cs.uleth.ca",$username,$password) or 
die(mysql_error());
mysql_select_db($username,$conn) or die(mysql_error());

$sql = "select * from AGENT where phoneNumber='$_POST[phoneNumber]'";
   $result = mysql_query($sql,$conn); 
   if(mysql_num_rows($result) != 0) 
   { 	
      echo "<table class=\"table\">";
      echo "<tr> <td>ID</td><td>Name</td>  <td>Phone Number</td>  <td>Date Of Birth</td></tr>";
      while($rec = mysql_fetch_row($result)) {
    
		echo "<tr>";
		echo "<td>$rec[0]</td>";
		echo "<td>$rec[1]</td>";
		echo "<td>$rec[2]</td>";
		echo "<td>$rec[3]</td>";
		echo "</tr>";
      }
      echo "</table>";


   } else {

      echo "<p>No Agents Found with that phoneNumber</p>"; 
   
   }

?>

</body>
</html>

