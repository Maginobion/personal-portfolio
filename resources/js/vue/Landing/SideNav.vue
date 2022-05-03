<style scoped>

.sideNav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  display: flex;
  flex-direction: column;
  background-color: rgb(19, 18, 18);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  transition: all 0.3 ease-in-out;
}

.activeSideNav{
  width: 380px;
}

.sideNav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  transition: 0.3s;
}

.sideNav a:hover {
  color: #f1f1f1;
}

.iconContainer:hover{
  cursor: pointer;
}

a:hover{
  cursor: pointer;
}

</style>

<script>

export default {
    data(){
        return{
            isOpen : false
        }        
    },
    methods:{
        setNav(state){
            this.isOpen=state;
        }
    },
    mounted(){
      console.log('Componente montado')
    }
}
</script>

<template>
    <a @click="setNav(true)" class="iconContainer">
        <slot name="first"></slot>
    </a>
    <nav :class="{activeSideNav : isOpen}" class="sideNav">
        <a href="#Home">Home</a>
        <a href="#About">About</a>
        <a href="#Projects">Projects</a>
        <a href="#Contact">Contact</a>
        <div @click="setNav(false)" class="ml-[300px] mt-[30px]"> <slot name="second"></slot></div>
    </nav>
</template>