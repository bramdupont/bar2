<template>
  <div>
    <Header title="Hey Bram"></Header>
    <profile-form></profile-form>
      <p class="mt-12 text-gray-500 text-sm font-light">© Dupont Webdesign</p>
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
