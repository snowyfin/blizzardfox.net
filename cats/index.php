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
      <div class="dcordchannel">Cat Wall<div>Welcome to to the wall of cats, I'll add as many photos I take here of my cats :3</div></div>
      <div class='dcord2'>

        <?php 
        $dirname = "./!f/";
        $images = glob($dirname."*.jpg");
          
        foreach($images as $image) {
              echo '<div><user style='--icon: url(https://cdn.discordapp.com/avatars/741823940061560944/8730cfd2557617a015a8cb776317f2a8?size=1024)'>Ashlyn</user></div>
      <div><img src="'.$image.'"></div>';
        }
        ?>
      
      </div>
    </div>  
  </body>
</html>
