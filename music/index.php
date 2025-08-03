<!DOCTYPE html>
<head>
  <title>Music</title>
  <link rel="stylesheet" href="/!g/winter.css">
  <link rel="stylesheet" href="/!g/tabs.css">
  <link rel="stylesheet" href="https://unpkg.com/98.css">
</head>
<html>
  <style>
    body {
      background-color: black;
      background-image: none;
    }
  </style>

  <body style="padding-top: 5px;">
    <div class="overlay" style="bottom: 0; right: 0; color:black;position:fixed;">
      <img src="./!f/vibri_eepy.gif" width="400px">
    </div>
    <div class="overlay" style="position:fixed; top: 10px; left: 10px; color:black;">
      <div class="return">
        <h>
          <img src="/!f/spinningCD.gif" width="40px"onclick="history.back()">
        </h>
      </div>
    </div>
    
    <div id="container">
      <div id="flex" style="position:relative;font-family:Vibri;">
        <div style="text-align:left; max-width:600px;margin-right:auto;margin-top:100px;margin-bottom: 50px;">
          <a style="font-size:40px;text-align:center;color:white;margin-bottom:50px;">Snowy's Music!</a>
          <br>
          <br>
          <a style="text-align:justify;color:white;"> I listen to a lot of music, and it is something that is really important to me. I connect so many memories with music, and very much appreciate the composition and work that goes into each and every piece. </a>
        </div>
      </div>
      <!--Cassette Tapes-->
      <div class="window" style="display:flex;flex-wrap: wrap; align-content: left; padding:35px;">
        <?php 
        $dirname = "../cdn/ALBUM-COVERS/";
        $images = glob($dirname."*.jpg");
          
        foreach($images as $image) {
              echo '<div class="cassette-tape">
                <div class="cassette-tape-label">
                  <span class="dot"></span>
                  <img class="cover" src="'.$image.'" style="max-width: 190px;">
                  <span class="dot"></span>
                </div>
              </div>';
        }
        ?>
      </div>
  </body>
</html>
