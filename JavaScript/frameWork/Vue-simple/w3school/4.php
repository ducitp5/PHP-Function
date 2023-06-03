<!DOCTYPE html>
<html>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<body>

<h2>Vue.js</h2>

<div id="app">
    <ul>
        <li v-for="$x in todos">
            {{ $x.text }} - {{ $x.key}}
        </li>
    </ul>
</div>

<script>
    myObject = new Vue({
        el: '#app',
        data: {
            todos: [
                { text: 'Learn JavaScript', key : "hoc di" },
                { text: 'Learn Vue.js',   },
                { text: 'Build Something Awesome', key : "hoc di"  }
            ]
        }
    })
</script>

</body>
</html>
