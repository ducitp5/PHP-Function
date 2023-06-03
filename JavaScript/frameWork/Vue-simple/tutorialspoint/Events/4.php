<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <a href = "http://www.google.com" v-on:click = "clickme" target = "_blank" v-bind:style = "styleobj">Click Me</a>
</div>

<script type = "text/javascript">

    var vm = new Vue({
        el: '#databinding',
        data: {
            styleobj: {
                color: '#4CAF50',
                marginLeft: '20px',
                fontSize: '30px'
            }
        },
        methods : {
            clickme : function() {
                alert("Anchor tag is clicked");
            }
        }
    });

    // console.log(vm);
</script>
</body>
</html>
