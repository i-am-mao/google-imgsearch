<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style/style.css">
	<script src="js/jquery.js"></script>
	<script src="js/code.js"></script>

</head>
<body>
	<?php
		error_reporting(E_ALL & ~E_NOTICE);

		$img_url = $_POST['img_url'];

		//出力
		//検索順位を指定するときはパラメータにstart
		// ex.) &start=9 ←画像９番目から表示
		print google_image($img_url);
		function google_image($word){
		    $baseurl="https://ajax.googleapis.com/ajax/services/search/images?";
		    $baseurl.="rsz=large&v=1.0&hl=ja&q=";
		    $myurl=$baseurl.urlencode($word);
		    $myjson=file_get_contents($myurl);
		    $recs=json_decode($myjson,true);
		    $str.='<div class="imagebox">';
		    foreach($recs[responseData][results] as $rec){
		        $str.='
		        		<form method="post" action="Result.php">
		        		<input type="hidden" name="img_url" value='.$rec[unescapedUrl].'>
		        		<input type="image" src='.$rec[unescapedUrl].' value="画像" width="230">
		        		</form>
		        	  ';
		    }
		    $str.='</div>';
		    return $str;
		}
?>
</body>
</html>