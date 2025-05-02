<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            line-height: 1.6;
            margin: 0 0 15px;
        }
        .footer {
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Thank You for Subscribing!</h1>
        </div>
        <div class="content">
            <p>Your subscription to our newsletter has been confirmed.</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p>We’re excited to keep you updated with our latest news and updates!</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} ClockWise Hotel. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
