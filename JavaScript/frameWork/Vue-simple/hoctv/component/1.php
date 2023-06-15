<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="app">-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script  type="text/javascript"></script> <script type="text/javascript">-->
<!--    //đăng ký component-->
<!--    Vue.component('tdc-component',{-->
<!--        template: '<h5>Chào mừng bạn đến với website Hoc.tv</h5>'-->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    var temp = {-->
<!--        template : '<h5>Chào mừng bạn đến với website Hoc.tv</h5>'-->
<!--    };-->
<!--    -->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        components: {-->
<!--            'tdc-component': temp-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <table>-->
<!--        <tr is="tdc-component"></tr>-->
<!--    </table>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    var temp = {-->
<!--        template : '<tr>Học Vuejs tại Hoc.tv</tr>'-->
<!--    };-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        components: {-->
<!--            'tdc-component': temp-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <tdc-component></tdc-component>-->
<!--    <tdc-component></tdc-component>-->
<!--    <tdc-component></tdc-component>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    Vue.component('tdc-component', {-->
<!---->
<!--        template: '<button v-on:click="count += 1">click</button>',-->
<!---->
<!--        data: function() {-->
<!--            return {-->
<!--                count : 0-->
<!--            };-->
<!--        }-->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app'-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!---->
<!--    <child my-say="1"></child>-->
<!--    <child v-bind:my-say="1"></child>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    Vue.component('child', {-->
<!--        props: ['mySay'],-->
<!--        template: '<h1>{{ typeof(mySay) }}</h1>',-->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--    });-->
<!--</script>-->


<div id="app">

    <child my_say3="111 "></child>
    <child v-bind:my_say3=" 222 "></child>
    <child my_say3="abc "></child>
</div>

<script type="text/javascript">

    Vue.component('child', {
        props: ['my_say3'],
        computed : {
            convertSay: function () {

                $input = this.my_say3;

                $input = typeof($input) == "string" ? $input.toUpperCase() : $input;

                console.log($input, typeof($input) );

                return  $input;
            }
        },
        template: '<h5>{{ convertSay }}</h5>',
    });

    var app = new Vue({
        el: '#app'
    });

    console.log()
</script>
