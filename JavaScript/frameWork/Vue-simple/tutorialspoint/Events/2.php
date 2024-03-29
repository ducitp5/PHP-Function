<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <div v-bind:style = "styleobj" v-on:mouseover = "changebgcolor" v-on:mouseout = "originalcolor"></div>
</div>

<script type = "text/javascript">

    var vm = new Vue({

        el: '#databinding',

        data: {
            num1: 100,
            num2 : 200,
            total : '',
            styleobj : {
                width:"100px",
                height:"100px",
                backgroundColor:"red"
            }
        },

        methods : {
            changebgcolor : function() {
                this.styleobj.backgroundColor = "green";
            },
            originalcolor : function() {
                this.styleobj.backgroundColor = "red";
            }
        },
    });
</script>
</body>
</html>
