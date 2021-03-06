<?php header ("Content-type: text/css");?>

@font-face {
	font-family: searchbar;
	src: url(fonts/Roboto-Light.ttf);
}

@font-face {
	font-family: title;
	src: url(fonts/cocogoose.otf);
}

html {
	background: 
    linear-gradient(
      rgba(0,40,50,0.7), 
      rgba(0,40,50,0.7)
    ),
    url(images/backgrounds/bg<?php echo rand(0,9);?>.jpg) no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
    min-height: 100%;
    margin: 0;
}

body {
	position: fixed;
	top:	0;
	right:	0;
	bottom:	0;
	left:	0;
	margin:	0;

    min-height: 100%;
	background: rgba(0,40,50,0.3) center top no-repeat;
	background-size: cover;

}

/*Top bar starts here***********************************/

div.topnav {
	background-color: rgb(0,40,50);

    position: fixed;
    left: 0; right: 0;
	height: 60px;

    z-index: 1;
}

div.logo {
    position: absolute;
    top: 5px; left: 5px;
    display: inline-block;
}

#title {
    position: absolute;
    left: 90px; top: -5px;

    font-family: title, Calibri, sans-serif;
    font-size: 40pt;
    color: white;
}

div.profile {
    position: absolute;
    right: 100px; top: 15px;

    color: white;
    margin-left: 15px;
}

/* Remove margins and padding from the list, and add a black background color */
div.topnav ul {
    list-style-type: none;
    margin:		0;
    padding:	0;
    overflow:	hidden;

    width:		600px;
}

/* Float the list items side by side */
div.topnav ul li {
	float: left;
}

/* Style the links inside the list items */
div.topnav ul li a {
    display:		inline-block;
    color:			white;
    text-align:		center;
    vertical-align:	center
    text-decoration: none;
    margin-left: 	25px;
    padding-top:	15px;
    transition:		0.3s;
    font-size:		24px;
}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
div.topnav ul li.icon {display: none;}

/*Searchbar stuff**************************************/
input[type="text"] {
  appearance: none;
  box-shadow: none;
  border-radius: none;
}

input[type="text"]:focus {
  outline: none;
}

div.search {
	position: absolute;
    right: 50px;
    top: 15px;

    color: white;
	font-family: searchbar, Calibri, sans-serif;
	font-size: 20px;
}

div.search input[type="text"] {
	/*border: solid 5px #c9c9c9;
    box-shadow: inset 0 0 0 1px #707070;
    transition: box-shadow 0.3s, border 0.3s;
*/
	font-family: searchbar, Calibri, sans-serif;
	
	border:0 none;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    width: 500px;
}

/*Sidebar starts here***********************************/
div.sidenav {
	background-color: rgb(0,40,50);

	position: fixed;
    left: 0; top: 60px; bottom: 0;
	width:	60px;

    z-index: 1;
}

/* Remove margins and padding from the list, and add a black background color */
div.sidenav ul {
    list-style-type: none;
    margin:		0;
    padding:	0;
    overflow:	hidden;
}

input[type=submit] {
	background: rgb(68,199,242); /*Probably gonna change this*/ 
	border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

/* Float the list items side by side */
div.sidenav ul li {
    display:    inline-block;
    color:      white;
    text-align: center;
    margin-top:     25px;
    margin-left:    17px;
    /*padding:  5px 25px; Will reposition icons*/
    text-decoration: none;
    transition: 0.3s;
    font-size:  24px;
}

/* Style the links inside the list items */
.top {margin-top: 40px;}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
div.sidenav ul li.icon {display: none;}

.display {
height: auto;
width: 	1735px;

position: absolute;
top: 120px;
left: 120px; right: 60px; right: 0; bottom: 0;

background: rgba(0,0,0,0.5);
color: white;

<!--height: 770px;-->
<!--width: 	1735px;-->
<!---->
<!--position: absolute;-->
<!--top: 120px;-->
<!--left: 120px; right: 60px; right: 0; bottom: 0;-->
<!---->
<!--background: rgba(0,0,0,0.5);-->
<!---->
<!--color: white;-->
}