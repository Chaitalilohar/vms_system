<?php
include 'header.php';
extract($_POST);
extract($_GET);

$inner_query="select DISTINCT(s.start)
from slots s 
 where s.slot_name not  in(select s.slot_name
from appointment_request a 
join slots s 
on a.start_time=s.start
where (a.end_time=s.end) and date='$date')";
$inner_query_res=mysqli_query($connect,$inner_query);
?>

<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4"></h5>
              <div class="card">
                <div class="card-body">
                  <form action="appointment-save.php?email=<?php echo $email?>" method="post">
                    
                  <div class="mb-3">
                      <label class="form-label text-dark" >Subject:</label>
                      <input value=<?php echo $subject?> type="text" name="subject" style="width:420px"; >
                    </div>  
                    <div class="mb-3">
                      <label class="form-label text-dark" >Your Name:</label>
                      <input type="text" value=<?php echo $u_name?> name="u_name" style="width:420px"; >
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark" >Your Gmail:</label>
                      <input type="text" value=<?php echo $u_gmail?> name="u_gmail" style="width:420px"; >
                    </div> 
                    <div class="mb-3">
                      <label class="form-label text-dark" >Your Mobile no:</label>
                      <input type="text" value=<?php echo $u_mobi_no?> name="u_mobi_no" style="width:420px"; >
                    </div>   
                    <div class="mb-3">
                      <label class="form-label text-dark" >Date:</label>
                      <input type="date" value=<?php echo $date?> name="date" style="width:420px"; >
                    </div>    
                    <?php
                    

                    
                    ?>            
                   
                  <div class="mb-3">
                      <label class="form-label text-dark" >Start Time:</label>
                      <select  name="start_time" >
                      
                        <?php
                            while($row=mysqli_fetch_assoc($inner_query_res)){
                                echo "<option value='".$row['start']."'>".$row['start']."</option>";
                            }
                        
                        ?>
                      </select>
                   
                        <label class="form-label text-dark" >End Time:</label>
                        <select  name="end_time" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="5">6</option>
                      </select>
                    </div>                     
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="index.php" class="btn btn-primary text-light bg-danger" >Cancel</a>
                  </form>
                </div>
              </div>
         
             
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
include 'footer.php';
?>