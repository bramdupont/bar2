<template>
  <div>
    <h1 class="text-2xl font-bold">{{title}}</h1>
  </div>
</template>

<script>
export default {
  name: 'Title',
  props: {
    title: {
      type: String
    }
  }
}
</script>

<style scoped>

</style>