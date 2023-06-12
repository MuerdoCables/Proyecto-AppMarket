

<?php $__env->startSection('title', 'Usuarios ' . $user->username); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al usuario <?php echo e($user->username); ?></h1>
    <a href="<?php echo e(route('users.index')); ?>">Volver a usuarios</a>
    <br>
    <a href="<?php echo e(route('users.edit', $user)); ?>">Editar usuario</a>
    <p><strong>Categoría: <?php echo e($user->email); ?></strong></p>
    <p><?php echo e($user->nombre); ?></p>
    <img src="<?php echo e($user->foto); ?>" />

    <form action="<?php echo e(route('users.destroy', $user)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/users/show.blade.php ENDPATH**/ ?>