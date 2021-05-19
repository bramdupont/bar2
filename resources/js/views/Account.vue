<template>
  <div>
    <Header title="Hey Bram"></Header>
      <saldo-box :saldo-now="gebruikers[0].saldo" :totaal="gebruikers[0].totaal"></saldo-box>
    <account-links></account-links>
    <recent-transactions></recent-transactions>
    <a href="#" class="mt-8 bg-indigo-600 p-2 text-white rounded-md w-1/2 mx-auto block">Bekijk meer</a>
  </div>
</template>

<script>
import Header from "../components/Header/Header";
import SaldoBox from "../components/Saldo/SaldoBox";
import AccountLinks from "../components/Account/AccountLinks";
import RecentTransactions from "../components/Transacties/RecentTransactions";
export default {
  components: {
    Header,
    SaldoBox,
    AccountLinks,
    RecentTransactions
  },
    data() {
      return{
          gebruikers: []
      }
    },
    methods: {
        getSaldo() {
            axios.get('/api/gebruikers')
                .then(response => {
                    this.gebruikers = response.data
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

</style>
