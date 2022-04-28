<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    </head>

    @php
        $neededData = [
            [
                'title'=>"Aguinaga's Lab",
                "description"=>"Un proyecto para un laboratorio de vacunas.",
                "stack"=>['react', 'tailwind', 'next'],
            ],
            [
                "title"=>"Portafolio",
                "description"=>"Esta página, realizada con Laravel y TailwindCSS.",
                "stack"=>['laravel', 'tailwind'],
            ]
        ];    
    @endphp

    <body>
        <div class="relative h-max blackBackground">
            <a href="javascript:void(0)" onclick='openNav()'><x-clarity-bars-line class="bar"/></a>
            <nav id="mysideNav" class="sideNav">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Projects</a>
                <a href="">Contact</a>
            </nav>
            <div class="made mt-[50px]">
                <p>This site was made with Laravel</p> 
                <x-fab-laravel class="lv-icon"/>
            </div>
            <div class="nameContainer flex-center">
                <x-private-myName/>
            </div> 
            <div class="flex justify-center space-x-8 mt-10">   
                <x-icomoon-html-five class="techSize"/>
                <x-si-css3 class="techSize"/>  
                <x-bxl-tailwind-css class="techSize"/>
                <x-si-javascript class="techSize"/>
                <x-fab-laravel class="techSize"/>
                <x-fab-react class="techSize"/>              
                <x-fileicon-nextjs class="techSize"/>
            </div>
            <div class="flex flex-col items-center mt-10 space-y-16 pb-16">
                @foreach ($neededData as $item)
                    <x-project-card :stack="json_encode($item['stack'])">
                        <x-slot:title>
                            {{$item['title']}}
                        </x-slot>
                        <x-slot:description>
                            {{$item['description']}}
                        </x-slot>
                    </x-project-card>
                @endforeach
            </div>    
        </div>          
    </body>
</html>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script> 