<?php
include 'header.php';
    $q="select * from appointment_request where confirm=1";
    $result=mysqli_query($connect,$q);
    ?> 
  <body>
  <div class="card w-100">
    <div class="card-body p-6">
      <h5 class="card-title fw-semibold mb-4"></h5>
      <div class="table-responsive">
        <table class="table text-nowrap mb-0 align-middle">
          <thead class="text-dark fs-4">
            <tr>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Appointment Id</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">With</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">User</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Date</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Start Time</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">End Time</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Subject</h6>
              </th>
              <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Download</h6>
              </th>
            </tr>
            <?php
              while($row=mysqli_fetch_assoc($result)){
                echo "<tr><th>".$row['appointment_id']."</th>
                <th>".$row['appoint_with']."</th>
                <th>".$row['request_from']."</th>
                <th>".$row['date']."</th>
                <th>".$row['start_time']."</th>
                <th>".$row['end_time']."</th>
                <th>".$row['subject']."</th>
                <th><a href='ticket-download.php?ticket_id=".$row['ticket_id']."'>Download</a></th></tr>";
              }            
            ?>
          </thead>
          <tbody>  
  </body>  
<?php

?>