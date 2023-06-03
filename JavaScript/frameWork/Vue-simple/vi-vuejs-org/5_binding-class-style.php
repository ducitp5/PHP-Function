<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<hr>
<div class="static" id="demo"
     v-bind:class="{ active: isActive, 'text-danger': hasError }">
</div>

<script>
    var vm = new Vue({
        el: '#demo',
        data: {
            isActive: true,
            error: null
        },
        computed: {
            classObject: function () {
                return {
                    active: this.isActive && !this.error,
                    'text-danger': this.error && this.error.type === 'fatal'
                }
            }
        }
    })
</script>