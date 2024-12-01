<!-- resources/views/mission_orders/show.blade.php -->

<?php $__env->startSection('title', $missionOrder->order_number . '-' . $missionOrder->employee->first_name . ' ' .
    $missionOrder->employee->last_name); ?>
<?php $__env->startSection('content'); ?>
    <h2 class="text-2xl font-bold mb-2 text-blue-700">MÉMOIRE DE FRAIS</h2>
    <div class="w-11/12">
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/4 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Mission #
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->order_number); ?></label>
            </div>
            <div class="w-1/4 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Etat de la demande
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e(__($missionOrder->memor_status)); ?></label>
            </div>
            <div class="w-1/4 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Nom, Prénom
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->employee->first_name); ?>

                    <?php echo e($missionOrder->employee->last_name); ?></label>
            </div>
            <div class="w-1/4 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Dép / Antenne
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->employee->department->name); ?></label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-full px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Objet<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->purpose); ?></label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/3 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Lieu de la mission<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->arrive_location); ?></label>
            </div>
            <div class="w-1/3 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Débute le : Date & Heure :<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->start_date->format('d/m/Y')); ?>

                    at <?php echo e($missionOrder->start_time); ?></label>
            </div>
            <div class="w-1/3 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    S'achève le : Date & Heure :<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->end_date->format('d/m/Y')); ?>

                    at <?php echo e($missionOrder->end_time); ?></label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-full px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Pays de Mission<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <label class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">
                    <?php if(in_array(
                            $missionOrder->bareme->id,
                            array_column(App\Models\Bareme::where('pays', 'like', '%France%')->get('id')->toArray(), 'id'))): ?>
                        <?php echo e($missionOrder->bareme->pays); ?>

                        (<?php echo e($missionOrder->bareme->currency); ?>)
                    <?php else: ?>
                        <?php echo e($missionOrder->bareme->pays); ?>

                        (Montant:<?php echo e($missionOrder->bareme->pays_per_day . ' ' . $missionOrder->bareme->currency); ?> /
                        Repas:<?php echo e($missionOrder->bareme->meal_cost); ?> /
                        Hebergement:<?php echo e($missionOrder->bareme->accomodation_cost); ?>)
                    <?php endif; ?>
                </label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/2 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Nuitées à déduire des IJM<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <input type="text" disabled type="number" id="no_ded_accomodation"
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2 text-center"
                    value="<?php echo e($missionOrder->no_ded_accomodation); ?>" />
            </div>
            <div class="w-1/2 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Repas à déduire<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <input type="text" disabled type="number" id="no_ded_meals"
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2 text-center"
                    value="<?php echo e($missionOrder->no_ded_meals); ?>" />
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/2 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    Avance sur IJM (EURO ou USD)<span class="text-red-500">*</span>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $attributes = $__attributesOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__attributesOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8ba2b4c22a13c55321e34443c386276)): ?>
<?php $component = $__componentOriginald8ba2b4c22a13c55321e34443c386276; ?>
<?php unset($__componentOriginald8ba2b4c22a13c55321e34443c386276); ?>
<?php endif; ?>
                <input type="text" disabled type="number"
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2 text-center"
                    value="<?php echo e($missionOrder->advance); ?>" />
            </div>
        </div>
        <?php echo $__env->make('partials.modals._ijmtable', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Expenses Table and Modals -->
        <h2 class="pb-2 text-sm font-bold text-blue-700">Remboursement de frais de transport et frais divers sur
            justificatifs</h2>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Nature de
                                        la dépense</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Date
                                        dépense</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Montant
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Devise
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Document
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $missionOrder->expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <?php echo e($expense->description); ?></td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            <?php echo e($expense->expense_date->format('d/m/Y H:i')); ?></td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            <?php echo e($expense->amount); ?></td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            <?php echo e($expense->currency); ?></td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            <button
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                                                type="button" data-modal-toggle="viewDocumentModal-<?php echo e($expense->id); ?>">
                                                <?php echo e(__('Voir le document')); ?>

                                            </button>
                                            <a href="<?php echo e(route('expenses.download_document', $expense)); ?>"><button
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                                                type="button">
                                                <?php echo e(__('Télécharger le document')); ?>

                                            </button>
                                        </a>
                                            <?php echo $__env->make('partials.modals._view-document', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td colspan="4"
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            <?php echo e(__('No Expenses Found')); ?></td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                            <tfoot>
                                <?php $__empty_1 = true; $__currentLoopData = $missionOrder->getExpensesByCurrency(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency=>$currencyAmount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-200 border border-gray-300 text-blue-700 font-bold text-md-center uppercase">
                                            SOMME
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-200 border border-gray-300 text-blue-700 font-bold text-md-center uppercase">
                                            <?php echo e($currencyAmount); ?>

                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-200 border border-gray-300 text-blue-700 font-bold text-md-center uppercase">
                                            <?php echo e($currency); ?>

                                        </th>
                                        <th scope="col"></th>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="w-11/12 flex flex-wrap -mx-1 mb-2 border border-gray-200">
        <div class="w-full flex justify-center items-center p-2 space-x-2 rounded-b">
            <?php switch($missionOrder->memor_status):
                case ('draft'): ?>
                    <?php if(auth()->user()->employee->id === $missionOrder->employee_id): ?>
                        <a href="<?php echo e(route('mission_orders.m_create', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700
                            hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                            w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Edit')); ?></a>
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="deleteModal-<?php echo e($missionOrder->id); ?>"><?php echo e(__('Delete')); ?></button>
                    <?php endif; ?>
                <?php break; ?>

                <?php case ('sup_approve'): ?>
                    <?php if(auth()->user()->employee->role === 'supervisor' &&
                            auth()->user()->employee->department_id === $missionOrder->employee->department_id): ?>
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="approveModal-<?php echo e($missionOrder->id); ?>">
                            <?php echo e(__('AVIS DU SUPÉRIEUR HIÉRARCHIQUE')); ?>

                        </button>
                        <a href="<?php echo e(route('mission_orders.m_report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700
                        hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                        w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                    <?php if(auth()->user()->employee->role === 'hr' || auth()->user()->employee->role === 'sg'): ?>
                        <a href="<?php echo e(route('mission_orders.m_report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700
                    hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                    w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                <?php break; ?>

                <?php case ('hr_approve'): ?>
                    <?php if(auth()->user()->employee->role === 'hr'): ?>
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="approveModal-<?php echo e($missionOrder->id); ?>">
                            <?php echo e(__('Approve or Reject')); ?>

                        </button>
                    <?php endif; ?>
                    <?php if(auth()->user()->employee->role === 'hr' ||
                            auth()->user()->employee->role === 'sg' ||
                            (auth()->user()->employee->role === 'supervisor' &&
                                auth()->user()->employee->department_id === $missionOrder->employee->department_id)): ?>
                        <a href="<?php echo e(route('mission_orders.m_report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                <?php break; ?>

                <?php case ('sg_approve'): ?>
                    <?php if(auth()->user()->employee->role === 'sg'): ?>
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="approveModal-<?php echo e($missionOrder->id); ?>">
                            <?php echo e(__('Approve or Reject')); ?>

                        </button>
                    <?php endif; ?>
                    <?php if(auth()->user()->employee->role === 'hr' ||
                            auth()->user()->employee->role === 'sg' ||
                            (auth()->user()->employee->role === 'supervisor' &&
                                auth()->user()->employee->department_id === $missionOrder->employee->department_id)): ?>
                        <a href="<?php echo e(route('mission_orders.m_report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                <?php break; ?>

                <?php case ('approved'): ?>
                    <?php if($missionOrder->employee->id == auth()->user()->employee->id): ?>
                        <a href="<?php echo e(route('mission_orders.m_index')); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Mémoire de Frais')); ?></a>
                        <a href="<?php echo e(route('mission_orders.m_report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php elseif(auth()->user()->employee->role == 'supervisor' &&
                            auth()->user()->employee->department_id == $missionOrder->employee->department_id): ?>
                        <a href="<?php echo e(route('mission_orders.m_report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php elseif(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                        <a href="<?php echo e(route('mission_orders.m_report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                <?php break; ?>

                <?php case ('paid'): ?>
                <?php break; ?>

            <?php endswitch; ?>
        </div>
    </div>
    <div class="w-11/12 flex flex-wrap -mx-1 mb-2 border border-gray-200">
        <h4 class="text-1xl text-blue-600 w-full text-center"><?php echo e(__('Memoire Approves:')); ?></h4>

        <table class="w-full text-sm text-left text-gray-500">
            <?php if (! ($missionOrder->getMemoirApproves()->isEmpty())): ?>
                <thead class="text-s text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('Approval Role')); ?>

                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('Aprroval Name')); ?>

                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('Comment')); ?>

                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('Sataus')); ?>

                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('Date of Approve')); ?>

                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $missionOrder->getMemoirApproves(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $approve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white hover:bg-gray-50">
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e(config('globals.roles.'.$approve->employee->role)); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($approve->employee->first_name); ?> <?php echo e($approve->employee->last_name); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($approve->comment); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e(__($approve->memor_status)); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($approve->created_at->format('d/m/Y H:i:s')); ?>

                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr class="border-gray-300">
                        <td colspan="4" class="px-4 py-8 border-t border-gray-300 text-lg">
                            <p class="text-center"><?php echo e(__('No Approves Found')); ?></p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <?php echo $__env->make('partials.modals._delete-memoier', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.modals._approve-memoier', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/mission_orders/m_show.blade.php ENDPATH**/ ?>