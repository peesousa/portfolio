<template>
  <main class="">
    <div class="container col-10 text-start mb-5 mt-5">
      <h2 class="nome text-uppercase" v-if="$i18n.locale === 'pt_BR'">
        {{ $t("contactPageContent.title1") }}
        <span class="texto-azul">{{ $t("contactPageContent.title2") }} </span>
      </h2>
      <h2 class="nome text-uppercase" v-else>
        {{ $t("contactPageContent.title1") }}
        <span class="texto-azul">{{ $t("contactPageContent.title2") }} </span>
      </h2>
      <hr />
    </div>

    <div class="container col-10">
      <div class="row justify-content-between">
        <div class="col-12 col-lg-5">
          <div class="rounded-2 py-1 mb-4 d-flex py-2 bg-dark" v-for="(contact, index) in contacts" :key="index">
            <p class="mb-1 texto-azul ms-3 mt-1">
              <span><i :class="`bi ${contact.icon} me-2`"></i></span>
              {{ contact.name }}
            </p>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="row rounded-2 gy-4">
            <div class="col-12 col-lg-6">
              <div class="d-flex flex-column align-items-start">
                <input type="text" style="height: 47px" class="form-control" id="nameInput"
                  :placeholder="$t('contactPageContent.formName')" />
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="">
                <input type="email" style="height: 47px" class="form-control" id="emailInput"
                  :placeholder="$t('contactPageContent.formEmail')" />
              </div>
            </div>
            <div class="d-flex flex-column align-items-start">
              <textarea class="form-control" style="height: 122px" :placeholder="$t('contactPageContent.formMessage')"
                id="messageInput" rows="3"></textarea>
            </div>

            <div class="text-start">
              <button class="btn btn-primary mb-md-5 rounded-5 px-5" style="height: 47px">
                {{ $t("contactPageContent.button") }}
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";
@Options({
  data() {
    return {
      contacts: [
        { name: "(61) 99969-9784", icon: "bi-whatsapp" },
        { name: "pedroeduardo.lsousa@gmail.com", icon: "bi-envelope-fill" },
        { name: "@peesousa", icon: "bi-github" },
        { name: "@pedro_eduardo", icon: "bi-linkedin" },
      ],
    };
  },
})
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
