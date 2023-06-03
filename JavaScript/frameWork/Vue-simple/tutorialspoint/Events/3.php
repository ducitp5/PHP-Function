<html>
<head>
    <title>VueJs Instance</title>
    <script type = "text/javascript" src = "../js/vue.js"></script>
</head>
<body>

<div id = "databinding1">
    <button @click.once = "buttonclickedonce" v-bind:style = "styleobj">Click Once</button>
    Output:{{clicknum}}
    <br/><br/>
    <button v-on:click = "buttonclicked"  v-bind:style = "styleobj">Click Me</button>
    Output:{{clicknum1}}
</div>

<div id = "databinding2">
    <button v-on:click.once = "buttonclickedonce" v-bind:style = "styleobj">Click Once</button>
    Output:{{clicknum}}
    <br/><br/>
    <button v-on:click = "buttonclicked"  v-bind:style = "styleobj">Click Me</button>
    Output:{{clicknum1}}
</div>

<script type = "text/javascript">

    $mixin =  {


        data: function() {

            return {
                clicknum : 0,
                clicknum1 :0,
                styleobj: {
                    backgroundColor: '#2196F3!important',
                    cursor: 'pointer',
                    padding: '8px 16px',
                    verticalAlign: 'middle',
                }
            }

        },

        methods : {
            buttonclickedonce : function() {
                this.clicknum++;
            },
            buttonclicked : function() {
                this.clicknum1++;
            }
        }
    };

    var $vm = Vue.extend({

        mixins : [ $mixin ]
    });


    $vm1 = new $vm({

        el: '#databinding1',
    });

    $vm2 = new $vm({
        el : '#databinding2',
    });
    // $vm1.el = 'databinding3';
    console.log($vm)
    console.log($vm1)
    console.log($vm2)

</script>
</body>
</html>
