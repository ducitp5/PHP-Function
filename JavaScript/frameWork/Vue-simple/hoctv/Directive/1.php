<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="hook-arguments-example" v-demo2:foo.a.b="message">-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    Vue.directive('demo2', {-->
<!--        bind: function (el, binding, vnode) {-->
<!---->
<!--            console.log(el, binding, vnode);-->
<!---->
<!--            var s = JSON.stringify;-->
<!---->
<!--            el.innerHTML =-->
<!--                'name: '       + s(binding.name) + '<br>' +-->
<!--                'value: '      + s(binding.value) + '<br>' +-->
<!--                'expression: ' + s(binding.expression) + '<br>' +-->
<!--                'argument: '   + s(binding.arg) + '<br>' +-->
<!--                'modifiers: '  + s(binding.modifiers) + '<br>' +-->
<!--                'vnode keys: ' + Object.keys(vnode).join(', ')-->
<!--        }-->
<!--    })-->
<!---->
<!--    new Vue({-->
<!--        el: '#hook-arguments-example',-->
<!--        data: {-->
<!--            message: 'Cà rốt'-->
<!--        }-->
<!--    })-->
<!--</script>-->



<div v-demo="{ color: 'white', text: 'Su hào' }"></div>

<script>

    Vue.directive('demo', {
        bind: function (el, binding) {

            console.log('abcd');
            console.log(binding.value.color) // => "white"
            console.log(binding.value.text) // => "Su hào"
        }
    })
</script>