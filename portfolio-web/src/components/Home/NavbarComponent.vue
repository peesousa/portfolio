<template>
  <nav class="navbar my-4 navbar-custom-fixed navbar-expand-lg navbar-dark">
    <div class="container-lg container-fluid">
      <router-link to="/" class="navbar-brand">PS</router-link>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav nav-underline justify-content-end flex-grow-1 pe-3 ms-auto">
            <li class="nav-item">
              <router-link to="/" class="nav-link">Home</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/sobre-mim">Sobre mim</router-link>
            </li>

            <li class="nav-item">
              <router-link class="nav-link" to="/portfolio">Portfólio</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/blog">Blog</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/contato">Contato</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "NavbarComponent",
};
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

.navbar-custom-fixed {
  position: relative;
}

@media (min-width: 992px) {
  .navbar-custom-fixed {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1030;
  }
}

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
