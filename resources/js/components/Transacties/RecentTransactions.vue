<template>
  <div class="text-left mt-4">
    <h2 class="text-xl font-semibold">Recente transacties</h2>
      <Transactie :key="index" v-for="(consumptie, index) in sliceTransacties" :datum="consumptie.updated_at" :aantal="consumptie.id" :drank="consumptie.name"></Transactie>
  </div>
</template>

<script>
import Transactie from "./Transactie";
export default {
    data(){
        return {
            consumpties: []
        }
    },
    components: {
      Transactie
    },
    methods: {
        getTransacties() {
            axios.get('/api/consumpties')
                .then(response => {
                    this.consumpties = response.data
                })
                .catch(error => {
                    console.log(error);
                })
        }
    },
    created() {
        this.getTransacties()
    },
    computed: {
        sliceTransacties() {
            return this.consumpties.slice(0,7);
        }
    }
}
</script>

