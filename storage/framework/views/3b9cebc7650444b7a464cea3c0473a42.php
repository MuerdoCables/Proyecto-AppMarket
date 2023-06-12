

<?php $__env->startSection('title', 'Aplicaciones ' . $aplicacion->app_nombre); ?>

<?php $__env->startSection('estilos'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/descargar.scss']); ?>

    <!--página que permite que se vean los iconos https://cdnjs.com/libraries/font-awesome/-->
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" 
    />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <?php if($aplicacion->app_usu_id == Auth::user()->id): ?>
            <section class="row justify-content-center my-3 mx-1">
                <div class="col-lg-8 p-3 d-flex justify-content-between" id="edit_app">
                    <a href="<?php echo e(route('aplicaciones.edit', $aplicacion)); ?>">Editar aplicación</a>

                    <form action="<?php echo e(route('aplicaciones.destroy', $aplicacion)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <a onclick="event.preventDefault(); this.closest('form').submit();" type="submit">Eliminar</a>
                    </form>
                </div>
            </section>
        <?php endif; ?>
    <?php endif; ?>

    
    <section class="row justify-content-center my-3 mx-1">
        <article class="col-lg-8 p-3">
            <div class="row">
                <div class="col-md-2 col-sm-3 col-4">
                    <img src="<?php echo e($aplicacion->app_icono); ?>" id="icono_app" class="card-img icono_app" alt="" />
                </div>
                <div class="col-md-7 col-sm-5 col-7 d-flex flex-column justify-content-around" id="info_app">
                    <h2 class="d-inline m-0 fs-2"><?php echo e($aplicacion->app_nombre); ?></h2>
                    <a href="<?php echo e(route('users.show', $user->id)); ?>"><?php echo e($user->username); ?></a>
                    <small class="text-muted">Versión: <?php echo e($aplicacion->app_version); ?></small>
                </div>
                <div class="col-md-3 col-sm-4 col-12 d-flex flex-column align-items-center justify-content-around">
                    <a class="btn btn-primary w-100 my-sm-auto my-3" href="<?php echo e($aplicacion->app_ruta); ?>" role="button">Instalar</a>
                    <a class="btn btn-primary w-100 my-sm-auto my-2" href="<?php echo e($aplicacion->app_enlace); ?>" role="button">Sitio web</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <strong class="col-sm-6 col-12 mb-2">Categoría: <?php echo e($aplicacion->app_categoria); ?></strong>
                <small class="col-sm-6 col-12 text-muted text-sm-end mb-2">Última actualización: <?php echo e($aplicacion->app_updated_at->format('d-m-Y')); ?></small>
                <p class="col-12"><?php echo e($aplicacion->app_descripcion); ?></p>
            </div>
        </article>
    </section>

    
    <?php if(auth()->guard()->check()): ?>
        <section class="row">
            <div class="col-12">
                <div class="text-center">
                    <h2>Valora esta aplicación</h2>
                </div>
                <div class="row justify-content-center my-5">
                    <div class="col-lg-8">
                        <div class="card text-center">
                            <div class="card-body">
                                <?php if(empty($valoracion)): ?>
                                    <form action="<?php echo e(route('valoraciones.store')); ?>" method="POST">

                                        <?php echo csrf_field(); ?>
                                
                                        <input type="hidden" name="val_usu_id" value="<?php echo e(Auth::user()->id); ?>">
                                        <?php $__errorArgs = ['val_usu_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small>*<?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                
                                        <input type="hidden" name="val_app_id" value="<?php echo e($aplicacion->app_id); ?>">
                                        <?php $__errorArgs = ['val_app_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small>*<?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                
                                        <input type="hidden" name="val_puntuacion" id="val_puntuacion" value="<?php echo e(old('val_puntuacion')); ?>">
                                        <div id="puntuacion" class="w-75 d-flex flex-row align-items-center justify-content-around mx-auto">
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                        </div>
                                
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
                                        <textarea name="val_texto" rows="5" class="w-100 rounded" placeholder="Escribe tu experiencia (opcional)"><?php echo e(old('val_texto')); ?></textarea>
                                
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
                                        <button class="btn btn-primary" type="submit">Crear reseña</button>
                                    </form>
                                <?php else: ?>
                                    <form action="<?php echo e(route('valoraciones.update', $valoracion->val_id)); ?>" method="POST">

                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('put'); ?>
                                        <?php $__errorArgs = ['val_usu_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small>*<?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <?php $__errorArgs = ['val_app_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small>*<?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    
                                        <input type="hidden" name="val_puntuacion" id="val_puntuacion" value="<?php echo e(old('val_puntuacion', $valoracion->val_puntuacion)); ?>">
                                        <div id="puntuacion" class="w-75 d-flex flex-row align-items-center justify-content-around mx-auto">
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                            <i class="fa-solid fa-star fa-2x"></i>
                                        </div>

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
                                        <textarea name="val_texto" rows="5" class="w-100 rounded" placeholder="Escribe tu experiencia (opcional)"><?php echo e(old('val_texto', $valoracion->val_texto)); ?></textarea>
                                    
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
                                        <button class="btn btn-primary w-50" type="submit">Actualizar reseña</button>
                                    </form>

                                    <form action="<?php echo e(route('valoraciones.destroy', $valoracion->val_id)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button class="btn btn-primary w-50 my-3" type="submit">Eliminar</button>
                                    </form>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
    
    <section class="row">
        <div class="col-12">

            <div class="text-center">
                <h2>Reseñas y comentarios</h2>
            </div>                
    
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="list-group">
                        <?php $__currentLoopData = $valoraciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $calificacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="list-group-item py-3 mb-0">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="<?php echo e(route('users.show', $calificacion->val_usu_id)); ?>">
                                        <img src="<?php echo e($calificacion->foto); ?>" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                                        <b class="ms-2"><?php echo e($calificacion->username); ?></b>
                                    </a>
                                    <div class="pb-2 estrellas text-warning">
                                        <?php echo e($calificacion->val_puntuacion); ?>

                                    </div>
                                </div>
                                <p class="mb-1"><?php echo e($calificacion->val_texto); ?></p>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <a href="<?php echo e(route('valoraciones.show', $calificacion->val_id)); ?>" class="">Ver comentarios</a>
                                    <small><?php echo e($calificacion->val_updated_at->format('d-m-Y h:m:s')); ?></small>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="d-flex mt-3 justify-content-end align-items-center">
                        <div class="d-inline-block">
                            <?php echo e($valoraciones->links('pagination::bootstrap-4')); ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/estrellas.js']); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/aplicaciones/show.blade.php ENDPATH**/ ?>