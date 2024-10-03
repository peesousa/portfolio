<template>
  <main class="">
    <div class="mb-5 mt-5 container col-10 text-start">
      <h2 class="nome text-uppercase" v-if="$i18n.locale === 'pt_BR'">
        {{ $t("blogPageContent.title1") }}
        <span class="texto-azul">{{ $t("blogPageContent.title2") }} </span>
      </h2>
      <h2 class="nome text-uppercase" v-else>
        {{ $t("blogPageContent.title1") }}
        <span class="texto-azul">{{ $t("blogPageContent.title2") }} </span>
      </h2>
      <hr />
    </div>

    <div class="container mt-4 col-10">
      <div class="row">
        <CarouselComponent
          :img="conteudoBlog.img"
          :description="conteudoBlog.description"
        />
      </div>
    </div>
  </main>
</template>

<script>
import CarouselComponent from "@/components/CarouselComponent";
export default {
  name: "BlogView",
  components: { CarouselComponent },
  data() {
    return {
      conteudoBlog: {
        img: "@/assets/eu.jpeg",
        description: "Aqui está uma imagem minha",
      },
    };
  },
};
</script>

<style lang="scss" scoped>
@import url("https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

.imagens {
  width: 300px;
  height: 300px;
}

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
