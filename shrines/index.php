<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Shrines</title>
    <link rel="stylesheet" href="./!g/index.css">
</head>
    <body>
        <div id="container">
            <div  id="flex"  style="position:relative;">
                <aside id="leftSidebar" style="position:relative;height: 100%;width:300px;color:goldenrod;">
                </aside>
                <main style="position:relative;height: 100%;width:500px;text-align: center;">
                    <div style="display:inline-block;text-align: left;">
                    <pre>
    `,.      .   .        *   .    .      .  _    ..          .
        \,~-.         *           .    .       ))       *    .
            \ *          .   .   |    *  . .  ~    .      .  .  ,
    ,           `-.  .            :               *           ,-
    -             `-.        *._/_\_.       .       .   ,-'
    -                 `-_.,     |n|     .      .       ;
        -                    \ ._/_,_\_.  .          . ,'         ,
        -                    `-.|.n.|      .   ,-.__,'         -
        -                   ._/_,_,_\_.    ,-'              -
        -                     |..n..|-`'-'                -
        -                 ._/_,_,_,_\_.                 -
            -               ,-|...n...|                  -
            -         ,-'._/_,_,_,_,_\_.              -
                -  ,-=-'     |....n....|              -
                -;       ._/_,_,_,_,_,_\_.         -
                ,-          |.....n.....|          -
            ,;         ._/_,_,_,_,_,_,_\_.         -
    `,  '.  `.  ".  `,  '.| n   ,-.   n |  ",  `.  `,  '.  `,  ',
    ,.:;..;;..;;.,:;,.;:,o__|__o !.|.! o__|__o;,.:;.,;;,,:;,.:;,;;:
    ][  ][  ][  ][  ][  |_i_i_H_|_|_|_H_i_i_|  ][  ][  ][  ][  ][
                        |     //=====\\     |
                        |____//=======\\____|
    gpyy                    //=========\\                   //=========\\
            </pre>
            </div>
            <div style="display: inline-block;">Welcome to my shrines<br>Here I have pages to things that have made my life where it is today. </div>
            <br><br>
            <?php
                $dirname = "./";
                $pages = glob($dirname."*.php");

                foreach($pages as $page) {
                    if(basename($page) != "index.php") {
                        $page = str_replace(".php", "", $page);
                        $cleanedOutput = ltrim($page, "./");
                        echo '<a href="'.$page.'.php">'.$cleanedOutput.'</a><br>';
                    }
                }
            ?>
                </main>
                <aside id="rightSidebar" style="position:relative;height: 100%;width:300px;color:goldenrod;">
                </aside>
            </div>
        </div>
    </body>
</html>

