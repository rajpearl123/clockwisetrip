<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP Code</title>
    <style>
        /* General Reset */
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Container */
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header Section */
        .email-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #ececec;
        }

        .email-header h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        /* OTP Section */
        .otp-section {
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            text-align: center;
        }

        .otp-code {
            font-size: 32px;
            font-weight: bold;
            color: #2c7a7b;
            background-color: #e9f7f7;
            padding: 10px 20px;
            border-radius: 6px;
            display: inline-block;
        }

        /* Instructions Section */
        .instructions {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
            line-height: 1.6;
        }

        .instructions p {
            margin: 5px 0;
        }

        /* Footer Section */
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #999;
        }

        .footer a {
            color: #2c7a7b;
            text-decoration: none;
        }

        /* Responsive */
        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 15px;
            }
            .otp-code {
                font-size: 28px;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Your OTP Code</h1>
        </div>

        <!-- OTP Section -->
        <div class="otp-section">
            <p><strong>Your OTP code is:</strong></p>
            <p class="otp-code">{{ $otp }}</p>
        </div>

        <!-- Instructions -->
        <div class="instructions">
            <p>This OTP code is valid for 10 minutes. Please enter it on the website to proceed.</p>
            <p>If you did not request this OTP, please ignore this email.</p>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>Thank you for using our service!</p>
            
        </div>
    </div>
</body>
</html>
