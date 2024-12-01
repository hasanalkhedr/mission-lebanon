<?php $__env->startSection('title', __('Baremes')); ?>
<?php $__env->startSection('content'); ?>
    <nav class="flex justify-between items-center p-2 text-black font-bold">
        <div class="text-lg blue-color">
            <?php echo e(__('Baremes')); ?>

        </div>
        <div>
            <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                <button class="hover:bg-blue-700 text-white py-2 px-4 rounded-full blue-bg" data-modal-toggle="createModal">
                    <?php echo e(__('Create bareme')); ?>

                </button>
            <?php endif; ?>
        </div>
    </nav>
    <?php echo $__env->make('partials.searches._search-baremes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="mx-2 overflow-x-auto relative shadow-md sm:rounded-lg">
        <table x-data="data()" class="w-full text-sm text-left text-gray-500" x-data="baremeData">
            <?php if (! ($baremes->isEmpty())): ?>
                <thead class="text-s text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('Pays')); ?>

                        </th>
                        <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('Currency')); ?>

                        </th>
                        <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('pays_per_day')); ?>

                        </th>
                        <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('meal_cost')); ?>

                        </th>
                        <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                            <?php echo e(__('accomodation_cost')); ?>

                        </th>
                        <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only"><?php echo e(__('Edit')); ?></span>
                            </th>
                            <th scope="col" class="py-3 px-6">
                                <span class="sr-only"><?php echo e(__('Delete')); ?></span>
                            </th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody x-ref="tbody">
                    <?php $__currentLoopData = $baremes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bareme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="bg-white hover:bg-gray-50">
                            <td class="border-b py-4 px-6 font-bold text-gray-900 whitespace-nowrap cursor-pointer"
                                onclick="window.location.href = '<?php echo e(url(route('baremes.show', ['bareme' => $bareme->id]))); ?>'">
                                <div class="cursor-pointer">
                                    <?php echo e($bareme->pays); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($bareme->currency); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($bareme->pays_per_day); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($bareme->meal_cost); ?>

                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    <?php echo e($bareme->accomodation_cost); ?>

                                </div>
                            </td>
                            <?php if(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg'): ?>
                                <td class="py-4 px-6 text-right border-b">
                                    <button class="font-medium hover:underline blue-color" type="button"
                                        data-modal-toggle="editModal-<?php echo e($bareme->id); ?>">
                                        <?php echo e(__('Edit')); ?>

                                    </button>
                                </td>
                                <td class="py-4 px-6 text-right border-b">
                                    <button class="font-medium text-red-600 hover:underline" type="button"
                                        data-modal-toggle="deleteModal-<?php echo e($bareme->id); ?>">
                                        <?php echo e(__('Delete')); ?>

                                    </button>
                                </td>
                            <?php endif; ?>
                            <?php echo $__env->make('partials.modals._delete-bareme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo $__env->make('partials.modals._edit-bareme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <tr class="border-gray-300">
                        <td colspan="4" class="px-4 py-8 border-t border-gray-300 text-lg">
                            <p class="text-center"><?php echo e(__('No baremes Found')); ?></p>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <?php echo $__env->make('partials.modals._create-bareme', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="mt-6 p-4">
        <?php echo e($baremes->links()); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/mission-order-app/resources/views/baremes/index.blade.php ENDPATH**/ ?>