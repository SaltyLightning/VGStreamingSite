<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
   
    <!-- Reset everything -->
    <link href="reset.css" rel="stylesheet">

    <!-- Get that Bootstrap included -->
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap3_defaultTheme/theme.css" rel="stylesheet">

    <!-- Get my stylesheet included -->
    <link href="homepage_styling.css" rel="stylesheet">
  </head>

  <body>
  	<!-- Here's the topbar -->
  	<div class="topnav">
	  	<ul>
	  		<li><a href="#home">Home</a></li>
	  		<li><a href="#news">News</a></li>
	  		<li><a href="#contact">Contact</a></li>
	  		<li><a href="#about">About</a></li>
		</ul>

		<div class="search">
			<!-- SEARCH &nbsp; -->
			<form action="" method="GET">
				<input type="text" name="query" value=" Search" onfocus="if (this.value==' Search') this.value='';"/>
				<input type="submit"/>
			</form>
		</div>
	</div>

	<!-- Aaand here's the sidebar -->
	<div class="sidenav">
		<ul>
	  		<li><a href="#home">*</a></li>
	  		<li><a href="#news">*</a></li>
	  		<li><a href="#contact">*</a></li>
	  		<li><a href="#about">*</a></li>
		</ul>
	</div>
  </body>
</html>