<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "js/vue.js"></script>
</head>
<body>

<div id = "component_test">

    <testcomponent :elementtype = "'div, red , 25, div1'"><b> Hello Jai </b></testcomponent>
    <testcomponent :elementtype = "'h3,green,25,h3tag'">Hello Roy</testcomponent>
<!--    <testcomponent :elementtype = "'p,blue,25,ptag'">Hello Ria</testcomponent>-->
<!--    <testcomponent :elementtype = "'div,green,25,divtag'">Hello Ben</testcomponent>-->
</div>

<script type = "text/javascript">

    Vue.component('testcomponent',{

        // props:{
        //     elementtype:{
        //         attributes:String,
        //         required:true
        //     }
        // },

        props : [ 'elementtype'],

        render :function(createElement){

            var a = this.elementtype.split(",");

            console.log(createElement, this, this.$slots.default, this.$slots);

            return createElement(
                a[0],
                {
                    attrs:{
                        id      : a[3],
                        style   : "color:" +a[1] +";font-size:" +a[2] +";"
                    }
                },
                this.$slots.default,
            )
        },

    });

    var vm = new Vue({
        el: '#component_test'
    });

</script>
</body>
</html>
