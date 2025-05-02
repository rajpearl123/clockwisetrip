<!DOCTYPE html>
<html>
<head>
    <title>Property Status Update</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-height: 100px; /* Adjust the height as needed */
        }
        .content {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 0.9em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" height="110px" width="300px" style="background-color: #d93025;" alt="Company Logo">
    </div>

    <div class="content">
        <h1>Property Status Update</h1>
        <p>Hello</p>
        <p>The status of the property titled <strong>{{ $property->title }}</strong> has been updated.</p>
        <p><strong>New Status:</strong> {{ $property->status ? 'Active' : 'Inactive' }}</p>
        <p>Thank you,</p>
    </div>

    <div class="footer">
        <p style="margin: 10px 0;">For any queries, contact our support team at:
            <a href="mailto:{{$adminEmail ?? '' }}" style="color: #007bff; text-decoration: none;">{{ $adminEmail ?? '' }}</a>
        </p>
        <p>&copy; Copyright Hotel City {{ date('Y') }} All rights reserved</p>
    </div>
</body>
</html>
