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
  <div>
    <!-- <main class="min-vh-100 fixed-top z-n1 d-flex align-items-center text-center vermelho"> -->
    <main class="container col-10 mb-5 mt-5 vermelho">
      <div class="container col-10">
        <div class="row">
          <div class="col-12">
            <h1 class="text-uppercase nome mb-4">
              Pedro <span id="sobrenome">Sousa</span>
            </h1>
            <h2 class="mb-3 fonte" v-if="$i18n.locale === 'pt_BR'">
              {{ $t("homePageContent.jobTitle") }}
              <span>{{ $t("homePageContent.backend") }} </span>
            </h2>

            <h2 class="mb-3 fonte" v-else>
              {{ $t("homePageContent.jobTitle") }}
              <span>{{ $t("homePageContent.backend") }} </span>
            </h2>
            <div>
              <router-link to="/contato" class="btn botao btn-primary rounded-5 py-2 px-5 my-4">
                {{ $t("homePageContent.contactButton") }}
              </router-link>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";
import NavbarComponent from "@/components/Home/NavbarComponent.vue";
@Options({})
export default class HomeView extends Vue { }
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

body {
  max-height: 100vh;
}

/*body {
  background-image: url(assets/artifact.gif);
  background-repeat: no-repeat;
  background-size: cover;
  filter: blur;
}
*/

margin-helper {
  margin-top: 1000px;
}

.vermelho {
  color: white;
}

.nome {
  font-family: "Poppins";
  font-size: 60px;
  font-weight: 700;
}

.fonte {
  font-family: "Poppins";
  font-size: 25px;
  font-weight: 400;
}

.cor-navbar {
  background-color: rgba(65, 105, 225, 0.5);
  /*background-color: #4169e1;*/
}

.botao {
  background-color: #4169e1;
  font-family: "Poppins";
  color: white;
  text-decoration: none;
}

.botao:hover {
  color: #000;
  background-color: #fff;
  transition: 300ms;
}

#sobrenome {
  color: #4169e1;
}
</style>
