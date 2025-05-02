<table width="100%" cellpadding="0" cellspacing="0" style="font-family: Arial, sans-serif; font-size: 14px; color: #333; line-height: 1.6;">
	<tr>
		<td align="center" style="padding: 20px; background-color: #f4f4f4;">
			<table width="100%" cellpadding="0" cellspacing="0" style="background: #ffffff; border: 1px solid #ddd; border-radius: 8px;">
				<tr>
					<td style="padding: 5px 20px; text-align: center; border-bottom: 1px solid #ddd; background-color: #d93025;">
						@php
						$logoPath = public_path('front/img/logo/clockwise_trip.jpg');
						$logoData = base64_encode(file_get_contents($logoPath));
						$logoSrc = 'data:image/png;base64,' . $logoData;
						@endphp
						<img src="{{$logoSrc}}" height="80px" width="300px" alt="logo">
						<h2 style="margin: 0; font-size: 20px; color: #fff;">Invoice for Hotel Booking</h2>
					</td>
				</tr>
				<tr>
					<td style="padding: 20px;">
						<table style="width: 100%; border-collapse: collapse;">
							<tbody>
								<tr>
									<td style="width: 50%; vertical-align: top;">
										<table width="100%">
											<tr>
												<td style="padding: 5px; font-weight: bold; white-space: nowrap;">Invoice ID:</td>
												<td style="padding: 5px; color: #555;">{{ $booking['invoice'] ?? '---' }}</td>
											</tr>
											<tr>
												<td style="padding: 5px; font-weight: bold; white-space: nowrap;">Booking Date:</td>
												<td style="padding: 5px; color: #555;">{{ $today ?? '---' }}</td>
											</tr>
											<tr>
												<td style="padding: 5px; font-weight: bold; white-space: nowrap;">Check-In Date:</td>
												<td style="padding: 5px; color: #555;">{{ \Carbon\Carbon::parse($booking['check_in'])->format('d-M-Y') ?? '---' }}</td>
											</tr>
											<tr>
												<td style="padding: 5px; font-weight: bold; white-space: nowrap;">Check-Out Date:</td>
												<td style="padding: 5px; color: #555;">{{ \Carbon\Carbon::parse($booking['check_out'])->format('d-M-Y') ?? '---' }}</td>
											</tr>
										</table>
									</td>
									<td style="width: 50%; vertical-align: top; text-align: right;">
										@if($booking['qr_image'])
											@php
											$imagePath = public_path($booking['qr_image']);
											$imageData = base64_encode(file_get_contents($imagePath));
											$src = 'data:image/png;base64,' . $imageData;
											@endphp
											<img src="{{ $src }}" alt="QR Code" style="max-width: 100px; max-height: 100px;">
										@endif
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<!-- User Details Section -->
				<tr>
					<td style="padding: 20px;">
						<p style="margin: 0; font-weight: bold;">User Details</p>
						<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; margin: 10px 0;">
							<tr>
								<td style="padding: 8px; border: 1px solid #ddd;">Name</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $booking['name'] ?? 'N/A' }}</td>
							</tr>
							<tr>
								<td style="padding: 8px; border: 1px solid #ddd;">Contact</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">+91 {{ $booking['mobile_no'] ?? '' }}</td>
							</tr>
							<tr>
								<td style="padding: 8px; border: 1px solid #ddd;">Email</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">
									<a href="mailto:{{ $booking['email'] ?? '' }}" style="color: #007bff; text-decoration: none;">{{ $booking['email'] ?? '' }}</a>
								</td>
							</tr>
							<tr>
								<td style="padding: 8px; border: 1px solid #ddd;">Address</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $booking['address'] ?? 'N/A' }}</td>
							</tr>
						</table>
					</td>
				</tr>
				<!-- Payment Details Section -->
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
								<td style="padding: 8px; border: 1px solid #ddd;">Payment Method</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">
									{{ $booking['payment_method'] == '1' ? 'Online' : 'Pay On Property' }}
								</td>
							</tr>
							<tr>
								<td style="padding: 8px; border: 1px solid #ddd;">Service Charge Amount</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $booking['admin_commision'] ?? '' }}</td>
							</tr>
							<tr style="font-weight: bold; background-color: #f8f8f8;">
								<td style="padding: 8px; border: 1px solid #ddd;">GST Amount</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ $booking['gst'] ?? '' }}</td>
							</tr>
							<tr style="font-weight: bold; background-color: #f8f8f8;">
								<td style="padding: 8px; border: 1px solid #ddd;">Total Amount</td>
								<td style="padding: 8px; border: 1px solid #ddd; text-align: right;">{{ number_format($booking['amount'] ?? 0, 2) }}</td>
							</tr>
						</table>
					</td>
				</tr>
				<!-- Footer Section -->
				<tr>
					<td style="padding: 20px; border-top: 1px solid #ddd;">
						<p style="margin: 0;">Thank you for booking with us. Please keep this invoice for your records.</p>
						<p style="margin: 10px 0;">For any queries, contact our support team at:
							<a href="mailto:{{ $adminEmail ?? '' }}" style="color: #007bff; text-decoration: none;">{{ $adminEmail ?? '' }}</a>
						</p>
					</td>
				</tr>
				<tr>
					<td style="padding: 10px; text-align: center; background-color: #f4f4f4; border-top: 1px solid #ddd;">
						<p style="font-size: 12px; color: #888;">© 2025 All rights reserved.</p>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
