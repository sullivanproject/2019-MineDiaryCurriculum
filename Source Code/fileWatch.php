<!DOCTYPE html>
<html>
<head>
	<title>파일 보기</title>
</head>
<body>
	<?php
	$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
	$txt = fread($myfile, filesize("newfile.txt"));
	echo $txt;
	fclose($myfile);
	?>
	<a href="index.php">돌아가기</a>
	
</body>
</html>