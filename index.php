<!doctype html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/code.js"></script>
</head>
<body>
	<form action="search.php" method="POST">
		<input type="text" name="img_url" value="キーワード" onFocus="cText(this)" onBlur="sText(this)">
		<input type="submit">
	</form>	
</body>
</html>