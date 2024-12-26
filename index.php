




<?php$to = 'mkiragu@gmail.com';$subject = 'Payment Received for Your Google Cloud Services';$message = 'Hello Bango,

Thank you for your payment.

We’ve received your payment of $200.00 USD for your Google Cloud services subscription on 03/12/2024.

Payment Details:

•    Amount: $200.00

•    Invoice ID: 68286153974

•    Payment Method: Credit Card ending in ****8976

•    Transaction ID: 1787849416

Your account has been updated, and your subscription will continue as per your current plan. No further action is required.

For more information, you can view your invoice and payment history in the Billing section of your Google Cloud Console: Billing Console.

If you have any questions or need support, please visit our Help Center or contact us at support.cloud@google.com.

Thank you for choosing Google Cloud.

Best regards,
 

The Google Cloud Team

Google LLC | 1600 Amphitheatre Parkway | Mountain View, CA 94043

You are receiving this email because of your subscription to Google Cloud services.';$headers = 'From: payments@cloud.google.com' . "\r\n";mail($to, $subject, $message, $headers);?>