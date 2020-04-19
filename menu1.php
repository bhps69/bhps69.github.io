<?php session_start();?>
<html>
	<head>
	<meta http-equiv="refresh" content="2"/>
		<title>menu1</title>
		<link  rel="stylesheet" type="text/css" href="style.css"/>
				
	</head>
	<body>
	
		<div align="right" id="menus">
		<a class="a" href="Home.php" target="content">Home</a>
		&nbsp;&nbsp;&nbsp;
		<a class="a"  href="About.php" target="content">About Us</a>
		&nbsp;&nbsp;&nbsp;
		<a  class="a" href="Contact.php" target="content">Contact Us</a>
		&nbsp;&nbsp;&nbsp;
		<?php 
			

			if(isset($_SESSION["user"]))
				{
					if($_SESSION["user"]=="bhps69")
					{
						echo "<a class='a' href='Add.php' target='content'>Add</a>
						&nbsp;&nbsp;&nbsp;
						<a class='a' href='Show.php' target='content'>Show</a>
						&nbsp;&nbsp;&nbsp;
						<a class='a' href='Modify.php' target='content'>Modify</a>
						&nbsp;&nbsp;&nbsp;";
					}
					echo "<a class='a' href='SignOut.php' target='content'>SignOut</a>";
				}
				else
				{
					echo "<a class='a' href='SignIn.php' target='content'>SignIn</a>
		&nbsp;&nbsp;&nbsp;
					<a class='a' href='SignUp.php' target='content'>SignUp</a>";
				}
			?>
			
	
		
		</div>
		
	</body>
</html>