<?php session_start();
include 'header.php';
$query_select="select * from employee_db";
$result=mysqli_query($connect,$query_select);
if($result){
?>
<html>
    <body>
    <div class="col-lg-10 d-flex ">
            <div class="card w-100">
              <div class="card-body p-6">
                <h5 class="card-title fw-semibold mb-4"></h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Gender</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Designation</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Post</h6>
                        </th>
                       <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Email</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Schedule</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                         while($row=mysqli_fetch_assoc($result)){
                            echo "<tr><td>".$row['e_id']."</td>
                            <td>".$row['e_name']."</td>
                            <td>".$row['e_gender']."</td>
                            <td>".$row['e_designation']."</td>
                            <td>".$row['e_post']."</td>
                            <td>".$row['e_email']."</td>
                            <td><a href='schedule.php?e_id=".$row['e_id']."' class='text-primary'>Show</a></td></tr>";
                        }
                    }
                        ?>
                    </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>                 
    </body>
</html>
<?php
 
include 'footer.php';
?>