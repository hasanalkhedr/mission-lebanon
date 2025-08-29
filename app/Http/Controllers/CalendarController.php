<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\MissionOrder;
use App\Models\Tournee;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $events = [];
        $missions = collect();
        $tournees = collect();
        $employee = auth()->user()->employee;
        switch ($employee->role) {
            case 'employee':
                $missions = $employee->missionOrders;
                $tournees = $employee->tournees;
                break;
            case 'supervisor':
                $employees = Employee::whereIn('department_id', auth()->user()->employee->managed_departments->pluck('id')->toArray())->get();
                $missions = MissionOrder::whereIn('employee_id', $employees->pluck('id')->toArray())->get();
                $tournees = Tournee::whereIn('employee_id', $employees->pluck('id')->toArray())->get();
                // dd($employees, $missions, $tournees);
                break;
            case 'hr':
            case 'sg':
                $missions = MissionOrder::all();
                $tournees = Tournee::all();
                break;
        }

        foreach ($missions as $mission) {
        $e = $mission->employee;
            $b = $mission->bareme;
$stat = __($mission->status);
            $title = "Employé: $e->first_name $e->last_name ,\nPays:  $b->pays ,\nStatut: $stat, \nObjet: $mission->purpose ";
            $events[] = [
                'title' => $title,
                'start' => $mission->start_date,
                'end' => $mission->end_date,
                'classNames' => ['bg-blue-500', 'text-white-700', 'text-md'],
                'url' => route('mission_orders.show', $mission->id)
            ];
        }
        foreach ($tournees as $tournee) {
            $e = $tournee->employee;
            $b = $tournee->bareme;
$stat = __($tournee->status);
            $title = "Employé: $e->first_name $e->last_name ,\nPays:  $b->pays ,\nStatut:$stat, \nObjet: $tournee->purpose ";
            $events[] = [
                'title' => $title,
                'start' => $tournee->start_date,
                'end' => $tournee->end_date,
                'classNames' => ['bg-green-500', 'text-white-700', 'text-md'],
                'url' => route('tournees.show', $tournee->id)
            ];
        }

        return view('calender', compact('events'));
    }
}
