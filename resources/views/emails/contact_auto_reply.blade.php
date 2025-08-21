<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Thank you</title>
</head>

<body>
    <p>Hi {{ $formData['name'] ?? 'there' }},</p>

    <p>Thank you for contacting us. We have received your message and will get back to you soon.</p>

    <p>Best regards,<br>
        {{ config('app.name') }}</p>
</body>

</html>
