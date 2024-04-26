<?php
include "header.php";
$ticket_id=$_POST['ticket_id'];

// vefifying ticket in the appointment_request table if it is valid booking or not
$verify_ticket="select * from appointment_request where ticket_id='$ticket_id'";
$result=mysqli_query($connect,$verify_ticket);

//if ticket id present in appointment_request then
if(mysqli_num_rows($result)==1){
    $q="select * from appointment_logs where ticket_id ='$ticket_id'";
    $result1=mysqli_query($connect,$q);

    if(mysqli_num_rows($result1)== 1){
        $row1=mysqli_fetch_array($result1);

        //NOTE:-  check-out: 0 , used:1
        
        if($row1["appointment_status"]== 0){
            //for check out set value of status to 1
            $q2= "update appointment_logs set appointment_status=1 where ticket_id='$ticket_id'";
            $result3=mysqli_query($connect,$q2);
            echo "
            <script> 
            alert('Check Out Successfull.'); 
            window.location.href='check-ticket.php';
            </script>
            ";
        }
        else
        {
            //for used ticket
            echo "
            <script> 
            alert('Ticket Already Used Or Expired'); 
            window.location.href='check-ticket.php';
            </script>
            ";
        }
    }
    
    //if ticket is verified in bookings
    echo"
    <script> 
        alert('Ticket Verified For Check In.'); 
       
    </script>
    ";
}
else{
    echo "<script>
    alert('invalid ticket!');
    window.location.href = 'check-ticket.php';
    </script>";
}


?>
<main>
    <form action="add-logs.php" method="post">
        <input type="hidden" name='ticket_id' value="<?php echo $ticket_id; ?>" >
        <button type="submit" name='submit'>Allow</button>
    </form>
</main>
<?php
include "footer.php";
?>