<!DOCTYPE html>
<html>
<body style="font-family: Arial, sans-serif; color:#0a1428; line-height:1.6;">
    <h2 style="color:#2f7fff;">New Site Assessment Request</h2>

    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Service needed:</strong> {{ $data['service'] ?? 'Not specified' }}</p>

    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] ?? '—' }}</p>

    <hr style="border:none;border-top:1px solid #eee;margin:24px 0;">
    <p style="font-size:12px;color:#888;">Sent from the Xtream Services website contact form.</p>
</body>
</html>