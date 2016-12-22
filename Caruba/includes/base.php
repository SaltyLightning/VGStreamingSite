<!-- Get my stylesheet included -->

<link href="base_styling.php" type="text/css" rel="stylesheet">

<!-- Styling for video well -->
<link href="includes/video_styling.css" rel="stylesheet">

<!-- Here's the topbar -->
<div class="topnav">
	<div style="display: inline-block" class="logo">
		<a href="homepage.php"><img src="images/logos/logo-2.png" width="55" height="55"></a>
	</div>
	
	<div style="display: inline-block" id="title">CARUBA</div>


	<!-- <div class="profile">
		<div style="display: inline-block">
			<img src="images/icons/user.png" width="30" height="30">
		</div>
		<div style="display: inline-block">
			MEH
		</div>
	</div> -->

	<!-- <ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#news">News</a></li>
		<li><a href="#contact">Contact</a></li>
		<li><a href="#about">About</a></li>
	</ul> -->

	<div class="search">
		<!-- SEARCH &nbsp; -->
		<form action="search-results.php" method="POST">
			<input type="text" name="query" value=" " onfocus="if (this.value==' ') this.value='';"/>
			<input type="submit" value="Search"/>
		</form>
	</div>
</div>

<!-- Aaand here's the sidebar -->
<div class="sidenav">
	<ul>
		<li><a href="games.php"><img class="top" src="images/icons/gamepad.png" title="Games"></a></li>
		<li><a href="#channels"><img src="images/icons/users.png"></a></li>
		<li><a href="#favorites"><img src="images/icons/favorite.png"></a></li>
		<li><a href="#settings"><img src="images/icons/share.png"></a></li>
		<li><img src="images/icons/bar.png" width="30" height="15"></li>
		<li><a href="#settings"><img src="images/icons/control-panel.png"></a></li>
		<li><a href="#settings"><img src="images/icons/info.png"></a></li>
		<li><a href="#settings"><img src="images/icons/language.png"></a></li>
	</ul>
</div>
