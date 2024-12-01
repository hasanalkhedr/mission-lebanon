<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', __('Users')); ?>
<nav class="flex justify-between items-center p-2 text-black font-bold">
    <div class="text-lg blue-color">
        <?php echo e(__('Users')); ?>

    </div>
    
    <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
        <div>
            <button class="hover:bg-blue-700 text-white py-2 px-4 rounded-full blue-bg" data-modal-toggle="createModal">
                <?php echo e(__('Create User')); ?>

            </button>
        </div>
        
    <?php endif; ?>
</nav>
<?php echo $__env->make('partials.searches._search-employees', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table x-data="data()" class="w-full text-sm text-left text-gray-500" x-data="employeeData">
        <?php if (! ($employees->isEmpty())): ?>
            <thead class="text-s text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Name')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Department')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Role')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Fonction Administrative')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Résidence administrative')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Service')); ?>

                    </th>
                    
                    <?php if(auth()->user()->employee->role == 'hr'): ?>
                        <th scope="col" class="py-3 px-6 blue-color">
                            <span class="sr-only"><?php echo e(__('Edit')); ?></span>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            <span class="sr-only"><?php echo e(__('Delete')); ?></span>
                        </th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody x-ref="tbody">
                <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="border-b py-4 px-6 font-bold text-gray-900 whitespace-nowrap cursor-pointer"
                            onclick="window.location.href = '<?php echo e(url(route('employees.show', ['employee' => $employee->id]))); ?>'">
                            <div class="cursor-pointer">
                                <?php echo e($employee->first_name); ?> <?php echo e($employee->last_name); ?>

                            </div>
                        </td>
                        <?php if($employee->department == null): ?>
                            <td class="py-4 px-6 border-b">
                                <div class="font-bold">
                                    -
                                </div>
                            </td>
                        <?php else: ?>
                            <td class="py-4 px-6 border-b cursor-pointer"
                                onclick="window.location.href = '<?php echo e(url(route('departments.show', ['department' => $employee->department->id]))); ?>'">
                                <div class="cursor-pointer">
                                    <?php echo e($employee->department->name); ?>

                                </div>
                            </td>
                        <?php endif; ?>
                        <td class="py-4 px-6 border-b">
                            
                            <?php echo e(config('globals.roles.'.$employee->role)); ?>

                        </td>
                        <?php if($employee->position == null): ?>
                            <td class="py-4 px-6 border-b">
                                <div class="font-bold">
                                    -
                                </div>
                            </td>
                        <?php else: ?>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($employee->position); ?>

                                </div>
                            </td>
                        <?php endif; ?>
                        <?php if($employee->administrativ_residence == null): ?>
                            <td class="py-4 px-6 border-b">
                                <div class="font-bold">
                                    -
                                </div>
                            </td>
                        <?php else: ?>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($employee->administrativ_residence); ?>

                                </div>
                            </td>
                        <?php endif; ?>
                        <?php if($employee->service == null): ?>
                            <td class="py-4 px-6 border-b">
                                <div class="font-bold">
                                    -
                                </div>
                            </td>
                        <?php else: ?>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($employee->service); ?>

                                </div>
                            </td>
                        <?php endif; ?>
                        
                        <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                            <td class="py-4 px-6 text-right border-b">
                                <button class="font-medium hover:underline blue-color" type="button"
                                    data-modal-toggle="editProfileModal-<?php echo e($employee->id); ?>">
                                    <?php echo e(__('Edit')); ?>

                                </button>
                            </td>
                            <td class="py-4 px-6 text-right border-b">
                                <button class="font-medium text-red-600 hover:underline" type="button"
                                    data-modal-toggle="deleteModal-<?php echo e($employee->id); ?>">
                                    <?php echo e(__('Delete')); ?>

                                </button>
                            </td>
                            
                        <?php endif; ?>
                        <?php echo $__env->make('partials.modals._delete-employee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('partials.modals._edit-employee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr class="border-gray-300">
                    <td colspan="4" class="px-4 py-8 border-t border-gray-300 text-lg">
                        <p class="text-center"><?php echo e(__('No Employees Found')); ?></p>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php echo $__env->make('partials.modals._create-employee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<div class="mt-6 p-4">
    <?php echo e($employees->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/employees/index.blade.php ENDPATH**/ ?>