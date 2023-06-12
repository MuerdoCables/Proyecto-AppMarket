

<!-- Nav -->
<nav class="navbar sticky-top navbar-expand-xl navbar-dark bg-dark">
    <div class="container-fluid">

        <button class="navbar-toggler me-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand me-sm-1 mx-auto ms-sm-0" href="<?php echo e(route('home')); ?>">
            <img src="/imgs/AppMarketLogo.png" id="logo" alt="">
            <h1>AppMarket</h1>
        </a>
        
        <?php if(auth()->guard()->check()): ?>
            <div class="nav-item dropdown order-xl-1 ms-2">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="<?php echo e(route('users.show', Auth::user())); ?>" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="<?php echo e(Auth::user()->foto); ?>" class="rounded-circle img-fluid foto_perfil" alt="Imagen de perfil">
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div class="order-xl-1 ms-2 d-none d-sm-inline-block">
                <a href="<?php echo e(route('login')); ?>" class="btn btn-primary btn-sm" role="button">Iniciar sesión</a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary btn-sm" role="button">Regístrate</a>
            </div>
        <?php endif; ?>
        
        <div class="collapse navbar-collapse order-xl-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">

                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(route('home')); ?>">Inicio</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo e(request()->routeIs('categorias.*') ? 'active' : ''); ?>" href="#" id="navbarDropdown" role="button"
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
                
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('aplicaciones.index') ? 'active' : ''); ?>" href="<?php echo e(route('aplicaciones.index')); ?>">Más recientes</a></li>
                <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('aplicaciones.create') ? 'active' : ''); ?>" href="<?php echo e(route('aplicaciones.create')); ?>">Nueva app</a></li>
                <hr class="text-secondary">
                <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item d-inline-block d-sm-none"><a class="nav-link" href="<?php echo e(route('login')); ?>">Iniciar sesión</a></li>
                    <li class="nav-item d-inline-block d-sm-none"><a class="nav-link" href="<?php echo e(route('register')); ?>">Regístrate</a></li>
                    <hr class="text-secondary d-inline-block d-sm-none">
                <?php endif; ?>

            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-dark border border-light-subtle" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

    </div>
</nav>
<!-- Fin Nav --><?php /**PATH D:\Apps\Xampp\htdocs\proyecto\resources\views/layouts/partials/header.blade.php ENDPATH**/ ?>