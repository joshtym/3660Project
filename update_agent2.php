<html>
	<head>
		<style>
			body
			{
				background-image:url("real_estate_background.gif");
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

		</style>
		<title>Real Estate Administration</title>
	</head>
	<body>
		<center>
		<nav>
			<ul> 
				<li><a href="">Admin Panel</a>
					<ul> <li><a href="mainAdmin.php">Admin Panel Home</a></li> <li><a href="createAdmin.php">Add Administrator</a></li></ul>
				</li>
				
				<li><a href="">Insert</a>
					<ul> <li><a href="insertagent.php">Insert Agent</a></li> <li><a href="inserthouse.php">Insert House</a></li> <li><a href="insertseller.php">Insert Seller</a></li> <li><a href="insertbuyer.php">Insert Buyer</a></li></ul>
				</li>
				
				<li><a href="">Update</a>
					<ul> <li><a href="updateagent.php">Update Agent</a></li> <li><a href="updatehouse.php">Update House</a></li> <li><a href="updateseller.php">Update Seller</a></li> <li><a href="updatebuyer.php">Update Buyer</a></li></ul>
				</li>
				
				<li><a href="">Delete</a>
					<ul> <li><a href="deleteagent.php">Delete Agent</a></li> <li><a href="deletehouse.php">Delete House</a></li> <li><a href="deleteseller.php">Delete Seller</a></li> <li><a href="deletebuyer.php">Delete Buyer</a></li></ul>
				</li>
				
				<li><a href="index.php">Back to Main Page</a></li>
			</ul>
		</nav>
<?php

$conn = mysql_connect("cronus.cs.uleth.ca","tymj3660","mkirch") or 
die(mysql_error());
mysql_select_db("tymj3660",$conn) or die(mysql_error());

$sql = "update AGENT set ID='$_POST[ID]',name='$_POST[agentName]',phoneNumber='$_POST[phoneNumber]', dob='$_POST[dob]', where ID='$_POST[oldID]'"; 
if(mysql_query($sql,$conn)) 
{ 
	echo "<h3> Agent updated!</h3>";

} 
else {
   $err = mysql_errno(); 
   if($err == 1062)
   {
      echo "<p>Agent name $_POST[name] already exists!</p>"; 
   }
   
}

header('Location: mainAdmin.php');
?>
