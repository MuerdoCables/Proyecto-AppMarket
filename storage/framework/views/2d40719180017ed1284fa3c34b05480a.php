

<?php $__env->startSection('title', 'Apps ' . $app->app_nombre); ?>

<?php $__env->startSection('estilos'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/Descargar.scss']); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido al app <?php echo e($app->app_nombre); ?></h1>
    <a href="<?php echo e(route('apps.index')); ?>">Volver a apps</a>
    <br>
    <a href="<?php echo e(route('apps.edit', $app)); ?>">Editar app</a>
    <p><strong>Categoría: <?php echo e($app->app_categoria); ?></strong></p>
    <p><?php echo e($app->app_descripcion); ?></p>

    <form action="<?php echo e(route('apps.destroy', $app)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Eliminar</button>
    </form>

    <section class="row justify-content-center my-3">
        <div class="col-lg-8 p-3">
            <article class="row">
                <div class="col-md-2 col-3"><img src="<?php echo e($app->app_icono); ?>" id="icono_app" class="card-img" alt="" /></div>
                <div class="col-md-7 col-5 d-flex flex-column justify-content-around" id="info_app">
                    <h2 class="d-inline m-0 fs-2"><?php echo e($app->app_nombre); ?></h2>
                    <span class=""><?php echo e($usuario->usu_username); ?></span>
                    <small class="text-muted"><?php echo e($app->app_version); ?></small>
                </div>
                <div class="col-md-3 col-4 d-flex align-items-center justify-content-center">
                    <button class="btn btn-primary w-75">Instalar</button>
                </div>
            </article>
        </div>
    </section>

    
    
    <!-- lista de comentarios -->
    <section class="row">
        <div class="col-12">
            <div class="text-center">
                <h2>Calificaciones y opiniones</h2>
            </div>                
    
            <div class="row justify-content-center my-5">
                <div class="col-lg-8">
                    <div class="list-group">
                        <div class="list-group-item py-3">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam
                                sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium
                                voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam
                                sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium
                                voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam
                                sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium
                                voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam
                                sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium
                                voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3">
                            <div class="pb-2">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-half"></i>
                            </div>
                            <h5 class="mb-1">A must-buy for every aspiring web dev</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error veniam
                                sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio commodi labore praesentium
                                voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/apps/show.blade.php ENDPATH**/ ?>