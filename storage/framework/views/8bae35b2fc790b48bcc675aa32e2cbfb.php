<button type="button"
        aria-label="show notifications"
        class="font-sans text-gray-900"
        @click="open = true"
>
    <span class="sr-only">Show Notifications</span>
    <?php if (isset($component)) { $__componentOriginale0e7342cbca86273ad170ffe1b981903 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale0e7342cbca86273ad170ffe1b981903 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'megaphone::components.icons.bell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('megaphone::icons.bell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale0e7342cbca86273ad170ffe1b981903)): ?>
<?php $attributes = $__attributesOriginale0e7342cbca86273ad170ffe1b981903; ?>
<?php unset($__attributesOriginale0e7342cbca86273ad170ffe1b981903); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale0e7342cbca86273ad170ffe1b981903)): ?>
<?php $component = $__componentOriginale0e7342cbca86273ad170ffe1b981903; ?>
<?php unset($__componentOriginale0e7342cbca86273ad170ffe1b981903); ?>
<?php endif; ?>
    <!--[if BLOCK]><![endif]--><?php if($unread->count() > 0): ?>
        <!--[if BLOCK]><![endif]--><?php if($showCount): ?>
            <sub class="absolute top-1 left-1" aria-label="unread count">
                <span class="relative flex h-5 w-5 -mt-1">
                    <span class="motion-safe:animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-5 w-5 bg-red-500 text-white text-xs aspect-square text-center">
                        <span class="w-full leading-5">
                            <?php echo e($unread->count() > 9 ? '9+' : $unread->count()); ?>

                        </span>
                    </span>
                </span>
            </sub>
        <?php else: ?>
            <sub class="absolute top-2 left-2" aria-label="has unread notifications">
                <span class="relative flex h-3 w-3 -mt-1">
                  <span class="motion-safe:animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                </span>
            </sub>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</button>
<?php /**PATH /srv/mission-order-app/resources/views/vendor/megaphone/icon.blade.php ENDPATH**/ ?>