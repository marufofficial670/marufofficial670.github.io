<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Include the database connection
require('include\config.php');

if (isset($_POST['sendmsg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Load Composer's autoloader
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/Exception.php';
    require 'PHPMailer/SMTP.php';

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();                    // Send using SMTP
        $mail->Host = 'smtp.gmail.com';     // Set the SMTP server to send through
        $mail->SMTPAuth = true;             // Enable SMTP authentication
        $mail->Username = 'aryelpha670@gmail.com'; // SMTP username
        $mail->Password = 'drvz lalo uscp jxrs';  // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable implicit TLS encryption
        $mail->Port = 587;                  // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('aryelpha670@gmail.com', 'Portfolio');
        $mail->addAddress('ahammadalmarufofficial@gmail.com', 'Owner'); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "Subject - $subject";
        $mail->Body = "<strong>Name</strong> - $name <br> <strong>Email</strong> - $email <br> <strong>Message</strong> - $message";

        // Send the email
        $mail->send();

        // SQL query to insert data into the table
        $sql = "INSERT INTO contact (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";

            // Output JavaScript for redirection
            echo '<script>window.location.href = "successful.php";</script>';
           exit;
//            header('Location: successful.php');
//            exit;

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}


// Close the database connection
$conn->close();
?>



<!-- Your HTML form goes here -->
<form method="post" role="form" class="contact-form">
    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
        </div>

        <div class="col-md-12 text-center mt-3">
            <button type="submit" class="button button-a button-big button-rouded" name="sendmsg">Send Message</button>
        </div>
    </div>
</form>