<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<div id="app3">
    <p>{{ count }}</p>
    <alert-box>
        sin chao em
    </alert-box>
</div>


<script type="text/javascript">

    Vue.component('alert-box', {
        template: `
            <div class="demo-alert-box">
                <strong>Lỗi!</strong>
                <div>
                    <slot>ko co gi</slot>
                </div>
            </div>
        `
    })

    var app = new Vue({
        el: '#app3',
        data: {
            count: 0
        },

    });
</script>