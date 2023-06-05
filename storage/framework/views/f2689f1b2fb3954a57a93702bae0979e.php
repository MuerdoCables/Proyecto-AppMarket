<?php $__env->startSection('title', 'Inicio de sesión'); ?>

<?php $__env->startSection('tipoFormulario', 'Inicie sesión'); ?>

<?php $__env->startSection('content'); ?>
    <form class="requires-validation" action="<?php echo e(route('login')); ?>" method="POST">

        <?php echo csrf_field(); ?>
                                    
        <div class="col-12">
            <input class="form-control" type="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Correo electrónico" required autofocus>

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger" role="alert">
                    <strong>* <?php echo e($message); ?></strong>
                </small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="col-12">
            <input class="form-control" type="password" name="password" value="<?php echo e(old('password')); ?>" placeholder="Contraseña" required>

            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger" role="alert">
                    <strong>* <?php echo e($message); ?></strong>
                </small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        

        <br>
        <div class="text-center">
            <p class="text-center"><a href="<?php echo e(route('password.request')); ?>">¿Has olvidado la contraseña?</a></p>
        </div>

        <div class="form-button mt-4 text-center">
            <button id="submit" type="submit" class="btn btn-primary">Continuar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/auth/login.blade.php ENDPATH**/ ?>