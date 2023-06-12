<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    
    <!-- favicon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">-->

    <!-- estilos -->
    <?php echo app('Illuminate\Foundation\Vite')([
        'resources/sass/main.scss',
        'resources/sass/cabecera.scss',
    ]); ?>
    <?php echo $__env->yieldContent('estilos'); ?>

</head>

<body class="bg-light">
    <!-- header & nav -->
    <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!-- main -->
    <main class="container-xl">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- footer -->
    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- script -->
    <?php echo $__env->yieldContent('scripts'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/layouts/plantilla.blade.php ENDPATH**/ ?>