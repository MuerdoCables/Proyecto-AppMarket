

<?php $__env->startSection('title', 'Roles'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la página roles</h1>
    <a href="<?php echo e(route('roles.create')); ?>">Crear rol</a>
    <ul>
        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="<?php echo e(route('roles.show', $rol)); ?>"><?php echo e($rol->rol_nombre); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($roles->links('pagination::bootstrap-4')); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/roles/index.blade.php ENDPATH**/ ?>