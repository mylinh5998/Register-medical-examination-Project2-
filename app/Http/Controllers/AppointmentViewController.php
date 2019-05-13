<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\AppointmentPaper;
use App\Model\DoctorAppointment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppointmentViewController extends Controller {
    public function index() {
        $appointmentPapers = AppointmentPaper::whereNotIn('Id', DoctorAppointment::pluck('AppointmentId'))->get();
        return view("appointment_view", ["appointmentPapers"=>$appointmentPapers]);
    }
}