<template>
    <div class="wrapper">
        <p>Versátil usando</p>
        <div class="words">
            <span>Typescript</span>
            <span>React</span>
            <span>Laravel</span>
            <span>Vue</span>
            <span>Next</span>
            <span>Express</span>
            <span>Tailwind</span>
            <span>Git</span>
            <span>Python</span>
            <span>Django</span>
            <span>Spring</span>
            <span>MySQL</span>
            <span>Typescript</span>
        </div>
    </div>
</template>

<style scoped>
.wrapper{
    box-sizing: content-box;
    height: 40px;
    display: flex;
    padding: 50px 20px;
    font-size: 24px;
    cursor: default;
    user-select: none;
}
.words{
    overflow: hidden;

}
span{
    display: block;
    animation: spin 10s infinite;
    height: 100%;
    color: blueviolet;
    padding-left: 8px;
}
@keyframes spin{
    8.3%{
        transform: translateY(-100%);
    }
    16.6%{
        transform: translateY(-200%);
    }
    24.9%{
        transform: translateY(-300%);
    }
    33.2%{
        transform: translateY(-400%);
    }
    41.5%{
        transform: translateY(-500%);
    }
    49.8%{
        transform: translateY(-600%);
    }
    58.1%{
        transform: translateY(-700%);
    }
    66.4%{
        transform: translateY(-800%);
    }
    74.7%{
        transform: translateY(-900%);
    }
    83%{
        transform: translateY(-1000%);
    }
    91.3%{
        transform: translateY(-1100%);
    }
    100%{
        transform: translateY(-1200%);
    }
}
</style>

<script>
export default {
    setup() {
        
    },
}
</script>