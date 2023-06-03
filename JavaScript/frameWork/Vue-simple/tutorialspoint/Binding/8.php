<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <div v-bind:style = "styleobj">{{title}}</div>
</div>

<div id = "databinding2">
    <div v-bind:style = "styleobj">{{title}}</div>
</div>

<script type = "text/javascript">

    var vm = new Vue({
        el: '#databinding',
        data: {
            title : "Inline style Binding",
            styleobj : {
                color: 'red',
                fontSize :'40px'
            }
        }
    });

    console.log(vm)

    $mixin = {
         data: function () {

             return{
                 title : "Inline style Binding 2",
                 styleobj : {
                     color: 'red',
                     fontSize :'40px'
                 }
             }
        }
    }

    console.log('0000', $mixin)

    var $vm2 = Vue.extend({

        mixins : [ $mixin ],
    })

    console.log(11111, $vm2)

    var $vm21 = new $vm2({

        el: '#databinding2',
    })

    console.log(2222, $vm21)
</script>

</body>
</html>
