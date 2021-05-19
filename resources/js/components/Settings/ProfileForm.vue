<template>
  <div>
    <h3 class="font-medium text-lg color-black text-left mb-4">Profiel</h3>
    <form action="POST">
        <input class="w-full bg-transparent border-b-2 border-indigo-600 my-4 p-2 text-black placeholder-grey-200" type="text" id="voornaam" placeholder="Voornaam">
        <input class="w-full bg-transparent border-b-2 border-indigo-600 my-4 p-2 text-black placeholder-grey-200" type="text" id="naam" placeholder="Naam">
        <input class="w-full bg-transparent border-b-2 border-indigo-600 my-4 p-2 text-black placeholder-grey-200" type="email" id="mail" placeholder="E-mailadres">
        <input class="w-full bg-transparent border-b-2 border-indigo-600 my-4 p-2 text-black placeholder-grey-200" type="password" id="wachtwoord" placeholder="Wachtwoord">
      <div class="flex justify-start items-start">
        <input type="submit" class="mt-4 bg-indigo-600 py-2 px-8 text-white rounded-md" value="Opslaan">
      </div>
    </form>
    <a href="/logout" class="mt-16 bg-indigo-600 p-2 text-white rounded-md w-1/2 mx-auto block">Uitloggen</a>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>

</style>
