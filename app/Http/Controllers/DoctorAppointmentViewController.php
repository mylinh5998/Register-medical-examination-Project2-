<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Model\DoctorAppointment;

class DoctorAppointmentViewController extends Controller {
    public function index() {
        $doctorAppointments = DoctorAppointment::join("AppointmentPaper", "DoctorAppointment.AppointmentId", "=", "AppointmentPaper.Id")
                                                ->join("Doctor", "DoctorAppointment.DoctorId", "Doctor.Id")
                                                ->orderBy("AppointmentDate", "asc")
                                                ->select("DoctorAppointment.Id", "Name", "Age", "AppointmentDate", "Description", "DoctorName")
                                                ->get();

        $appointmentDates = DoctorAppointment::join("AppointmentPaper", "DoctorAppointment.AppointmentId", "=", "AppointmentPaper.Id")
                                                ->groupBy(DB::raw("DATE(AppointmentDate)"))
                                                ->select(DB::raw("DATE(AppointmentDate) AS AppointmentDate, COUNT(AppointmentId) Count"))
                                                ->get();
                                                
        $patientsPerDoctor = DoctorAppointment::join("AppointmentPaper", "DoctorAppointment.AppointmentId", "=", "AppointmentPaper.Id")
                                                ->join("Doctor", "DoctorAppointment.DoctorId", "Doctor.Id")
                                                ->groupBy(DB::raw("DATE(AppointmentDate)"), "DoctorName")
                                                ->select(DB::raw("DATE(AppointmentDate) AppointmentDate"), "DoctorName", DB::raw("COUNT(AppointmentId) NumberOfPatient"))
                                                ->get();

        return view("doctor_app_view", ["doctorAppointments"=>$doctorAppointments, "appointmentDates"=>$appointmentDates, "patientsPerDoctor"=>$patientsPerDoctor]);        
    }
}