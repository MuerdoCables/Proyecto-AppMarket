

<?php $__env->startSection('title', 'Comentarios ' . $comentario); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al comentario <?php echo e($comentario->com_id); ?></h1>
    <a href="<?php echo e(route('comentarios.index')); ?>">Volver a comentarios</a>
    <br>
    <a href="<?php echo e(route('comentarios.edit', $comentario)); ?>">Editar comentario</a>
    <p><strong>Categoría: <?php echo e($comentario->com_usu_id); ?></strong></p>
    <p><?php echo e($comentario->com_texto); ?></p>

    <form action="<?php echo e(route('comentarios.destroy', $comentario)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/comentarios/show.blade.php ENDPATH**/ ?>