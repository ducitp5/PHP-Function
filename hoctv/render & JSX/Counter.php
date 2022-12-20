<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>


<script>

    import Vue from 'vue'

    Vue.component('test-component', {
      template: '<div>VueJS {{ content }}</div>',
      data() {
        return {
          content : 'ITMagical',
          interval : ''
        }
      },
      beforeDestroy() {
        this.content = null
        delete this.content
        clearInterval(this.interval)
        console.log('beforeDestroy')
      },
      destroyed() {
        console.log('destroyed && content = ' + this.content)
      },
      created() {
        this.interval = setInterval(() => {
          console.log('not removed')
        },1000)
      }
    })

    export default {
      data() {
        return {
          show : true
        }
      }
    }
</script>



<template>
  <div id="root" class="pull-right">
    <test-component v-if="show"></test-component>
    <button class="btn btn-default" @click="show = !show">Action</button>

  </div>
</template>
