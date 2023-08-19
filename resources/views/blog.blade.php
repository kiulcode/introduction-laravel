<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Listado</h3>
    @foreach($posts as $post)
        <p>
            <strong>{{ $post['id'] }}</strong>
        </p>
        <a href="">{{ $post['title'] }}</a>
    @endforeach
</body>
</html>
