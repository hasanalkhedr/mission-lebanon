<div id="editExpenseModal-{{ $expense->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-auto fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full mt-40 max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow p-2">
            <!-- Modal header -->
            <div class="flex justify-between items-center p-2 rounded-t border-b">
                <div
                    class="text-base font-bold mt-3 sm:mt-0 sm:ml-4 sm:text-left blue-color">
                    {{ __('Edit Expense') }}
                </div>
                <div>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="editExpenseModal-{{ $expense->id }}">
                        <svg aria-hidden="true" class="w-5 h-5"
                            fill="currentColor" viewBox="0 0 20 20"
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
            <div class="p-4 overflow-y-auto" style="max-height: 700px">
                <form method="POST"
                    action="{{ route('expenses.update', $expense->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-2/3 px-3">
                            <div class="flex flex-wrap -mx-3 mb-0">
                                <x-label>Nature de dépenses<span
                                        class="text-red-500">*</span></x-label>
                                <textarea name="description" rows="4" required
                                    class="appearance-none block w-full bg-white text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none border border-blue-700 focus:bg-white focus:border-blue-900">{{ old('description', $expense->description) }}</textarea>
                            </div>
                            <div class="-mx-3 w-full mb-0">
                                <x-label>Date de dépenses<span
                                        class="text-red-500">*</span></x-label>
                                <x-date-time-input class="w-full"
                                    name="expense_date"
                                    value="{{ old('expense_date', $expense->expense_date->format('Y-m-d')) }}"
                                    type="date" required>
                                </x-date-time-input>
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-0">
                                <x-label>Montant<span
                                        class="text-red-500">*</span></x-label>
                                <x-text-input type="number" step="0.01" required
                                    name="amount"
                                    value="{{ old('amount', $expense->amount) }}" />
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-0">
                                <x-select-currency :selectedCurrency="old('currency',$expense->currency)"/>
                                {{-- <x-label>Devise<span
                                        class="text-red-500">*</span></x-label>
                                <x-text-input required name="currency"
                                    value="{{ old('currency', $expense->currency) }}" /> --}}
                            </div>
                        </div>
                        <!-- Expense Document -->
                        <div class="w-1/3 h-1/2 px-3">
                            <!-- Image upload input and preview with button on top of the image -->
                            <div class="relative w-full h-full mx-auto">
                                <!-- Image preview -->
                                <img id="expenseDocumentPreview-edit-{{ $expense->id }}"
                                    src="{{asset('storage/' . $expense->expense_document) }}"
                                    alt="Document de dépenses"
                                    class="object-cover w-full h-full">
                                <!-- Browse Files Button positioned on top of the image -->
                                <div
                                    class="rounded-xl absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-50 hover:opacity-100 transition-opacity">
                                    <input type="file" name="expense_document"
                                        id="expense_document-edit-{{ $expense->id }}"
                                        class="hidden"
                                        onchange="previewImage_edit_{{ $expense->id }}(event)">
                                    <button type="button"
                                        onclick="document.getElementById('expense_document-edit-{{ $expense->id }}').click()"
                                        class="text-white bg-blue-600 hover:bg-blue-700 rounded-xl w-1/2">
                                        <img src="{{ Vite::asset('resources/images/browse-image.png') }}"
                                            alt="Browse Image">
                                    </button>
                                </div>
                                <!-- Image Preview Script -->
                                <script>
                                    function previewImage_edit_{{ $expense->id }}(event) {
                                        const reader = new FileReader();
                                        reader.onload = function() {
                                            const output = document.getElementById('expenseDocumentPreview-edit-{{ $expense->id }}');
                                            output.src = reader.result;
                                        };
                                        reader.readAsDataURL(event.target.files[0]);
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex justify-end items-center p-6 space-x-2 rounded-b border-t border-gray-200">
                        <div>
                            <button
                                data-modal-toggle="editExpenseModal-{{ $expense->id }}"
                                type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                                {{ __('Cancel') }}
                            </button>
                        </div>
                        <div>
                            <button
                                data-modal-toggle="editExpenseModal-{{ $expense->id }}"
                                class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center blue-bg">
                                {{ __('Create') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
