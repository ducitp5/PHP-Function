<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "js/vue.js"></script>
</head>
<body>

<div id = "component_test">
    <testcomponent></testcomponent>
</div>

<script type = "text/javascript">
    Vue.component('testcomponent',{

        template : '<h1>Hello World</h1>',

    });
    var vm = new Vue({
        el: '#component_test'
    });
</script>


<div id="app">
    <hello-world></hello-world>
</div>

<script type = "text/javascript">

    Vue.component('hello-world', {
        data: function() {
            return {
                name: 'Quang Phu',
            }
        },

        template: '<h1>Hello {{ name }}</h1>',
    });

    new Vue({
        el: "#app",
    });

</script>

</body>
</html>
