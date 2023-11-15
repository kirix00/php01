<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSEUM GOODS</title>

    <!-- 映像ロゴ -->
    <video autoplay playsinline muted loop preload poster="">
    <!-- <source src="./images/pexels_videos_1970039 (1080p).mp4" /> -->
    <source src="./images/title.mp4" />
  </video>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 100" preserveAspectRatio="xMidYMid slice">
    <defs>
    <mask id="mask" x="0" y="0" width="100%" height="100%" >
      <rect x="0" y="0" width="100%" height="100%" />
    <text x="110"  y="50">MUSEUM Goods</text>
      </mask>
  </defs>
 <rect x="0" y="0" width="100%" height="100%" />
  </svg>

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

/* 映像ロゴ */
@font-face {
  font-family: Biko;
  src: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/biko-black.woff");
}
body {
  background: white;
  margin: 2rem;
}

header {
  width: 100%;
  margin: 0 auto;
  position: relative;
  max-width: 600px;
}

header video {
  width: 100%;
}

svg {
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
}

svg text {
  font-family: Biko, sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 10px;
}

svg rect {
  fill: white;
}

svg > rect {
  -webkit-mask: url(#mask);
  mask: url(#mask);
}

    </style>
</head>
<body>

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