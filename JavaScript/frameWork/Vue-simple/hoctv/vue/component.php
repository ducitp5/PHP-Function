<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="app">-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script  type="text/javascript">-->
<!--    //đăng ký component-->
<!---->
<!--    Vue.component('tdc-component',{-->
<!---->
<!--        template: '<h5>Chào mừng bạn đến với website Hoc.tv</h5>'-->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!---->
<!--        el: '#app',-->
<!--    });-->
<!--</script>-->


<!--<div id="app2">-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app2',-->
<!--        components: {-->
<!--            'tdc-component': {-->
<!--                template : '<h5>Chào mừng bạn đến với website Hoc.tv</h5>'-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app3">-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var temp = {-->
<!--        template : '<h5>Chào mừng bạn đến với website Hoc.tv</h5>'-->
<!--    };-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app3',-->
<!--        components: {-->
<!--            'tdc-component': temp-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app4">-->
<!--    <table>-->
<!--        <tdc-component></tdc-component>-->
<!--    </table>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var temp = {-->
<!--        template : '<tr>Học Vuejs tại Hoc.tv</tr>'-->
<!--    };-->
<!--    var app = new Vue({-->
<!--        el: '#app4',-->
<!--        components: {-->
<!--            'tdc-component': temp-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app5">-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    -->
<!--    var data = {-->
<!--        message: 'Hoc.tv'-->
<!--    };-->
<!---->
<!--    Vue.component('tdc-component', {-->
<!---->
<!--        template: '<h1> {{ message }} </h1>',-->
<!---->
<!--        data: function() {-->
<!--            return data;-->
<!--        }-->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app5'-->
<!--    });-->
<!--</script>-->


<!--<div id="app6">-->
<!--    <tdc-component></tdc-component>-->
<!--    <tdc-component></tdc-component>-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    // var data = {-->
<!--    //     count : 0-->
<!--    // };-->
<!---->
<!--    // Vue.component('tdc-component', {-->
<!--    //     template: '<button v-on:click="count += 1"> {{ count }} </button>',-->
<!--    //     data: function() {-->
<!--    //         return data;-->
<!--    //     }-->
<!--    // });-->
<!---->
<!--    Vue.component('tdc-component', {-->
<!---->
<!--        template: '<button v-on:click="count += 1"> {{ count }} </button>',-->
<!---->
<!--        data: function() {-->
<!--            return { count : 0 };-->
<!--        }-->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app6'-->
<!--    });-->
<!--</script>-->


<div id="app7">
    <component-a></component-a>
    <component-b></component-b>
</div>

<script type="text/javascript">

    Vue.component('component-a', {
        template: '<font v-bind:color="color">Hoc.tv</font>',

        data: function () {
            return { color: "magenta" }
        }
    });

    Vue.component('component-b', {
        template: '<h2><component-a></component-a></h2>',
    });

    var app = new Vue({
        el: '#app7'
    });

</script>
