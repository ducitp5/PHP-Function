<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="app">-->
<!--    <child my_say="Xin chào!"></child>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    Vue.component('child', {-->
<!---->
<!--        props: ['my_say'],-->
<!---->
<!--        data : function () {-->
<!--            return {-->
<!--                dataSay : this.my_say + " This is dataSay!",-->
<!--                dataSay2 : this.my_say + " hahaha !!!!"-->
<!--            };-->
<!--        },-->
<!---->
<!--        template:`-->
<!--            <div>-->
<!--                <h5>{{ dataSay }}</h5>-->
<!--                <h5>{{ dataSay2 }}</h5>-->
<!--            </div>-->
<!--        `-->
<!---->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--    });-->
<!---->
<!--</script>-->


<div id="app">
    <child my-say="Xin chào!"></child>
</div>

<script type="text/javascript">

    Vue.component('child', {

        props: ['mySay'],

        computed : {
            convertSay: function () {
                return this.mySay.trim().toUpperCase();
            }
        },
        template: '<div>' +
            '<h5>{{ convertSay }}</h5>' +
            '<h5>{{ this.mySay }}</h5>' +
        '</div>',
    });

    var app = new Vue({
        el: '#app'
    });
</script>


<!--<div id="app">-->
<!--    <child></child>-->
<!--</div>-->
<!---->
<!--<script type="text/x-template" id="h5-template">-->
<!---->
<!--    <h5>Template được khai báo trong x-template</h5>-->
<!--</script>-->
<!---->
<!--<script type="text/javascript">-->
<!---->
<!--    Vue.component('child', {-->
<!--        template: '#h5-template'-->
<!--    });-->
<!---->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--    });-->
<!--</script>-->