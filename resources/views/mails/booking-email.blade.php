<!DOCTYPE html>
<html>
<head>
    <title>Booking Invoice</title>
</head>
<body>
    @if($isAdmin)
        <p>Hello, Admin</p>
        <p>One booking has been received.</p>
        <p>Please find the invoice attached below.</p>
    @else
        <p>Hello, {{ $user->name ?? 'Customer' }}</p>
        <p>Your booking is confirmed.</p>
        <p>Please find your invoice attached below.</p>
    @endif
</body>
</html>