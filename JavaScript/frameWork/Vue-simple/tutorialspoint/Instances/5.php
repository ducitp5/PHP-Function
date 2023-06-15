<html>
<head>
    <title>VueJs Introduction</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id="abc"></div>

<script type = "text/javascript">
    var vm = new Vue({

        el : "#abc",
        data: { a: 5 },

        methods: {
            asquare: function () {
                this.a *= this.a;
            }
        }
    })
    vm.asquare();
    console.log(vm.a); // 25
</script>
</body>
</html>
