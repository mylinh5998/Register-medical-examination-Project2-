<html>
   <head>
      <title>Appointment | Add</title>
      

   <body>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Tên</td>
               <td><input type='text' name='name' /></td>
            </tr>
            <tr>
               <td>SĐT</td>
               <td><input type='text' name='phone' /></td>
            </tr>
            <tr>
               <td>Email</td>
               <td><input type='text' name='mail' /></td>
            </tr>
            <tr>
               <td>Tuổi</td>
               <td><input type='text' name='age' /></td>
            </tr>
            <tr>
               <td>Ngày hẹn</td>
               <td><input type='text' name='appointment_date' /></td>
            </tr>
            <tr>
               <td>Mô tả</td>
               <td><input type='text' name='description' /></td>
            </tr>
            <tr>
               <td>Chức vị</td>
               <td><input type='text' name='doctor_certificate' /></td>
            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
      </form>
      
      <br>
      
   </body>
</html>