

<?php $__env->startSection('title', 'Valoraciones'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la página valoraciones</h1>
    <a href="<?php echo e(route('valoraciones.create')); ?>">Crear valoracion</a>
    <ul>
        <?php $__currentLoopData = $valoraciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valoracion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('valoraciones.show', $valoracion)); ?>"><?php echo e($valoracion->val_puntuacion); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($valoraciones->links('pagination::bootstrap-4')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/valoraciones/index.blade.php ENDPATH**/ ?>