@extends('front.layout.app');
@section('content')
<br><br>
<table width="100%" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; font-size: 14px; color: #333; line-height: 1.6;">
    <tr>
        <td align="center" style="padding: 20px; background-color: #f4f4f4;">
            <table width="900" cellpadding="0" cellspacing="0" style="background: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
                <tr>
                    <td style="padding: 20px; text-align: center; border-bottom: 1px solid #ddd;background-color: #d93025;">
                        <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" height="110px" width="300px" alt="logo">
                        <h2 style="margin: 0; font-size: 20px; color: #fff;">Invoice for Hotel Booking</h2>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px;">
                        <div class="d-flex justify-content-between">
                            <div>
                                <div class="detail_item" style=" display: flex;gap: 20px;margin-bottom: 5px;">
                                    <p style=" width: 46%;margin: 0;font-weight: bold;white-space: nowrap;">Invoice ID:</p>
                                    <span style="color: #555;">{{ $booking['invoice'] ?? '---' }}</span>
                                </div>
                                <div class="detail_item" style=" display: flex;gap: 20px;margin-bottom: 5px;">
                                    <p style=" width: 46%;margin: 0;font-weight: bold;white-space: nowrap;">Booking Date:</p>
                                    <span style="color: #555;">{{ $today ?? '---' }}</span>
                                </div>
                                <div class="detail_item" style=" display: flex;gap: 20px;margin-bottom: 5px;">
                                    <p style=" width: 46%;margin: 0;font-weight: bold;white-space: nowrap;">Check In Date:</p>
                                    <span style="color: #555;">{{ \Carbon\Carbon::parse($booking['check_in'])->format('d-M-Y') ?? '---' }}</span>
                                </div>
                                <div class="detail_item" style=" display: flex;gap: 20px;margin-bottom: 5px;">
                                    <p style=" width: 46%;margin: 0;font-weight: bold;white-space: nowrap;">Check Out Date:</p>
                                    <span style="color: #555;">{{ \Carbon\Carbon::parse($booking['check_out'])->format('d-M-Y') ?? '---' }}</span>
                                </div>
                            </div>
                            <div>
                                @if($booking['qr_image'])
                                @php
                                $imagePath = public_path($booking['qr_image']);
                                $imageData = base64_encode(file_get_contents($imagePath));
                                $src = 'data:image/png;base64,' . $imageData;
                                @endphp
                                <img src="{{ $src }}" alt="QR Code w dwdf" style="width: 100px;">
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>


                <tr>
                    <td style="padding: 20px;">
                        <p style="margin: 0; font-weight: bold;">User Details</p>
                        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin: 10px 0;">

                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Name </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $booking['name'] ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Contact </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">+91 {{ $booking['mobile_no'] ?? '' }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Email </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;"><a href="{{  $booking['email'] ?? '' }}" style="color: #007bff; text-decoration: none;">{{ $booking['email'] ?? '' }}</a></td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Address </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $booking['address'] ?? 'N/A' }}</td>
                            </tr>


                        </table>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 20px;">
                        <p style="margin: 0; font-weight: bold;">Hotel Details</p>
                        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin: 10px 0;">

                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Hotel Name </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $property['title'] ?? '' }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Hotel Address </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $property['address'] ?? '' }}</td>
                            </tr>

                        </table>
                    </td>
                </tr>


                <tr>
                    <td style="padding: 20px;">
                        <p style="margin: 0; font-weight: bold;">Payment Details</p>
                        <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin: 10px 0;">

                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Check In Date </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ \Carbon\Carbon::parse($booking['check_in'])->format('d-M-Y') ?? '---' }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Check Out Date </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ \Carbon\Carbon::parse($booking['check_out'])->format('d-M-Y') ?? '---' }}</td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Payment Method </td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">
                                    @if($booking['payment_method'] == '1')
                                             {{ 'Online' }}
                                        @else
                                          {{ 'Pay On Property' }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 8px; border: 1px solid #ddd;">Service Charge Amount</td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;"> {{ $booking['admin_commision'] ?? ''  }}</td>
                            </tr>

                            <tr style="font-weight: bold; background-color: #f8f8f8;">
                                <td style="padding: 8px; border: 1px solid #ddd;">Gst Amount</td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $booking['gst'] ?? '' }}</td>
                            </tr>

                            <tr style="font-weight: bold; background-color: #f8f8f8;">
                                <td style="padding: 8px; border: 1px solid #ddd;">Total Amount</td>
                                <td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ number_format($booking['amount'] ?? 0, 2) }}
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px; border-top: 1px solid #ddd;">
                        <p style="margin: 0;">Thank you for booking with us. Please keep this invoice for your records.</p>
                        <p style="margin: 10px 0;">For any queries, contact our support team at:
                            <a href="mailto:{{$adminEmail ?? '' }}" style="color: #007bff; text-decoration: none;">{{ $adminEmail ?? '' }}</a>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px; text-align: center; background-color: #f8f8f8; font-size: 12px; color: #666;">
                        <p style="margin: 0;">&copy; Copyright Hotel City {{ date('Y') }} All rights reserved</p>

                    </td>
                </tr>
                <tr>
                    <td>
                        <button id="printButton" style="display:flex;padding: 10px; background-color: #007bff; color: white; border: none; cursor: pointer;margin:20px auto;border-radius:5px;">
                            Print Invoice
                        </button>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

@endsection

@push('js')
<script>
    $(document).ready(function() {
        $('#printButton').click(function() {
            var printContents = $('table').html();
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = '<table width="100%" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; font-size: 14px; color: #333; line-height: 1.6;">' + printContents + '</table>';
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        });
    });
</script>
<script>
    $(document).ready(function () {
        history.pushState(null, null, location.href);
        $(window).on('popstate', function () {
            history.pushState(null, null, location.href);
        });
        setTimeout(function () {
            history.back();
        }, 100);
    });
</script>

@endpush