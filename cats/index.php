<!DOCTYPE html>
<head>
  <title>Cats</title>
  <link rel="icon" type="image/x-icon" href="/!f/favicon.ico">
  <script src="https://kit.fontawesome.com/f936906ae0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="!g/cats.css">
</head>
<html>
  <body>
    <div class="overlay" style="position:fixed; top: 10px; left: 10px; color:black;">
      <div class="return">
        <h>
          <img src="/!f/Discord.png" width="40px"onclick="history.back()">
        </h>
      </div>
    </div>
    <script src="/!g/oneko.js"></script>
    <div id="container" style="margin-top:0px;">
      <div class="dcordchannel">Cat Wall<div>Welcome to to the wall of cats, I'll add as many photos I take here of my cats :3</div></div>
        <div class='dcord2'>
        <div style="z-index: 129059382;"><user style='--icon: url(https://cdn.discordapp.com/avatars/741823940061560944/8730cfd2557617a015a8cb776317f2a8?size=1024);'>Ashlyn</user><time><?php echo exec('date '+%r''); ?></time> <?php 
        $dirname = "./!f/";
        $images = glob($dirname."*.jpg");
        foreach($images as $image) {
              echo '<div style="text-align: left;"><img src="'.$image.'" style="width:200px;"></div>';
        }

        ?></div>
      </div>
    </div>  
  </body>
</html>
