<link rel="stylesheet" href="../../Assets/css/Paginacion.css">
<p class="containerP">
        <a href="ctrlVerTareas.php?pag=1" class="anim"><<</a>
        <?php $x = Numpags(); for($i = 1;$i <= $x;$i++){?>
            <a href="ctrlVerTareas.php?pag=<?= $i ?>" class="anim"><?= $i ?></a>
        <?php } ?>
        <a href="ctrlVerTareas.php?pag=<?= $x ?>" class="anim">>></a>
</p>