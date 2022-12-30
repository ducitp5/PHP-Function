<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>
<div id = "databinding">
    {{title}}<br/>
    <a href = "hreflink" target = "_blank"> Click Me </a> <br/>
    <a href = "{{hreflink}}" target = "_blank">Click Me </a>  <br/>
    <a v-bind:href = "hreflink" target = "_blank">Click Me </a>   <br/>
</div>
<script type = "text/javascript">
    var vm = new Vue({
        el: '#databinding',
        data: {
            title : "DATA BINDING",
            hreflink : "http://www.google.com"
        }
    });
</script>
</body>
</html>
