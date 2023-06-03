<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
    <script type = "text/javascript" src = "../js/vue-router.js"></script>

    <style>
        ._active{
            background-color : red;
        }
    </style>
</head>

<body>

<div id = "app">

    <h1>Routing Example</h1>

    <p>
        <router-link to = "/route1">                        Router Link 1</router-link>
        <router-link v-bind:to ="{path:'/route2'}">         Router Link 2</router-link>
        <router-link v-bind:to ="{path:'/route3'}" append>  Router Link 3</router-link>
    </p>
<!--    <p>-->
<!--        <router-link to ="/route1?name=Tery1&age=15">            Router Link 1 </router-link>-->
<!---->
<!--        <router-link v-bind:to ="{path:'/route1', query: { name: 'Tery2', age: 16 }}">            Router Link 2 </router-link>-->
<!--    </p>-->
<!--    <p>-->
<!--        <router-link v-bind:to = "{path:'/route1', query: { name: 'Tery' }}" replace>   Router Link 1 </router-link>-->
<!--    </p>-->
<!---->
<!--    <p>-->
<!--        <router-link v-bind:to = "{ path: '/route1'}" tag = "span"> Router Link 1</router-link>-->
<!--        <router-link v-bind:to = "{ path: '/route2'}" >             Router Link 2</router-link>-->
<!--    </p>-->
<!---->
<!---->
<!--    <p>-->
<!--        <router-link v-bind:to = "{ path: '/route1'}" active-class = "_active"> Router Link 1</router-link>-->
<!--        <router-link v-bind:to = "{ path: '/route2'}" tag = "span">             Router Link 2</router-link>-->
<!--    </p>-->
<!---->
<!--    <p>-->
<!--        <router-link v-bind:to = "{ path: '/route1'}" exact-active-class = "_active">Router Link 1</router-link>-->
<!--        <router-link v-bind:to = "{ path: '/route2'}" tag = "span">Router Link 2</router-link>-->
<!--    </p>-->
<!---->
    <router-link v-bind:to = "{ path: '/route1'}" active-class = "_active" event = "mouseover">Router Link 1</router-link>

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
                    'This is router 1 - ' +
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
        },
        {
            path: '/route3',
            component: {

                template:
                    '<div style = "border-radius:20px;background-color:yellow;width:200px;height:50px;margin:10px;font-size:25px;padding:10px;">' +
                    'This is router 3 ' +
                    //
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
