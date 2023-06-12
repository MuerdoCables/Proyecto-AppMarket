

<?php $__env->startSection('title', 'Valoraciones create'); ?>

<?php $__env->startSection('content'); ?>
    <h1>En esta página podrás crear una valoración</h1>
    <form action="<?php echo e(route('valoraciones.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <input type="hidden" name="val_usu_id" value="<?php echo e(Auth::user()->id); ?>">
        <?php $__errorArgs = ['val_usu_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small>*<?php echo e($message); ?></small>
            <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <input type="hidden" name="val_app_id" value="<?php echo e($aplicacion->app_id); ?>">
        <?php $__errorArgs = ['val_app_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <small>*<?php echo e($message); ?></small>
            <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <label>
            Puntuación:
            <br>
            <input type="text" name="val_puntuacion" value="<?php echo e(old('val_puntuacion')); ?>">
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
            <textarea name="val_texto" rows="5"><?php echo e(old('val_texto')); ?></textarea>
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
        <button type="submit">Crear reseña</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/valoraciones/create.blade.php ENDPATH**/ ?>