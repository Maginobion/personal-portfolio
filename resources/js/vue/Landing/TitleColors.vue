<style scoped>

    .letters span{
        --col : v-bind('mycolor');
        font-size: 3em;
        margin-left: -8px;
        cursor: default;
        user-select: none;
        -webkit-transition: all 150ms ease-in-out;
        -moz-transition: all 150ms ease-in-out;
        -o-transition: all 150ms ease-in-out;
        transition: all 150ms ease-in-out;
    }

    .letters span:hover{
        -webkit-transition: all 150ms ease-in-out;
        -moz-transition: all 150ms ease-in-out;
        -o-transition: all 150ms ease-in-out;
        transition: all 150ms ease-in-out;
        filter: drop-shadow(10px 10px 50px var(--col));
        color: var(--col);
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
            this.mycolor = "hsl(" + 360 * Math.random() + ',' +
             (25 + 70 * Math.random()) + '%,' + 
             (55 + 10 * Math.random()) + '%)'
        }
    }
}
</script>

<template>
    <div class="letters ml-[400px] pt-[250px] text-[50px]">
        <span @mouseover="randomColor">¡</span>
        <span @mouseover="randomColor">H</span>
        <span @mouseover="randomColor">o</span>
        <span @mouseover="randomColor">l</span>
        <span @mouseover="randomColor">a</span>
        <span @mouseover="randomColor">!</span>
        <p>soy Dylan Gonzales</p>
    </div>
</template>

