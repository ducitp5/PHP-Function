<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<div id="app">
    <p>Fullname: {{ fullName }}</p>
    <button v-on:click="changeNameSetter">Change Name (setter)</button>
</div>

<script>
    new Vue({
        el: '#app',
        name: 'HelloWorld',
        data () {
            return {
                firstName: 'Quang',
                lastName: 'Phu'
            }
        },
        methods: {
            changeNameSetter () {
                this.fullName = 'Thu Thuy';
            }
        },
        computed: {
            fullName: {
                get () {
                    alert("Assembling full name...");
                    return `${this.firstName} ${this.lastName}`
                },
                set (fullname) {
                    alert("Setting new name: " + fullname);
                    this.firstName = fullname.split(' ')[0]
                    this.lastName = fullname.split(' ')[1]
                }
            }
        }
    })
</script>