<?php
// Recipient email
$to = "cloud@jimfiresafaris.com";

// Subject
$subject = "Payment Received for Your Google Cloud Services";

// Headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: Google Cloud Team <no-reply@google.com>" . "\r\n";

// Message body
$message = '
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .header {
            text-align: center;
            padding: 10px 0;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            padding: 20px;
            line-height: 1.6;
        }
        .content h1 {
            color: #4285F4;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Google Logo">
        </div>
        <div class="content">
            <h1>Payment Confirmation</h1>
            <p>Hi Moses,</p>
            <p>Thank you for your payment.</p>
            <p>We’ve received your payment of <strong>$200.00 USD</strong> for your Google Cloud services subscription on <strong>[Payment Date]</strong>.</p>
            <h2>Payment Details:</h2>
            <ul>
                <li><strong>Amount:</strong> $200.00</li>
                <li><strong>Invoice ID:</strong> 6779251122112</li>
                <li><strong>Payment Method:</strong> Credit Card ending in ***8976]</li>
                <li><strong>Transaction ID:</strong> 102012213823</li>
            </ul>
            <p>Your account has been updated, and your subscription will continue as per your current plan. No further action is required.</p>
            <p>For more information, you can view your invoice and payment history in the <a href="https://console.cloud.google.com/billing" style="color: #4285F4;">Billing section</a> of your Google Cloud Console.</p>
            <p>If you have any questions or need support, please visit our <a href="https://support.google.com" style="color: #4285F4;">Help Center</a> or contact us at <a href="mailto:support@google.com" style="color: #4285F4;">support@google.com</a>.</p>
        </div>
        <div class="footer">
            <p>Google LLC | 1600 Amphitheatre Parkway | Mountain View, CA 94043</p>
            <p>You are receiving this email because of your subscription to Google Cloud services.</p>
        </div>
    </div>
</body>
</html>
';

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>
