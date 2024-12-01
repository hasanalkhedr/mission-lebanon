<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', __('Show Department')); ?>
<div class="m-4">
    <div class="mb-6">
        <a href="<?php echo e(url(route('departments.index'))); ?>">
            <button
                class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out blue-bg"><?php echo e(__('Back')); ?></button>
        </a>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" name="name"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            disabled value="<?php echo e($department->name); ?>" />
        <label for="name"
            class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color"><?php echo e(__('Name')); ?></label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <?php if($department->manager_id == null): ?>
            <input type="text" name="supervisor"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                disabled value="<?php echo e(__('No Employees Found')); ?>" />
        <?php else: ?>
            <input type="text" name="supervisor"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                disabled value="<?php echo e($department->manager->first_name); ?> <?php echo e($department->manager->last_name); ?>" />
        <?php endif; ?>
        <label for="supervisor"
            class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color"><?php echo e(__('Supervisor')); ?></label>
    </div>

    
    <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
        <button
            class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center blue-bg"
            data-modal-toggle="editModal-<?php echo e($department->id); ?>">
            <?php echo e(__('Edit')); ?>

        </button>
        <button
            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
            data-modal-toggle="deleteModal-<?php echo e($department->id); ?>">
            <?php echo e(__('Delete')); ?>

        </button>
    <?php endif; ?>
    
</div>

<?php echo $__env->make('partials.modals._delete-department', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.modals._edit-department', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/departments/show.blade.php ENDPATH**/ ?>