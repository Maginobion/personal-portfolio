<template>
    <div class="w-[500px]">
        <h1 class="title">Acerca de mí</h1>
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
        </p>
        <br>
        <a href="/contact">Hagamos realidad tu idea.</a>
    </div>
</template>

<style scoped>
.title{
    --mycolor: v-bind('mycolor');
    font-size: 64px;
    color: var(--mycolor);
    filter: drop-shadow(0 0 20px var(--mycolor));
    margin-bottom: 20px;
    transition: 1s all ease-in-out;
}
a{
    position: relative;
    cursor: pointer;
    transition: 1s all ease-in-out;
    color:rgb(177 177 177);
}
a:hover{
    color: white;
    animation: glow 4s ease-in-out infinite;
    filter: drop-shadow(0 0 20px white);
}
a::after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    margin-top: -5px;
    height: 1px;
    background-color: white;
    transition: 1s all ease-in-out;
}
a:hover::after{
    width: 100%;
}
@keyframes glow {
    50%{
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #bfdef8, 0 0 40px #bfdef8, 0 0 50px #bfdef8,
  }
  100%{
      text-shadow: 0 0 10px #fff, 0 0 20px #059fe7, 0 0 30px #059fe7, 0 0 40px #059fe7, 0 0 50px #059fe7,;
  }
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