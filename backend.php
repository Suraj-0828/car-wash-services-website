
<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $address = htmlspecialchars(trim($_POST['address']));
    $message_content = htmlspecialchars(trim($_POST['message']));
    $ip_address = $_SERVER['REMOTE_ADDR'];

    // Recipient email
    $to = 'alpha.konn@gmail.com';
    $subject = 'Contact Us - Form Enquiry';

    // Create the HTML table for email content
    $data = '<table border="1" bordercolor="#ccc" align="center" width="650" style="width:650px;" cellpadding="10" cellspacing="0">';
    $data .= '<tr><td colspan="2" align="center"><strong>Contact Details</strong></td></tr>';
    $data .= '<tr><td>Name:</td><td>' . $name . '</td></tr>';
    $data .= '<tr><td>Email ID:</td><td>' . $email . '</td></tr>';
    $data .= '<tr><td>Phone No:</td><td>' . $phone . '</td></tr>';
    $data .= '<tr><td>Address:</td><td>' . $address . '</td></tr>';
    $data .= '<tr><td>Message:</td><td>' . $message_content . '</td></tr>';
    $data .= '<tr><td>IP Address:</td><td>' . $ip_address . '</td></tr>';
    $data .= '</table>';

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
    $headers .= 'From: Contact Us <no-reply@alphakonnect.org>' . "\r\n";

    // Send the email and redirect based on success or failure
    if (mail($to, $subject, $data, $headers)) {
        // Redirect to success page with the name as a URL parameter
        header('Location: success.php?name=' . urlencode($name));      
        exit();
    } else {
        // Redirect to failure page if mail fails
        header('Location: failed.php?name=' . urlencode($name));
        exit();
    }
}
?>
