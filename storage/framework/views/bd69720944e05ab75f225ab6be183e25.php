

<?php $__env->startSection('title', 'Roles ' . $rol->rol_nombre); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al rol <?php echo e($rol->rol_nombre); ?></h1>
    <a href="<?php echo e(route('roles.index')); ?>">Volver a roles</a>
    <br>
    <a href="<?php echo e(route('roles.edit', $rol)); ?>">Editar rol</a>
    <p><strong>Categoría: <?php echo e($rol->rol_nombre); ?></strong></p>
    <p><?php echo e($rol->rol_descripcion); ?></p>

    <form action="<?php echo e(route('roles.destroy', $rol)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/roles/show.blade.php ENDPATH**/ ?>