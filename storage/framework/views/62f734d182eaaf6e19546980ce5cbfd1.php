
<select <?php echo e($attributes->merge([
   'class' => 'w-full border-gray-300 rounded appearance-none block bg-gray-200 text-gray-700 border  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500',
   'readonly' => 'readonly'
])); ?>>
    <?php echo e($slot); ?>

</select>

<?php /**PATH /srv/mission-order-app/resources/views/components/disabled-select-input.blade.php ENDPATH**/ ?>