<!-- resources/views/mission_orders/show.blade.php -->
@php
    use App\Models\Department;
@endphp
@extends('layouts.app')
@section('title', $missionOrder->order_number . '-' . $missionOrder->employee->first_name . ' ' .
    $missionOrder->employee->last_name)
@section('content')
    <h2 class="text-2xl font-bold mb-2 text-blue-700">MÉMOIRE DE FRAIS</h2>
    <div class="w-11/12">
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/4 px-3">
                <x-label>
                    Mission #
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ $missionOrder->order_number }}</label>
            </div>
            <div class="w-1/4 px-3">
                <x-label>
                    Etat de la demande
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ __($missionOrder->memor_status) }}</label>
            </div>
            <div class="w-1/4 px-3">
                <x-label>
                    Nom, Prénom
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ $missionOrder->employee->first_name }}
                    {{ $missionOrder->employee->last_name }}</label>
            </div>
            <div class="w-1/4 px-3">
                <x-label>
                    Dép / Antenne
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ $missionOrder->employee->department->name }}</label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-full px-3">
                <x-label>
                    Objet<span class="text-red-500">*</span>
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ $missionOrder->purpose }}</label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/3 px-3">
                <x-label>
                    Lieu de la mission<span class="text-red-500">*</span>
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ $missionOrder->arrive_location }}</label>
            </div>
            <div class="w-1/3 px-3">
                <x-label>
                    Débute le : Date & Heure :<span class="text-red-500">*</span>
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ $missionOrder->start_date->format('d/m/Y') }}
                    at {{ $missionOrder->start_time }}</label>
            </div>
            <div class="w-1/3 px-3">
                <x-label>
                    S'achève le : Date & Heure :<span class="text-red-500">*</span>
                </x-label>
                <label
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">{{ $missionOrder->end_date->format('d/m/Y') }}
                    at {{ $missionOrder->end_time }}</label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-full px-3">
                <x-label>
                    Pays de Mission<span class="text-red-500">*</span>
                </x-label>
                <label class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2">
                    @if (in_array(
                            $missionOrder->bareme->id,
                            array_column(App\Models\Bareme::where('pays', 'like', '%France%')->get('id')->toArray(), 'id')))
                        {{ $missionOrder->bareme->pays }}
                        ({{ $missionOrder->bareme->currency }})
                    @else
                        {{ $missionOrder->bareme->pays }}
                        (Montant:{{ $missionOrder->bareme->pays_per_day . ' ' . $missionOrder->bareme->currency }} /
                        Repas:{{ $missionOrder->bareme->meal_cost }} /
                        Hebergement:{{ $missionOrder->bareme->accomodation_cost }})
                    @endif
                </label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/2 px-3">
                <x-label>
                    Nuitées à déduire des IJM<span class="text-red-500">*</span>
                </x-label>
                <input type="text" disabled type="number" id="no_ded_accomodation"
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2 text-center"
                    value="{{ $missionOrder->no_ded_accomodation }}" />
            </div>
            <div class="w-1/2 px-3">
                <x-label>
                    Repas à déduire<span class="text-red-500">*</span>
                </x-label>
                <input type="text" disabled type="number" id="no_ded_meals"
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2 text-center"
                    value="{{ $missionOrder->no_ded_meals }}" />
            </div>
        </div>
        <div class="flex flex-wrap -mx-1 mb-2">
            <div class="w-1/2 px-3">
                <x-label>
                    Avance sur IJM (EURO ou USD)<span class="text-red-500">*</span>
                </x-label>
                <input type="text" disabled type="number"
                    class="ms-1 text-sm font-medium text-blue-600 dark:text-gray-500 mr-5 bg-gray-100 px-2 py-2 text-center"
                    value="{{ $missionOrder->advance }}" />
            </div>
        </div>
        @include('partials.modals._ijmtable')
        <!-- Expenses Table and Modals -->
        <h2 class="pb-2 text-sm font-bold text-blue-700">Remboursement de frais de transport et frais divers sur
            justificatifs</h2>
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 border border-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Nature de
                                        la dépense</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Date
                                        dépense</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Montant
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Devise
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase">Document
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($missionOrder->expenses as $expense)
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ $expense->description }}</td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $expense->expense_date->format('d/m/Y H:i') }}</td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $expense->amount }}</td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            {{ $expense->currency }}</td>
                                        <td
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm text-gray-800">
                                            <button
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                                                type="button" data-modal-toggle="viewDocumentModal-{{ $expense->id }}">
                                                {{ __('Voir le document') }}
                                            </button>
                                            <a href="{{route('expenses.download_document', $expense)}}"><button
                                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                                                type="button">
                                                {{ __('Télécharger le document') }}
                                            </button>
                                        </a>
                                            @include('partials.modals._view-document')
                                        </td>
                                    </tr>
                                @empty
                                    <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                        <td colspan="4"
                                            class="px-6 text-center border border-gray-200 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                            {{ __('No Expenses Found') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                @forelse ($missionOrder->getExpensesByCurrency() as $currency=>$currencyAmount)
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-200 border border-gray-300 text-blue-700 font-bold text-md-center uppercase">
                                            SOMME
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-200 border border-gray-300 text-blue-700 font-bold text-md-center uppercase">
                                            {{ $currencyAmount }}
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 bg-gray-200 border border-gray-300 text-blue-700 font-bold text-md-center uppercase">
                                            {{ $currency }}
                                        </th>
                                        <th scope="col"></th>
                                    </tr>
                                @empty
                                @endforelse
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="w-11/12 flex flex-wrap -mx-1 mb-2 border border-gray-200">
        <div class="w-full flex justify-center items-center p-2 space-x-2 rounded-b">
            @switch($missionOrder->memor_status)
                @case('draft')
                    @if (auth()->user()->employee->id === $missionOrder->employee_id)
                        <a href="{{ route('mission_orders.m_create', $missionOrder->id) }}"
                            class="text-white bg-blue-700
                            hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                            w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Edit') }}</a>
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="deleteModal-{{ $missionOrder->id }}">{{ __('Delete') }}</button>
                    @endif
                @break

                @case('sup_approve')
