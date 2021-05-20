<template>
  <div>
      <div>
        <router-view></router-view>
        <div class="menu fixed bottom-0 left-0 right-0">
          <div class="menu flex flex-row justify-between items-end py-2">
            <router-link class="flex-1" to="/bestellen"><font-awesome-icon icon="home"/></router-link>
            <router-link class="flex-1" to="/saldo"><font-awesome-icon icon="credit-card"/></router-link>
            <router-link class="flex-1" to="/account"><font-awesome-icon icon="user"/></router-link>
            <router-link class="flex-1" to="/settings"><font-awesome-icon icon="cog"/></router-link>
          </div>
        </div>
      </div>
  </div>

</template>

<script>
import "../tailwind.css"
export default {
}
</script>
<style>
#app {
    min-height: 100vh;
    margin-bottom: 32px;
  font-family: Sofia Pro, sans-serif;
  padding: 16px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  background-color: #F3F3EE;
}

#app .menu .flex{
  background-color: #F3F3EE;
}
svg.svg-inline--fa{
    width: 24px !important;
    height: auto !important;
}
</style>
