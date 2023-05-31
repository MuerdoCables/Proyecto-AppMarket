

<?php $__env->startSection('title', 'Usuarios edit'); ?>

<?php $__env->startSection('content'); ?>
    <h1>En esta página podrás editar un usuario</h1>
    <form action="<?php echo e(route('usuarios.update', $usuario)); ?>" method="POST">

        <?php echo csrf_field(); ?>

        <?php echo method_field('put'); ?>

        <label>
            Nombre de usuario:
            <br>
            <input type="text" name="usu_username" value="<?php echo e(old('usu_username', $usuario->usu_username)); ?>">
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
            <input type="text" name="usu_email" value="<?php echo e(old('usu_email', $usuario->usu_email)); ?>">
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
            <input type="text" name="usu_password" value="<?php echo e(old('usu_password', $usuario->usu_password)); ?>">
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
        <label>
            Nombre:
            <br>
            <input type="text" name="usu_nombre" value="<?php echo e(old('usu_nombre', $usuario->usu_nombre)); ?>">
        </label>

        <?php $__errorArgs = ['usu_nombre'];
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
            Apellidos:
            <br>
            <input type="text" name="usu_apellidos" value="<?php echo e(old('usu_apellidos', $usuario->usu_apellidos)); ?>">
        </label>

        <?php $__errorArgs = ['usu_apellidos'];
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
            <textarea name="usu_descripcion" rows="5"><?php echo e(old('usu_descripcion', $usuario->usu_descripcion)); ?></textarea>
        </label>

        <?php $__errorArgs = ['usu_descripcion'];
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
            Foto del perfil:
            <br>
            <input type="text" name="usu_foto" value="<?php echo e(old('usu_foto', $usuario->usu_foto)); ?>">
        </label>

        <?php $__errorArgs = ['usu_foto'];
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
            Fecha de nacimiento:
            <br>
            <input type="text" name="usu_fenacimiento" value="<?php echo e(old('usu_fenacimiento', $usuario->usu_fenacimiento)); ?>">
        </label>

        <?php $__errorArgs = ['usu_fenacimiento'];
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
            Teléfono:
            <br>
            <input type="text" name="usu_telefono" value="<?php echo e(old('usu_telefono', $usuario->usu_telefono)); ?>">
        </label>

        <?php $__errorArgs = ['usu_telefono'];
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
            País:
            <br>
            <input type="text" name="usu_pais" value="<?php echo e(old('usu_pais', $usuario->usu_pais)); ?>">
        </label>

        <?php $__errorArgs = ['usu_pais'];
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
            Rol:
            <br>
            <input type="text" name="usu_rol_id" value="<?php echo e(old('usu_rol_id', $usuario->usu_rol_id)); ?>">
        </label>

        <?php $__errorArgs = ['usu_rol_id'];
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
            Banear:
            <br>
            <input type="text" name="usu_ban" value="<?php echo e(old('usu_ban', $usuario->usu_ban)); ?>">
        </label>

        <?php $__errorArgs = ['usu_ban'];
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

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>