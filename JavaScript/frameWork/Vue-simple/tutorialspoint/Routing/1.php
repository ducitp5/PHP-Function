<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
    <script type = "text/javascript" src = "../js/vue-router.js"></script>
</head>
<body>

<div id = "app">

    <h1>Routing Example</h1>
    <p>
        <router-link to = "/route1">Router Link 1</router-link>
        <router-link to = "/route2">Router Link 2</router-link>
    </p>

    <router-view></router-view>
</div>

<script type = "text/javascript">

    var routes = [
        {
            path: '/route1',
            meta: {
                requiresAuth: true
            },
            component: {
                template:
                    '<div style = "border-radius:20px;background-color:cyan;width:200px;height:50px;margin:10px;font-size:25px;padding:10px;">' +
                    'This is router 1' +
                    '</div>'
            }
        },

        {
            path: '/route2',
            component: {
                template:
                    '<div style = "border-radius:20px;background-color:green;width:200px;height:50px;margin:10px;font-size:25px;padding:10px;">' +
                    'This is router 2' +
                    '</div>'
            }
        }
    ];

    const $router = new VueRouter({
        routes // short for `routes: routes`
    });

    var vm = new Vue({
        el: '#app',

        router : $router

    });

    // console.log(vm.$router.options.routes[0])
    // console.log(vm.$el, vm)

</script>

</body>
</html>
