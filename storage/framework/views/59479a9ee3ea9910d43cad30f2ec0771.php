<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
    <link rel="stylesheet" href="css/FormularioSesion.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>

<body class="container">
    <div class="row">
        <div class="col-12">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items row">
                        <h1><a href="Index.html"><img src="imgs/bootstrap.png" width="42" height="34" alt=""> Diw Store</a></h1>
                        <p>Inicie sesión</p>
                        <form class="requires-validation" action="<?php echo e(route('login.authenticate')); ?>" method="POST">

                            <?php echo csrf_field(); ?>
                            
                            <div class="col-12">
                                <input class="form-control" type="email" name="usu_email" value="<?php echo e(old('usu_email')); ?>" placeholder="Correo electrónico" required>
                            </div>

                            <div class="col-12">
                                <input class="form-control" type="password" name="usu_password" value="<?php echo e(old('usu_password')); ?>" placeholder="Contraseña" required>
                            </div>

                            <br>
                            <div class="text-center">
                                <p class="text-center"><a href="#">¿Has olvidado la contraseña?</a></p>
                            </div>

                            <div class="form-button mt-4 text-center">
                                <button id="submit" type="submit" class="btn btn-primary">Continuar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/login.blade.php ENDPATH**/ ?>