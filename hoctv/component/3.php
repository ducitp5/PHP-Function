<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<div id="app">
    <p>{{ count }}</p>
    <child v-on:counter="countPlus(1)"></child>
    <child v-on:counter="countPlus(-1)"></child>
</div>


<script type="text/javascript">

    Vue.component('child', {

        template: `
            <div>
              <button v-on:click="numberPlus(count)">{{ count }}</button>
            </div>
        `,

        data : function () {
            return {
                count: 0
            };
        },

        methods: {
            numberPlus: function (val)
            {
                console.log(val)
                this.count += 1;
                this.$emit('counter')
            }
        }
    });

    var app = new Vue({
        el: '#app',
        data: {
            count: 0
        },
        methods: {
            countPlus: function (val)
            {
                this.count += val;
            }
        }
    });

</script>


<div id="app3">
    <p>{{ count }}</p>
    <child2 v-on:click.native="countPlus"></child2>
</div>

<script type="text/javascript">

    Vue.component('child2', {
        template: '<button>Click</button>'
    });

    var app = new Vue({
        el: '#app3',
        data: {
            count: 0
        },
        methods: {
            countPlus: function ()
            {
                this.count += 1;
            }
        }
    });
</script>