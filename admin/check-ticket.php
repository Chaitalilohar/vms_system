<?php
include "header-admin.php";
?>

 <!-- Include the html5-qrcode library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     
    <style>
        .main-style{
            width: 60%;
            margin: auto;
        }
        .scanner-js {
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        
        #reader {
            width: auto;
            height: auto;
            border: none;
            margin: 0;
            position: relative;
    
        }

        .main-style form{
            padding: 0;
           
        }

    </style>

<main class='main-style'>
    <!-- Element where the scanner will be initialized -->
    <div id="reader" class="scanner-js"></div>
    <!-- Hidden form -->
    <form id="myForm" action="verify-ticket.php" method="post">
        <input type="hidden" id="ticket_id" name="ticket_id" value="">
    </form>
</main>


    <script>
        const scanner = new Html5QrcodeScanner('reader', { 
            qrbox: {
                width: 300,
                height: 300,
            },
            fps: 20,
        });

        scanner.render(success, error);

        function success(result) {
            const ticket_id = extractTicketId(result); // Extract ticket ID from QR code result

            // Set the ticket ID value to the hidden input field
            document.getElementById('ticket_id').value = ticket_id;

            // Submit the form
            document.getElementById('myForm').submit();

            scanner.clear();
            document.getElementById('reader').remove();
        }

        function error(err) {
            console.error(err);
        }

        function extractTicketId(result) {
            // Example implementation of extracting ticket ID from QR code result
            // Modify this function according to your QR code format
            // For example, if your QR code contains only the ticket ID, you can simply return the result
            return result;
        }
    </script>

<?php
include "footer.php";
?>