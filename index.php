<?php
session_start();
include_once 'dbconnect.php';
//new code
//include 'upload.php';
//if(isset($_SESSION['usr_id'])) {
//include 'services.php';
//}

//end of new code

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Publications</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) {
    ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php

} else {
    ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php

} ?>
			</ul>
		</div>
	</div>
</nav>

<body> <?php if (isset($_SESSION['usr_id'])) {
    include 'menu.php';
} ?>
</body>

<body>

<!-- New Code starts from here -->
<?php if (isset($_SESSION['usr_id'])) {
   // include 'slideshow.php';
}?>
	<!--<div>-->

		<div class="item-page" itemscope="" itemtype="http://schema.org/Article">
<meta itemprop="inLanguage" content="en-GB">

		<div class="page-header">
	<h2 style="text-align: center;" itemprop="name"> Web-based Database System Publications </h2>
	<!-- <p style="text-align: center;"><img src="http://www.ieeer8.org/wp-content/uploads/2017/02/website.jpg" alt="website_titan" width="425" height="200" style="margin-left: 10px; border: thin solid #dddddd; margin-right: 10px; float: left;"><span style="font-size: 10pt;"><em></em></span></p>-->

						</div>
							<div itemprop="articleBody">
<p style="text-align: center;"></p>
<p style="text-align: left;">This is a website where the publications are going to be published. Each user will have different privileges and can see his own publications or search for his
	publications. Also for administrator privileges there will be an option
	to view and search and publish all publications.Additionally after the user enters each of those options, there will be
	a new page where there is first going to be a text box asking for the
	name of the publication . If the publication already exists in the
	system the rest of the fields are going to be added automatically.
	Note: During the import settings there must be an option where the user
	have the option to replace completely overwrite to the latest version
	of the publication or import a new one.All of these publication are going to be added
	dynamically and you should be able to preview them at tables.
	To the system there is going to be only one admin (secretary) but there are going to be several users who can be added dynamically after signing up.</p>
<br>&emsp;Users can:</br>
	&emsp;1.submit publications
	<br>
	&emsp;2.be connected with the system  and there should be a menu where publications are going to be added
</br>
	&emsp;3.preview all the publications
	<br>
	&emsp;4.search an author and find publications
</br>
	&emsp;5.author should be able to get a report with the publications with categories(books table, conferences etc)
	<br>
	&emsp;6.be able to view relation with other author
</br>
	&emsp;7.search all page

					</div>

					<div id="fav-copyright" class="clearfix">


																													<div id="fav-showcopyright" class="span12">


									</div>

							</div>
</body>
<!-- Codes endes here-->




<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
