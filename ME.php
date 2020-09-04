<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>BSorted</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->

								<a href="index.php" class="logo">
									<span class="symbol"><img src="IBSortedIcon.png" alt="" /></span><span class="title">BSorted</span>
								</a>
								<span>
							</span>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">Home</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Mechanical Engineering Classes</h1>
								<p>Here are the links for each Mechanical Engineering class</p>
								<h1>
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
							    $sql= "SELECT * from ME";
							    $result= $conn-> query($sql);
							    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
							    echo"<table>
							    <tr>
							    <th>".$row['ME']."</th></tr>";
	                            $sql1= "SELECT * from ".$row['ME'];
							    $result1= $conn-> query($sql1);
							    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);	
						ECHO  "<tr>
						        <td><a href=".$row1[$row['ME']].">".$row1[$row['ME']]."</a></td>
						        </tr>";
							    while($row1 = $result1->fetch_assoc()){
							           ECHO  "<tr>
						        <td><a href=".$row1[$row['ME']].">".$row1[$row['ME']]."</a></td>
						        </tr>";
							    }
						ECHO "</table>";
							    while($row = $result->fetch_assoc()){
							        echo"<table>
							    <tr>
							    <th>".$row['ME']."</th>
							    </tr>
							    ";
	                            $sql1= "SELECT * from ".$row['ME'];
							    $result1= $conn-> query($sql1);
							    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);	
						ECHO  "<tr>
						        <td><a href=".$row1[$row['ME']].">".$row1[$row['ME']]."</a></td>
						        </tr>";
							    while($row1 = $result1->fetch_assoc()){
							           ECHO  "<tr>
						        <td><a href=".$row1[$row['ME']].">".$row1[$row['ME']]."</a></td>
						        </tr>";
							    }
						ECHO "
							    </table>";
							    }
                                ?>

								</h1>
							</header>
						</div>
					</div>

				<!-- Footer -->
				<footer id="footer">
				<div class="inner">
					<section>
					</sectio>
					<ul class="copyright">
						<li>&copy; BSorted, All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

	</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
