<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Dylan Gonzales">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
</head>
<body>
    <x-responsive>
        <div class="flex justify-center items-center space-x-10 pt-[100px]">
            <div class="w-[500px]">
                <h1>¿Interesado?</h1>
                <p>
                    Si tienes alguna pregunta sobre mí o mis proyectos, no dudes 
                    en ponerte en contacto enviándome un correo.
                </p>
                <p>Déjame un comentario o pregunta y cuéntame qué es lo que quieres armar.</p>
                <p class="mt-4">Para contacto directo:</p>
                <a href="mailto:1913010909@untels.edu.pe?Subject=Interesado%20en%20tu%20CV">
                    1913010909@untels.edu.pe
                </a>
            </div>            
            <form action="{{route('contactanos.send')}}" method="POST">
                <div class="flex flex-col">
                    @csrf
                    <p>Nombre:</p>
                    <input type="text" name="name">
                    <p>Correo:</p>
                    <input type="email" name="mail">
                    <p>Asunto:</p>
                    <input type="text" name="subject">
                    <p>Mensaje:</p>
                    <input type="text" name="message">
                    <input type="submit" value="Confirmar">
                </div>
            </form>
        </div>  
    </x-responsive>
</body>
</html>
<script src="{{ mix('js/app.js') }}" defer></script>