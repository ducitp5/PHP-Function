<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="app">-->
<!--    <button @click="warn('Không thể submit form 222', $event)">Click</button>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            counter: 0,-->
<!--        },-->
<!--        methods: {-->
<!--            warn: function (message, even) {-->
<!--                console.log(even)-->
<!--                console.log(even.target.tagName)-->
<!--                // if (event) event.preventDefault();-->
<!--                // alert(message  + '!');-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <form action="https://hoc.tv" @submit.prevent="warn">-->
<!--        <input type="text" placeholder="nhập vào tên...">-->
<!--        <button type="submit">Click</button>-->
<!--    </form>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!---->
<!--        methods: {-->
<!--            warn: function () {-->
<!--                alert('Bạn vừa thực hiện submit form, nhưng đã bị prevent 333');-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <input type="text" @keyup.13="warn">-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            counter: 0,-->
<!--        },-->
<!--        methods: {-->
<!--            warn: function () {-->
<!--                alert('Bạn vừa ấn phím enter');-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->


<div id="app">
    <input type="text" @keyup.enter="warn">
</div>

<script type="text/javascript">
    var app = new Vue({
        el: '#app',
        data: {
            counter: 0,
        },
        methods: {
            warn: function () {
                alert('Bạn vừa ấn phím enter');
            }
        }
    });
</script>