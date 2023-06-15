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
            bind(e1l,binding2, vnode) {

                console.log('el - ', e1l);
                console.log('binding - ', binding2);
                console.log('vnode - ', vnode);

                e1l.style.color      = binding2.value.color;
                e1l.style.fontSize   = "30px";
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
