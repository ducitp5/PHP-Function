<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<style>
    .active {
        background: red;
    }
</style>

<div id = "classbinding">
    <div v-bind:class = "{active:isactive}"><b>{{title}}</b></div>
</div>

<script type = "text/javascript">
    var vm = new Vue({
        el: '#classbinding',
        data: {
            title : "CLASS BINDING",
            isactive : true
        }
    });
</script>

</body>
</html>
