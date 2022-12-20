<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<!--<div id="app">-->
<!--  <span class="my-class" v-on:click="hello">-->
<!--    {{ msg }}-->
<!--  </span>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            msg: 'Show the message'-->
<!--        },-->
<!--        methods: {-->
<!--            hello () {-->
<!--                alert('Here is the message')-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app2">-->
    <!--span will render here-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    new Vue({-->
<!--        el: '#app2',-->
<!--        data: {-->
<!--            msg: 'Show the message'-->
<!--        },-->
<!--        methods: {-->
<!--            hello () {-->
<!--                alert('Here is the message')-->
<!--            }-->
<!--        },-->
<!--        render (createElement) {-->
<!--            return createElement(-->
<!--                'span',-->
<!--                {-->
<!--                    class: { 'my-class': true },-->
<!--                    on: {-->
<!--                        click: this.hello-->
<!--                    }-->
<!--                },-->
<!--                [ this.msg ]-->
<!--            );-->
<!--        },-->
<!--    });-->
<!--</script>-->


<div id="app3">
    span will render here
</div>


<script>
    new Vue({

        el: '#app3',

        data: {
            msg: 'Show the message.'
        },

        methods: {
            hello () {
                alert('This is the message.')
            }
        },

        render() {
            return (
                `<span class={{ 'my-class': true }} onClick={ this.hello } >
                    { this.msg }
                </span>`
            )
        }
    });
</script>