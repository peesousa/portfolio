<template>
  <div class="container col-10">
    <div id="carouselExample" class="carousel slide row">
      <div class="carousel-inner" style="width: 913px; height: 312px">
        <div
          :class="['carousel-item', { active: index === activeIndex }]"
          v-for="(card, index) in cards"
          :key="index"
        >
          <img
            :src="card.img"
            class="img-fluid img-thumbnail d-block w-100"
            :alt="card.description"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</template>

<script lang="ts">
import { Options, Vue } from "vue-class-component";
import { Prop } from "vue-property-decorator";
@Options({
  props: {
    img: {
      type: String,
      required: true,
    },
    description: {
      type: String,
      required: true,
    },
  },
})
export default class CarouselComponent extends Vue {}
</script>

<style scoped>
/* .carousel-item { */
/*   display: none; */
/* } */
/**/
/* .carousel-item.active { */
/*   display: block; */
/* } */
/**/
/* Define um tamanho fixo para o contêiner do carousel */
#carouselExample {
}
</style>
