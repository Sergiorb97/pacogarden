<p>
    <a href="ctrlVerTareas.php?pag=1"><<</a>
    <?php $x = Numpags(); for($i = 1;$i <= $x;$i++){?>
        <a href="ctrlVerTareas.php?pag=<?= $i ?>"><?= $i ?></a>
    <?php } ?>
    <a href="ctrlVerTareas.php?pag=<?= $x ?>">>></a>
</p>