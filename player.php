<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/styles/style.css" />
  <title>Music Player | RockPedia</title>
</head>

<body>
  <header>
    <div class="pcd">
      <button class="btn-pcd" title="Contraste"><i class="fas fa-adjust"></i></button>
    </div>
  </header>
  <div class="container">
    <main>
    <h1 class="heading">Player RockPedia</h1>
    <div class="music-container">
      <div id="cover-box">
        <img src="assets/images/cover1.jpg" alt="cover-image" id="cover" />
      </div>
      <div id="music-box">
        <audio id="disc"></audio>
        <div id="music-info">
          <h2 id="title"></h2>
          <h3 id="artist"></h3>
          <div id="progress-container">
            <div id="progress"></div>
          </div>
          <div id="timer-bar">
            <span id="timer">0:00</span>
            <span id="duration"></span>
          </div>
        </div>
        <div id="control-box">
          <i id="prev" class="btn fas fa-backward"></i>
          <i id="play" class="special-btn fas fa-play"></i>
          <i id="next" class="btn fas fa-forward"></i>
        </div>
      </div>
    </div>
    </main>
  </div>
  <a href="index.php" class="btn btn-outline-dark">Home</a>
  <script src="assets/scripts/evento.js"></script>
  <script src="assets/scripts/script.js"></script>
</body>

</html>