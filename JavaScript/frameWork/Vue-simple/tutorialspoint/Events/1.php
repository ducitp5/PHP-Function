<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>
<div id = "databinding">

    <button v-on:click = "displaynumbers">Click ME</button>
    <h2> Add Number 100 + 200 = {{total}}</h2>
</div>

<script type = "text/javascript">

    var vm = new Vue({

        el: '#databinding',

        data: {
            num1: 100,
            num2 : 200,
            total : ''
        },

        methods : {
            displaynumbers : function(event) {
                console.log(event);
                console.log(11122, this);
                return this.total =  this.num1+ this.num2;
            }
        },
    });

    console.log(vm);
</script>
</body>
</html>
