<template>
  <div>
    <h3 class="font-medium text-lg color-black text-left mb-4">Profiel</h3>
    <form action="POST">
        <input class="w-full bg-transparent border-b-2 border-purple my-4 p-2 text-black placeholder-grey-200" type="text" id="voornaam" placeholder="Voornaam">
        <input class="w-full bg-transparent border-b-2 border-purple my-4 p-2 text-black placeholder-grey-200" type="text" id="naam" placeholder="Naam">
        <input class="w-full bg-transparent border-b-2 border-purple my-4 p-2 text-black placeholder-grey-200" type="email" id="mail" placeholder="E-mailadres">
        <input class="w-full bg-transparent border-b-2 border-purple my-4 p-2 text-black placeholder-grey-200" type="password" id="wachtwoord" placeholder="Wachtwoord">
      <div class="flex justify-start items-start">
        <input type="submit" class="mt-4 bg-purple py-2 px-8 text-white rounded-md" value="Opslaan">
      </div>
    </form>
    <p @click="logout" class="mt-16 bg-purple p-2 text-white rounded-md w-1/2 mx-auto block">Uitloggen</p>
  </div>
</template>

<script>
export default {
    methods: {
        logout() {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios.post('/logout', this.formData).then(response => {
                    localStorage.removeItem('token')
                    console.log("logout successfull");
                    this.$router.push('/')
                }).catch(error => {
                    console.log(error);
                });
            });
        }
    }
}
</script>

<style scoped>

</style>
