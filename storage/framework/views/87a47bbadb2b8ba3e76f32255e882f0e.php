<div class="megaphone" <?php
                if (config("megaphone.poll.enabled", false)) {
                    $poll = "wire:poll";
                    $poll .= (! empty($time = config("megaphone.poll.options.time"))) ? ".$time" : "";
                    $poll .= (config("megaphone.poll.options.keepAlive", false)) ? ".keep-alive" : "";
                    $poll .= (config("megaphone.poll.options.viewportVisible", false)) ? ".visible" : "";
                    echo $poll;
                }?>>
    <div class="relative w-10 h-10" x-data="{ open: false }">
        <?php echo $__env->make('megaphone::icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('megaphone::popout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH /srv/mission-order-app/resources/views/vendor/megaphone/megaphone.blade.php ENDPATH**/ ?>