<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if (Auth::check())
        <h1> Your name is: {{ Auth::user() -> name }} </h1>
        <br>
        <h2> Your email is: {{ Auth::user() -> email }} </h2>

    @else
         You are not logged in.
    @endif

</body>
</html>
