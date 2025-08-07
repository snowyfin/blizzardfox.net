<?php
    chdir('/');
    echo "<pre>" . shell_exec('tree ./') . "</pre>";
?>