<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'parentClass' => 'mt-2 text-right focus:outline-none text-xs leading-3 pt-1 pb-2 right-0',
    'class' => 'cursor-pointer no-underline bg-gray-100 text-gray-800 rounded-md border border-gray-300 p-2 hover:bg-gray-300',
    'link', 'newWindow', 'linkText',
]));

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

foreach (array_filter(([
    'parentClass' => 'mt-2 text-right focus:outline-none text-xs leading-3 pt-1 pb-2 right-0',
    'class' => 'cursor-pointer no-underline bg-gray-100 text-gray-800 rounded-md border border-gray-300 p-2 hover:bg-gray-300',
    'link', 'newWindow', 'linkText',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<!--[if BLOCK]><![endif]--><?php if(! empty($link)): ?>
    <p class="<?php echo e($parentClass); ?>">
        <a href="<?php echo e($link); ?>" <?php echo e(! empty($newWindow) ? ' target="_blank"' : ''); ?> class="<?php echo e($class); ?>">
            <?php echo e(! empty($linkText) ? $linkText : 'View'); ?>

        </a>
    </p>
<?php endif; ?><!--[if ENDBLOCK]><![endif]-->
<?php /**PATH /srv/mission-order-app/resources/views/vendor/megaphone/components/notification/link.blade.php ENDPATH**/ ?>