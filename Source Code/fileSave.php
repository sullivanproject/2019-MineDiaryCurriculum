<!DOCTYPE html>
<html>
<head>
	<title>와우</title>
</head>
<body>
	<?php
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	$txt = "title : " . $_POST["title"] . "inside : " . $_POST["inside"];
	fwrite($myfile, $txt);
	fclose($myfile);
	?>
	<h1>저장이 완료되었습니다!</h1>
	<a href="index.php">돌아가기</a>
</body>
</html>