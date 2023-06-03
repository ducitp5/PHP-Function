<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <component2 v-bind:is = "view2"></component2>
</div>

<script type = "text/javascript">

    var vm = new Vue({
        el: '#databinding',
        data: {
            view2: 'component1'
        },
        components: {
            'component1': {
                template: '<div><span style = "font-size:35;color:red;">Dynamic Component</span></div>'
            }
        }
    });
</script>

</body>
</html>
