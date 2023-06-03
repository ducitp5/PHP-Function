<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<!--<div id="blog-posts-events-demo">-->
<!--    <custom-input-->
<!--        v-bind:value="searchText"-->
<!--        v-on:input="searchText = $event"-->
<!--    ></custom-input>-->
<!--</div>-->
<!---->
<!--<script>-->
<!---->
<!--    Vue.component('custom-input', {-->
<!---->
<!--        props: ['value'],-->
<!---->
<!--        template: `-->
<!--            <input-->
<!--              v-bind:value="value"-->
<!--              v-on:input="$emit('input', $event.target.value)"-->
<!--            >-->
<!--        `-->
<!--    })-->
<!---->
<!--    $vu = new Vue({-->
<!--        el: '#blog-posts-events-demo',-->
<!--        data: {-->
<!--            searchText: 0.02,-->
<!--        },-->
<!--    })-->
<!---->
<!--</script>-->



<div id="blog-posts-events-demo2">
    <alert-box >
        Đã xảy ra cái gì gì đó
    </alert-box>
</div>

<script>

    Vue.component('alert-box', {
        template: `
            <div class="demo-alert-box">
              <strong>Lỗi!</strong>
              <slot>123</slot>
            </div>
        `
    })

    $vu = new Vue({
        el: '#blog-posts-events-demo2',
    })

</script>
