<div id="createModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-4 rounded-t border-b">
                <div class="text-base font-bold mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                    <?php echo e(__('Create bareme')); ?>

                </div>
                <div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="createModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
            </div>
            <!-- Modal body -->
            <div class="p-6">
                <form method="POST" action="<?php echo e(route('baremes.store')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="pays"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="" required />
                        <label for="pays"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            <?php echo e(__('Pays')); ?>

                        </label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="currency"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="" required />
                        <label for="currency"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            <?php echo e(__('Currency')); ?>

                        </label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input name="pays_per_day" id="pays_per_day" type="number"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder="" required />
                        <label for="pays_per_day"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                            <?php echo e(__('pays_per_day')); ?>

                        </label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="checkbox" id="toogle_inputs" />
                        <span
                            class="mb-2 text-sm font-medium blue-color"><?php echo e(__('Check if you want to define meal_cost and accomodation_cost manually')); ?></span>
                    </div>
                    <div class="hidden" id="cost_inputs">
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" name="meal_cost" id="meal_cost"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder="" />
                            <label for="meal_cost"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                <?php echo e(__('meal_cost')); ?>

                            </label>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <input type="number" name="accomodation_cost" id="accomodation_cost"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder="" />
                            <label for="accomodation_cost"
                                class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                <?php echo e(__('accomodation_cost')); ?>

                            </label>
                            <div class="mt-2 text-red-500 hidden" id="errorMessage">
                                <?php echo e(__('The sum of the two meal_costs and one accomodation_cost must be eqauls to pays_per_day.')); ?>

                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('toogle_inputs').addEventListener('change', function() {
                            var additionalInputs = document.getElementById('cost_inputs');
                            var meal_cost_input = document.getElementById('meal_cost');
                            var accomodation_cost_input = document.getElementById('accomodation_cost');

                            if (this.checked) {
                                // Show the inputs
                                additionalInputs.classList.remove('hidden');
                                // Add name attributes back to inputs so they will be submitted
                                meal_cost_input.setAttribute('name', 'meal_cost');
                                accomodation_cost_input.setAttribute('name', 'accomodation_cost');
                            } else {
                                // Hide the inputs
                                additionalInputs.classList.add('hidden');
                                // Remove the name attributes to prevent submission
                                meal_cost_input.removeAttribute('name');
                                accomodation_cost_input.removeAttribute('name');
                            }
                        });
                        var pays_per_day_input = document.getElementById('pays_per_day');
                        var meal_cost_input = document.getElementById('meal_cost');
                        var accomodation_cost_input = document.getElementById('accomodation_cost');
                        const errorMessage = document.getElementById('errorMessage');
                        accomodation_cost_input.addEventListener('blur', function() {
                            const meal_cost_value = parseFloat(meal_cost_input.value) || 0;
                            const accomodation_cost_value = parseFloat(accomodation_cost_input.value) || 0;
                            const pays_per_day_value = parseFloat(pays_per_day_input.value) || 0;
                            const sum = meal_cost_value * 2 + accomodation_cost_value;
                            if (sum != pays_per_day_value) {
                                errorMessage.classList.remove('hidden');
                            } else {
                                errorMessage.classList.add('hidden');
                            }
                        });
                    </script>
                    <div class="flex justify-end items-center p-6 space-x-2 rounded-b border-t border-gray-200">
                        <div>
                            <button data-modal-toggle="createModal" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                <?php echo e(__('Cancel')); ?>

                            </button>
                        </div>
                        <div>
                            <button
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                                data-modal-toggle="createModal"><?php echo e(__('Create')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /srv/mission-order-app/resources/views/partials/modals/_create-bareme.blade.php ENDPATH**/ ?>