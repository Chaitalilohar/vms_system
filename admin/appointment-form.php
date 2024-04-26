<?php
include 'header.php';
extract($_GET);
$q="select * from employee_db where e_id='$e_id'";
$res=mysqli_query($connect,$q);
if($res){
    $row=mysqli_fetch_assoc($res);

?>
<div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                  <form action="appointment-form-2.php?email=<?php echo $row['e_email']; ?>" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Appopintment with,</label>
                      <input type="email" name="email"  value=<?php echo $row['e_email'];?> style="width:420px";  id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark" >Subject:</label>
                      <input type="text" name="subject" style="width:420px"; >
                    </div>  
                    <div class="mb-3">
                      <label class="form-label text-dark" >Your Name:</label>
                      <input type="text" name="u_name" style="width:420px"; >
                    </div>
                    <div class="mb-3">
                      <label class="form-label text-dark" >Your Gmail:</label>
                      <input type="text" name="u_gmail" style="width:420px"; >
                    </div> 
                    <div class="mb-3">
                      <label class="form-label text-dark" >Your Mobile no:</label>
                      <input type="text" name="u_mobi_no" style="width:420px"; >
                    </div>   
                    <div class="mb-3">
                      <label class="form-label text-dark" >Date:</label>
                      <input type="date" name="date" style="width:420px"; >
                    </div>                
                   
                    <button type="submit" class="btn btn-primary">Next</button>
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
   
}
include 'footer.php';
?>