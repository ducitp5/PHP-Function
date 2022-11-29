<!DOCTYPE html>
<html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<body>

<h2>Vue.js</h2>

<!--<div id="app">-->
<!--    {{ message }}-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            message: 'Do you wanna build a Vue app?'-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--<hr>-->
<!--<div id="app-22">-->
<!--  <span v-bind:title="message">-->
<!--    Rê chuột lên đây một vài giây để xem thuộc tính `title` được bind! 333333 {{ message }}-->
<!--  </span>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var app2 = new Vue({-->
<!--        el: '#app-22',-->
<!--        data: {-->
<!--            message: 'Bạn đã mở trang này vào ' + (new Date()).toLocaleString()-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--<hr>-->
<!--<div id="app-3">-->
<!--    <span v-if="seen">Thoắt ẩn thoắt hiện</span>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var app3 = new Vue({-->
<!--        el: '#app-3',-->
<!--        data: {-->
<!--            seen: false-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--<hr>-->
<!--<div id="app-5">-->
<!--    <p>{{ message }}</p>-->
<!--    <button v-on:click="reverseMessage">Reverse Message</button>-->
<!--</div>-->
<!---->
<!--<script>-->
<!---->
<!--    var app5 = new Vue({-->
<!--        el: '#app-5',-->
<!--        data: {-->
<!--            message: 'khách chờ sông lặng sóng',-->
<!--            myduc : '123456'-->
<!--        },-->
<!--        methods: {-->
<!--            reverseMessage: function () {-->
<!--                this.message = this.message.split(' ').reverse().join(' ')-->
<!--            }-->
<!--        }-->
<!--    })-->
<!---->
<!--    console.log(app5)-->
<!--</script>-->


<!--<hr>-->
<!--<div id="app-6">-->
<!--    <p>{{ message }}</p>-->
<!--    <input v-model="message">-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var app6 = new Vue({-->
<!--        el: '#app-6',-->
<!--        data: {-->
<!--            message: 'Hãy sửa thông điệp này'-->
<!--        }-->
<!--    })-->
<!---->
<!--    console.log(app6)-->
<!--</script>-->


<hr>
<div id="app-7">
    <p>Những thứ họ mua:</p>
    <ol>
        <todo-item
            v-for="item in groceryList"
            v-bind:todo2="item.text"
        >

        </todo-item>

    </ol>
</div>

<script>
    Vue.component('todo-item', {
        props: ['todo', 'todo2'],
        template: '<li>{{ todo2 }}</li>'
    })

    var app7 = new Vue({
        el: '#app-7',
        data: {
            groceryList: [
                { id: 0, text: 'Cà pháo' },
                { id: 1, text: 'Mắm tôm' },
                { id: 2, text: 'Miễn ăn được là được' }
            ],
            myDuc : null
        }
    })

    console.log(app7);
</script>

</body>
</html>
