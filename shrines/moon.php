<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
</head>
<body>
    <?php 
    chdir('../scripts/');
    $command = 'python3 moonphase.py';
    exec($command, $output, $return_var);

    foreach ($output as $line) {
        if (strpos($line, 'New Moon') !== false) {
            echo "<img src='!f/NewMoon.jpg'>";
        } else  if (strpos($line, 'Waxing Crescent') !== false){
            echo "<img src='!f/WaxingCrescent.jpg'>";
        } else  if (strpos($line, 'First Quarter') !== false){
            echo "<img src='!f/FirstQuarter.jpg'>";
        } else  if (strpos($line, 'Waxing Gibbous') !== false){
            echo "<img src='!f/WaxingGibbous.jpg'>";
        } else  if (strpos($line, 'Full Moon') !== false){
            echo "<img src='!f/FullMoon.jpg'>";
        } else  if (strpos($line, 'Waning Gibbous') !== false){
            echo "<img src='!f/WaningGibbous.jpg'>";
        } else  if (strpos($line, 'Last Quarter') !== false){
            echo "<img src='!f/LastQuarter.jpg'>";
        } else  if (strpos($line, 'Waning Crescent') !== false){
            echo "<img src='!f/WaningCrescent.jpg'>";
        }
    }
?>
</body>
</html>

