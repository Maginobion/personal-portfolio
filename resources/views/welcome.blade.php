<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}" >
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
        <x-responsive>
            <div class="made mt-[50px]">
                <p>This site was made with Laravel</p> 
                <x-fab-laravel class="lv-icon"/>
            </div>
            <div id="app">
                <title-colors/>
            </div>
            <div class="nameContainer flex-center space-x-14 pt-[200px]">
                <div class='w-[600px]'>
                    <div class="flex items-center">
                        <x-private-myName/>
                        <p class="subTitle">Frontend Developer</p>
                    </div>
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
                    <div class="flex items-center space-x-4">
                        <x-icomoon-html-five class="techSize"/>
                        <p>HTML5</p>
                    </div>   
                    <div class="flex items-center space-x-4">
                        <x-si-css3 class="techSize"/> 
                        <p>CSS3</p>
                    </div>                  
                    <div class="flex items-center space-x-4">
                        <x-bxl-tailwind-css class="techSize"/>
                        <p>Tailwind CSS</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <x-si-javascript class="techSize"/>
                        <p>Javascript</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <x-fab-laravel class="techSize"/>
                        <p>Laravel</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <x-fab-react class="techSize"/>
                        <p>React</p>
                    </div>    
                    <div class="flex items-center space-x-4">
                        <x-si-vuedotjs class="techSize"/>
                        <p>Vue.js</p>
                    </div>   
                    <div class="flex items-center space-x-4">
                        <x-fileicon-nextjs class="techSize"/>
                        <p>Next.js</p>
                    </div>           
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
        </x-responsive>          
    </body>
</html>
<script src="{{ mix('js/app.js') }}" defer></script>