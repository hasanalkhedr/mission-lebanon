<?php $__env->startSection('title', __('Memoire')); ?>
<?php $__env->startSection('content'); ?>
<nav class="flex justify-between items-center p-2 text-black font-bold">
    <div class="text-lg blue-color">
        <?php echo e(__('MÉMOIRE DE FRAIS / TOURNEES')); ?>

    </div>
</nav>

<?php echo $__env->make('partials.searches._search-tournees_m', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table x-data="data()" class="w-full text-sm text-left text-gray-500" x-data="employeeData">
        <?php if (! ($tournees->isEmpty())): ?>
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
                        <?php echo e(__('Lieu de la mission')); ?>

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
                <?php $__currentLoopData = $tournees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tournee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="border-b py-4 px-6 font-bold text-gray-900 whitespace-nowrap cursor-pointer"
                            onclick="window.location.href = '<?php echo e(url(route('tournees.m_show', $tournee->id))); ?>'">
                            <div class="cursor-pointer">
                                <?php echo e($tournee->order_number); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($tournee->employee->first_name); ?> <?php echo e($tournee->employee->last_name); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($tournee->bareme->pays); ?>|<?php echo e($tournee->bareme->currency); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($tournee->arrive_location); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($tournee->start_date->format('d/m/Y')); ?> at <?php echo e($tournee->start_time); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e($tournee->end_date->format('d/m/Y')); ?> at <?php echo e($tournee->end_time); ?>

                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                <?php echo e(__($tournee->memor_status)); ?>

                            </div>
                        </td>
                        
                        <?php switch($tournee->memor_status):
                            case (null): ?>
                                <?php if(auth()->user()->employee->id === $tournee->employee_id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_create', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">
                                            <?php echo e(__('Add Memoire')); ?>

                                        </a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('draft'): ?>
                                <?php if(auth()->user()->employee->id === $tournee->employee_id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_create', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">
                                            <?php echo e(__('Edit')); ?>

                                        </a>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="deleteModal-<?php echo e($tournee->id); ?>">
                                            <?php echo e(__('Delete')); ?>

                                        </button>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('sup_approve'): ?>
                                <?php if(auth()->user()->employee->role === 'supervisor' &&
                                        auth()->user()->employee->department_id === $tournee->employee->department_id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-<?php echo e($tournee->id); ?>">
                                            <?php echo e(__('AVIS DU SUPÉRIEUR HIÉRARCHIQUE')); ?>

                                        </button>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_report', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                                <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_report', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('hr_approve'): ?>
                                <?php if(auth()->user()->employee->role === 'hr'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-<?php echo e($tournee->id); ?>">
                                            <?php echo e(__('Approve')); ?>

                                        </button>
                                    </td>
                                <?php endif; ?>
                                <?php if(auth()->user()->employee->role == 'hr' ||
                                        auth()->user()->employee->role == 'sg' ||
                                        (auth()->user()->employee->role === 'supervisor' &&
                                            auth()->user()->employee->department_id === $tournee->employee->department_id)): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_report', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('sg_approve'): ?>
                                <?php if(auth()->user()->employee->role === 'sg'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-<?php echo e($tournee->id); ?>">
                                            <?php echo e(__('Approve')); ?>

                                        </button>
                                    </td>
                                <?php endif; ?>
                                <?php if(auth()->user()->employee->role == 'hr' ||
                                        auth()->user()->employee->role == 'sg' ||
                                        (auth()->user()->employee->role === 'supervisor' &&
                                            auth()->user()->employee->department_id === $tournee->employee->department_id)): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_report', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('approved'): ?>
                                <?php if($tournee->employee->id == auth()->user()->employee->id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="#"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Request to Pay')); ?></a>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_report', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php elseif(auth()->user()->employee->role == 'supervisor' &&
                                        auth()->user()->employee->department_id == $tournee->employee->department_id): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_report', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php elseif(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="<?php echo e(route('tournees.m_report', $tournee->id)); ?>"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"><?php echo e(__('Print')); ?></a>
                                    </td>
                                <?php endif; ?>
                            <?php break; ?>

                            <?php case ('paid'): ?>
                            <?php break; ?>
                        <?php endswitch; ?>
                        <?php echo $__env->make('partials.modals._tournee-delete-memoier', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('partials.modals._tournee-approve-memoier', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <tr class="border-gray-300">
                    <td colspan="4" class="px-4 py-8 border-t border-gray-300 text-lg">
                        <p class="text-center"><?php echo e(__('No MÉMOIRE DE FRAIS Found')); ?></p>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="mt-6 p-4">
    <?php echo e($tournees->links()); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/tournees/m_index.blade.php ENDPATH**/ ?>