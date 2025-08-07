<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <link rel="stylesheet" href="./!g/moon.css">
</head>
<body>
        <div id="container">
            <div  id="flex"  style="position:relative;">
                <aside id="leftSidebar" style="position:relative;height: 100%;width:300px;color:goldenrod;">
                     <div style="font-family:Stars;font-size:100px;">The Moon</div>
                     <div style="font-family:Stark;font-size:25px;text-align: justify;text-indent: 40px;">     The Moon holds a special place in my heart. It's helped me connect to people, and learn a lot of stuff about myself.
                        <br><br>
                        Sometimes I think about how every night, we can all see the same Moon, and I think thats beautiful.
                    </div>
                </aside>
                <main style="position:relative;height: 100%;width:500px;text-align: center;">
                    <div style="display: inline-block; z-index:1000;">
                        <?php 
                            chdir('../scripts/');
                            $command = 'python3 moonphase.py';
                            exec($command, $output, $return_var);

                            foreach ($output as $line) {
                                if (strpos($line, 'New Moon') !== false) {
                                    echo "<img src='!f/NewMoon.png' style=\"margin-top:150px; width: 300px;\" onclick=\"history.back()>\"";
                                } else  if (strpos($line, 'Waxing Crescent') !== false){
                                    echo "<img src='!f/WaxingCrescent.png' style=\"margin-top:150px; width: 300px;\"  onclick=\"history.back()>\"";
                                } else  if (strpos($line, 'First Quarter') !== false){
                                    echo "<img src='!f/FirstQuarter.png' style=\"margin-top:150px; width: 300px;\" onclick=\"history.back()>\"";
                                } else  if (strpos($line, 'Waxing Gibbous') !== false){
                                    echo "<img src='!f/WaxingGibbous.png' style=\"margin-top:150px; width: 300px;\" onclick=\"history.back()>\"";
                                } else  if (strpos($line, 'Full Moon') !== false){
                                    echo "<img src='!f/FullMoon.png' style=\"margin-top:150px; width: 300px;\" onclick=\"history.back()>\"";
                                } else  if (strpos($line, 'Waning Gibbous') !== false){
                                    echo "<img src='!f/WaningGibbous.png' style=\"margin-top:150px; width: 300px;\" onclick=\"history.back()>\"";
                                } else  if (strpos($line, 'Last Quarter') !== false){
                                    echo "<img src='!f/LastQuarter.png' style=\"margin-top:150px; width: 300px;\" onclick=\"history.back()>\"";
                                } else  if (strpos($line, 'Waning Crescent') !== false){
                                    echo "<img src='!f/WaningCrescent.png' style=\"margin-top:150px; width: 300px;\" onclick=\"history.back()>\"";
                                }
                            }?>
                    </div>
                </main>
                <aside id="rightSidebar" style="position:relative;height: 100%;width:300px;color:goldenrod;">
                <div style="font-family:Stars;font-size:100px;">Howling</div>
                     <div style="font-family:Stark;font-size:25px;text-align: justify;text-indent: 40px;">
                        Mid 2023 I found a place that felt like home to me. A server dedicated to just howling to the new moon. Here I met the owner <a href="https://nia.dog"><img src="/!f/nia88x31.gif"></a> (You should check out her website, It's really cool!)<br><br>Come check us out at <a href="https://nia.dog/howl">nia.dog/howl</a>
                    </div>
                </aside>
            </div>
        </div>
</body>
</html>

