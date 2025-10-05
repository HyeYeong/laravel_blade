<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact page</title>
</head>
<body>
    <h1>Contact Form</h1>
    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- form -->
    <form action="/contact" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>
        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ old('email') }}">
        <br><br>
        <label for="message">Message:</label>
        <textarea name="message">{{ old('message') }}</textarea>
        <br><br>
        <br><br>
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>