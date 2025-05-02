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
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .body {
            padding: 20px;
            background-color: #f8f9fa;
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
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        a.button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Welcome, {{ $user->name }}!</h1>
        </div>
        <div class="body">
            <p>Thank you for joining us!</p>
            <p>We're glad to have you on board. If you have any questions, feel free to reach out!</p>
            <a href="{{ url('/contactus') }}" class="button">Contact Us</a>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Clockwise Hotel. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
