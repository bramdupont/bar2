<template>
  <div class="text-right flex flex-row items-center">
      <router-link to="/account">
        <img class="w-14 ml-3" :src="image" alt="">
      </router-link>
  </div>
</template>

<script>
import image from "../../assets/Beerlogo.png";
export default {
  name: 'User',
    data() {
      return{
        image: image
      }
  },
  props: {
    gebruiker: {
      type: String
    },
    profile: {
      type: String
    }
  }
}
</script>

<style scoped>

</style>
