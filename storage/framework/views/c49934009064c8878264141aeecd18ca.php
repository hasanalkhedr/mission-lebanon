<?php if (isset($component)) { $__componentOriginal990267c901f246a5d810bbe993bdea64 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal990267c901f246a5d810bbe993bdea64 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'megaphone::components.notification.notification','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('megaphone::notification.notification'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('icon', null, []); ?> 
        
        <img src="<?php echo e(Vite::asset('resources/images/'.$announcement['icon'].'.png')); ?>" alt="">
     <?php $__env->endSlot(); ?>
 <?php $__env->slot('body', null, []); ?> 
    <?php echo nl2br(e(str_replace("\\n", "\n", $announcement['body']))); ?>

 <?php $__env->endSlot(); ?>
     <?php $__env->slot('title', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal796fb2edc96362a8608f4120e41cc3ce = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal796fb2edc96362a8608f4120e41cc3ce = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'megaphone::components.notification.title','data' => ['link' => $announcement['link']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('megaphone::notification.title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($announcement['link'])]); ?>
            <?php echo e($announcement['title']); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal796fb2edc96362a8608f4120e41cc3ce)): ?>
<?php $attributes = $__attributesOriginal796fb2edc96362a8608f4120e41cc3ce; ?>
<?php unset($__attributesOriginal796fb2edc96362a8608f4120e41cc3ce); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal796fb2edc96362a8608f4120e41cc3ce)): ?>
<?php $component = $__componentOriginal796fb2edc96362a8608f4120e41cc3ce; ?>
<?php unset($__componentOriginal796fb2edc96362a8608f4120e41cc3ce); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('date', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginalc68a14839e2dc85334b1446b55786608 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc68a14839e2dc85334b1446b55786608 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'megaphone::components.notification.date','data' => ['createdAt' => $created_at]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('megaphone::notification.date'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['createdAt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($created_at)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc68a14839e2dc85334b1446b55786608)): ?>
<?php $attributes = $__attributesOriginalc68a14839e2dc85334b1446b55786608; ?>
<?php unset($__attributesOriginalc68a14839e2dc85334b1446b55786608); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc68a14839e2dc85334b1446b55786608)): ?>
<?php $component = $__componentOriginalc68a14839e2dc85334b1446b55786608; ?>
<?php unset($__componentOriginalc68a14839e2dc85334b1446b55786608); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('link', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginal43bf2472774fcb129e34b69effe437a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal43bf2472774fcb129e34b69effe437a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'megaphone::components.notification.link','data' => ['link' => $announcement['link'],'newWindow' => $announcement['linkNewWindow'],'linkText' => $announcement['linkText']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('megaphone::notification.link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['link' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($announcement['link']),'newWindow' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($announcement['linkNewWindow']),'linkText' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($announcement['linkText'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal43bf2472774fcb129e34b69effe437a6)): ?>
<?php $attributes = $__attributesOriginal43bf2472774fcb129e34b69effe437a6; ?>
<?php unset($__attributesOriginal43bf2472774fcb129e34b69effe437a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal43bf2472774fcb129e34b69effe437a6)): ?>
<?php $component = $__componentOriginal43bf2472774fcb129e34b69effe437a6; ?>
<?php unset($__componentOriginal43bf2472774fcb129e34b69effe437a6); ?>
<?php endif; ?>
     <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal990267c901f246a5d810bbe993bdea64)): ?>
<?php $attributes = $__attributesOriginal990267c901f246a5d810bbe993bdea64; ?>
<?php unset($__attributesOriginal990267c901f246a5d810bbe993bdea64); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal990267c901f246a5d810bbe993bdea64)): ?>
<?php $component = $__componentOriginal990267c901f246a5d810bbe993bdea64; ?>
<?php unset($__componentOriginal990267c901f246a5d810bbe993bdea64); ?>
<?php endif; ?>
<?php /**PATH /srv/mission-order-app/resources/views/vendor/megaphone/types/mission-order-level-notification.blade.php ENDPATH**/ ?>