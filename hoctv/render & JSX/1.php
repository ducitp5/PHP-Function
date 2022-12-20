<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<anchored-heading :level="5">Hello world 33333!</anchored-heading>

<!--<script type="text/x-template" id="anchored-heading-template">-->
<!--    <h1 v-if="level === 1">-->
<!--        <slot></slot>-->
<!--    </h1>-->
<!--    <h2 v-else-if="level === 2">-->
<!--        <slot></slot>-->
<!--    </h2>-->
<!--    <h3 v-else-if="level === 3">-->
<!--        <slot></slot>-->
<!--    </h3>-->
<!--    <h4 v-else-if="level === 4">-->
<!--        <slot></slot>-->
<!--    </h4>-->
<!--    <h5 v-else-if="level === 5">-->
<!--        <slot></slot>-->
<!--    </h5>-->
<!--    <h6 v-else-if="level === 6">-->
<!--        <slot></slot>-->
<!--    </h6>-->
<!---->
<!--</script>-->


<script>

    var getChildrenTextContent = function (children) {
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
                .replace(/(^\-|\-$)/g, '')


            return createElement(
                'h' + this.level,
                [
                    createElement('a', {
                        attrs: {
                            name: headingId,
                            href: '#' + headingId
                        }
                    }, this.$slots.default)
                ]
            )
        },
        props: {
            level: {
                type: Number,
                required: true
            }
        }
    })

</script>