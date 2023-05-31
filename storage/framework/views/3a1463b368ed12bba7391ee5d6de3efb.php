

<?php $__env->startSection('title', 'Categorias'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la página categorías</h1>
    <a href="<?php echo e(route('categorias.create')); ?>">Crear categoría</a>
    <ul>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('categorias.show', $categoria)); ?>"><?php echo e($categoria->cat_nombre); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($categorias->links('pagination::bootstrap-4')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/categorias/index.blade.php ENDPATH**/ ?>