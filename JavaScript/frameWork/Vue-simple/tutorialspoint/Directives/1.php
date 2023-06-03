<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <div v-changestyle2> VueJS Directive </div>
</div>

<script type = "text/javascript">

    var $vd = Vue.directive(
        "changestyle2",
        {
            bind(e1) {
                console.log('1 --', e1);
                e1.style.color = "blue";
                e1.id = "abc";
            }
        }
    );

    console.log('vd - ', $vd);

    var vm = new Vue({
        el: '#databinding',
    });

</script>

</body>
</html>
