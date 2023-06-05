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
        'resources/sass/Main.scss',
        'resources/sass/FormularioSesion.scss',
    ]); ?>
</head>

<body class="container">
    <!-- main -->
    <main class="row">
        <div class="col-12">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items row">
                        <h1><a href="<?php echo e(route('home')); ?>"><img src="/imgs/AppMarketLogo.png" width="42" height="34" alt=""> AppMarket</a></h1>
                        <p><?php echo $__env->yieldContent('tipoFormulario'); ?></p>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- script -->
    <?php echo $__env->yieldContent('scripts'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/layouts/sesion.blade.php ENDPATH**/ ?>