<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <div v-bind:style = "{ color: activeColor, fontSize: fontSize + 'px' }">{{title}}</div>
</div>

<script type = "text/javascript">
    var vm = new Vue({
        el: '#databinding',
        data: {
            title : "Inline style Binding",
            activeColor: 'red',
            fontSize :'30'
        }
    });
</script>

</body>
</html>
