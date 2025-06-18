<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horizon-Admin Login</title>
</head>
<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <input type="text" name="name" id="">
        <input type="text" name="email" id="">
        <input type="text" name="password" id="">
        <input type="text" name="password_confirmation" id=""><br>
        <input type="submit" value="submit">
    </form>

</body>
</html>
