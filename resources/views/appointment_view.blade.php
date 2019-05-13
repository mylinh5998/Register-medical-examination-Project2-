
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
             <td>Phone</td>
             <td>Email</td>
             <td>CreatedAt</td>
             <td>AppointmentDate</td>
             <td>Description</td>
             <td>DoctorCertificate</td>
          </tr>
          @foreach ($appointmentPapers as $appointmentPaper)
           <tr>
             <td value="{{ $appointmentPaper->Id }}"> {{ $appointmentPaper->Id }} </td>
             <td> {{ $appointmentPaper->Name }} </td>
             <td> {{ $appointmentPaper->Age }} </td>
             <td> {{ $appointmentPaper->Phone }} </td>
             <td> {{ $appointmentPaper->Mail }} </td>
             <td> {{ $appointmentPaper->CreatedAt }} </td>
             <td> {{ $appointmentPaper->AppointmentDate }} </td>
             <td> {{ $appointmentPaper->Description }} </td>
             <td> {{ $appointmentPaper->DoctorCertificate }} </td>
           </tr>
          @endforeach
       </table>
    </body>
 </html>