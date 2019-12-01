<form>
    <p>¿ Realmente deseas eliminar la tarea con id: <?= $id ?>?</p>
    <p><a href="../controller/ctrlEliminarTarea.php?opc=si&id=<?= $id ?>">Si</a>    <a href="../controller/ctrlEliminarTarea.php?opc=no">No</a></p>
</form>