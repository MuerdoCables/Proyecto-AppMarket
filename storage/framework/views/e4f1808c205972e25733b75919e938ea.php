

<?php $__env->startSection('title', 'Roles edit'); ?>

<?php $__env->startSection('content'); ?>
    <h1>En esta página podrás editar un rol</h1>
    <form action="<?php echo e(route('roles.update', $rol)); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

       <label>
            Código:
            <br>
            <input type="text" name="rol_id" value="<?php echo e(old('rol_id', $rol->rol_id)); ?>">
        </label>

        <?php $__errorArgs = ['rol_id'];
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
            Nombre del rol:
            <br>
            <input type="text" name="rol_nombre" value="<?php echo e(old('rol_nombre', $rol->rol_nombre)); ?>">
        </label>

        <?php $__errorArgs = ['rol_nombre'];
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
            Descripción:
            <br>
            <input type="text" name="rol_descripcion" value="<?php echo e(old('rol_descripcion', $rol->rol_descripcion)); ?>">
        </label>

        <?php $__errorArgs = ['rol_descripcion'];
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
        <button type="submit">Actualizar formulario</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/roles/edit.blade.php ENDPATH**/ ?>