@if (
                        (auth()->user()->employee->role === 'supervisor') &&
                            in_array(
                                $missionOrder->employee->department_id,
                                Department::where('manager_id', Auth::user()->employee->id)->pluck('id')->toArray()))
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="approveModal-{{ $missionOrder->id }}">
                            {{ __('AVIS DU SUPÉRIEUR HIÉRARCHIQUE') }}
                        </button>
                        <a href="{{ route('mission_orders.m_report', $missionOrder->id) }}"
                            class="text-white bg-blue-700
                        hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                        w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Print Order') }}</a>
                    @endif
                    @if (auth()->user()->employee->role === 'hr' || auth()->user()->employee->role === 'sg')
                        <a href="{{ route('mission_orders.m_report', $missionOrder->id) }}"
                            class="text-white bg-blue-700
                    hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                    w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Print Order') }}</a>
                    @endif
                @break

                @case('hr_approve')
                    @if (auth()->user()->employee->role === 'hr')
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="approveModal-{{ $missionOrder->id }}">
                            {{ __('Approve or Reject') }}
                        </button>
                    @endif
                    @if (auth()->user()->employee->role === 'hr' ||
                            auth()->user()->employee->role === 'sg' ||
                            (auth()->user()->employee->role === 'supervisor' &&
                                auth()->user()->employee->department_id === $missionOrder->employee->department_id))
                        <a href="{{ route('mission_orders.m_report', $missionOrder->id) }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Print Order') }}</a>
                    @endif
                @break

                @case('sg_approve')
                    @if (auth()->user()->employee->role === 'sg')
                        <button
                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900"
                            type="button" data-modal-toggle="approveModal-{{ $missionOrder->id }}">
                            {{ __('Approve or Reject') }}
                        </button>
                    @endif
                    @if (auth()->user()->employee->role === 'hr' ||
                            auth()->user()->employee->role === 'sg' ||
                            (auth()->user()->employee->role === 'supervisor' &&
                                auth()->user()->employee->department_id === $missionOrder->employee->department_id))
                        <a href="{{ route('mission_orders.m_report', $missionOrder->id) }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Print Order') }}</a>
                    @endif
                @break

                @case('approved')
                    @if ($missionOrder->employee->id == auth()->user()->employee->id)
                        <a href="{{ route('mission_orders.m_index') }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Mémoire de Frais') }}</a>
                        <a href="{{ route('mission_orders.m_report', $missionOrder->id) }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Print Order') }}</a>
                    @elseif (auth()->user()->employee->role == 'supervisor' &&
                            auth()->user()->employee->department_id == $missionOrder->employee->department_id)
                        <a href="{{ route('mission_orders.m_report', $missionOrder->id) }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Print Order') }}</a>
                    @elseif(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg')
                        <a href="{{ route('mission_orders.m_report', $missionOrder->id) }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center hover:text-gray-900">{{ __('Print Order') }}</a>
                    @endif
                @break

                @case('paid')
                @break

            @endswitch
        </div>
    </div>
    <div class="w-11/12 flex flex-wrap -mx-1 mb-2 border border-gray-200">
        <h4 class="text-1xl text-blue-600 w-full text-center">{{ __('Memoire Approves:') }}</h4>

        <table class="w-full text-sm text-left text-gray-500">
            @unless ($missionOrder->getMemoirApproves()->isEmpty())
                <thead class="text-s text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            {{ __('Approval Role') }}
                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            {{ __('Aprroval Name') }}
                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            {{ __('Comment') }}
                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            {{ __('Sataus') }}
                        </th>
                        <th class="cursor-pointer py-3 px-6 blue-color">
                            {{ __('Date of Approve') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($missionOrder->getMemoirApproves() as $approve)
                        <tr class="bg-white hover:bg-gray-50">
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    {{ config('globals.roles.'.$approve->employee->role) }}
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    {{ $approve->employee->first_name }} {{ $approve->employee->last_name }}
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    {{ $approve->comment }}
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    {{ __($approve->memor_status) }}
                                </div>
                            </td>
                            <td class="py-4 px-6 border-b cursor-pointer">
                                <div class="cursor-pointer">
                                    {{ $approve->created_at->format('d/m/Y H:i:s') }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td colspan="4" class="px-4 py-8 border-t border-gray-300 text-lg">
                            <p class="text-center">{{ __('No Approves Found') }}</p>
                        </td>
                    </tr>
                @endunless
            </tbody>
        </table>
    </div>

    @include('partials.modals._delete-memoier')
    @include('partials.modals._approve-memoier')
@endsection
