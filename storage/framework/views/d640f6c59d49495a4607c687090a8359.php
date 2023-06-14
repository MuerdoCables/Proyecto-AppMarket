

<?php $__env->startSection('title', 'Valoración ' . $user->username); ?>

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
    <section class="row justify-content-center mt-3 mx-1">
        <div class="col-lg-8 p-3 d-flex justify-content-between" id="edit_app">
            <a href="<?php echo e(route('aplicaciones.show', $valoracion->val_app_id)); ?>">Volver</a>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="row justify-content-center mt-1 mb-2">
                <div class="col-lg-8">
                    <div class="card text-center">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-2">  
                                <a class="ps-2" href="<?php echo e(route('users.show', $user->id)); ?>">
                                    <img src="<?php echo e('/storage/perfiles/' . $user->foto); ?>" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                                    <b class="ms-2"><?php echo e($user->username); ?></b>
                                </a>

                                <p class="d-inline"><?php echo e($valoracion->val_updated_at->format('d-m-Y h:m:s')); ?></p>
                            </div>

                            <input type="hidden" name="puntos" id="puntos" value="<?php echo e($valoracion->val_puntuacion); ?>">
                            <div id="puntuacion" class="w-75 d-flex flex-row align-items-center justify-content-around mx-auto">
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                                <i class="fa-solid fa-star fa-2x"></i>
                            </div>
                            <hr>
                            <p class="text-start mx-auto w-75"><?php echo e($valoracion->val_texto); ?></p>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row">
        <div class="col-12">
            <div class="row justify-content-center my-2">
                <div class="col-lg-8">
                    <div class="list-group">
                        <?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="list-group-item py-3 mb-0">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <a href="<?php echo e(route('users.show', $comentario->com_usu_id)); ?>">
                                        <img src="<?php echo e('/storage/perfiles/' . $comentario->foto); ?>" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                                        <b class="ms-2"><?php echo e($comentario->username); ?></b>
                                    </a>
                                    <div class="pb-2">
                                        <?php echo e($comentario->com_updated_at->format('d-m-Y h:m:s')); ?>

                                    </div>
                                </div>
                                <p class="mb-1 overflow-hidden"><?php echo e($comentario->com_texto); ?></p>
                                
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="d-flex mt-3 justify-content-end align-items-center">
                        <div class="d-inline-block">
                            <?php echo e($comentarios->links('pagination::bootstrap-4')); ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php if(auth()->guard()->check()): ?>
        <section class="row">
            <div class="col-12">
                <div class="row justify-content-center my-1">
                    <div class="col-lg-8">
                        <div class="card text-center">
                            <div class="card-body">
                                <form action="<?php echo e(route('comentarios.store')); ?>" method="POST">

                                    <?php echo csrf_field(); ?>
                            
                                    <input type="hidden" name="com_usu_id" value="<?php echo e(Auth::user()->id); ?>">
                                    <?php $__errorArgs = ['com_usu_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small>*<?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            
                                    <input type="hidden" name="com_val_id" value="<?php echo e($valoracion->val_id); ?>">
                                    <?php $__errorArgs = ['com_val_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small>*<?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                
                                    <br>
                                    <br>
                                    <textarea name="com_texto" rows="5" class="w-100 rounded" placeholder="Escribir comentario..."><?php echo e(old('com_texto')); ?></textarea>
                                
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
                                    <button class="btn btn-primary" type="submit">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/estrellas2.js']); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/valoraciones/show.blade.php ENDPATH**/ ?>