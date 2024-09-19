<template>
  <div
    class="modal fade fundo-preto"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
      <div class="modal-content bg-dark">
        <div class="modal-header mb-4">
          <h1 class="modal-title fs-5 nome" id="exampleModalLabel">
            Pedro <span class="sobrenome">Sousa</span>
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>

        <div class="modal-body bg-secondary">
          <div class="row container">
            <div class="col-lg-4 col-12">
              <div class="sticky-top">
                <div class="text-center">
                  <img
                    src="@/assets/eu.jpeg"
                    style="width: 100px; height: 100px"
                    class="rounded-5 mb-5"
                    alt=""
                  />
                </div>
                <div class="align-items-start">
                  <p class="fonte-modal mb-1">
                    <span class="texto-azul"
                      ><i class="bi bi-calendar3 me-2"></i
                    ></span>
                    27/09/2002
                  </p>
                  <hr />

                  <p class="fonte-modal mb-1">
                    <span class="texto-azul"
                      ><i class="bi bi-geo-alt-fill me-2"></i
                    ></span>
                    Brasília-DF, Brasil
                  </p>
                  <hr />

                  <p class="fonte-modal mb-1">
                    <span class="texto-azul"
                      ><i class="bi bi-telephone-fill me-2"></i
                    ></span>
                    (61) 99969-9784
                  </p>
                  <hr />

                  <p class="fonte-modal mb-1">
                    <span class="texto-azul"
                      ><i class="bi bi-envelope-fill me-2"></i
                    ></span>
                    Copiar E-mail
                  </p>

                  <hr />
                  <button
                    class="btn btn-primary rounded-5 mt-1 px-4 w-75 mb-5 mb-lg-0"
                  >
                    <i class="bi bi-download me-2"></i>
                    <span>Currículo</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-12 fonte-modal">
              <div class="mb-5">
                <h3 class="text-uppercase">
                  Sobre <span class="texto-azul">mim</span>
                </h3>
                <hr />
                <p>
                  Olá a todos! Meu nome é Pedro Sousa, eu tenho 21 anos e,
                  atualmente, sou estudante de Ciência da Computação pelo
                  Instituto Federal de Brasília. Durante a trajetória na
                  faculdade eu tive a oportunidade de trabalhar com tecnologias
                  de desenvolvimento Front-End e Back-End. Logo de cara me
                  apaixonei por essas tecnologias e desde então eu trabalho com
                  elas utilizando algumas ferramentas como Laravel, Spring Boot,
                  Angular e Vue.Js. Durante o período de estudos eu também tive
                  contato com outras tecnologias como Git/ GitHub, Docker,
                  Bancos de Dados SQL e algumas ferramentas de escritório como
                  Word e Excel, além de ter uma boa organização e conhecimento
                  de metodologias ágeis, onde eu me destaco mais na utilização
                  do Kanban.
                </p>
              </div>
              <div class="mb-5">
                <h3 class="text-uppercase">Serviços</h3>
                <hr />
                <p>Atualmente eu presto os seguintes tipos de serviço:</p>
                <ul>
                  <li>serviço 1</li>
                  <li>serviço 2</li>
                  <li>serviço 3</li>
                </ul>
              </div>
              <div class="mb-5">
                <h3 class="text-uppercase">
                  Minhas <span class="texto-azul">Skills</span>
                </h3>
                <hr />
                <ul>
                  <li>Laravel/ PHP</li>
                  <li>Java</li>
                  <li>Angular</li>
                  <li>Vue.Js</li>
                  <li>JavaScript</li>
                </ul>
              </div>

              <div class="mb-5">
                <h3 class="text-uppercase">
                  Trajetória <span class="texto-azul">Acadêmica</span>
                </h3>
                <hr />
                <ul>
                  <li>Centro de Ensino Médio Setor Leste</li>
                  <li>Instituto Federal de Brasília</li>
                </ul>
              </div>

              <div class="mb-5">
                <h3 class="text-uppercase">
                  Trajetória
                  <span class="texto-azul">Profissional</span>
                </h3>
                <hr />
                <ul>
                  <li>Advice Tecnologia</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="modal-footer"> -->
      <!-- </div> -->
    </div>
  </div>
</template>

<script lang="ts">
export default {
  name: "ModalAboutController",
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
