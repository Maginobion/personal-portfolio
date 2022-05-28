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
            <div class="id">
                <about-me/>
            </div>
            <div class="id">
                <falling-words/>
            </div>
        </div>  
        <div class="flex justify-center">GAAAA</div>
    </x-responsive>
</body>
</html>
<script src="{{ mix('js/app.js') }}" defer></script>