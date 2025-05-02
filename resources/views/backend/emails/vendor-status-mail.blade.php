<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Platform</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            font-size: 16px; /* Default font size */
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .header {
            background-color: #AB3331;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .body {
            padding: 20px;
            background-color: #f8f9fa;
            font-size: 1rem; /* Adjusts font size for readability */
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            padding: 10px 0;
        }
        a.button {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 20px;
            background-color: #AB3331;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1rem; /* Button font size */
        }
        a.button:hover {
            background-color: #AB3331;
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            .container {
                max-width: 90%;
                margin: 20px auto;
                padding: 15px;
            }
            .body {
                font-size: 1.1rem; /* Increase font size on smaller screens */
            }
            .footer {
                font-size: 14px; /* Slightly increase footer text size */
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.5rem; /* Adjust header font size for small screens */
            }
            .body {
                font-size: 1.2rem; /* Slightly larger text for readability */
            }
            a.button {
                padding: 12px 18px; /* Larger button on small screens */
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    @if($status == 1)
        <div class="container">
            <div class="header">
                <h1>Dear, {{ $name }}!</h1>
            </div>
            <div class="body">
                <p>The admin has noticed some unusual activities and has suspended your account. To recover your account and resume listing your properties and other activities, please contact the admin.</p>
                <p>We're glad to have you on board. If you have any questions, feel free to reach out!</p>
                <a href="{{ url('/contactus') }}" class="button text-center">Contact Us</a>
            </div>
            <div class="footer">
                <p>&copy; {{ date('Y') }} Clockwise Hotel. All rights reserved.</p>
            </div>
        </div>
    @else
        <div class="container">
            <div class="header">
                <h1>Dear, {{ $name }}!</h1>
            </div>
            <div class="body">
                <p>Your account has been approved by the admin. You can now list your properties and continue with other activities.</p>
                <p>We're glad to have you back on board. If you have any questions, feel free to reach out!</p>
                <a href="{{ url('/contactus') }}" class="button text-center">Contact Us</a>
            </div>
            <div class="footer">
                <p>&copy; {{ date('Y') }} Clockwise Hotel. All rights reserved.</p>
            </div>
        </div>
    @endif
</body>
</html>
