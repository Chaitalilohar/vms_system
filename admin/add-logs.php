<?php
include "db.php";
extract($_POST); //create variables $ticket_id and $vehicle_number
$q="SELECT   *
    FROM  `appointment_request` 
    where appointment_request.ticket_id='$ticket_id'";
$result=mysqli_query($connect,$q);
$row=mysqli_fetch_array($result);
extract($row);
// setting detfault timezone in india
date_default_timezone_set('Asia/Kolkata');
// echo date("Y-m-d H:i:s", time());;

$q1= "insert into appointment_logs
     (ticket_id,user_name,appointment_with,timestamp)
     values
     ('$ticket_id','$request_from','$appoint_with',NOW())";
$result1=mysqli_query($connect,$q1);
if($result1){

    // setting appointment status to 1 means yes
    $q2="update appointment_logs set appointment_status=1 where ticket_id='$ticket_id'";
    $result2=mysqli_query($connect,$q2);

    echo "<script>
          alert('log added');
          window.location.href='check-ticket.php';
          </script>";
}
else{
    echo "<script>
          alert('something went wrong.');
          window.location.href='check-ticket.php';
          </script>";
}
?>