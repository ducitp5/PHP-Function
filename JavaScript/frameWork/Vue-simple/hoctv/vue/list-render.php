<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="app">-->
<!--    <ul >-->
<!--        <li v-for="item in student" v-if="item.name">{{ item.name }}</li>-->
<!--    </ul>-->
<!--</div>-->
<!---->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            student: [-->
<!--                { name : 'Hoàn Hoa Tiên'},-->
<!--                { name : 'Nhu Tiên Cang'},-->
<!--                { age : 15},-->
<!--                { name : 'Thọ Tỉ Nam Sơn'},-->
<!--            ]-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <ul v-if="allow">-->
<!--        <li v-for="item in student">{{ item }}</li>-->
<!--    </ul>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            allow: true,-->
<!--            student: [-->
<!--                { name : 'Ngon Tình Thật'},-->
<!--                { name : 'Trần Bình Thường'},-->
<!--                { name : 'Nguyễn Tú Chi'},-->
<!--            ]-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <ul>-->
<!--        <li v-for="item in evenNumber">{{ item }}</li>-->
<!--    </ul>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            numbers: [1,3,7,9,11,4,14,12,34]-->
<!--        },-->
<!--        computed : {-->
<!--            evenNumber: function () {-->
<!--                return this.numbers.filter(function (number) {-->
<!--                    return number % 2 === 0-->
<!--                });-->
<!--            }-->
<!--        }-->
<!--    });-->
<!---->
<!--    var numbers2 = [1,3,7,9,11,4,14,12,34];-->
<!---->
<!--    numbers2 = numbers2.filter(function (num) {-->
<!---->
<!--        return num % 2 == 0;-->
<!--    })-->
<!---->
<!--    console.log(numbers2)-->
<!--</script>-->


<div id="app">
    <ul>
        <li v-for="item in evenNumber(numbers)">{{ item }}</li>
    </ul>
</div>

<script type="text/javascript">
    var app = new Vue({
        el: '#app',
        data: {
            numbers: [11,31,25,91,6,4,22,12,34, 46]
        },
        methods : {
            evenNumber: function (numbers) {
                return numbers.filter(function (number) {
                    return number % 2 === 0
                });
            }
        }
    });
</script>