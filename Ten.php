<html>
	<head>
		<title>Lab 6 - Ten.php</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
	</head>
<body>
<?php
	include_once "Menu.php";
	include_once "Header.php";
	
	for($i=90;$i>0;$i-=10) {
		if($i != 10){
			printf("%d bottles of beer on the wall...<br>
				%d bottles of beer...<br>
				You take ten down you pass it around ...<br>
				%d bottles of beer on the wall.<br><br>",$i,$i,$i-10);
		}
		else {
			printf("There is only 10 bottles left.<br>
			You take them down you pass it around.<br>
			%d bottles of beer on the wall.<br><br>
			There are no more bottles of beer.<br>",$i-10);
		}
	}
	include_once "Footer.php";
	
	
	
?>
</body>
</html>