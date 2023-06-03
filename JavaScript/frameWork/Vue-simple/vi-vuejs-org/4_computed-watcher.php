<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<!--<div id="example">-->
<!--    <p>Thông điệp ban đầu: "{{ message }}"</p>-->
<!--    <p>(computed): "{{ reversedMessage }}"</p>-->
<!---->
<!--    <p>(computed): "{{ message }}"</p>-->
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
<!--                this.fullName = val + ' - ' + this.lastName-->
<!--            },-->
<!--            lastName: function (val) {-->
<!--                this.fullName = this.firstName + ' - ' + val-->
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
<!--            firstName: 'Evan as',-->
<!--            lastName: 'You',-->
<!--            fullName: 'duc tran'-->
<!--        },-->
<!--        computed: {-->
<!--            // fullName: function () {-->
<!--            //     return this.firstName + ' ' + this.lastName-->
<!--            // }-->
<!---->
<!--            fullName2: {-->
<!--                // getter-->
<!--                get: function () {-->
<!--                    return this.firstName + ' --- ' + this.lastName-->
<!--                },-->
<!--                // setter-->
<!--                set: function (newValue) {-->
<!--                    var names = newValue.split(' ')-->
<!--                    this.firstName = names[0]-->
<!--                    this.lastName = names[names.length - 1];-->
<!--                    console.log(newValue);-->
<!--                }-->
<!--            }-->
<!--        }-->
<!--    })-->
<!---->
<!--    vm.fullName = 'John ala Doe'-->
<!--</script>-->



<div id="watch-example">
    <p>
        Hãy hỏi một câu hỏi yes/no:
        <input v-model="question">
    </p>
    <p>{{ answer }}</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script>
    var watchExampleVM = new Vue({
        el: '#watch-example',
        data: {
            question: '',
            answer: 'Không thể trả lời nếu bạn chưa đặt câu hỏi!'
        },
        watch: {
            // bất cứ lúc nào câu hỏi thay đổi, hàm bên dưới sẽ chạy
            question: function (newQuestion, oldQuestion) {
                this.answer = 'Đang chờ bạn đặt xong câu hỏi...'
                this.getAnswer()
            }
        },
        methods: {
            // _.debounce là một hàm do Lodash cung cấp
            // Để tìm hiểu rõ hơn cách hoạt động của hàm này,
            // bạn có thể truy cập: https://lodash.com/docs#debounce
            getAnswer: _.debounce(
                function () {
                    if (this.question.indexOf('?') === -1) {
                        this.answer = 'Câu hỏi thì thường chứa một dấu "?" ;-)'
                        return
                    }
                    console.log(123);
                    // this.answer = 'Đang suy nghĩ...'
                    var vm = this
                    axios.get('https://yesno.wtf/api')
                        .then(function (response) {
                            vm.answer = _.capitalize(response.data.answer)
                            console.log(response)
                        })
                        .catch(function (error) {
                            vm.answer = 'Lỗi! Không thể truy cập API. ' + error
                        })
                },
                2000
            )
        }
    })
</script>

