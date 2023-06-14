

<?php $__env->startSection('title', 'Aplicaciones edit'); ?>

<?php $__env->startSection('content'); ?>
    <section class="row">
        <div class="col-12">
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="card text-center">
                        <div class="card-body">
                            <form action="<?php echo e(route('aplicaciones.update', $aplicacion)); ?>" method="POST" enctype="multipart/form-data">

                                <?php echo csrf_field(); ?>

                                <input type="hidden" name="app_usu_id" value="<?php echo e(Auth::user()->id); ?>">
                                <?php $__errorArgs = ['app_usu_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small>*<?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <label>
                                    Nombre de la aplicación:
                                    <br>
                                    <input type="text" name="app_nombre" value="<?php echo e(old('app_nombre', $aplicacion->app_nombre)); ?>">
                                </label>

                                <?php $__errorArgs = ['app_nombre'];
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
                                    Logotipo:
                                    <br>
                                    <img id="imagen" src="<?php echo e('/storage/app_iconos/' . old('icono', $aplicacion->app_icono)); ?>" alt="" width="50" height="50">
                                    <input type="file" name="icono" id="foto" value="<?php echo e(old('icono', $aplicacion->app_icono)); ?>">
                                </label>

                                <?php $__errorArgs = ['app_icono'];
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
                                    <textarea name="app_descripcion" rows="5"><?php echo e(old('app_descripcion', $aplicacion->app_descripcion)); ?></textarea>
                                </label>

                                <?php $__errorArgs = ['app_descripcion'];
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
                                    Versión:
                                    <br>
                                    <input type="text" name="app_version" value="<?php echo e(old('app_version', $aplicacion->app_version)); ?>">
                                </label>

                                <?php $__errorArgs = ['app_version'];
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
                                    Categoría:
                                    <br>
                                    <select name="app_categoria" value="<?php echo e(old('app_categoria', $aplicacion->app_categoria)); ?>">
                                        <?php $__currentLoopData = $G_CategoriasApps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($categoria->cat_nombre); ?>"><?php echo e($categoria->cat_nombre); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </label>

                                <?php $__errorArgs = ['app_categoria'];
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
                                    Precio:
                                    <br>
                                    <input type="text" name="app_precio" value="<?php echo e(old('app_precio', $aplicacion->app_precio)); ?>">
                                </label>

                                <?php $__errorArgs = ['app_precio'];
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
                                    Aplicación:
                                    <br>
                                    
                                    <input type="file" name="aplicacion">
                                </label>

                                <?php $__errorArgs = ['app_ruta'];
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
                                    Sitio web:
                                    <br>
                                    <input type="text" name="app_enlace" value="<?php echo e(old('app_enlace', $aplicacion->app_enlace)); ?>">
                                </label>

                                <?php $__errorArgs = ['app_enlace'];
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
                                <button class="btn btn-primary" type="submit">Actualizar formulario</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/imagen.js']); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/aplicaciones/edit.blade.php ENDPATH**/ ?>