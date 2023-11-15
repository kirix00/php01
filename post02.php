<html>
<head>
<meta charset="utf-8">
<title>MUSEUM GOODS</title>
</head>
<body>
<style>
	.tarea {
		padding: 10px;
    line-height: 1.5;
    height: 10em;
	}
.form {
  margin: auto;
  text-align: center;
  background-color: gray;
  width: 300px;
  border-radius: 10px;
  padding-top: 10px;
  color: white;
}
p {
  text-align: center;
}
</style>
<div class="form">
<form action="write02.php" method="post">
	<tr>
    <td><p>トートバッグのコメント投稿</p></td>
		<td>名前<br><input type="text" name="name"></td><br>
		<td>タイトル<br><input type="text" name="title"></td><br>
		<td>コメント<br><textarea name="comment" class="tarea"></textarea></td><br>
		<td><br><input type="submit" value="送信"></td><br><br>
	</tr>
</form>
</div>
<p><a href="read02.php">戻る</a></p></li>
</body>
</html>