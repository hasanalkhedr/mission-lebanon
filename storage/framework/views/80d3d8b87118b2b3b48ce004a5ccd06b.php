<div x-data="{ showMessage: true }" x-show="showMessage" class="flex justify-center no-print">
    <?php if(count($errors) > 0): ?>
        <div class="flex items-center justify-between max-w-xl p-4 bg-white border rounded-md shadow-sm">
            <div class="flex items-center flex-col">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="ml-3 text-sm font-bold text-red-600"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <span @click="showMessage = false" class="inline-flex items-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-600" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </span>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /srv/mission-order-app/resources/views/flash-messages/error-flash-message.blade.php ENDPATH**/ ?>