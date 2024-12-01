<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['class' => 'text-indigo-700 font-bold', 'link',]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['class' => 'text-indigo-700 font-bold', 'link',]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<span class="<?php echo e($class); ?>">
    <!--[if BLOCK]><![endif]--><?php if(! empty($link)): ?>
        <a href="<?php echo e($link); ?>">
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

    <?php echo e($slot); ?>


    <!--[if BLOCK]><![endif]--><?php if(! empty($link)): ?>
        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</span>
<?php /**PATH /srv/mission-order-app/resources/views/vendor/megaphone/components/notification/title.blade.php ENDPATH**/ ?>