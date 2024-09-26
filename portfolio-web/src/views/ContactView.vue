<template>
  <div>
    <main class="min-vh-100 d-flex flex-column justify-content-center">
      <div class="d-flex container mb-5 mt-5">
        <h2 class="nome text-uppercase">
          Entre em <span class="texto-azul">Contato</span>
        </h2>
        <hr />
      </div>
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-1"></div>
          <div class="col-12 col-lg-4">
            <div class="rounded-2 py-1 mb-4 d-flex">
              <p class="mb-1">
                <span><i class="bi bi-whatsapp me-2"></i></span>
                WhatsApp
              </p>
            </div>
            <hr />

            <div class="rounded-2 py-1 mb-4 d-flex">
              <p class="mb-1">
                <span><i class="bi bi-telephone-fill me-2"></i></span>
                Telefone
              </p>
            </div>
            <hr />

            <div class="rounded-2 py-1 mb-4 d-flex">
              <p class="mb-1">
                <span><i class="bi bi-envelope-fill me-2"></i></span>
                E-Mail
              </p>
            </div>
            <hr />

            <div class="rounded-2 py-1 mb-4 d-flex">
              <p class="mb-1">
                <span><i class="bi bi-github me-2"></i></span>
                GitHub
              </p>
            </div>
            <hr />

            <div class="rounded-2 py-1 mb-4 mb-md-0 d-flex">
              <p class="mb-1">
                <span><i class="bi bi-linkedin me-2"></i></span>
                LinkedIn
              </p>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="row p-2 rounded-2 mb-5">
              <div class="col-12 col-lg-6">
                <div class="mb-3 d-flex flex-column align-items-start">
                  <label for="nameInput" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nameInput" />
                </div>
              </div>
              <div class="col-12 col-lg-6">
                <div class="mb-3 d-flex flex-column align-items-start">
                  <label for="emailInput" class="form-label">E-Mail</label>
                  <input type="email" class="form-control" id="emailInput" placeholder="name@example.com" />
                </div>
              </div>
              <div class="mb-3 d-flex flex-column align-items-start">
                <label for="messageInput" class="form-label">Mensagem</label>
                <textarea class="form-control" id="messageInput" rows="3"></textarea>
              </div>
            </div>
            <div class="d-flex">
              <button class="btn btn-primary mb-md-5">Enviar</button>
            </div>
          </div>
          <div class="col-lg-1"></div>
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
  font-size: 18px;
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
