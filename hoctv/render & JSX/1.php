<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<div id = "component_test">
    <anchored-heading :level="1">Hello world 33333!</anchored-heading>
</div>

<script>

    var getChildrenTextContent = function (children) {

        console.log('con ban - ', children);

        return children.map(function (node) {
            return node.children
                ? getChildrenTextContent(node.children)
                : node.text
        }).join('')
    }


    Vue.component('anchored-heading', {
        render: function (createElement) {
            // tạo id với kebabCase
            var headingId = getChildrenTextContent(this.$slots.default)
                .toLowerCase()
                .replace(/\W+/g, '-')
                .replace(/(^\-|\-$)/g, '');

            console.log('slot - ', this.$slots.default);

            return createElement(
                'div',
                [
                    createElement(
                        'a',
                        {
                            attrs: {
                                href: 'http://vnexpress.net'
                            }
                        },
                        [
                            createElement(
                                'h'+ this.level,
                                {
                                    attrs: {
                                        name: 'abc',
                                    }
                                },
                                this.$slots.default
                            )
                        ]

                    ),

                    createElement(
                        'hr',
                    ),

                    createElement(
                        'h2',
                        {
                            attrs: {
                                style: 'color:red;'
                            }
                        },
                        this.$slots.default
                    )
                ]
            )

            // return createElement(
            //     'h' + this.level,
            //     {
            //         attrs: {
            //             id: 123,
            //             style: 'color:red;'
            //         }
            //     },
            //     this.$slots.default
            // )
        },
        // props: {
        //     level: {
        //         type: Number,
        //         required: true
        //     }
        // }
        props : ['level']
    })

    new Vue({
        el: '#component_test'
    });

</script>
