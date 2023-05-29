var isPlaying = false;
  var audio = document.getElementById('<?php echo get_the_title() ?>play');

  function togglePlay() {
    if (isPlaying) {
      audio.pause();
      isPlaying = false;
    } else {
      audio.play();
      isPlaying = true;
    }
  }

  var button = document.querySelector('button');
  button.addEventListener('click', togglePlay);