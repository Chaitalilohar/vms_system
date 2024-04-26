<?php
include 'db.php';
extract($_GET);
$q="update appointment_request set confirm=1 where appointment_id='$appointment_id'";
$res=mysqli_query($connect,$q);
if($res){
    $q2="select * from appointment_request  where appointment_id='$appointment_id'";
    $res2=mysqli_query($connect,$q2);
    $row= mysqli_fetch_array($res2);
    extract($row);
    $q3="select e_name from employee_db,appointment_request where e_email='$appoint_with'";
    $res3=mysqli_query($connect,$q3);
    $employee=mysqli_fetch_array($res3);
    $e_name=$employee['e_name'];
    $message1="Your appointment is fixed with $e_name";
    $message2="Your appointment is fixed with user='$request_from' with Gmail id='$user_gmail'";
    require '../admin/mailtest/sentmail.php';
    send_event_email($user_gmail,$start_time,$end_time,$message1,$date);
    send_event_email($appoint_with,$start_time,$end_time,$message2,$date);
}
else{
    echo "<script>alert('something went wrong!!!');
    window.location='request.php';</script>";
}
?>