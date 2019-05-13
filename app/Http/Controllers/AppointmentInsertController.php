<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Model\AppointmentPaper;

class AppointmentInsertController extends Controller {
    public function insertForm() {
        return view("make_appointment");
    }

    public function insert(Request $request) {
        $name = $request->input("name");
        $age = $request->input("age");
        $email = $request->input("mail");
        $phone = $request->input("phone");
        $appointmentDate = $request->input("appointment_date");
        $description = $request->input("description");
        $doctorCertificate = $request->input("doctor_certificate");

        $appointmentPaper = new AppointmentPaper();
        $appointmentPaper->name = $name;
        $appointmentPaper->age = $age;
        $appointmentPaper->mail = $email;
        $appointmentPaper->phone = $phone;
        $appointmentPaper->appointmentDate = $appointmentDate;
        $appointmentPaper->description = $description;
        $appointmentPaper->doctorCertificate = $doctorCertificate;
        $appointmentPaper->save();
        
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}