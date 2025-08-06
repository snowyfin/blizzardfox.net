<p>
    <?php 
    chdir('../');
    echo "<pre>" . shell_exec('git log --all --decorate --oneline --graph') . "</pre>";
?>
</p>