<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
</head>

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif; background-color: #f3f4f6; color: #333333;">
    <table cellpadding="0" cellspacing="0" width="100%" style="background-color: #f3f4f6; padding: 20px;">
        <tr>
            <td align="center">
                <table cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <tr>
                        <td style="text-align: center; padding: 20px; background-color: #d93025; border-radius: 10px 10px 0 0;">
                            <h1 style="margin: 0; color: #ffffff; font-size: 24px;">Registration Successful</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; padding: 20px;">
                            <img src="{{ asset('front/img/logo/chockwisehotel_logo.png') }}" alt="logo" style="max-width: 400px;width:100%">
                            <p style="font-size: 16px; color: #666666; line-height: 1.6; margin-bottom: 20px;">Hi {{$name ?? ''}},</p>
                            <p style="font-size: 16px; color: #666666; line-height: 1.6; margin-bottom: 20px;">Thank you for registering with Clockwise! We're excited to have you on board.</p>
                            <p style="font-size: 16px; color: #666666; line-height: 1.6; margin-bottom: 20px;">Your account has been successfully created. You can now access your dashboard and start exploring our features.</p>
                            <a href="{{ url('vendor/login') }}" style="display: inline-block; padding: 10px 20px; margin-top: 20px; background-color: #d93025; color: #ffffff; text-decoration: none; border-radius: 5px; font-size: 16px;">Go to Dashboard</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center; font-size: 12px; color: #999999; padding: 20px;">
                            <p>If you have any questions, feel free to <a href="mailto:hi@clockwisehotel.com" style="color: #d93025; text-decoration: none;">contact our support team</a>.</p>
                            <p>&copy; 2024 Clockwise, Inc. All rights reserved.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
