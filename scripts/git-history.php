<?php 
    chdir('/var/www/test');
    echo(exec('git log --all --decorate --oneline --graph'));
?>