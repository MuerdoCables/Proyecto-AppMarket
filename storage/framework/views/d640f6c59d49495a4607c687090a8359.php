

<?php $__env->startSection('title', 'Valoraciones ' . $valoracion->val_usu_id); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al valoracion <?php echo e($valoracion->val_puntuacion); ?></h1>
    <a href="<?php echo e(route('valoraciones.index')); ?>">Volver a valoraciones</a>
    <br>
    <a href="<?php echo e(route('valoraciones.edit', $valoracion)); ?>">Editar valoracion</a>
    <p><strong>Valoración: <?php echo e($valoracion->val_puntuacion); ?></strong></p>
    <p><?php echo e($valoracion->val_texto); ?></p>

    <form action="<?php echo e(route('valoraciones.destroy', $valoracion)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/valoraciones/show.blade.php ENDPATH**/ ?>