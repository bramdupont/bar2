<template>
  <div class="drank-container container mx-auto w-100 rounded-lg p-4 text-white flex justify-between content-around items-center" :style="{ 'background-color': backgroundColor }">
    <div class="drank-info flex flex-col content-around">
      <h3 class="text-xl font-medium text-left">{{ drank }} - €{{ price }}</h3>
      <p v-if="updated" class="text-left text-md font-normal">Streepjes: {{ current }}</p>
      <p v-else="updated" class="text-left text-md font-normal">Streepjes: {{ newCurrent[0].amount }}</p>
    </div>
    <div class="drank-streepjes grid grid-cols-2 grid-rows-2 gap-4">
      <button @click="add(1)" class="font-bold text-md rounded-lg text-black outline-none rounded-sm p-3 bg-white flex-1">+1</button>
      <button @click="add(2)" class="font-bold text-md rounded-lg text-black outline-none rounded-sm p-3 bg-white flex-1">+2</button>
      <button @click="add(7)" class="font-bold text-md rounded-lg text-black outline-none rounded-sm p-3 bg-white flex-1">+7</button>
      <button @click="add(24)" class="font-bold text-md rounded-lg text-black outline-none rounded-sm p-3 bg-white flex-1">+24</button>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Drank',
  data() {
    return {
        number: 1,
        amount: 1,
        newCurrent: '',
        updated: true
    }
  },
  props: {
    drank: {
      type: String
    },
      drankId: Number,
    backgroundColor: {
      type: String
    },
      price: {
        type: Number
      },
      current: Number
  },
  methods: {
    add(number) {
      this.updateAmount(number);
      this.getConsumpties();
    },
      updateAmount(number) {
          axios.put(`/api/consumptie/${this.drankId}/${number}`)
              .then(response => {
              })
              .catch(error => {
                  console.log(error);
              })
      },
      getConsumpties() {
          axios.get(`/api/consumptie/${this.drankId}`)
              .then(response => {
                  this.newCurrent = response.data;
                  this.updated = false
              })
              .catch(error => {
                  console.log(error);
              })
      }
  }
}
</script>

<style scoped>
button:focus {
  outline: none;
}
</style>
