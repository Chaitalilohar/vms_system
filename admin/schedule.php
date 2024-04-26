<?php session_start();
include 'header.php';
if(isset($_GET['e_id'])){
    $e_id=$_GET['e_id'];
    echo $e_id;
    if(isset($_REQUEST['search'])){
      extract($_GET);
      $query_search="select a.*
      from employee_db e
      join appointment_request a 
      on  a.appoint_with=e.e_email and (e.e_id='1' and date='$search')";
      $search_result=mysqli_query($connect,$query_search);
      if($search_result){
        echo "  <div class='col-lg-10 d-flex '>
        <div class='card w-100'>
          <div class='card-body p-6'>
            <h5 class='card-title fw-semibold mb-4'></h5>
            <div class='table-responsive'>
              <table class='table text-nowrap mb-0 align-middle'><tr><th colspan=3>Employee<br></th></tr><tr><th>Date</th><th>Start Time</th><th>End Time</th><th>Visitor</th></tr>";    
        while($employee1=mysqli_fetch_assoc($search_result)){
         
            echo "<tr><td>".$employee1['date']."</td>
            <td>".$employee1['start_time']."</td>
            <td>".$employee1['end_time']."</td>
            <td>".$employee1['request_from']."</td></tr>";              
        }
        echo "</table></div></div></div></div>";  

    }

    }
    
    $query_select2="select a.date,a.start_time,a.end_time,a.request_from
    from employee_db e
    join appointment_request a 
    on  a.appoint_with=e.e_email and e.e_id='$e_id'";
    $result=mysqli_query($connect,$query_select2);
    // $employee=mysqli_fetch_assoc($result);
  ?>
  <html>
    <body>
          <form  action="" method="get">
              <input type="search" name="search" placeholder="Search here date ">
              <button name="search" class="btn bg-success">search</button>
          </form>

    </body>
  </html>
  <?php 
    if($result){
        echo "  <div class='col-lg-10 d-flex '>
        <div class='card w-100'>
          <div class='card-body p-6'>
            <h5 class='card-title fw-semibold mb-4'></h5>
            <div class='table-responsive'>
              <table class='table text-nowrap mb-0 align-middle'><tr><th colspan=3>Employee<br></th></tr><tr><th>Date</th><th>Start Time</th><th>End Time</th><th>Visitor</th></tr>";    
        while($employee=mysqli_fetch_assoc($result)){
         
            echo "<tr><td>".$employee['date']."</td>
            <td>".$employee['start_time']."</td>
            <td>".$employee['end_time']."</td>
            <td>".$employee['request_from']."</td></tr>";              
        }
        echo "</table></div></div></div></div>";    
        

    }
}
?>