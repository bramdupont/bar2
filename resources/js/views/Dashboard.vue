<template>
  <div>
    <Header title="Pintje 1"/>
    <div class="grid grid-cols-1 grid-rows-1 gap-4">
      <Drank :drank-id="drank.id" :drank="drank.name" :background-color="drank.color" :price="drank.price" :key="index" :current="consumpties[index].amount" v-for="(drank, index) in orderedDranken"></Drank>
    </div>
  </div>
</template>

<script>
import Drank from "../components/Drank";
import Header from "../components/Header/Header";
export default {
  name: 'Dashboard',
  components: {
    Drank,
    Header
  },
    data() {
      return {
          dranken: [],
          consumpties: [],
          currentAmount: 20
      }
    },
    methods: {
      getDranken() {
          axios.get('/api/dranken')
          .then(response => {
              this.dranken = response.data
          })
          .catch(error => {
              console.log(error);
          })
      },
        getConsumpties() {
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
      this.getDranken(),
      this.getConsumpties();
    },
    computed: {
        orderedDranken: function () {
            return _.orderBy(this.dranken, 'id')
        },
        orderedConsumpties: function() {
            return _.orderBy(this.consumpties, 'id')
        }
    }
}
</script>
