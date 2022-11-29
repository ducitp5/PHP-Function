<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<!--<div id="example">-->
<!--    <p>Thông điệp ban đầu: "{{ message }}"</p>-->
<!--    <p>(computed): "{{ reversedMessage }}"</p>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var vm = new Vue({-->
<!--        el: '#example',-->
<!--        data: {-->
<!--            message: 'người đông bến đợi thuyền xuôi ngược'-->
<!--        },-->
<!--        computed: {-->
<!--            // một computed getter-->
<!--            reversedMessage: function () {-->
<!--                // `this` trỏ tới đối tượng vm-->
<!--                return this.message.split(' ').reverse().join(' - ')-->
<!--            }-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--<hr>-->
<!--<div id="demo">-->
<!--    <p>{{ firstName }}</p>-->
<!--    <p>{{ lastName }}</p>-->
<!--    <p>{{ fullName }}</p>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var vm = new Vue({-->
<!--        el: '#demo',-->
<!--        data: {-->
<!--            firstName: 'Trần',-->
<!--            lastName: 'Lập',-->
<!--            fullName: String-->
<!--        },-->
<!--        watch: {-->
<!--            firstName: function (val) {-->
<!--                this.fullName = val + ' ' + this.lastName-->
<!--            },-->
<!--            lastName: function (val) {-->
<!--                this.fullName = this.firstName + ' ' + val-->
<!--            }-->
<!--        }-->
<!--    })-->
<!--</script>-->




<!--<hr>-->
<!--<script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>-->
<!--<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>-->
<!---->
<!--<div id="watch-example">-->
<!--    <p>-->
<!--        Hãy hỏi một câu hỏi yes/no: <input v-model="question">-->
<!--    </p>-->
<!--    <p>{{ answer }}</p>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var watchExampleVM = new Vue({-->
<!--        el: '#watch-example',-->
<!--        data: {-->
<!--            question: '',-->
<!--            answer: '11111'-->
<!--        },-->
<!--        watch: {-->
<!--            // bất cứ lúc nào câu hỏi thay đổi, hàm bên dưới sẽ chạy-->
<!--            question: function (newQuestion, oldQuestion) {-->
<!--                this.answer = '22222222...'-->
<!--                this.getAnswer()-->
<!--            }-->
<!--        },-->
<!--        methods: {-->
<!--            // _.debounce là một hàm do Lodash cung cấp-->
<!--            // Để tìm hiểu rõ hơn cách hoạt động của hàm này,-->
<!--            // bạn có thể truy cập: https://lodash.com/docs#debounce-->
<!--            getAnswer: _.debounce(-->
<!--                function () {-->
<!--                    if (this.question.indexOf('?') === -1) {-->
<!--                        this.answer = 'Câu hỏi thì thường chứa một dấu "?" '-->
<!--                        return-->
<!--                    }-->
<!--                    this.answer = 'Đang suy nghĩ...'-->
<!--                    var vm = this-->
<!--                    axios.get('https://yesno.wtf/api')-->
<!--                        .then(function (response) {-->
<!--                            vm.answer = _.capitalize(response.data.answer)-->
<!--                        })-->
<!--                        .catch(function (error) {-->
<!--                            vm.answer = 'Lỗi! Không thể truy cập API. ' + error-->
<!--                        })-->
<!--                },-->
<!--                // Đây là thời gian (đơn vị mili giây) chúng ta đợi người dùng dừng gõ.-->
<!--                500-->
<!--            )-->
<!--        }-->
<!--    })-->
<!--</script>-->

