<?php
$name = $_POST["name"];
$title = $_POST["title"];
$comment  = $_POST["comment"];
$c    = ",";

//文字作成
$str = date("Y-m-d H:i:s").$c.$name.$c.$title.$c.$comment;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>MUSEUM GOODS</title>
</head>
<body>

<h2>書き込みしました。</h2>
<!-- <h2>./da？ta/data.txt を確認しましょう！</h2> -->
<p><?=$str?></p>
<ul>
<li><a href="read02.php">戻る</a></li>
</ul>
</body>
</html>