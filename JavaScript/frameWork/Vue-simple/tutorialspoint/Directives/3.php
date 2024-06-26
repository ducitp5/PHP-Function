<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">

    <input  v-model = "name" placeholder = "Enter Name" /><br/>

    <span style = "font-size:25px;"><b>Letter count is : {{name | countletters}}</b></span>
</div>

<script type = "text/javascript">

    var vm = new Vue({
        el: '#databinding',
        data: {
            name : ""
        },
        filters : {
            countletters : function(value) {
                console.log(value)
                return value.length;
            }
        }
    });
</script>
</body>
</html>
