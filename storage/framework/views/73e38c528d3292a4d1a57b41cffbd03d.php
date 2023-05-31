

<?php $__env->startSection('title', 'Comentarios'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la página comentarios</h1>
    <a href="<?php echo e(route('comentarios.create')); ?>">Crear comentario</a>
    <ul>
        <?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('comentarios.show', $comentario)); ?>"><?php echo e($comentario->com_texto); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($comentarios->links('pagination::bootstrap-4')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/comentarios/index.blade.php ENDPATH**/ ?>