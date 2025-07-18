
@php
use App\Models\Department;
@endphp
@extends('layouts.app')
@section('content')
@section('title', __('Missions'))
<nav class="flex justify-between items-center p-2 text-black font-bold">
    <div class="text-lg blue-color">
        {{ __('Missions') }}
    </div>
    {{-- @hasanyrole('human_resource|sg|head') --}}
    @if (auth()->user()->employee->allow_order)
        <div>
            <a href="{{ route('mission_orders.create') }}"
                class="hover:bg-blue-700 text-white py-2 px-4 rounded-full blue-bg">
                {{ __('Ordre de Mission') }}
            </a>
        </div>
        {{-- @endhasanyrole --}}
    @endif
</nav>
@include('partials.searches._search-missions')
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table x-data="data()" class="w-full text-sm text-left text-gray-500" x-data="employeeData">
        @unless ($missionOrders->isEmpty())
            <thead class="text-s text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        {{ __('Mission #') }}
                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        {{ __('Employé') }}
                    </th>
                    {{-- <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        {{ __('Objet') }}
                    </th> --}}
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        {{ __('Pays') }}
                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        {{ __('Débute le') }}
                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        {{ __('S’achève le') }}
                    </th>
                    <th @click="sortByColumn" scope="col" class="cursor-pointer py-3 px-6 blue-color">
                        {{ __('Statut') }}
                    </th>
                    {{-- @if (auth()->user()->hasRole('human_resource')) --}}
                    <th colspan="2" scope="col" class="py-3 px-6 blue-color text-center">Actions {{ config('globals.roles.' . auth()->user()->employee->role) }}
                    </th>
                </tr>
            </thead>
            <tbody x-ref="tbody">
                @foreach ($missionOrders as $missionOrder)
                    <tr class="bg-white hover:bg-gray-50">
                        <td class="border-b py-4 px-6 font-bold text-gray-900 whitespace-nowrap cursor-pointer"
                            onclick="window.location.href = '{{ url(route('mission_orders.show', $missionOrder->id)) }}'">
                            <div class="cursor-pointer">
                                {{ $missionOrder->order_number }}
                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                {{ $missionOrder->employee->first_name }} {{ $missionOrder->employee->last_name }}
                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                {{ $missionOrder->bareme->pays }}|{{ $missionOrder->bareme->currency }}
                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                {{ $missionOrder->start_date->format('d/m/Y') }} at {{ $missionOrder->start_time }}
                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                {{ $missionOrder->end_date->format('d/m/Y') }} at {{ $missionOrder->end_time }}
                            </div>
                        </td>
                        <td class="py-4 px-6 border-b cursor-pointer">
                            <div class="cursor-pointer">
                                {{ __($missionOrder->status) }}
                            </div>
                        </td>
                        {{-- @hasanyrole('human_resource|sg|head') --}}
                        @switch($missionOrder->status)
                            @case('draft')
                                @if (auth()->user()->employee->id === $missionOrder->employee_id)
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.edit', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">
                                            {{ __('Edit') }}
                                        </a>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="deleteModal-{{ $missionOrder->id }}">
                                            {{ __('Delete') }}
                                        </button>
                                    </td>
                                @endif
                            @break

                            @case('sup_approve')
@if (auth()->user()->employee->role === 'supervisor' &&
 in_array($missionOrder->employee->department_id, Department::where('manager_id', Auth::user()->employee->id)->pluck('id')->toArray())
 )
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-{{ $missionOrder->id }}">
                                            {{ __('AVIS DU SUPÉRIEUR HIÉRARCHIQUE') }}
                                        </button>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.report', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Print') }}</a>
                                    </td>
                                @endif
                                @if (auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg')
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.report', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Print') }}</a>
                                    </td>
                                @endif
                            @break

                            @case('hr_approve')
                                @if (auth()->user()->employee->role === 'hr')
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-{{ $missionOrder->id }}">
                                            {{ __('Approve') }}
                                        </button>
                                    </td>
                                @endif
                                @if (auth()->user()->employee->role == 'hr' ||
                                        auth()->user()->employee->role == 'sg' ||
                                        (auth()->user()->employee->role === 'supervisor' &&
                                            auth()->user()->employee->department_id === $missionOrder->employee->department_id))
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.report', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Print') }}</a>
                                    </td>
                                @endif
                            @break

                            @case('sg_approve')
                                @if (auth()->user()->employee->role === 'sg')
                                    <td class="text-center px-0 py-1 border-b">
                                        <button
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900"
                                            type="button" data-modal-toggle="approveModal-{{ $missionOrder->id }}">
                                            {{ __('Approve') }}
                                        </button>
                                    </td>
                                @endif
                                @if (auth()->user()->employee->role == 'hr' ||
                                        auth()->user()->employee->role == 'sg' ||
                                        (auth()->user()->employee->role === 'supervisor' &&
                                            auth()->user()->employee->department_id === $missionOrder->employee->department_id))
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.report', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Print') }}</a>
                                    </td>
                                @endif
                            @break

                            @case('approved')
                                @if ($missionOrder->employee->id == auth()->user()->employee->id)
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.m_index') }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Memoire') }}</a>
                                    </td>
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.report', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Print') }}</a>
                                    </td>
                                @elseif (auth()->user()->employee->role == 'supervisor' &&
                                        auth()->user()->employee->department_id == $missionOrder->employee->department_id)
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.report', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Print') }}</a>
                                    </td>
                                @elseif(auth()->user()->employee->role == 'hr' || auth()->user()->employee->role == 'sg')
                                    <td class="text-center px-0 py-1 border-b">
                                        <a href="{{ route('mission_orders.report', $missionOrder->id) }}"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-1 py-1 text-center hover:text-gray-900">{{ __('Print') }}</a>
                                    </td>
                                @endif
                            @break

                            @case('paid')
                            @break
                        @endswitch
                        @include('partials.modals._delete-mission')
                        @include('partials.modals._approve-mission')
                    </tr>
                @endforeach
            @else
                <tr class="border-gray-300">
                    <td colspan="4" class="px-4 py-8 border-t border-gray-300 text-lg">
                        <p class="text-center">{{ __('No Missions Found') }}</p>
                    </td>
                </tr>
            @endunless
        </tbody>
    </table>
</div>
<div class="mt-6 p-4">
    {{ $missionOrders->links() }}
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
@endsection
