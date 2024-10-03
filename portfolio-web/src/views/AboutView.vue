<template>
  <!-- <main class="border min-vh-100 d-flex mt-5 mt-lg-0 align-items-center my-auto"> -->
  <main class="col-10 container mb-5 mt-5">
    <div class="container-fluid container-sm my-4">
      <div class="row d-flex align-items-center justify-content-between">
        <div class="col-lg-5 text-start">
          <img src="@/assets/eu.jpeg" class="rounded-3" style="width: 300px; height: 300px" alt="" />
        </div>

        <div class="col-lg-7 align-items-center text-lg-start text-center">
          <h1 class="text-uppercase nome">
            Pedro <span class="sobrenome">Sousa</span>
          </h1>
          <!-- <span>Desenvolvedor back-end</span> -->
          <hr />
          <p class="fonte">
            {{ $t("aboutPageContent.summary") }}
          </p>

          <button type="button" class="btn btn-primary rounded-5 px-5 py-2 mt-4" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            {{ $t("aboutPageContent.button") }}
          </button>

          <!-- Modal -->
          <ModalAboutComponent />
        </div>
      </div>
    </div>
  </main>
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";
import ModalAboutComponent from "@/components/About/ModalAboutComponent.vue";

@Options({
  components: {
    ModalAboutComponent,
  },
})
export default class AboutView extends Vue { }
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

.nome {
  font-family: "Poppins";
  font-size: 30px;
  font-weight: 700;
  color: #fff;
}

.small {
  font-size: 10;
  font-family: "Poppins";
  font-weight: 200;
  color: #fff;
}

.fonte {
  font-family: "Poppins";
  font-size: 16px;
  font-weight: 400;
  color: #fff;
}

.fonte-modal {
  font-family: "Poppins";
  font-size: 14px;
  font-weight: 400;
  color: #fff;
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

.linha-horizontal {
  background-color: #4169e1;
}

.sobrenome,
.texto-azul {
  color: #4169e1;
}

.fundo-preto {
  background-color: #000;
}
</style>
