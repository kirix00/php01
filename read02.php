<?php

// ファイルを変数に格納
$filename = 'data/data.txt';

// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

//＊配列の準備
$txt = [];
while (!feof($fp)) {
    //＊配列に入れる【explodeで配列に配列を入れる】
    $txt[] = explode(",", fgets($fp)); 
}
fclose($fp);

//読み出したファイルを最後から読み出す
$txt = array_reverse($txt);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSEUM GOODS</title>
    <style>
    td{
        background-color: gray;
    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto; /* 2列のグリッド */
        /* border-radius: 10px; */
        gap: 10px; /* グリッドアイテム間の隙間 */
        background-color: gray;
        padding: 10px;
    }
    .grid-item {
        background-color: rgba(255, 255, 255, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.8);
        border-radius: 10px;
        padding: 20px;
        font-size: 20px;
        text-align: center;
    }
    .btn {
  border-radius: 5px;
  background-color: lightblue;
  padding: 10px;
  text-decoration: none;
  color: white;
}
    </style>
</head>
<body>
    <!-- <table> -->
<img src="" alt="">
<div class="grid-container">
<div class="grid-item"><img src="./images/ysl_img.png" alt="画像" style="max-width:100%;height:auto;"></div>
<div class="grid-item">
  <h3>トートバッグ　大　8,800円（税込）<br>
      トートバッグ　小　5,800円（税込）</h3>
  <p>予約注文受付中</p><br><br>
  <p>この商品についてのコメントを受付中です！</p>
  <a href="post02.php" class="btn">投稿する</a><br><br><br><br><br>
  <a href="index02.php" class="btn">TOPに戻る</a>
</div>
<?php 
//＊ここで表示処理
for($i=0; $i<count($txt)-1;$i++){
        echo '<div class="grid-item">';
        echo $txt[$i][0];
        echo '<br>名前：';
        echo $txt[$i][1];
        echo '<br>タイトル：';
        echo $txt[$i][2];
        echo '<br><br>コメント<br>';
        echo $txt[$i][3];
        echo '</div>';

}
?>
</div>
    <!-- </table> -->
</body>
</html>