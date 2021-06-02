<template>
  <div>
    <Header title="WHUT! Zoveel!?"></Header>
      <saldo-box :saldo-now="gebruikers[0].saldo" :totaal="gebruikers[0].totaal"></saldo-box>
    <account-links></account-links>
<!--    <recent-transactions></recent-transactions>-->
<!--    <a href="#" class="mt-8 bg-indigo-600 p-2 text-white rounded-md w-1/2 mx-lauto block">Bekijk meer</a>-->
      <a href="https://dupontwebdesign.com" target="_blank" class="absolute bottom-4 w-11/12 text-gray-500 text-sm font-light block text-center">© Dupont Webdesign</a>
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
