<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding">
    <div id = "counter-event-example">
        <p style = "font-size:25px;">Language displayed : <b>{{ languageclicked }}</b></p>

        <button-counter
            v-for = "(itemm, indexx) in languages"
            v-bind:item2 = "itemm"
            @showlanguage = "languagedisp">
        </button-counter>
    </div>
</div>

<script type = "text/javascript">

    Vue.component('button-counter', {

        template:
            '<button v-on:click = "displayLanguage(item2)">' +
                '<span style = "font-size:25px;">{{ item2 }}</span>' +
            '</button>',


        data: function () {
            return {
                counter: 0
            }
        },

        props:['item2'],

        methods: {
            displayLanguage: function (lng) {
                console.log(lng);
                this.$emit('showlanguage', lng);
            }
        },
    });

    var vm = new Vue({

        el: '#databinding',

        data: {
            languageclicked: "",
            languages : ["Java", "PHP", "C++", "C", "Javascript", "C#", "Python", "HTML"]
        },

        methods: {
            languagedisp: function (a) {
                this.languageclicked = a;
            }
        }
    })
</script>
</body>
</html>
