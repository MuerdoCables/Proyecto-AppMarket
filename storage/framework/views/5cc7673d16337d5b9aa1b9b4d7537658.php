

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('estilos'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/Index.scss']); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section class="row">
            <div class="col-12">
                <h2 class="page-header"><?php echo e($categoria->cat_nombre); ?></h2>
            </div>

            <?php $__currentLoopData = $apps[$categoria->cat_nombre]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-2 col-sm-4 col-6">
                    <a href="<?php echo e(route('apps.show', $app)); ?>">
                        <img class="icono_app" src="<?php echo e($app->app_icono); ?>" alt="">
                        <h3><?php echo e($app->app_nombre); ?></h3>
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <section class="d-flex">
                <div class="d-inline-block mx-auto">
                    <?php echo e($apps[$categoria->cat_nombre]->links('pagination::bootstrap-4')); ?>

                </div>
            </section>

        </section>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/home.blade.php ENDPATH**/ ?>