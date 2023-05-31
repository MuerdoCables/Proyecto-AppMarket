

<?php $__env->startSection('title', 'Apps'); ?>

<?php $__env->startSection('estilos'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/Index.scss']); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main class="container-xl">
        <h2><?php echo e($categoria); ?></h2>
        <section class="row">
            <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-2 col-sm-4 col-6">
                    <a href="<?php echo e(route('apps.show', $app)); ?>">
                        <img src="<?php echo e($app->app_icono); ?>" alt="">
                        <h3><?php echo e($app->app_nombre); ?></h3>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </section>

        <section class="d-flex">
            <div class="d-inline-block mx-auto">
                <?php echo e($apps->links('pagination::bootstrap-4')); ?>

            </div>
        </section>
        </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/apps/indexCategorias.blade.php ENDPATH**/ ?>