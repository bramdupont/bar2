<template>
  <div class="saldo-container text-white container mx-auto w-100 rounded-lg p-4 text-black flex flex-col">
    <div class="flex justify-between py-2">
    <p class="text-left text-md font-normal justify-self-start">Saldo</p>
      <p class="text-left text-md font-normal justify-self-end">€{{ saldoNow | formatNumber }}</p>
    </div>
    <div class="flex justify-between py-2">
      <p class="text-left text-md font-normal justify-self-start">Totaal geconsumeerd</p>
      <p class="text-left text-md font-normal justify-self-end">€{{ totaal | formatNumber}}</p>
    </div>
  </div>
</template>

<script>
import Vue from "vue";
var numeral = require("numeral");
numeral.register('locale', 'fr', {
    delimiters: {
        thousands: '.',
        decimal: ','
    },
    abbreviations: {
        thousand: 'k',
        million: 'm',
        billion: 'b',
        trillion: 't'
    },
    ordinal : function (number) {
        return number === 1 ? 'er' : 'ème';
    },
    currency: {
        symbol: '€'
    }
});
Vue.filter("formatNumber", function (value){
    return numeral(value).format('0.00');
});
export default {
  name: 'saldo-box',
  props: {
      saldoNow: {
          type: Number
      },
      totaal: {
          type: Number
      }
  }
}
</script>
<style scoped>
.saldo-container {
    background-color: rgb(30, 229, 146);
}
</style>
