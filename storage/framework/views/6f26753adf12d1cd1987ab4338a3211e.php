<header>
    <h1>Proyecto</h1>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a></li>
            <li><a href="<?php echo e(route('apps.index')); ?>" class="<?php echo e(request()->routeIs('apps.*') ? 'active' : ''); ?>">Apps</a></li>
            <li><a href="<?php echo e(route('categorias.index')); ?>" class="<?php echo e(request()->routeIs('categorias.*') ? 'active' : ''); ?>">Categorías</a></li>
            <li><a href="<?php echo e(route('comentarios.index')); ?>" class="<?php echo e(request()->routeIs('comentarios.*') ? 'active' : ''); ?>">Comentarios</a></li>
            <li><a href="<?php echo e(route('roles.index')); ?>" class="<?php echo e(request()->routeIs('roles.*') ? 'active' : ''); ?>">Roles</a></li>
            <li><a href="<?php echo e(route('usuarios.index')); ?>" class="<?php echo e(request()->routeIs('usuarios.*') ? 'active' : ''); ?>">Usuarios</a></li>
            <li><a href="<?php echo e(route('valoraciones.index')); ?>" class="<?php echo e(request()->routeIs('valoraciones.*') ? 'active' : ''); ?>">Valoraciones</a></li>
        </ul>
    </nav>
</header>

<!-- Nav -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">

        <button class="navbar-toggler me-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand me-sm-1 mx-auto ms-sm-0" href="<?php echo e(route('home')); ?>">
            <img src="imgs/bootstrap.png" width="42" height="34" alt="">
            <h1>DIW Store</h1>
        </a>

        <div class="order-lg-1 ms-2 d-none d-sm-inline-block">
            <a href="IniciarSesion.html"><button class="btn btn-primary btn-sm">Iniciar sesión</button></a>
            <a href="Registrar.html"><button class="btn btn-primary btn-sm">Regístrate</button></a>
        </div>
        
        <div class="collapse navbar-collapse order-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Inicio</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php $__currentLoopData = $G_CategoriasApps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <?php if($categoria->cat_nombre == 'Otros'): ?>
                                    <li><hr class="dropdown-divider"></li>
                                <?php endif; ?>
                                <a class="dropdown-item" href="<?php echo e(route('categorias.show', $categoria)); ?>">
                                    <?php echo e($categoria->cat_nombre); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('apps.index')); ?>">Mostrar todo</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('apps.create')); ?>">Crear app</a></li>
                <hr>
                <li class="nav-item d-inline-block d-sm-none"><a class="nav-link" href="IniciarSesion.html">Iniciar sesión</a></li>
                <li class="nav-item d-inline-block d-sm-none"><a class="nav-link" href="Registrar.html">Regístrate</a></li>
                <hr class="d-inline-block d-sm-none">

            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>

    </div>
</nav>
<!-- Fin Nav --><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>