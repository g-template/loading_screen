<?php include('config.php'); ?>
<html>
  <head>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <script src="https://kit.fontawesome.com/b5b3392b53.js" crossorigin="anonymous"></script>
  </head>
  <body style="background-color: <?php echo $color_background ?>">
  <audio id="loading" src="music/music.mp3" autoplay="true" hidden="true" loop="true"></audio>
    <section class="u-image u-section-1">
            <div class="u-layout-row">
              <div class="u-size-27-xl">
                <div class="box server-info">
                  <h2><?php echo $title ?></h2>
                  <ul>
                      <li>
                        <i id="color-icon" class="fas fa-map"></i> | <?php echo $map ?>
                      </li>
                      <li>
                        <i id="color-icon" class="fas fa-gamepad"></i> | <?php echo $gamemode ?>
                      </li>
                      <li>
                        <i id="color-icon" class="fab fa-discord"></i> | <?php echo $discord_id ?>
                      </li>
                      <li>
                        <i id="color-icon" class="fas fa-globe"></i> | <?php echo $website ?>
                      </li>
                  </ul>
              </div>
              </div>
              <div>
                  <img src="images/player.png" width="100%">
              </div>
            </div>
          </div>
    </section>
    <script>
      var vid = document.getElementById("loading");
      vid.volume = <?php echo $music_volume ?>;
    </script>
  </body>
</html>