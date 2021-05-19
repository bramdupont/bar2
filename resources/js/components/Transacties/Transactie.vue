<template>
  <div class="flex justify-between border-b-2 border-indigo-600 my-2">
    <p>{{ datum | formatDate }}</p>
    <p>{{ aantal }} x {{ drank }}</p>
  </div>
</template>

<script>
import Vue from "vue";
var moment = require('moment');

Vue.filter('formatDate', function(value) {
    return moment(value).format('DD MM YYYY hh:00')
})
moment().format();
export default {
    props: {
      datum: String,
      aantal: String,
      drank: String
    }
}
</script>

<style scoped>

</style>
