<div id="editProfileModal-<?php echo e($employee->id); ?>" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-4 rounded-t border-b">
                <div class="text-base font-bold mt-3 sm:mt-0 sm:ml-4 sm:text-left blue-color">
                    <?php echo e(__('Edit Employee')); ?>: <?php echo e($employee->first_name); ?>

                    <?php echo e($employee->last_name); ?>

                </div>
                <div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="editProfileModal-<?php echo e($employee->id); ?>">
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
            <div class="p-6 overflow-y-auto" style="max-height: 500px">
                <form method="POST" action="<?php echo e(route('employees.update', ['employee' => $employee->id])); ?>"
                    id="edit_form--<?php echo e($employee->id); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-2/3 px-3">
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 mb-4 w-full group">
                                    <input type="text" name="first_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        value="<?php echo e($employee->first_name); ?>" required />
                                    <label for="first_name"
                                        class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color">
                                        <?php echo e(__('First name')); ?>

                                    </label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input type="text" name="last_name"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        value="<?php echo e($employee->last_name); ?>" required />
                                    <label for="last_name"
                                        class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color">
                                        <?php echo e(__('Last name')); ?>

                                    </label>
                                </div>
                            </div>
                            <div class="grid md:grid-cols-2 md:gap-6">
                                <div class="relative z-0 mb-4 w-full group">
                                    <input type="email" name="email"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        value="<?php echo e($employee->email); ?>" required />
                                    <label for="email"
                                        class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color">
                                        <?php echo e(__('Email Address')); ?>

                                    </label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input type="text" name="phone"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        value="<?php echo e($employee->phone); ?>" />
                                    <label for="phone"
                                        class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color">
                                        <?php echo e(__('Phone number')); ?>

                                    </label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input type="text" name="position"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        value="<?php echo e($employee->position); ?>" />
                                    <label for="position"
                                        class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color">
                                        <?php echo e(__('Fonction Administrative')); ?>

                                    </label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input type="text" name="administrativ_residence"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        value="<?php echo e($employee->administrativ_residence); ?>" />
                                    <label for="administrativ_residence"
                                        class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color">
                                        <?php echo e(__('Résidence administrative')); ?>

                                    </label>
                                </div>
                                <div class="relative z-0 mb-4 w-full group">
                                    <input type="text" name="service"
                                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                        value="<?php echo e($employee->service); ?>" />
                                    <label for="service"
                                        class="peer-focus:font-medium absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 blue-color">
                                        <?php echo e(__('Service')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="w-1/3 px-3 h-1/3">
                            <!-- Image upload input and preview with button on top of the image -->
                            <div class="relative w-full h-full mx-auto">
                                <!-- Image preview -->
                                <?php if($employee->profile_image): ?>
                                    <img id="<?php echo e('eprofileImagePreview' . $employee->id); ?>"
                                        src="<?php echo e(asset('storage/app/public/' . $employee->profile_image)); ?>"
                                        alt="Image de profil" class="object-cover w-full h-full">
                                <?php else: ?>
                                    <img id="<?php echo e('eprofileImagePreview' . $employee->id); ?>"
                                        src="<?php echo e(Vite::asset('resources/images/default-avatar.jpg')); ?>"
                                        alt="Image de profil" class="object-cover w-full h-full">
                                <?php endif; ?>
                                <!-- Browse Files Button positioned on top of the image -->
                                <div
                                    class="rounded-xl absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-50 hover:opacity-100 transition-opacity">
                                    <input type="file" name="profile_image"
                                        id="<?php echo e('eprofile_image' . $employee->id); ?>" class="hidden"
                                        onchange="<?php echo e('epreviewImage' . $employee->id); ?>(event)">
                                    <button type="button"
                                        onclick="document.getElementById('<?php echo e('eprofile_image' . $employee->id); ?>').click()"
                                        class="text-white bg-blue-600 hover:bg-blue-700 rounded-xl w-1/2">
                                        <img src="<?php echo e(Vite::asset('resources/images/browse-image.png')); ?>"
                                            alt="Browse Image">
                                    </button>
                                </div>
                                <!-- Image Preview Script -->
                                <script>
                                    function <?php echo e('epreviewImage' . $employee->id); ?>(event) {
                                        const reader = new FileReader();
                                        reader.onload = function() {
                                            const output = document.getElementById("<?php echo e('eprofileImagePreview' . $employee->id); ?>");
                                            output.src = reader.result;
                                        };
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="relative z-40 mb-4 w-full group">
                        <label for="role_ids" class="mb-2 text-sm font-medium blue-color">
                            <?php echo e(__('Select Role(s)')); ?>

                        </label>
                        <select name="role"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <?php if(count($roles)): ?>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $roleKey=>$roleValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <?php if($employee->role == $roleKey): ?>
                                        <option selected value="<?php echo e($roleKey); ?>">
                                            <?php echo e(__($roleValue)); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($roleKey); ?>"><?php echo e(__($roleValue)); ?>

                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="relative z-0 mb-4 w-full group">
                        <label for="department_id" class="mb-2 text-sm font-medium blue-color">
                            <?php echo e(__('Select Department')); ?>

                        </label>
                        <select id="department_id--<?php echo e($employee->id); ?>" name="department_id" id="department_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            onchange="checkSupervisorDepartment(this, <?php echo e($employee); ?>)">
                            <option value="" disabled><?php echo e(__('Select Department')); ?></option>
                            <?php if(count($departments)): ?>
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($department->id); ?>"
                                        <?php echo e($department->id == $employee->department_id ? 'selected' : ''); ?>>
                                        <?php echo e($department->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 mb-6 w-full group">
                            <p class="mb-2 text-sm font-medium blue-color">
                                <?php echo e(__('Submit Requests')); ?></p>
                            <div class="mt-2 flex flex-row">
                                <input type="hidden" name="allow_order" value="0">
                                <input type="checkbox" name="allow_order" value="1"
                                    id="can-submit-requests--<?php echo e($employee->id); ?>"
                                    <?php echo e($employee->allow_order ? 'checked' : ''); ?>

                                    onchange="toggleOffDaysContainer(this)">
                            </div>
                            <?php $__errorArgs = ['allow_order'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="relative z-0 mb-6 w-full group">
                            <p class="mb-2 text-sm font-medium blue-color">
                                <?php echo e(__('Receive Emails')); ?></p>
                            <div class="mt-2 flex flex-row">
                                <input type="hidden" name="recieve_email" value="0">
                                <input type="checkbox" name="recieve_email" value="1"
                                    <?php echo e($employee->recieve_email ? 'checked' : ''); ?>>
                            </div>
                            <?php $__errorArgs = ['recieve_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="flex justify-end items-center p-6 space-x-2 rounded-b border-t border-gray-200">
                        <div>
                            <button data-modal-toggle="editProfileModal-<?php echo e($employee->id); ?>" type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                <?php echo e(__('Cancel')); ?>

                            </button>
                        </div>
                        <div>
                            <button
                                class="text-white hover:bg-blue-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center blue-bg"
                                data-modal-toggle="editProfileModal-<?php echo e($employee->id); ?>"><?php echo e(__('Edit')); ?>

                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /srv/mission-order-app/resources/views/partials/modals/_edit-employee.blade.php ENDPATH**/ ?>