<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<div id="app">

    <p>{{ foo }}</p>

    <button @click='foo = "bazzzzzz"'>Cập nhật đi chứ</button>
    <button @click="textChange">Cập nhật đi chứ</button>
    <button v-on:click="textChange3">Cập nhật 44444</button>

    <p>(computed): {{ textChange5 }}</p>
    <p>{{ foo2 }}</p>
    <p>(computed): {{ textChange6 }}</p>

    <button v-bind:disabled="isButtonDisabled">Hòn Vọng Phu</button>

    <button @click="activer(this)">on / off</button>
</div>

<script>

    var obj = {
        foo: 'bar',
        foo2: 'foo2222',
        isButtonDisabled : true,
        a: 1111
    }

 //   Object.freeze(obj)

    new Vue({
        el: '#app',
        data: obj,
        methods: {
            activer: function (val){
                this.isButtonDisabled = !this.isButtonDisabled;
                console.log('toi la vue - ', this)
                console.log(val)
            },
            textChange: function (){
                this.foo = 'kkkk';
            },
            textChange3: function (){
                this.textChange4();
            },
            textChange4: function (){
                this.foo2 = '4444444';
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
                console.log('giá trị của a2 là ' + this.foo2);
                return this.foo = '666666';
            },
            textChange7: function (){
                return '4567';
            },
        },
        created: function () {
            // `this` trỏ đến đối tượng Vue hiện hành
            console.log('giá trị của a là ' + this.a)
        }
    })
</script>


<hr>
<script>
    // new Vue({
    //     data: {
    //         a: 1
    //     },
    //     created: function () {
    //         // `this` trỏ đến đối tượng Vue hiện hành
    //         console.log('giá trị của a là ' + this.a)
    //     }
    // })
    // => "giá trị của a là 1"
</script>