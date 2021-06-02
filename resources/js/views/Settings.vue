<template>
  <div>
    <Header title="Hey Bram"></Header>
    <profile-form></profile-form>
      <a href="https://dupontwebdesign.com" target="_blank" class="absolute bottom-4 w-11/12 text-gray-500 text-sm font-light block text-center">© Dupont Webdesign</a>
  </div>
</template>

<script>
import Header from "../components/Header/Header";
import ProfileForm from "../components/Settings/ProfileForm";
export default {
  components: {
    Header,
    ProfileForm
  }
}
</script>

<style scoped>

</style>
