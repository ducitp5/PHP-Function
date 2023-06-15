<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

    <div id = "component_test">
        <testcomponent v-bind:c_name="vd_name"></testcomponent>
    </div>
    <div id = "component_test1">
        <testcomponent v-bind:c_name="vd_name"></testcomponent>
    </div>

    <script type = "text/javascript" src = "vue_component.js"></script>

</body>
</html>
