<?php
include "header.php";
extract($_GET);
$q="select * from appointment_request where ticket_id='$ticket_id' and confirm=1";
$result=mysqli_query($connect,$q);


?>
<style>
    /********* download-ticket styles  ************/
   
.ticket-container {
     position: relative;
    height: 300px;
    padding: 10px; 
    width: 300px;
    margin: auto;
    border: 2px solid black;
    border-radius: 10px;
    margin-top: 50px;
}

.ticket-details {
    max-width: 60%;
   
    padding: 20px;
    border-radius: 5px;
   
    color: black;
}

.qr-code {
    margin: auto;
    border: 1px solid #ddd;
    border-radius: 5px;
    width: 100px;
}
.qr-code img{
    height: 120px;
    width: 120px;
    margin:auto;
}

.download-button {
    text-align: center;
    margin-top: 20px;
}

.download-button a {
    display: inline-block;
    padding: 10px 15px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.download-button a:hover {
    background-color: #0056b3;
}
</style>
<?php
if(mysqli_num_rows($result)>=1){
    $row=mysqli_fetch_array($result);
?>
    <main>
   
        <div class="ticket-container" id="ticket_container">
            <div class="ticket-details">
                <p style="color: #007BFF; font-weight: bold;">Appointment QR</p>
                <p>Date: <?php echo $row['date']; ?></p>

                <!-- convert start time from 24 to 12 and display it -->
               
                <p>Time: <?php echo $row['start_time']; ?> - <?php echo  $row['end_time']; ?></p>
                <p>Appointment with:<?php echo $row['appoint_with'];?></p>                
            </div>
            <div class="qr-code">
                <!-- Add your QR code here or placeholder content -->
                <img src="<?php echo $row['qr_image']; ?>"  alt="QR code here">
            </div>
        </div>

        

        
        <!-- code for saving ticket as png -->
        <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script> <!--html to canvas library including -->


        <div class="download-button" onclick="saveAsImage()">
            <a href="#" >Download Ticket</a>
        </div>

        <script>
            function saveAsImage() {
            html2canvas(document.getElementById('ticket_container')).then(function(canvas) {
                var link = document.createElement('a');
                link.href = canvas.toDataURL('image/png');
                link.download = 'div_image.png';
                link.click();
            });
            }
        </script>
    </main>
<?php
}
else {
    echo "<script>alert('Wait for a while'); window.location='index.php';</script>";
}
include "footer.php";
?>