<html>
	<head>
		<title>Lab 6 - Odd.php</title>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
	</head>
<body>
<?php
	include_once "Menu.php";
	include_once "Header.php";
	
	for($i=99;$i>0;$i-=2) {
		if($i !== 1){
			printf("%d bottles of beer on the wall...<br>
				%d bottles of beer...<br>
				You take ten down you pass it around ...<br>
				%d bottles of beer on the wall.<br><br>",$i,$i,$i-2);
		}
		else {
			printf("There is only %d bottle left.<br>
			You take it down you pass it around.<br>
			%d bottles of beer on the wall.<br><br>
			There are no more bottles of beer.<br>",$i,$i-1);
		}
	}
	include_once "Footer.php";
?>
</body>
</html>

