<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<style>
    .info {
        color: #00529B;
        background-color: #BDE5F8;
    }
    div {
        margin: 10px 0;
        padding: 12px;
        font-size : 25px;
    }
    .active {
        color: #4F8A10;
        background-color: #DFF2BF;
    }
    .displayError{
        color: #D8000C;
        background-color: #FFBABA;
    }
</style>

<div id = "classbinding">
    <div v-bind:class = "[isActive ? infoclass : '', haserror ? errorclass : '']">{{title}}</div>
</div>

<script type = "text/javascript">
    var vm = new Vue({
        el: '#classbinding',
        data: {
            title : "This is class binding example",
            infoclass : 'info',
            errorclass : 'displayError',
            isActive : true,
            haserror : false
        }
    });
</script>
</body>
</html>
