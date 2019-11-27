<p>
    <?php $x = Numpags(); for($i = 1;$i <= $x;$i++){?>
        <a href="ctrlVerTareas.php?pag=<?= $i ?>"><?= $i ?></a>
    <?php } ?>
</p>