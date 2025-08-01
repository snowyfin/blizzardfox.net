<!DOCTYPE html>
<head>
  <title>Cats</title>
  <link rel="icon" type="image/x-icon" href="/!f/favicon.ico">
  <script src="https://kit.fontawesome.com/f936906ae0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/!g/winter.css">
</head>
<html>
  <body>
    <div class="overlay" style="bottom: 0; left: 0; color:black;">
      <div class="return" onclick="history.back()">
        <h>
          <b>Return to <br>your previous <br> page! </b>
        </h>
      </div>
    </div>
    <script src="/!g/oneko.js"></script>
    <div id="container">
      <div class="box" style="box-shadow: 0px 0px 40px 2px white; width:250px;text-align: center;margin-left:auto;margin-right:auto;">
        Welcome to to the wall of cats, I'll try to add as many photos I take here of my cats :3
      </div>
      <div class="gallery">
        <?php 
        $dirname = "./!f/";
        $images = glob($dirname."*.jpg");
          
        foreach($images as $image) {
              echo '<div class="box" style="text-align: center;"><img src="'.$image.'"></div>';
        }
        ?>
      </div>
    </div>  
  </body>
</html>
