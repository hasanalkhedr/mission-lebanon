<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', __('Missions')); ?>
<nav class="flex justify-between items-center p-2 text-black font-bold">
    <div class="text-lg blue-color">
        <?php echo e(__('Missions')); ?>

    </div>
    
    <?php if(auth()->user()->employee->allow_order): ?>
        <div>
            <a href="<?php echo e(route('mission_orders.create')); ?>"
                class="hover:bg-blue-700 text-white py-2 px-4 rounded-full blue-bg">
                <?php echo e(__('Ordre de Mission')); ?>

            </a>
        </div>
        
    <?php endif; ?>
</nav>
<?php echo $__env->make('partials.searches._search-missions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table x-data="data()" class="w-full text-sm text-left text-gray-500" x-data="employeeData">
        <?php if (! ($missionOrders->isEmpty())): ?>
            <thead class="text-s text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Mission #')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Employée')); ?>

                    </th>
                    
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Pays')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Début le')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('S’achève le')); ?>

                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        <?php echo e(__('Statut')); ?>

                    </th>
                    
                    <th colspan="2" scope="col" class="py-3 px-6 blue-color text-center">Actions des
                        <?php echo e(config('globals.roles.'.auth()->user()->employee->role)); ?>

                    </th>
                </tr>
            </thead>
            <tbody x-ref="tbody">
                <?php $__currentLoopData = $missionOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $missionOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="border-b py-4 px-6 font-bold text-gray-900 whitespace-nowrap cursor-pointer"
                            onclick="window.location.href = '<?php echo e(url(route('mission_orders.show', $missionOrder->id))); ?>'">
                            <div class="cursor-pointer">
                                <?php echo e($missionOrder->order_number); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($missionOrder->employee->first_name); ?> <?php echo e($missionOrder->employee->last_name); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($missionOrder->bareme->pays); ?>|<?php echo e($missionOrder->bareme->currency); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($missionOrder->start_date->format('d/m/Y')); ?> at <?php echo e($missionOrder->start_time); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($missionOrder->end_date->format('d/m/Y')); ?> at <?php echo e($missionOrder->end_time); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e(__($missionOrder->status)); ?>

                            </div>
                        </td>
                        
                        <?php switch($missionOrder->status):
                            case ('draft'): ?>
                                <?php if(auth()->user()->employee->id === $missionOrder->employee_id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.edit', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">
                                            <?php echo e(__('Edit')); ?>

                                        </a>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="deleteModal-<?php echo e($missionOrder->id); ?>">
                                            <?php echo e(__('Delete')); ?>

                                        </button>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('sup_approve'): ?>
                                <?php if(auth()->user()->employee->role === 'supervisor' &&
                                        auth()->user()->employee->department_id === $missionOrder->employee->department_id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-<?php echo e($missionOrder->id); ?>">
                                            <?php echo e(__('AVIS DU SUPÉRIEUR HIÉRARCHIQUE')); ?>

                                        </button>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                                <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('hr_approve'): ?>
                                <?php if(auth()->user()->employee->role === 'hr'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-<?php echo e($missionOrder->id); ?>">
                                            <?php echo e(__('Approve')); ?>

                                        </button>
                                    </td>
                                <?php endif; ?>
                                <?php if(auth()->user()->employee->role == 'hr' ||
                                        auth()->user()->employee->role == 'sg' ||
                                        (auth()->user()->employee->role === 'supervisor' &&
                                            auth()->user()->employee->department_id === $missionOrder->employee->department_id)): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('sg_approve'): ?>
                                <?php if(auth()->user()->employee->role === 'sg'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-<?php echo e($missionOrder->id); ?>">
                                            <?php echo e(__('Approve')); ?>

                                        </button>
                                    </td>
                                <?php endif; ?>
                                <?php if(auth()->user()->employee->role == 'hr' ||
                                        auth()->user()->employee->role == 'sg' ||
                                        (auth()->user()->employee->role === 'supervisor' &&
                                            auth()->user()->employee->department_id === $missionOrder->employee->department_id)): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('approved'): ?>
                                <?php if($missionOrder->employee->id == auth()->user()->employee->id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.m_index')); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Memoire')); ?></a>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php elseif(auth()->user()->employee->role == 'supervisor' &&
                                        auth()->user()->employee->department_id == $missionOrder->employee->department_id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php elseif(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('mission_orders.report', $missionOrder->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('paid'): ?>
                            <?php break; ?>
                        <?php endswitch; ?>
                        <?php echo $__env->make('partials.modals._delete-mission', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('partials.modals._approve-mission', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr class="border-gray-300">
                    <td colspan="4" class="px-4 py-8 border-t border-gray-300 text-lg">
                        <p class="text-center"><?php echo e(__('No Missions Found')); ?></p>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="mt-6 p-4">
    <?php echo e($missionOrders->links()); ?>

</div>
<script type="text/javascript">
    function data() {
        return {
            sortBy: "",
            sortAsc: false,
            sortByColumn($event) {
                if (this.sortBy === $event.target.innerText) {
                    if (this.sortAsc) {
                        this.sortBy = "";
                        this.sortAsc = false;
                    } else {
                        this.sortAsc = !this.sortAsc;
                    }
                } else {
                    this.sortBy = $event.target.innerText;
                }

                let rows = this.getTableRows()
                    .sort(
                        this.sortCallback(
                            Array.from($event.target.parentNode.children).indexOf(
                                $event.target
                            )
                        )
                    )
                    .forEach((tr) => {
                        this.$refs.tbody.appendChild(tr);
                    });
            },
            getTableRows() {
                return Array.from(this.$refs.tbody.querySelectorAll("tr"));
            },
            getCellValue(row, index) {
                return row.children[index].innerText;
            },
            sortCallback(index) {
                return (a, b) =>
                    ((row1, row2) => {
                        return row1 !== "" &&
                            row2 !== "" &&
                            !isNaN(row1) &&
                            !isNaN(row2) ?
                            row1 - row2 :
                            row1.toString().localeCompare(row2);
                    })(
                        this.getCellValue(this.sortAsc ? a : b, index),
                        this.getCellValue(this.sortAsc ? b : a, index)
                    );
            }
        };
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/mission_orders/index.blade.php ENDPATH**/ ?>