

<?php $__env->startSection('title', 'Aplicaciones'); ?>

<?php $__env->startSection('estilos'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/index.scss']); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2>Todas las categorías</h2>
    <section class="row">
        <?php $__currentLoopData = $aplicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aplicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-2 col-sm-4 col-6">
                <a href="<?php echo e(route('aplicaciones.show', $aplicacion)); ?>">
                    <img class="icono_app" src="<?php echo e($aplicacion->app_icono); ?>" alt="">
                    <h3><?php echo e($aplicacion->app_nombre); ?></h3>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

    <section class="d-flex">
        <div class="d-inline-block mx-auto">
            <?php echo e($aplicaciones->links('pagination::bootstrap-4')); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/aplicaciones/index.blade.php ENDPATH**/ ?>