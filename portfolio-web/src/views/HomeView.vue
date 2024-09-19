<!--<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js + TypeScript App"/>
  </div>
</template>
<script lang="ts">
import { Options, Vue } from 'vue-class-component';
import HelloWorld from '@/components/HelloWorld.vue'; // @ is an alias to /src

@Options({
  components: {
    HelloWorld,
  },
})
export default class HomeView extends Vue {}
</script>
-->

<template>
  <main class="min-vh-100 d-flex align-items-center text-center vermelho">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="text-uppercase nome mb-4">
            Pedro <span id="sobrenome">Sousa</span>
          </h1>
          <h2 class="mb-3 fonte">
            Desenvolvedor
            <span>Back-end</span>
          </h2>
          <div>
            <a
              href="contato.html"
              class="btn botao btn-primary rounded-5 py-2 px-5 my-4"
              >Entre em Contato</a
            >
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";
import NavbarComponent from "@/components/Home/NavbarComponent.vue";
@Options({})
export default class HomeView extends Vue {}
</script>

<style scoped></style>
