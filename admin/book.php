<?php
include 'db.php';
extract($_GET);
print_r($_GET);
//e_id and slot
$current_date=date("2024-02-04");

$q="select * from employee_db where e_id='$e_id'";
$result=mysqli_query($connect,$q);
$approved=0;
if($result){
    $employee_data=mysqli_fetch_assoc($result);
    echo "<script>
    confirm('to  ".$employee_data['e_mobile']." User want appointement between ".$slot."');</script>"; 
    
    echo "<script>
    if(confirm){   
        ".$approved++."   
        alert('Appointment is Approved');             
    }
    else 
        window.location='appointment.php';  
</script>"; 
    if($approved){
        $q_aprroved="update schedule set Available='0' where date='$current_date' and slots='$slot'";
        $res_approv=mysqli_query($connect,$q_aprroved);
        if($res_approv){
            echo "success";
             echo "<script> window.history.back();</script>";

        }
        else{
            echo "f";
        }
    }
    ?>
   
    <?php
}
?>
