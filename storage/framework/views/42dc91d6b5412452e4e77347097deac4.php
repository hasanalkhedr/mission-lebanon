<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['class' => 'focus:outline-none text-xs leading-3 pt-1 text-gray-500', 'createdAt',]));

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

foreach (array_filter((['class' => 'focus:outline-none text-xs leading-3 pt-1 text-gray-500', 'createdAt',]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<p class="<?php echo e($class); ?>" title="<?php echo e($createdAt->format('jS M Y H:i')); ?>">
    <?php echo e($createdAt->diffForHumans()); ?>

</p>
<?php /**PATH /srv/mission-order-app/resources/views/vendor/megaphone/components/notification/date.blade.php ENDPATH**/ ?>