

<?php $__env->startSection('title', 'Usuarios ' . $usuario->usu_username); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al usuario <?php echo e($usuario->usu_username); ?></h1>
    <a href="<?php echo e(route('usuarios.index')); ?>">Volver a usuarios</a>
    <br>
    <a href="<?php echo e(route('usuarios.edit', $usuario)); ?>">Editar usuario</a>
    <p><strong>Categoría: <?php echo e($usuario->usu_email); ?></strong></p>
    <p><?php echo e($usuario->usu_nombre); ?></p>
    <img src="<?php echo e($usuario->usu_foto); ?>" />

    <form action="<?php echo e(route('usuarios.destroy', $usuario)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/usuarios/show.blade.php ENDPATH**/ ?>