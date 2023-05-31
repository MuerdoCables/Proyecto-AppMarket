

<?php $__env->startSection('title', 'Valoraciones edit'); ?>

<?php $__env->startSection('content'); ?>
    <h1>En esta página podrás editar un valoración</h1>
    <form action="<?php echo e(route('valoraciones.update', $valoracion)); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

        

        <br>
        <br>
        <label>
            Puntuación:
            <br>
            <input type="text" name="val_puntuacion" value="<?php echo e(old('val_puntuacion', $valoracion->val_puntuacion)); ?>">
        </label>

        <?php $__errorArgs = ['val_puntuacion'];
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
            Texto:
            <br>
            <textarea name="val_texto" rows="5"><?php echo e(old('val_texto', $valoracion->val_texto)); ?></textarea>
        </label>

        <?php $__errorArgs = ['val_texto'];
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

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/valoraciones/edit.blade.php ENDPATH**/ ?>