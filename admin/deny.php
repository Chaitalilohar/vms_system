<?php
include 'db.php';
extract($_GET);

$query="update appointment_request set deny=1 where appointment_id='$appointment_id'";
$result=mysqli_query($connect,$query);
if($result){
    echo "<script> window.location='request.php'; </script>";
}
?>