

<?php $__env->startSection('title', 'Comentarios create'); ?>

<?php $__env->startSection('content'); ?>
    <h1>En esta página podrás crear un comentario</h1>
    <form action="<?php echo e(route('comentarios.store')); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <label>
            Valoración:
            <br>
            <input type="text" name="com_val_id" value="<?php echo e(old('com_val_id')); ?>">
        </label>

        <?php $__errorArgs = ['com_val_id'];
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
            Usuario:
            <br>
            <input type="text" name="com_usu_id" value="<?php echo e(old('com_usu_id')); ?>">
        </label>

        <?php $__errorArgs = ['com_usu_id'];
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
            <textarea name="com_texto" rows="5"><?php echo e(old('com_texto')); ?></textarea>
        </label>

        <?php $__errorArgs = ['com_texto'];
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

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/comentarios/create.blade.php ENDPATH**/ ?>