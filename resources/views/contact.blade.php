<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Dylan Gonzales">
    <title>About</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" >
    <style>
        .container{
            color: white
        }
        div>input{
            border-radius: 10px;
            padding: 5px;
            width: 100%
        }
        a{
            color: white
        }
    </style>
</head>
<body>
    <x-responsive>
        <div class="flex justify-center items-center space-x-10 pt-[200px]">
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
            <form action="{{route('contactanos.mailsend')}}" method="POST">
                <div class="w-[700px] bg-stone-800 rounded-lg">
                    <div class="container flex flex-col space-y-4 p-4">
                        @csrf
                        <div>
                            <p>Nombre:</p>
                            <input type="text" name="name">
                        </div>
                        <div>
                            <p>Correo:</p>
                            <input type="email" name="mail">
                        </div>
                        <div>
                            <p>Asunto:</p>
                            <input type="text" name="subject">
                        </div>
                        <div>
                            <p>Mensaje:</p>
                            <input type="text" name="message">
                        </div>
                        <input type="submit" value="Confirmar" class="mt-4">
                    </div>
                </div>
            </form>
        </div>  
    </x-responsive>
</body>
</html>
<script src="{{ mix('js/app.js') }}" defer></script>