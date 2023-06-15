Vue.component('testcomponent',{

    props : ['c_name'],
    template :
        '<div v-on:mouseover = "changename()" v-on:mouseout = "originalname();">' +
            '<h1>data from component : <span id = "name">{{name}}</span></h1>' +
            '<h2>data from vue : <span id = "name">{{ c_name }}</span></h2>' +
        '</div>',

    data: function() {
        return {
            name : "Ria"
        }
    },
    methods:{
        changename : function() {
            this.name = "Ben";
        },
        originalname: function() {
            this.name = "Ria";
        }
    }
});
var vm1 = new Vue({
    name : "vm1",
    el: '#component_test',
    data : {
        vd_name : 'my name duc 1'
    }
});
var vm2 = new Vue({
    name : "vm2",
    el: '#component_test1',
    data : {
        vd_name : 'my name duc 2'
    }
});
