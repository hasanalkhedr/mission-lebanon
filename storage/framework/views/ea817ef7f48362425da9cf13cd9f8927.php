<div tabindex="0" aria-label="group icon" role="img" class="focus:outline-none w-12 h-12 border rounded-full border-gray-200 flex flex-shrink-0 items-center justify-center">
    <?php echo e(! $icon->isEmpty() ? $icon : ''); ?>

</div>
<div class="pl-3 w-full">
    <div class="items-center justify-between w-full pr-2 mb-1">
        <p class="block w-full focus:outline-none text-sm leading-none my-0">
            <?php echo e($title); ?>

        </p>
        <p class="block w-full focus:outline-none text-sm leading-none mt-1">
            <?php echo e($body); ?>

        </p>
    </div>
    <div class="flex justify-between">
        <?php echo e($date); ?>


        <?php echo e($link); ?>

    </div>
</div>
<?php /**PATH /srv/mission-order-app/resources/views/vendor/megaphone/components/notification/notification.blade.php ENDPATH**/ ?>