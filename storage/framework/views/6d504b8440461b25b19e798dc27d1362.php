

<?php $__env->startSection('title', 'Usuarios create'); ?>

<?php $__env->startSection('content'); ?>
    <h1>En esta página podrás crear un usuario</h1>
    <form action="<?php echo e(route('usuarios.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <label>
            Nombre de usuario:
            <br>
            <input type="text" name="usu_username" value="<?php echo e(old('usu_username')); ?>">
        </label>

        <?php $__errorArgs = ['usu_username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <small>*<?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <br>
        <label>
            Email:
            <br>
            <input type="text" name="usu_email" value="<?php echo e(old('usu_email')); ?>">
        </label>

        <?php $__errorArgs = ['usu_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <small>*<?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <br>
        <label>
            Contraseña:
            <br>
            <input type="text" name="usu_password" value="<?php echo e(old('usu_password')); ?>">
        </label>

        <?php $__errorArgs = ['usu_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>
            <small>*<?php echo e($message); ?></small>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/usuarios/create.blade.php ENDPATH**/ ?>