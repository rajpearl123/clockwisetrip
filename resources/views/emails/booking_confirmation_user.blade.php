<!-- resources/views/emails/booking_confirmation_user.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
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
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
	@php
	$user=Auth::user();
	@endphp
    <div class="container">
        <div class="header">
        
        @php
            $bookings = DB::table('orders')->where('user_id', Auth::user()->id)->first();
            $propertyDetail = DB::table('propertys')->where('id', $booking->property_id)->first();
            $bookingDates = DB:: table('booking_now')->where('property_id', $booking->property_id)->first();
        @endphp

        <table id="invoice" width="100%" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; font-size: 14px; color: #333; line-height: 1.6;">
            <tr>
                <td align="center" style="padding: 20px; background-color: #f4f4f4;">
                    <table width="800" cellpadding="0" cellspacing="0" style="background: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
                        <tr>
                            <td style="padding: 20px; text-align: center; border-bottom: 1px solid #ddd;">
                            <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="Company Logo" style="width: 120px; height: auto; margin-bottom: 10px;">
                            <h2 style="margin: 0; font-size: 20px; color: #333;">Invoice for ClockWise Hotel</h2>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 20px;">
                                <p style="margin: 0; font-weight: bold;">Invoice ID: <span style="color: #555;">{{ $bookings->order_id ?? '---' }}</span></p>
                                <p style="margin: 5px 0;">Booking Date: <span style="color: #555;">{{ now()->format('d-m-Y H:i:s') }}</span></p>
                                <p style="margin: 5px 0;">Rooms Booked: <span style="color: #555;">{{ $bookingDates->room ?? '---' }}</span></p>
                                <p style="margin: 5px 0;">Booked for Dates: <span style="color: #555;">{{ \Carbon\Carbon::parse($bookingDates->check_in_time)->format('d-M-Y') ?? '---' }} from {{ \Carbon\Carbon::parse($bookingDates->check_out_time)->format('d-M-Y') ?? '---' }}</span></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 20px; border-bottom: 1px solid #ddd;">
                                <table width="100%" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td style="padding: 10px 0;">
                                            <p style="margin: 0; font-weight: bold;">User Details</p>
                                            <p style="margin: 5px 0;">Name: <span style="color: #555;">{{ Auth::user()->name ?? 'N/A'  }} </span></p>
                                            <p style="margin: 5px 0;">Mobile No: <span style="color: #555;">+91 {{ Auth::user()->mobile_no ?? 'N/A' }}</span></p>
                                            <p style="margin: 5px 0;">Email: <a href="mailto:{{ $user['email'] }}" style="color: #007bff; text-decoration: none;">{{ Auth::user()->email ?? '' }}</a></p>
                                        </td>
                                        <td style="padding: 10px 0; text-align: left;">
                                            <p style="margin: 0; font-weight: bold;">Hotel Details</p>
                                            <p style="margin: 5px 0;">Hotel Name: <span style="color: #555;">{{ $propertyDetail->title ?? '' }}</span></p>
                                            <p style="margin: 5px 0;">Hotel Address: <span style="color: #555;">{{ $propertyDetail->address ?? '' }}</span></p>


                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td style="padding: 20px;">
                                <p style="margin: 0;">Payment Details</p>
                                <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin: 10px 0;">

                                    <tr style="background-color: #f8f8f8;">
                                        <td style="padding: 8px; border: 1px solid #ddd;">Total Amount</td>
                                        <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">₹ {{ $booking->amount ?? '' }}</td>
                                    </tr>
                                    

                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 20px; border-top: 1px solid #ddd;">
                                <p style="margin: 0;">Thank you for booking with us. Please keep this invoice for your records.</p>
                                <p style="margin: 10px 0;">For any queries, contact our support team at:
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 10px; text-align: center; background-color: #f8f8f8; font-size: 12px; color: #666;">
                                <p style="margin: 0;">&copy; Copyright © ClockWise Hotel {{ date('Y') }} All rights reserved</p>

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        
    </div>
</body>
</html>
