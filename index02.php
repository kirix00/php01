<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>museum goods</title>

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
        margin-top: 550px;
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

/* video */
video{
 position: fixed;
 right: 0;
 bottom: 0;
 min-width: 100%;
 min-height: 100%;
 width: auto;
 height: auto;
 z-index: -100;
 background: url(movie.jpg) no-repeat;
 background-size: cover;
}
.cont{
 display:flex;
 justify-content:center;
 margin: 30% 0 0;
}
.cont-inner{
 width: 600px;
 padding: 20px;
 border: solid 1px #fff;
 color: #fff;
 font-size: 80px;
 font-weight: bold;
 padding-left: 45px;
}


    </style>
</head>
<body>
<video autoplay loop>
 <source src="movie.webm" type="video/webm">
 <source src="./images/title.mp4" type="video/mp4">
</video>

<div class="cont">
 <div class="cont-inner">MUSEUM GOODS</div>
</div>

<div class="grid-container">
<h2>美術館で販売しているグッズのレビューサイトです。グッズをクリックするとコメントがみられます。</h2>
<div class="grid-item"><a href="read02.php"><img src="./images/ysl_img.png" alt="画像" style="max-width:100%;height:auto;"></a></div>
<div class="grid-item"><img src="./images/ysl_zuroku.png" alt="画像" style="max-width:100%;height:auto;"></div>
  </div>
<script>
    const video = document.querySelector("video");
if (window.matchMedia('(prefers-reduced-motion)').matches) {
  video.removeAttribute("autoplay");
  video.pause();
}
</script>
</body>
</html>