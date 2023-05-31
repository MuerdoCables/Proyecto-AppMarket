

<?php $__env->startSection('title', 'Categorias edit'); ?>

<?php $__env->startSection('content'); ?>
    <h1>En esta página podrás editar un categoría</h1>
    <form action="<?php echo e(route('categorias.update', $categoria)); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

       <label>
            Categoría:
            <br>
            <input type="text" name="cat_nombre" value="<?php echo e(old('cat_nombre', $categoria->cat_nombre)); ?>">
        </label>

        <?php $__errorArgs = ['cat_nombre'];
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

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/categorias/edit.blade.php ENDPATH**/ ?>