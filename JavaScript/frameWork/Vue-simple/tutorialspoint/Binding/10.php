<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">

    <h3>Radio</h3>
    <input type = "radio" id = "black" value = "Black" v-model = "picked">Black
    <input type = "radio" id = "white" value = "White" v-model = "picked">White
    <h3>Radio element clicked : {{picked}} </h3>
    <hr/>

    <h3>Select</h3>

    <select v-model = "languages">
        <option disabled value = "">Please select one</option>
        <option>Java</option>
        <option>Javascript</option>
        <option>Php</option>
        <option>C</option>
        <option>C++</option>
    </select>

    <h3>Languages Selected is : {{ languages }}</h3>
    <hr/>
</div>
<script type = "text/javascript">
    var vm = new Vue({
        el: '#databinding',
        data: {
            picked : 'White',
            languages : "Java"
        }
    });
</script>
</body>
</html>
