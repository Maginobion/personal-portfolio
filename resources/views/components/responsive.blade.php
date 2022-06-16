<div class="relative min-h-screen w-full bg-black after:h-[145px] after:block">
    <div id="app">
        <side-nav>
            <template v-slot:bar>
                <x-nav-icon/>
            </template>
            <template v-slot:return>
                <x-return-icon/>
            </template>
            <template v-slot:content>
                <a href={{ route('welcome') }} class="Home">Home</a>
                <a href={{ route('about') }} class="About">About</a>
                <a href={{ route('projects') }} class="Projects">Projects</a>
                <a href={{ route('contactanos.contact') }} class="Contact">Contact</a>
            </template>
        </side-nav>    
        {{$slot}}                                    
    </div>  
    <x-footer/>  
</div>