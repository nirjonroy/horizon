<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation - The Horizons Unlimited</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px; color: #333;">
    <div style="max-width: 600px; margin: 0 auto; background-color: #fff; border-radius: 8px; padding: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.05);">
        <h2 style="color: #2c3e50;">Thank You for Booking a Consultation!</h2>

        <p>Dear {{ $bookingData['first_name'] }} {{ $bookingData['last_name'] }},</p>

        <p>We have received your booking request and are excited to speak with you. Below are the details of your consultation appointment:</p>

        <table style="width: 100%; margin: 20px 0; border-collapse: collapse;">
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Email:</strong></td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $bookingData['email'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Phone:</strong></td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $bookingData['phone'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Date:</strong></td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $bookingData['date'] }}</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Time:</strong></td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $bookingData['time'] }} ({{ $bookingData['time_zone'] }})</td>
            </tr>
            <tr>
                <td style="padding: 8px; border-bottom: 1px solid #eee;"><strong>Additional Info:</strong></td>
                <td style="padding: 8px; border-bottom: 1px solid #eee;">{{ $bookingData['additional_info'] ?? 'N/A' }}</td>
            </tr>
        </table>

        <p>If you have any questions or need to make changes to your appointment, feel free to reach out to us at <a href="mailto:imad@thehorizonsunlimited.com">imad@thehorizonsunlimited.com</a>.</p>

        <p>We look forward to our conversation!</p>

        <br>

        <p>Warm regards,</p>
        <p><strong>The Horizons Unlimited Team</strong><br>
        <a href="https://thehorizonsunlimited.com">www.thehorizonsunlimited.com</a></p>
    </div>
</body>
</html>
