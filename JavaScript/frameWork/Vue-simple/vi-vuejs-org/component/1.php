<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<!--<div id="components-demo">-->
<!--    <button-counter pr1=30> </button-counter>-->
<!--    <button-counter pr1=10> </button-counter>-->
<!---->
<!--    <blog-post title="Giới thiệu về Vue"></blog-post>-->
<!--    <blog-post title="Các khái niệm trong Vue"></blog-post>-->
<!--    <blog-post title="Vue căn bản và vô cùng nâng cao"></blog-post>-->
<!--</div>-->
<!---->
<!--<script>-->
<!---->
<!--    Vue.component('button-counter', {-->
<!---->
<!--        props: ['pr1'],-->
<!---->
<!--        data: function () {-->
<!--            return {-->
<!--                dt1 : this.pr1,-->
<!--                dt2 : -5-->
<!--            }-->
<!--        },-->
<!---->
<!--        template:-->
<!--            `<button @click="dt1++; dt2--">Bạn đã bấm {{ dt1 }} lần {{ dt2 }}.</button>`-->
<!---->
<!--    })-->
<!---->
<!--    Vue.component('blog-post', {-->
<!--        props: ['title'],-->
<!--        template: '<h3>{{ title }}</h3>'-->
<!--    })-->
<!---->
<!--    new Vue({ el: '#components-demo' })-->
<!---->
<!--</script>-->


<!--<div id="blog-post-demo2">-->
<!--    <blog-post-->
<!--        v-for="post in posts"-->
<!--        v-bind:keyv="post.id"-->
<!--        v-bind:titlev="post.title"-->
<!--    >-->
<!--    </blog-post>-->
<!---->
<!--</div>-->
<!---->
<!--<script>-->
<!---->
<!--    Vue.component('blog-post', {-->
<!--        props: ['titlev', 'keyv'],-->
<!--        template: '<h3>{{ keyv }} - {{ titlev }}</h3>'-->
<!--    })-->
<!---->
<!--    new Vue({-->
<!--        el: '#blog-post-demo2',-->
<!--        data: {-->
<!--            posts: [-->
<!--                { id: 1, title: 'Giới thiệu về Vue' },-->
<!--                { id: 2, title: 'Các khái niệm trong Vue' },-->
<!--                { id: 3, title: 'Vue căn bản và vô cùng nâng cao' }-->
<!--            ]-->
<!--        }-->
<!--    })-->
<!--</script>-->


<!--<div id="blog-posts-events-demo">-->
<!--    <div style='color: blueviolet'-->
<!--         :style='{ fontSize: postFontSize + "em", color:  myColor}' >-->
<!--        <blog-post-->
<!--                v-for="post in posts"-->
<!--                v-bind:keyv="post.id"-->
<!--                v-bind:post="post"-->
<!--                v-bind:fsize="postFontSize"-->
<!--                v-on:enlarge-text="postFontSize += 0.02"-->
<!--                v-on:small-text="small(0.03)"-->
<!--        ></blog-post>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<script>-->
<!---->
<!--    Vue.component('blog-post', {-->
<!--        props: ['post', 'keyv', 'fsize'],-->
<!--        template: `-->
<!--            <div class="blog-post">-->
<!--              <h3>{{ keyv }} - {{ post.title }}</h3>-->
<!--              <button v-on:click="$emit('enlarge-text')">-->
<!--                Phóng to-->
<!--              </button>-->
<!--              <button v-on:click="fsize++">-->
<!--                Phóng to tu tu-->
<!--              </button>-->
<!--              <button @click="$emit('small-text')">-->
<!--                Thu nho-->
<!--              </button>-->
<!--              <b> {{ fsize }} </b>-->
<!--              <div v-html="post.content"></div>-->
<!--            </div>-->
<!--        `-->
<!--    })-->
<!---->
<!--    new Vue({-->
<!--        el: '#blog-posts-events-demo',-->
<!--        data: {-->
<!--            posts: [-->
<!--                { id: 1, title: 'Giới thiệu về Vue',                content : 'ct 1' },-->
<!--                { id: 2, title: 'Các khái niệm trong Vue',          content : 'ct 2'  },-->
<!--                { id: 3, title: 'Vue căn bản và vô cùng nâng cao',  content : 'ct 3'  }-->
<!--            ],-->
<!--            postFontSize: 1,-->
<!--            myColor: "red"-->
<!--        },-->
<!--        methods: {-->
<!--            small : function (val) {-->
<!--                this.postFontSize -= val;-->
<!--            }-->
<!--        }-->
<!--    })-->
<!---->
<!--</script>-->


<div id="blog-posts-events-demo2">
    <div style='color: blueviolet'
         :style='{ fontSize: postFontSize + "em", color:  myColor}' >

        <blog-post
                v-for="post in posts"
                v-bind:keyv="post.id"
                v-bind:post="post"
                v-bind:fsize="postFontSize"
                v-bind:msize="vmsize"
                v-on:enlarge-text="postFontSize += $event"
                v-on:change-text="onChangeTextSize"
        ></blog-post>

        <input v-model='postFontSize'>
    </div>
</div>

<script>

    var $vc = Vue.component('blog-post', {

        props: ['post', 'keyv', 'fsize', 'msize'],

        template: `
            <div class="blog-post">
                <button @click="$emit('enlarge-text', 0.1)">
                  Phóng to
                </button>
                <button v-on:click="$emit('change-text', { amount : -0.1, lettre : 'abc', change : false })">
                  Thu nho
                </button>
                <input v-model=msize type="number">

                <button v-on:click="$emit('change-text', { amount : msize, lettre : 'edf' })" >
                  dieu chinh theo tham so
                </button>

                <b> {{ fsize }} </b>

                <div v-html="post.content"></div>
            </div>
        `
    })

    $vu = new Vue({
        el: '#blog-posts-events-demo2',
        data: {
            posts: [
                {   id: 1,
                    title: 'Giới thiệu về Vue',
                    content : 'content - '
                },
            ],
            postFontSize: 1,
            myColor: "red",
            vmsize: 0.02,
        },
        methods: {
            onChangeTextSize: function ( { amount, lettre, change }) {
                amount = Number(amount);
                console.log(amount, lettre, change)
                console.log($vc)
                this.postFontSize = this.postFontSize + amount;

                if(change === undefined)
                return this.vmsize = amount;
            }
        },
    })

    console.log(77777, $vu)

</script>
