<template>
  <div class="container flex flex-row justify-between items-center mb-8 p-0">
    <Title :title="title"></Title>
    <User></User>
  </div>
</template>

<script>
import User from "./User";
import Title from "./Title";
export default {
  components: {
    User,
    Title
  },
  props: {
    title: {
      type: String
    }
  }
}
</script>

<style scoped>

</style>
