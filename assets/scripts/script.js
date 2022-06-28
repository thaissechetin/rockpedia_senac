const cover = document.getElementById('cover');
const disc = document.getElementById('disc');
const title = document.getElementById('title');
const artist = document.getElementById('artist');
const progressContainer = document.getElementById('progress-container');
const progress = document.getElementById('progress');
const timer = document.getElementById('timer');
const duration = document.getElementById('duration');
const prev = document.getElementById('prev');
const play = document.getElementById('play');
const next = document.getElementById('next');
const vol = document.getElementById('volume');
let songIndex = 0;

// Songs info
const songs = [
  {
    title: 'Pais e filhos',
    artist: 'Legião urbana',
    coverPath: 'assets/images/legiao.jpg',
    discPath: 'assets/music/legiao.mp3',
    duration: '4:58',
  },
  {
    title: 'Under pressure',
    artist: 'Queen',
    coverPath: 'assets/images/Queen-Emblema.jpg',
    discPath: 'assets/music/queen.mp3',
    duration: '4:04',
  },
  {
    title: 'I Was Made For Lovin You',
    artist: 'Kiss',
    coverPath: 'assets/images/Kiss1-preto.png',
    discPath: 'assets/music/kiss.mp3',
    duration: '4:01',
  },
  
 
];

// Carregar música inicialmente
loadSong(songs[songIndex]);

// Carreguando a música dada
function loadSong(song) {
  cover.src = song.coverPath;
  disc.src = song.discPath;
  title.textContent = song.title;
  artist.textContent = song.artist;
  duration.textContent = song.duration;
}

// Alternar tocar e pausar
function playPauseMedia() {
  if (disc.paused) {
    disc.play();
  } else {
    disc.pause();
  }
}

// Ícone de atualização
function updatePlayPauseIcon() {
  if (disc.paused) {
    play.classList.remove('fa-pause');
    play.classList.add('fa-play');
  } else {
    play.classList.remove('fa-play');
    play.classList.add('fa-pause');
  }
}

// Atualizar barra de progresso
function updateProgress() {
  progress.style.width = (disc.currentTime / disc.duration) * 100 + '%';

  let minutes = Math.floor(disc.currentTime / 60);
  let seconds = Math.floor(disc.currentTime % 60);
  if (seconds < 10) {
    seconds = '0' + seconds;
  }
  timer.textContent = `${minutes}:${seconds}`;
}

// Reinicie o progresso
function resetProgress() {
  progress.style.width = 0 + '%';
  timer.textContent = '0:00';
}

// Go to previous song
function gotoPreviousSong() {
  if (songIndex === 0) {
    songIndex = songs.length - 1;
  } else {
    songIndex = songIndex - 1;
  }

  const isDiscPlayingNow = !disc.paused;
  loadSong(songs[songIndex]);
  resetProgress();
  if (isDiscPlayingNow) {
    playPauseMedia();
  }
}

// Vá para a próxima música
function gotoNextSong(playImmediately) {
  if (songIndex === songs.length - 1) {
    songIndex = 0;
  } else {
    songIndex = songIndex + 1;
  }

  const isDiscPlayingNow = !disc.paused;
  loadSong(songs[songIndex]);
  resetProgress();
  if (isDiscPlayingNow || playImmediately) {
    playPauseMedia();
  }
}

// Alterar o progresso da música quando clicado na barra de progresso
function setProgress(ev) {
  const totalWidth = this.clientWidth;
  const clickWidth = ev.offsetX;
  const clickWidthRatio = clickWidth / totalWidth;
  disc.currentTime = clickWidthRatio * disc.duration;
}

// Reproduzir/Pausar quando reproduzir botão clicado
play.addEventListener('click', playPauseMedia);

// Vários eventos em disco
disc.addEventListener('play', updatePlayPauseIcon);
disc.addEventListener('pause', updatePlayPauseIcon);
disc.addEventListener('timeupdate', updateProgress);
disc.addEventListener('ended', gotoNextSong.bind(null, true));

// Vá para a próxima música quando o próximo botão clicou
prev.addEventListener('click', gotoPreviousSong);

// Vá para a música anterior quando o botão anterior clicado
next.addEventListener('click', gotoNextSong.bind(null, false));

// Mova-se para um lugar diferente na canção
progressContainer.addEventListener('click', setProgress);
