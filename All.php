<html>
	<head>
		<title>Lab 6 - All.php</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
	</head>
	<body>
		<?php
			include_once "Menu.php";
			include_once "Header.php";
		
			for($i=99;$i>0;$i--) {
					printf("%d bottles of beer on the wall...<br/>
						%d bottles of beer...<br/>
						You take one down you pass it around ...<br/>
						%d bottles of beer on the wall.<br/><br/>",$i,$i,$i-1);
				}
				echo"There are no more bottles of beer<br/>";
				include_once "Footer.php";
?>
	</body>
	</html>


