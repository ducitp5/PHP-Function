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

    Vue.directive("changestyle",{

        bind(e1,binding, vnode) {

            console.log(e1);
            console.log(binding.value.color);
            console.log(vnode);

            e1.style.color      = binding.value.color;
            e1.style.fontSize   = "30px";
        }
    });

    var vm = new Vue({
        el: '#databinding',
    });
</script>
</body>
</html>
