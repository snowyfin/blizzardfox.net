<p>
    <?php 
    chdir('../');
    echo(shell_exec('git log --all --decorate --oneline --graph'));
?>
</p>