<div class="relative w-[700px] bg-stone-800 rounded-lg">
    <div class="ml-8 mt-12">
        <h1 class="text-white text-lg">{{$title}}</h1>
        <h3>{{$description}}</h3>  
        <div class="flex space-x-4 mt-6 mb-8">
            @foreach (json_decode($stack) as $item)
                @if($item=="react")                   
                    <x-fab-react class="techSize"/>            
                @endif
                @if($item=='tailwind')
                    <x-bxl-tailwind-css class="techSize"/>
                @endif
                @if($item=='next')
                    <x-fileicon-nextjs class="techSize"/>
                @endif
                @if($item=='laravel')
                    <x-fab-laravel class="techSize"/>
                @endif
                @if($item=='vue')
                    <x-si-vuedotjs class="techSize"/>  
                @endif              
            @endforeach 
        </div>    
    </div>
</div>