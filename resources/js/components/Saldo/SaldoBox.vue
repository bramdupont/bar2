<template>
  <div class="saldo-container text-white container mx-auto w-100 rounded-lg p-4 text-black flex flex-col">
    <div class="flex justify-between py-2">
    <p class="text-left text-md font-normal justify-self-start">Saldo</p>
      <p class="text-left text-md font-normal justify-self-end">€{{ gebruiker[0].saldo }}</p>
    </div>
    <div class="flex justify-between py-2">
      <p class="text-left text-md font-normal justify-self-start">Totaal geconsumeerd</p>
      <p class="text-left text-md font-normal justify-self-end">€{{ gebruiker[0].totaal }}</p>
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
    data() {
      return {
          gebruiker: []
      }
    },
    methods: {
        getSaldo() {
            axios.get('/api/gebruiker')
                .then(response => {
                    this.gebruiker = response.data
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },
    created() {
        this.getSaldo()
    }
}
</script>
<style scoped>
.saldo-container {
    background-color: rgb(30, 229, 146);
}
</style>
