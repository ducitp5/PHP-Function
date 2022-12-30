<html>
<head>
    <title>VueJs Introduction</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>

<body>

<script type = "text/javascript">

    var _obj = { fname: "Raj", lname: "Singh"}

    // direct instance creation
    var vm = new Vue({
        data: _obj
    });
    console.log(vm.fname);
    console.log(vm.$data);
    console.log(vm.$data.fname);
</script>

</body>
</html>
