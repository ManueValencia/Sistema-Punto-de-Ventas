<?php
	session_start();
	include_once 'DB.php'; 
	if (isset($_SESSION['id'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Pacifico|Playball|Yellowtail&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>

</body>
</html>
<?php }else{ header("Location: index.php"); } ?>
?>