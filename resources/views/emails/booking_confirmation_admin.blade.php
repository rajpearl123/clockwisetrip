<!-- resources/views/emails/booking_confirmation_admin.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Received</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        .content {
            font-size: 16px;
            line-height: 1.6;
        }
        .content p {
            margin-bottom: 20px;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #777;
            margin-top: 40px;
        }
        .button {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    @php
    $user=Auth::user();
    @endphp
    <div class="container">
        <div class="header">
            <!-- <img src="{{ asset('images/logo.png') }}" alt="Company Logo"> -->
        </div>
        <div class="content">
            <p>Dear Admin,</p>
            <p>A new booking has been placed by <strong>{{ $user->name }}</strong> for <strong>Property ID: {{ $booking->property_id }}</strong>.</p>
            <p><strong>Amount:</strong> ${{ $booking->amount }}</p>
            <p><strong>Payment Type:</strong> {{ $booking->payment_type }}</p>
            <p>The status of this booking is <strong>{{ $booking->status }}</strong> (pending payment).</p>
            <p>Please review the booking and take the necessary actions.</p>
            <!-- <p><a href="{{ url('/admin/bookings') }}" class="button">View All Bookings</a></p> -->
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
