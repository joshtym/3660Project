<html>
	<head>
		<style type="text/css">
			body
			{
				background-image:url("real_estate_background.gif");
			}
			
			h1
			{
				position: relative;
				font-size: 70px;
				margin-top: 0;
				font-family: 'Lobster', helvetica, arial;
			}
     
			h1 a
			{
				text-decoration: none;
				color: #666;
				position: absolute;
				 
				-webkit-mask-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,1)), color-stop(50%, rgba(0,0,0,.5)), to(rgba(0,0,0,1)));
			}
     
			h1:after
			{
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
		</style>
	</head>
	<h1></h1>
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
		<center><form action = "log.php" method = "post">
			<table>
				<tr><td>Username:</td>
				<td><input type = "text" name = "username"></td></tr>
				<tr><td>Password:</td>
				<td><input type = "password" name = "password"</td></tr>
			</table>
		<input type = "submit" name = "submit" value = "Log in"></center>
		</form>
	</body>
</html>
