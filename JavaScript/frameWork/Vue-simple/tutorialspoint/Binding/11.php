<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>
<div id = "databinding">
    <span style = "font-size:25px;">Enter Age:</span> <input v-model.number = "age" type = "number">
    <br/>
    <span style = "font-size:25px;">Enter Message:</span> <input v-model.lazy = "msg">
    <h3>Display Message : {{msg}}</h3>
    <br/>
    <span style = "font-size:25px;">Enter Message : </span><input v-model.trim = "message">
    <h3>Display Message : {{message}}</h3>
</div>
<script type = "text/javascript">
    var vm = new Vue({
        el: '#databinding',
        data: {
            age : 0,
            msg: '',
            message : ''
        }
    });
</script>
</body>
</html>
