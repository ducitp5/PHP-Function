<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <component3 v-bind:is = "view2"></component3>
</div>

<script type = "text/javascript">

    var vm = new Vue({
        el: '#databinding',
        data: {
            view2: 'component2'
        },
        components: {
            'component2': {
                template: '<div><span style = "font-size:35;color:red;">Dynamic Component</span></div>'
            }
        }
    });
</script>

</body>
</html>
