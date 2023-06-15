<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<div id="app">
    <button @click='counterComputed++'>computed button</button>
    <p>{{ counterComputed }}</p> <br/>

    <button @click='counterMethod++'>method button</button>
    <p>{{ counterMethod }}</p> <br/>

    {{ printTextMethod() }}
    {{ printTextMethod2() }}
    {{ printTextComputed }}
</div>

<script>
    new Vue({
        el: '#app',
        data () {
            return {
                counterMethod: 0,
                counterComputed: 0
            }
        },
        methods: {
            printTextMethod () {
                console.log('counter printed from method:', this.counterMethod)
            },
            printTextMethod2 () {
                console.log('printTextMethod2')
            }
        },
        computed: {
            printTextComputed () {
                console.log('counter printed from computed:', this.counterComputed);
                return this.counterComputed;
            }
        }
    })
</script>
