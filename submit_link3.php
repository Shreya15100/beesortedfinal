<?php
$conn= mysqli_connect('localhost','id14606355_root','K4qhW$IV^P1-c^2Y');
if(!$conn)
{
    echo 'Not connected to server!';
}
if(!mysqli_select_db($conn,'id14606355_beesorted'))
{
    echo 'Database not selected!';
}
$selectedCourse="";
$link="";
if (isset($_POST['course'])) {
    $selectedCourse = $_POST['course'];
}

$link = $_POST['link'];

$sql1= "INSERT into ".$selectedCourse." VALUES('$link')";
if(!mysqli_query($conn,$sql1))
{
    echo 'not inserted';
}
else{
    echo "
    <!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>BSorted</title>
		<meta charset='utf-8' />
		<meta name='viewport' content='width=device-width', initial-scale=1, user-scalable='no' />
		<link rel='stylesheet' href='assets/css/main.css' />
		<noscript><link rel='stylesheet' href='assets/css/noscript.css' /></noscript>
	</head>
	<body class='is-preload'>
		<!-- Wrapper -->
			<div id='wrapper'>

				<!-- Header -->
					<header id='header'>
						<div class='inner'>

							<!-- Logo -->
								<a href='index.php' class='logo'>
									<span class='symbol'><img src='images/logo.svg' alt='' /></span><span class='title'>BSorted</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href='#menu'>Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
				<nav id='menu'>
					<h2>Menu</h2>
					<ul>
						<li><a href='index.php'>Home</a></li>
						<li><a href='generic.html'>Classes</a></li>
					</ul>
				</nav>

				<!-- Main -->
					<div id='form'>
						<div class='inner'>
							<section>
								<h2>Your link has been submitted successfully!</h2>
									<div class='row gtr-uniform'>
										<div class='col-12'>
											<ul class='actions'>
												<li><a href='index.php'>Back to Homepage</a></li>
											</ul>
										</div>
									</div>
							</section>
						</div>
					</div>

				<!-- Footer -->
				<footer id='footer'>
				<div class='inner'>
					<section>
					</sectio>
					<ul class='copyright'>
						<li>&copy; BSorted, All rights reserved</li><li>Design: <a href='http://html5up.net'>HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

	</div>

		<!-- Scripts -->
			<script src='assets/js/jquery.min.js'></script>
			<script src='assets/js/browser.min.js'></script>
			<script src='assets/js/breakpoints.min.js'></script>
			<script src='assets/js/util.js'></script>
			<script src='assets/js/main.js'></script>

	</body>
</html>";
}
?>