<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EmailTitle</title>
</head>
<body>
    <h1>Hola papu</h1>
    Nombre: {{$mailData['name']}}
    Mail: {{$mailData['mail']}}
    Asunto: {{$mailData['subject']}}
    Mensaje: {{$mailData['message']}}
</body>
</html>