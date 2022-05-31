<style scoped>

.sideNav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(19, 18, 18);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  transition: all 0.3 ease-in-out;
}

.activeSideNav{
  --totalwidth: 380px;
  width: var(--totalwidth);
}

.stylingCont{
  display: flex;
  flex-direction: column;
}

:slotted(a){
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  position: relative;
}
:slotted(.Home){
  --var: "Home" 
}
:slotted(.About){
  --var: "About" 
}
:slotted(.Projects){
  --var: "Projects" 
}
:slotted(.Contact){
  --var: "Contact" 
}
:slotted(a)::before{
  content: var(--var);
  position: absolute;
  left: 0;
  background-origin: content-box;
  background-image: linear-gradient(rgb(255, 255, 255), rgb(255, 255, 255));
  color: black;
  width: 0;
  overflow: hidden;
  height: 100%;
  padding-left: 32px;
  transition: all 1s ease-in-out;
}

:slotted(a):hover::before{
  width: var(--totalwidth);
}

.iconContainer:hover{
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
        <slot name="bar"></slot>
    </a>
    <nav :class="{activeSideNav : isOpen}" class="sideNav">
        <div class="stylingCont">
          <slot name="content"></slot>
        </div>
        <div @click="setNav(false)" class="ml-[300px] mt-[30px]"> <slot name="return"></slot></div>
    </nav>
</template>