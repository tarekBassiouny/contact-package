<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us any time</h1>
    <form action="{{ route('contact') }}" method="POST">

        @csrf
        <input type="text" name="name" placeholder="Your Name Please">
        <input type="email" name="email" placeholder="Your Valid email">
        <textarea name="message" cols="30" rows="10" placeholder="Your Query"></textarea>

        <input type="submit" value="submit">
    </form>
</body>
</html>