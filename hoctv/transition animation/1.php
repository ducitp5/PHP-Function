<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<!--<style>-->
<!--    .fade-enter-active, .fade-leave-active {-->
<!--        transition: opacity .9s;-->
<!--    }-->
<!--    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {-->
<!--        opacity: 0;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<div id="demo">-->
<!--    <button v-on:click="show = !show">-->
<!--        Kích hoạt-->
<!--    </button>-->
<!---->
<!--    <transition name="fade" class="fade-enter-active">-->
<!--        <p v-if="show">Xin chào</p>-->
<!--    </transition>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    new Vue({-->
<!--        el: '#demo',-->
<!--        data: {-->
<!--            show: true-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--<style>-->
<!--    /*-->
<!--  Animation cho enter và leave có thể có giá trị-->
<!--  duration và timing function khác nhau.-->
<!--*/-->
<!--    .slide-fade-enter-active {-->
<!--        transition: all .3s ease;-->
<!--    }-->
<!--    .slide-fade-leave-active {-->
<!--        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);-->
<!--    }-->
<!--    .slide-fade-enter, .slide-fade-leave-to-->
<!--        /* Trước 2.1.8 thì dùng .slide-fade-leave-active */ {-->
<!--        transform: translateX(10px);-->
<!--        opacity: 0;-->
<!--    }-->
<!--</style>-->
<!---->
<!--<div id="example-1">-->
<!---->
<!--    <button @click="show = !show">-->
<!--        Kích hoạt-->
<!--    </button>-->
<!---->
<!--    <transition name="slide-fade">-->
<!--        <p v-if="show">Xin chào</p>-->
<!--    </transition>-->
<!---->
<!--</div>-->
<!---->
<!--<script>-->
<!--    new Vue({-->
<!--        el: '#example-1',-->
<!--        data: {-->
<!--            show: true-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--<div id="example-2">-->
<!--    <button @click="show = !show">Kích hoạt</button>-->
<!--    -->
<!--    <transition name="bounce">-->
<!--        <p v-if="show">Cân đẩu vân</p>-->
<!--    </transition>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    new Vue({-->
<!--        el: '#example-2',-->
<!--        data: {-->
<!--            show: true-->
<!--        }-->
<!--    })-->
<!--</script>-->
<!---->
<!---->
<!--<style>-->
<!--    .bounce-enter-active {-->
<!--        animation: bounce-in .5s;-->
<!--    }-->
<!--    .bounce-leave-active {-->
<!--        animation: bounce-in .5s reverse;-->
<!--    }-->
<!--    @keyframes bounce-in {-->
<!--        0% {-->
<!--            transform: scale(0);-->
<!--        }-->
<!--        50% {-->
<!--            transform: scale(1.5);-->
<!--        }-->
<!--        100% {-->
<!--            transform: scale(1);-->
<!--        }-->
<!--    }-->
<!--</style>-->


<!--<link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.1" rel="stylesheet" type="text/css">-->
<!---->
<!--<div id="example-3">-->
<!--    <button @click="show = !show">-->
<!--        Kích hoạt-->
<!--    </button>-->
<!--    <transition-->
<!--            name="custom-classes-transition"-->
<!--            enter-active-class="animated tada"-->
<!--            leave-active-class="animated bounceOutRight"-->
<!--    >-->
<!--        <p v-if="show">Thú nhún</p>-->
<!--    </transition>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    new Vue({-->
<!--        el: '#example-3',-->
<!--        data: {-->
<!--            show: true-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--
Velocity hoạt động rất giống như jQuery.animate
và là một lựa chọn tuyệt vời cho animation bằng JavaScript
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>


<div id="example-4">
    <button @click="show = !show">
        Kích hoạt
    </button>
    <transition
            v-on:before-enter="beforeEnter"
            v-on:enter="enter"
            v-on:leave="leave"
            v-bind:css="false"
    >
        <p v-if="show">
            Demo
        </p>
    </transition>
</div>

<script>

    new Vue({
        el: '#example-4',
        data: {
            show: false
        },
        methods: {
            beforeEnter: function (el) {
                el.style.opacity = 0
            },
            enter: function (el, done) {
                Velocity(el, { opacity: 1, fontSize: '1.4em' }, { duration: 300 })
                Velocity(el, { fontSize: '1em' }, { complete: done })
            },
            leave: function (el, done) {
                Velocity(el, { translateX: '15px', rotateZ: '50deg' }, { duration: 600 })
                Velocity(el, { rotateZ: '100deg' }, { loop: 2 })
                Velocity(el, {
                    rotateZ: '45deg',
                    translateY: '30px',
                    translateX: '30px',
                    opacity: 0
                }, { complete: done })
            }
        }
    })

</script>
