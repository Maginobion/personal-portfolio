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
                "description"=>
                    "Proyecto trabajado en React para un laboratorio de
                    vacunas. Aplicación escrita en su totalidad bajo el
                    paradigma de componentes funcionales.",
                "stack"=>['react', 'next', 'tailwind'],
            ],
            [
                "title"=>"Portafolio",
                "description"=>
                    "Esta página recopila todos los trabajos y tecnologías
                    que domino. Diseñada con el propósito de darme a conocer
                    al cliente.",
                "stack"=>['laravel', 'vue', 'tailwind'],
            ]
        ];    
    @endphp

    <body>
        <div class="relative h-max blackBackground">
            <div id="app">
                <side-nav>
                    <template v-slot:first>
                        <x-nav-icon/>
                    </template>
                    <template v-slot:second>
                        <x-return-icon/>
                    </template>
                </side-nav>                                     
            </div>
            <div class="made mt-[50px]">
                <p>This site was made with Laravel</p> 
                <x-fab-laravel class="lv-icon"/>
            </div>
            <div class="nameContainer flex-center space-x-12 pt-[200px]">
                <div class='w-[600px]'>
                    <x-private-myName/>
                    <p class="mt-4">
                        Estudiante de universidad de cuarto año.
                        Dispuesto a aprender nuevas tecnologías.
                        Ávido lector y amante de los lenguajes
                        naturales y de programación.
                    </p>
                </div>               
                <img src="{{url('images/selfie.jpeg')}}" alt="Image"/>
            </div> 
            <div class="flex flex-col items-center mt-16">
                <div class="headTitle">Tecnologías</div>
                <div class="flex justify-center space-x-8 mt-4 mb-16">   
                    <x-icomoon-html-five class="techSize"/>
                    <x-si-css3 class="techSize"/>  
                    <x-bxl-tailwind-css class="techSize"/>
                    <x-si-javascript class="techSize"/>
                    <x-fab-laravel class="techSize"/>
                    <x-fab-react class="techSize"/>     
                    <x-si-vuedotjs class="techSize"/>         
                    <x-fileicon-nextjs class="techSize"/>                
                </div>
            </div>     
            <div class="headTitle text-center">Proyectos</div>      
            <div class="flex flex-col items-center space-y-16 pb-16">
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
<script src="{{ mix('js/app.js') }}" defer></script>