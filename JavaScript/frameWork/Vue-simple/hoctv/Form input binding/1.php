<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="app">-->
<!--    <input type="text" v-model="message" placeholder="Nhập cái gì đó vào đây đi bạn ey!">-->
<!---->
<!--    <textarea v-model="message" placeholder="Nhập cái gì vào đây đi bạn ey, Hà Nội ko vội được đâu!" rows="5" cols="70"></textarea> -->
<!---->
<!--    <p>Mesage = {{ message }}</p>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            message: null,-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <input type="radio" id="php" name="language" value="PHP" v-model="checked">-->
<!--    <label for="php">PHP</label>-->
<!--    <input type="radio" id="js" name="language" value="CSS" v-model="checked">-->
<!--    <label for="js">CSS</label>-->
<!--    <input type="radio" id="nodejs" name="language" value="Vue.js" v-model="checked">-->
<!--    <label for="nodejs">Vue.js</label>-->
<!--    <p>Radio đã check: {{ checked }}</p>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            checked: null,-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <select name="language" v-model="selected">-->
<!--        <option disabled value="">Vui lòng chọn món</option>-->
<!--        <option value="Thit rang chay canh">Thịt rang cháy cạnh</option>-->
<!--        <option value="Ca tam nuong cham cheo">Cá tầm nướng chẩm chéo</option>-->
<!--        <option value="Tom hum nuong sa te">Tôm hùm nướng sa tế</option>-->
<!--    </select>-->
<!--    <p>Select đã chọn: {{ selected }}</p>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            selected: '',-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <select name="language" v-model="selected">-->
<!--        <option v-for="item in option" v-bind:value="item.value">-->
<!--            {{ item.text }}-->
<!--        </option>-->
<!--    </select>-->
<!--    <p>Select đã chọn: {{ selected }}</p>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            selected: 'js',-->
<!--            option: [-->
<!--                { text: 'PHP', value: 'php' },-->
<!--                { text: 'CSS', value: 'css' },-->
<!--                { text: 'Ajax', value: 'ajax' },-->
<!--                { text: 'Vue.js', value: 'vuejs' },-->
<!--            ],-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <input type="checkbox" v-model="toggle" v-bind:true-value="yes" v-bind:false-value="no">-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            toggle: true,-->
<!--            yes: true,-->
<!--            no: false,-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <input type="text" v-model.lazy="message" placeholder="nhập dữ liệu bạn ey...">-->
<!--    <p>message = {{ message }}</p>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {-->
<!--            message: null-->
<!--        }-->
<!--    });-->
<!--</script>-->


<!--<div id="app">-->
<!--    <input type="text" v-model.number="message" placeholder="nhập dữ liệu nào bạn ey...">-->
<!--    <p>message = {{ message }}</p>-->
<!--</div>-->
<!---->
<!--<script type="text/javascript">-->
<!--    var app = new Vue({-->
<!--        el: '#app',-->
<!--        data: {            message: null-->
<!--        }-->
<!--    });-->
<!--</script>-->


<div id="app">
    <input type="text" v-model.trim="message" placeholder="nhập dữ liệu nào bạn ey...">
    <p>message = {{ message }}</p>
</div>
<script  type="text/javascript"></script>
<script type="text/javascript">
    var app = new Vue({
        el: '#app',
        data: {
            message: null
        }
    });
</script>

