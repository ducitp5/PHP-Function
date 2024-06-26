<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <input type = "text" @keyup.enter = "showinputvalue" v-bind:style = "styleobj" placeholder = "Enter your name"/>
    <h3> {{name}}</h3>
</div>

<script type = "text/javascript">

    var vm = new Vue({

        el: '#databinding',

        data: {
            name:'',

            styleobj: {
                width: "30%",
                padding: "12px 20px",
                margin: "8px 0",
                boxSizing: "border-box"
            }
        },

        methods : {
            showinputvalue : function(event) {

                console.log(event)
                console.log(event.target)
                console.log(event.view)

                this.name = event.target.value;
            }
        }
    });
</script>
</body>
</html>
