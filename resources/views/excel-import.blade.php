<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/issues/import" method="post" enctype="multipart/form-data">
        <!--always use the enctype when wanting to upload something -->
        @csrf
        <input type="file" name="excelFile" id="">
        <input type="submit" value="Submit">
    </form>

    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</body>
</html>
