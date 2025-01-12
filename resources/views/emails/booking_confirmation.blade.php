<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p><strong>Name:</strong> {{ $bookingData['first_name'] }} {{ $bookingData['last_name'] }}</p>
    <p><strong>Email:</strong> {{ $bookingData['email'] }}</p>
    <p><strong>Phone:</strong> {{ $bookingData['phone'] }}</p>
    <p><strong>Date:</strong> {{ $bookingData['date'] }}</p>
    <p><strong>Time:</strong> {{ $bookingData['time'] }} ({{ $bookingData['time_zone'] }})</p>
    <p><strong>Additional Info:</strong> {{ $bookingData['additional_info'] ?? 'N/A' }}</p>
</body>
</html>