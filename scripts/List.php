<?php
    chdir('../');
    echo "<pre>" . shell_exec('ls -lR') . "</pre>";
?>