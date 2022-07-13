<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<div id="app">
    <p>{{ foo }}</p>

    <button @click="foo = 'bazzzzzz'">Cập nhật đi chứ</button>
    <button @click="textChange">Cập nhật đi chứ</button>
    <button v-on:click="textChange3">Cập nhật 44444</button>
    <p>(computed): {{ textChange5 }}</p>
    <p>{{ foo2 }}</p>
    <p>(computed): {{ textChange6 }}</p>
</div>

<script>
    var obj = {
        foo: 'bar',
        foo2: 'foo2222'
    }

 //   Object.freeze(obj)

    new Vue({
        el: '#app',
        data: obj,
        methods: {
            textChange: function (){
                this.foo = 'kkkk';
            },
            textChange3: function (){
                this.textChange4();
            },
            textChange4: function (){
                this.foo = '4444444';
            },
        },
        computed: {
            textChange2: function (){
                this.foo = '00000000';
            },
            textChange5: function (){
                return '7777777';
            },
            textChange6: function (){
                return this.foo = '666666';
            },
        }
    })
</script>


<hr>
<script>
    new Vue({
        data: {
            a: 1
        },
        created: function () {
            // `this` trỏ đến đối tượng Vue hiện hành
            console.log('giá trị của a là ' + this.a)
        }
    })
    // => "giá trị của a là 1"
</script>