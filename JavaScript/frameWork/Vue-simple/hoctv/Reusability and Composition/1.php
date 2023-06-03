<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<script>

    // // định nghĩa một object mixin
    // var myMixin = {
    //     created: function () {
    //         this.hello()
    //     },
    //     methods: {
    //         hello: function () {
    //             console.log('Mixin xin chào!')
    //         }
    //     }
    // }
    // // định nghĩa một component sử dụng mixin này
    // var Component =  Vue.extend({
    //     mixins: [myMixin]
    // })
    //
    // var component = new Component() // => "Mixin xin chào!"


    // var mixin = {
    //     data: function () {
    //         return {
    //             $dt1: 'mixin data ',
    //             $dt2: 'abc'
    //         }
    //     }
    // }
    //
    // new Vue({
    //
    //     mixins: [mixin],
    //
    //     data: function () {
    //         return {
    //             $dt1: 'vue data',
    //             $dt3: 'def'
    //         }
    //     },
    //
    //     created: function () {
    //         console.log(this.$data)
    //         // => { message: "chào chị", foo: "abc", bar: "def" }
    //     }
    // })


    // var mixin = {
    //     created: function () {
    //         console.log('hook trong mixin sẽ được gọi trước')
    //     }
    // }
    // new Vue({
    //     mixins: [mixin],
    //     created: function () {
    //         console.log('sau đó đến hook của component')
    //     }
    // })
    // // => "hook trong mixin sẽ được gọi trước"
    // // => "sau đó đến hook của component"


    // var mixin = {
    //     methods: {
    //         foo: function () {
    //             console.log('foo')
    //         },
    //         hàmTrùngTên: function () {
    //             console.log('từ mixin')
    //         }
    //     }
    // }
    //
    // var vm = new Vue({
    //     mixins: [mixin],
    //     methods: {
    //         bar: function () {
    //             console.log('bar')
    //         },
    //         hàmTrùngTên: function () {
    //             console.log('từ component')
    //         }
    //     }
    // })
    //
    // vm.foo() // => "foo"
    // vm.bar() // => "bar"
    // vm.hàmTrùngTên() // => "từ component"


    // chèn một handler cho option tùy biến `myOption`
    var $mix = Vue.mixin({

        created: function () {

            var myOption = this.$options.myOption2

            console.log(1234, this.$options, 1111, this)
            if (myOption) {
                console.log('option is - ' +myOption)
            }
        }
    })

    console.log('mix - ', $mix)

    var $vm = new Vue({
        myOption2: 'hello em iu!',

        created: function (){

            console.log(333, this.myOption2, 4444)
        }
    })
    // => "hello!"

    // console.log($mix, $vm, 111)
</script>
