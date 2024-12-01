<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> </title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(Vite::asset('resources/images/favicon32.png')); ?>">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css"
        integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <?php echo $__env->yieldPushContent('head'); ?>
</head>

<body>
    <div class="flex min-h-screen">
        <!-- Menu Sidebar -->
        <div class="no-print h-full min-h-screen">
            <aside class="w-64 h-full min-h-screen border-blue-200 blue-bg flex-shrink-0 hidden md:flex flex-col">
                <nav class="flex flex-col gap-4 p-4 h-full min-h-screen">
                    <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
                    <ul class="content-between space-y-2">
                        <!-- Mission Menu -->
                        <li>
                            
                            <button type="button"
                                class="flex items-center mx-2 p-2 w-full text-2xl font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                style="width: -webkit-fill-available;" aria-controls="dropdown-missions"
                                data-collapse-toggle="dropdown-missions">
                                <span class="flex-1 mx-2 text-left font-medium text-white"
                                    sidebar-toggle-item><?php echo e(__('Missions')); ?></span>
                                
                            </button>
                            
                            <ul id="dropdown-missions-" class="py-2 space-y-2 mx-2">
                                <li>
                                    <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                        href="<?php echo e(route('mission_orders.create')); ?>">
                                        <span class="mx-2 font-medium"><?php echo e(__('Nouvelle demande')); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                        href="<?php echo e(route('mission_orders.index')); ?>">
                                        <span class="mx-2 font-medium"><?php echo e(__('Ordres de missions')); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                        href="<?php echo e(route('mission_orders.m_index')); ?>">
                                        <span class="mx-2 font-medium"><?php echo e(__('Mémoires de Frais')); ?></span>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                        <hr />
                        <!-- Tournees Menu -->
                        <li>
                            
                            <button type="button"
                                class="flex items-center mx-2 p-2 w-full text-2xl font-bold  text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                style="width: -webkit-fill-available;" aria-controls="dropdown-tournees"
                                data-collapse-toggle="dropdown-tournees">
                                <span class="flex-1 mx-2 text-left font-medium text-white"
                                    sidebar-toggle-item><?php echo e(__('Tournées')); ?></span>
                                
                            </button>
                            
                            <ul id="dropdown-tournees-" class=" py-2 space-y-2 mx-2">
                                <li>
                                    <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                        href="<?php echo e(route('tournees.create')); ?>">
                                        <span class="mx-2 font-medium"><?php echo e(__('Nouvelle demande')); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                        href="<?php echo e(route('tournees.index')); ?>">
                                        <span class="mx-2 font-medium"><?php echo e(__('Ordres de missions')); ?></span>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                        href="<?php echo e(route('tournees.m_index')); ?>">
                                        <span class="mx-2 font-medium"><?php echo e(__('Mémoires de Frais/Tournee')); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <hr />

                    </ul>
                </nav>
            </aside>
        </div>
        <!-- Mobile Sidebar -->
        <div class="md:hidden border-blue-200 blue-bg no-print p-4">
            <div class="flex items-center justify-between">
                <button id="mobileMenuButton" class="text-white focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <nav id="mobileMenu" class="hidden flex flex-col gap-4 mt-4">
                <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
                <ul class="content-between space-y-2">
                    <!-- Mission Menu -->
                    <li>
                        
                        <button type="button"
                            class="flex items-center mx-2 p-2 w-full text-2xl font-normal text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                            style="width: -webkit-fill-available;" aria-controls="dropdown-missions"
                            data-collapse-toggle="dropdown-missions">
                            <span class="flex-1 mx-2 text-left font-medium text-white"
                                sidebar-toggle-item><?php echo e(__('Missions')); ?></span>
                            
                        </button>
                        
                        <ul id="dropdown-missions-" class="py-2 space-y-2 mx-2">
                            <li>
                                <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                    href="<?php echo e(route('mission_orders.create')); ?>">
                                    <span class="mx-2 font-medium"><?php echo e(__('Nouvelle demande')); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                    href="<?php echo e(route('mission_orders.index')); ?>">
                                    <span class="mx-2 font-medium"><?php echo e(__('Ordres de missions')); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                    href="<?php echo e(route('mission_orders.m_index')); ?>">
                                    <span class="mx-2 font-medium"><?php echo e(__('Mémoires de Frais')); ?></span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <hr />
                    <!-- Tournees Menu -->
                    <li>
                        
                        <button type="button"
                            class="flex items-center mx-2 p-2 w-full text-2xl font-bold  text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                            style="width: -webkit-fill-available;" aria-controls="dropdown-tournees"
                            data-collapse-toggle="dropdown-tournees">
                            <span class="flex-1 mx-2 text-left font-medium text-white"
                                sidebar-toggle-item><?php echo e(__('Tournées')); ?></span>
                            
                        </button>
                        
                        <ul id="dropdown-tournees-" class=" py-2 space-y-2 mx-2">
                            <li>
                                <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                    href="<?php echo e(route('tournees.create')); ?>">
                                    <span class="mx-2 font-medium"><?php echo e(__('Nouvelle demande')); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                    href="<?php echo e(route('tournees.index')); ?>">
                                    <span class="mx-2 font-medium"><?php echo e(__('Ordres de missions')); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="flex items-center mx-2 px-2 py-2 text-white rounded-lg transition duration-75 group hover:bg-blue-500"
                                    href="<?php echo e(route('tournees.m_index')); ?>">
                                    <span class="mx-2 font-medium"><?php echo e(__('Mémoires de Frais/Tournee')); ?></span>
                                </a>
                            </li>
                        </ul>
                    </li>
  </ul>
            </nav>
        </div>
        <!-- Header and Content -->
        <div class="flex-1 flex flex-col">
            <header class="bg-white w-full shadow px-6 py-4 flex justify-between items-center no-print">

                <nav class="w-full bg-white border-b-2 border-indigo-600 flex justify-between">
                    <div class="flex flex-col py-2">
                        </div>
                    <div class="flex mx-2">
                        <div class="py-3 pr-6 text-xl font-bold">
                          
                        </div>

                        <div class="py-6 text-xl font-bold text-black">
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit">
                                    <i class="fa-solid fa-right-from-bracket"></i> <?php echo e(__('Logout')); ?>

                                </button>
                            </form>
                        </div>
                    </div>
                </nav>

            </header>
            <?php echo $__env->make('flash-messages.error-flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="bg-white rounded-lg p-3">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

        <script>
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>

        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js"
            integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
        
</body>

</html>
<?php /**PATH /srv/mission-order-app/resources/views/layouts/error.blade.php ENDPATH**/ ?>