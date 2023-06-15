<script src="../../vue.js"></script>


<div id="hook-arguments-example" v-demo2:foo.a.b="message1">
</div>

<script>
    Vue.directive(
        'demo2',
        {
            bind: function (el, binding, vnode) {

                console.log(el, 222, binding, 444, vnode);

                var s = JSON.stringify;

                console.log('ssss', s);

                el.innerHTML =
                    'name: '       + (binding.name) + '<br>' +
                    'value: '      + (binding.value) + '<br>' +
                    'expression: ' + s(binding.expression) + '<br>' +
                    'argument: '   + (binding.arg) + '<br>' +
                    'modifiers: '  + s(binding.modifiers) + '<br>' +
                    'vnode keys: ' + Object.keys(vnode).join(', ')
            }
        }
    )

    new Vue({
        el: '#hook-arguments-example',
        data: {
            message1: 'Cà rốt'
        }
    })
</script>


<!--<div id = "directive">-->
<!--    <div v-demo="{ color: 'white', text: 'Su hào' }"></div>-->
<!--</div>-->
<!---->
<!--<script>-->
<!---->
<!--    console.log(3333);-->
<!---->
<!--    Vue.directive(-->
<!--        'demo',-->
<!--        {-->
<!--            bind: function (el, binding) {-->
<!---->
<!--                console.log('abcd');-->
<!--                console.log(binding.value.color) // => "white"-->
<!--                console.log(binding.value.text) // => "Su hào"-->
<!--            }-->
<!--        }-->
<!--    );-->
<!---->
<!--    var vm = new Vue({-->
<!--        el: '#directive',-->
<!--    });-->
<!---->
<!--</script>-->
