<div class="relative h-max w-full bg-black">
    <div id="app">
        <side-nav>
            <template v-slot:bar>
                <x-nav-icon/>
            </template>
            <template v-slot:return>
                <x-return-icon/>
            </template>
        </side-nav>                                         
        {{$slot}}
    </div>
    <x-footer/>  
</div>