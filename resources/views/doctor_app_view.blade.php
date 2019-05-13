
<html>
   
    <head>
       <title>View Appointment In Queue</title>
    </head>
    
    <body>
       <table border = 1>
          <tr>
             <td>ID</td>
             <td>Name</td>
             <td>Age</td>
             <td>AppointmentDate</td>
             <td>Description</td>
             <td>DoctorName</td>
          </tr>
          @foreach ($doctorAppointments as $doctorAppointment)
           <tr>
             <td value="{{ $doctorAppointment->Id }}"> {{ $doctorAppointment->Id }} </td>
             <td> {{ $doctorAppointment->Name }} </td>
             <td> {{ $doctorAppointment->Age }} </td>
             <td> {{ $doctorAppointment->AppointmentDate }} </td>
             <td> {{ $doctorAppointment->Description }} </td>
             <td> {{ $doctorAppointment->DoctorName }} </td>
           </tr>
          @endforeach
       </table>
       <br>
       <table border = 1>
        <tr>
           <td>AppointmentDate</td>
           <td>Count</td>
        </tr>
        @foreach ($appointmentDates as $appointmentDate)
         <tr>
           <td> {{ $appointmentDate->AppointmentDate }} </td>
           <td> {{ $appointmentDate->Count }} </td>
         </tr>
        @endforeach
     </table>
     <br>
     <table border = 1>
        <tr>
           <td>AppointmentDate</td>
           <td>DoctorName</td>
           <td>NumberOfPatient</td>
        </tr>
        @foreach ($patientsPerDoctor as $patientPerDoctor)
         <tr>
           <td> {{ $patientPerDoctor->AppointmentDate }} </td>
           <td> {{ $patientPerDoctor->DoctorName }} </td>
           <td> {{ $patientPerDoctor->NumberOfPatient }} </td>
         </tr>
        @endforeach
     </table>
    </body>
 </html>