<?php

namespace App\Http\Controllers;

use App\Mail\GeneralMail;
use App\Models\Appointment;
use App\Models\Patient;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

/**
 * Class AppointmentsController
 * @package App\Http\Controllers
 * @autor Kevin Andrey Herrera Silva <kaherreras@unal.edu.co>
 */
class AppointmentsController
{
    /**
     * Appointments view with the table
     *
     * @return View
     */
    public function index(): View
    {
        $patients = Patient::all();
        $appointments = Appointment::whereDate('datetime','>=', Carbon::now())->orderBy('datetime', 'ASC')->get();
        return view("appointments.index", ['patients' => $patients, 'appointments' => $appointments]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create(): View
    {
        return view("appointments.create");
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Appointment::create($request->toArray());
        return response()->redirectTo('/appointments');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function cancel(Request $request): RedirectResponse
    {
        $appointment = Appointment::find($request->input('appointment_id'));
        $appointment->status = "cancelled";
        $appointment->save();
        return response()->redirectTo('/appointments');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function reminder(Request $request)
    {
        $patient = Patient::findOrFail($request->input('patient_id'));
        $appointment = Appointment::find($request->input('appointment_id'));
        $to = $patient->email;
        $text = 'Hola, <br><br><br>'.$patient->first_name.' '.$patient->second_name.' '.$patient->first_surname.' '.$patient->second_surname.', mediante este correo electrónico queremos recordarle el agendamiento de su cita en I.P.S. Zerbit programado para: '.$appointment->datetime.'<br>Comentario: '.$appointment->comment.'<br><br><br><br>Cordialmente,<br>I.P.S Zerbit';
        $subject = 'Recordatorio I.P.S Zerbit';
        Mail::to($to)
            ->send(
                new GeneralMail(
                    $text,
                    $subject
                )
            );

        return response()->redirectTo('/appointments');
    }
}