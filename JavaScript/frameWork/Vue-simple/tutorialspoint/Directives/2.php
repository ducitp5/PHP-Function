<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">

    <div v-changestyle = "{color:'green'}">VueJS Directive</div>
</div>

<script type = "text/javascript">

    vd = Vue.directive(
        "changestyle",
        {
            bind(e1,binding, vnode) {

                console.log('el - ', e1);
                console.log('binding - ', binding.value);
                console.log('vnode - ', vnode);

                e1.style.color      = binding.value.color;
                e1.style.fontSize   = "30px";
            }
        }
    );

    var vm = new Vue({
        el: '#databinding',
    });

    console.log('vd - ', vd)
</script>
</body>
</html>
