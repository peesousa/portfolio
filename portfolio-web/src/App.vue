<template>
  <NavbarComponent />
  <!-- <nav> -->
  <!--   <router-link to="/">Home</router-link> | -->
  <!--   <router-link to="/about">About</router-link> | -->
  <!--   <router-link to="/teste">Teste</router-link> -->
  <!-- </nav> -->
  <!-- <router-view /> -->
  <div class="min-vh-100 container-fluid align-items-center d-flex">
    <div class="row justify-content-center min-vw-100">
      <div class="col-10">
        <router-view />
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";
import NavbarComponent from "@/components/Navbar/NavbarComponent.vue";

@Options({
  components: {
    NavbarComponent,
  },
})
export default class App extends Vue { }
</script>

<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>
