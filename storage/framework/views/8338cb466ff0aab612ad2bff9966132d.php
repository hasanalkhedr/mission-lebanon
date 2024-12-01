<!-- resources/views/mission_orders/show.blade.php -->

<?php $__env->startSection('title', $missionOrder->order_number.'-'.$missionOrder->employee->first_name.' '.$missionOrder->employee->last_name); ?>
<?php $__env->startSection('content'); ?>
    <h2 class="text-2xl font-bold mb-2 text-blue-700">Demander une mission</h2>
    <div class="w-11/12">
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/5 px-3">
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
            <div class="w-1/5 px-3">
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
                    Ordre de Mission Date
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
                    class="ms-1 text-sm font-bold <?php echo e($missionOrder->order_date > $missionOrder->start_date ? 'text-red-600 bg-yellow-400' : 'text-blue-600'); ?> dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->order_date->format('d/m/Y')); ?></label>
            </div>
            <div class="w-1/5 px-3">
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
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e(__($missionOrder->status)); ?></label>
            </div>
            <div class="w-1/5 px-3">
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
            <div class="w-1/5 px-3">
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
                    Lieu de départ<span class="text-red-500">*</span>
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
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->departure_location); ?></label>
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
                    Lieu d'arrivée<span class="text-red-500">*</span>
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
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-3/4 px-3">
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['class' => 'inline']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'inline']); ?>
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
                <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['class' => 'inline']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'inline']); ?>
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
            <div class="w-1/4">
                <?php if(auth()->user()->employee->role === 'hr' && $missionOrder->status==='hr_approve'): ?>
                <?php if (isset($component)) { $__componentOriginald411d1792bd6cc877d687758b753742c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald411d1792bd6cc877d687758b753742c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.primary-button','data' => ['dataModalToggle' => 'editDatesModal-'.e($missionOrder->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('primary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['data-modal-toggle' => 'editDatesModal-'.e($missionOrder->id).'']); ?><?php echo e(__('Change Dates')); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $attributes = $__attributesOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__attributesOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald411d1792bd6cc877d687758b753742c)): ?>
<?php $component = $__componentOriginald411d1792bd6cc877d687758b753742c; ?>
<?php unset($__componentOriginald411d1792bd6cc877d687758b753742c); ?>
<?php endif; ?>
                <?php echo $__env->make('partials.modals._change-dates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
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
            <div class="w-1/2">
                <div class="w-full px-3 py-1">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['class' => 'w-4/5 inline-flex']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4/5 inline-flex']); ?>
                        Prise en charge des frais de transport<span class="text-red-500">*</span>
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
                        class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->charge == 1 ? 'OUI' : 'NON'); ?></label>
                </div>
                <div class="w-full px-3 py-1">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['class' => 'w-4/5 inline-flex']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4/5 inline-flex']); ?>
                        Prise en charge des indemnités journalières de mission<span class="text-red-500">*</span>
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
                        class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->ijm == 1 ? 'OUI' : 'NON'); ?></label>
                </div>
                <div class="w-full px-3 py-1">
                    <?php if (isset($component)) { $__componentOriginald8ba2b4c22a13c55321e34443c386276 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8ba2b4c22a13c55321e34443c386276 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.label','data' => ['class' => 'w-4/5 inline-flex']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4/5 inline-flex']); ?>
                        Prise en charge d'une assurance voyage<span class="text-red-500">*</span>
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
                        class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->assurance == 1 ? 'OUI' : 'NON'); ?></label>
                </div>
                <div class="w-full px-3 py-1">
                    <label
                        class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->budget_text); ?></label>
                </div>
            </div>
            <div class="w-1/2">
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
                    Observations
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
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2"><?php echo e($missionOrder->description); ?></label>
            </div>
        </div>
    </div>
    <div class="w-11/12 flex flex-wrap -mx-1 mb-2 border border-gray-200">
        <div class="w-full flex justify-center items-center p-2 space-x-2 rounded-b">
            <?php switch($missionOrder->status):
                case ('draft'): ?>
                    <?php if(auth()->user()->employee->id === $missionOrder->employee_id): ?>
                        <a href="<?php echo e(route('mission_orders.edit', $missionOrder->id)); ?>"
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
                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700
                        hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                        w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                    <?php if(auth()->user()->employee->role === 'hr' || auth()->user()->employee->role === 'sg'): ?>
                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
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
                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
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
                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                <?php break; ?>

                <?php case ('approved'): ?>
                    <?php if($missionOrder->employee->id == auth()->user()->employee->id): ?>
                        <a href="<?php echo e(route('mission_orders.m_index')); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Mémoire de Frais')); ?></a>
                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php elseif(auth()->user()->employee->role == 'supervisor' &&
                            auth()->user()->employee->department_id == $missionOrder->employee->department_id): ?>
                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php elseif(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"><?php echo e(__('Print Order')); ?></a>
                    <?php endif; ?>
                <?php break; ?>

                <?php case ('paid'): ?>
                <?php break; ?>
            <?php endswitch; ?>
        </div>
    </div>
    <div class="w-11/12 flex flex-wrap -mx-1 mb-2 border border-gray-200">
        <h4 class="text-1xl text-blue-600 w-full text-center"><?php echo e(__('Mission Approves:')); ?></h4>

        <table class="w-full text-sm text-left text-gray-500">
            <?php if (! ($missionOrder->getMissionAprroves()->isEmpty())): ?>
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
                    <?php $__currentLoopData = $missionOrder->getMissionAprroves(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $approve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                    <?php echo e(__($approve->status)); ?>

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

    <?php echo $__env->make('partials.modals._delete-mission', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.modals._approve-mission', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/mission_orders/show.blade.php ENDPATH**/ ?>