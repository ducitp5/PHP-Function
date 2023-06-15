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
        data: { a: 2 },

        computed: {

            // get only, just need a function
            aSum: function () {
                return this.a + 2;
            },

            // both get and set
            aSquare: {
                get: function () {
                    return this.a*this.a;
                },
                set: function (v) {
                    this.a = v*2;
                }
            }
        }
    })
    console.log(vm.aSquare);  // -> 4
    vm.aSquare = 3;
    console.log(vm.a);       // -> 6
    console.log(vm.aSquare);  // -> 36
    console.log(vm.aSum); // -> 8
</script>
</body>
</html>
