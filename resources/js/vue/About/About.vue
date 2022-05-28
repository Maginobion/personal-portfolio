<template>
    <div class="w-[500px]">
        <h1 class="title" @click="a">Acerca de mí</h1>
        <p>
            Soy un desarrollador Front-end que reside en Perú.
            Tengo una pasión latente por lograr una exquisita
            interactividad con el usuario en el entorno web.
        </p>
        <p>
            Proactivo, con ganas de destruir el molde y probar
            cosas nuevas. Un fanático de la cultura asiática,
            la vida hogareña y la tecnología.
        </p>
        <p>
            Sigo muy de cerca los cambios que ocurren en todo
            el espectro del front-end e intento mantenerme siempre
            a la vanguardia.
        </p>
        <p>
            Trabajando en proyectos ambiciosos con personas
            positivas.
        </p><br/>
        <a href="">Hagamos realidad tu idea.</a>
    </div>
</template>

<style scoped>
.title{
    --mycolor: v-bind('mycolor');
    font-size: 64px;
    color: var(--mycolor);
    filter: drop-shadow(0 0 20px var(--mycolor));
    transition: 1s all ease-in-out;
}
a::after{
    display: block;
    width: 0px;
    height: 2px;
    border-bottom: 2px solid white;
}
a.hover::before{
    width: 100%;
}
</style>

<script>
export default {
    data() {
        return{
            mycolor: '#'+(Math.random()*0xFFFFFF<<0).toString(16),
        }
    },
    methods:{
        randomColor: function(){
            setInterval(()=>{
                    this.mycolor = "hsl(" + 360 * Math.random() + ',' +
                    (25 + 70 * Math.random()) + '%,' + 
                    (55 + 10 * Math.random()) + '%)'
                },800)
            },
        a: function(){
            console.log(this.mycolor)
        }
    },
    mounted() {
        this.randomColor()
    },
}
</script>