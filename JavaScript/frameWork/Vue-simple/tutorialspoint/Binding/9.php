<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <h3>TEXTBOX</h3>
    <input  v-model = "name" placeholder = "Enter Name" />
    <h3>Name entered is : {{name}}</h3>
    <hr/>
    <h3>Textarea</h3>
    <textarea v-model = "textmessage" placeholder = "Add Details"></textarea>
    <h1><p>{{textmessage}}</p></h1>
    <hr/>
    <h3>Checkbox</h3>
    <input type = "checkbox" id = "checkbox" v-model = "checked"> {{checked}}
</div>

<script type = "text/javascript">

    var vm = new Vue({

        el: '#databinding',

        data: {
            name:'',
            textmessage:'',
            checked : false
        }
    });
</script>

</body>
</html>
