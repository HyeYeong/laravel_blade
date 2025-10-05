<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Result</title>
</head>
<body>
    <h1>Contact Result</h1>
    <p>Thank you for your message, {{ $validated['name'] }}!</p>
    <p>{{ $validated['email'] }}</p>
    <p>{{ $validated['message'] }}</p>
    <a href="/contact">BACK TO CONTACT PAGE</a>
</body>
</html>