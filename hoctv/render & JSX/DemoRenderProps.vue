<template>
  <div>
    <Counter :render="renderH1" />
    <Counter :render="renderP" />
  </div>
</template>

<script>

import Counter from 'Counter.php';

export default {
  components: {
    Counter,
  },
  methods: {
    renderH1(count) {
      return (
          `<h1>h1 Counter: ${ count }</h1>`
      )
    },
    renderP(count) {
      return (
          `<p>p Counter: ${ count }</p>`
      )
    }
  }
}
</script>
