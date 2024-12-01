<select <?php echo e($attributes->merge([
   'class' => 'w-full border-blue-700 rounded appearance-none block bg-white text-gray-700 border  py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500',
])); ?>>
    <?php echo e($slot); ?>

</select>
<?php /**PATH /srv/mission-order-app/resources/views/components/select-input.blade.php ENDPATH**/ ?>