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
            <router-link
              to="/contato"
              class="btn botao btn-primary rounded-5 py-2 px-5 my-4"
              >Entre em Contato</router-link
            >
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script lang="ts"></script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

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
