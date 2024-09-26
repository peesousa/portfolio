<template>
  <div class="row">
    <div v-for="(tecnologia, index) in tecnologias" :key="index" class="mb-4 col-6">
      <div>
        <p>
          {{ tecnologia.name }}
        </p>
      </div>
      <div class="progress rounded-1 bg-grey">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-blue" role="progressbar"
          :style="{ width: tecnologia.progress + '%' }" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
          {{ tecnologia.progress }}%
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProgressBarComponent",
  data() {
    return {
      tecnologias: [
        { name: "Spring Boot", progress: 90 },
        { name: "Laravel", progress: 25 },
        { name: "Js / Ts", progress: 10 },
        { name: "Angular", progress: 50 },
        { name: "Vue.Js", progress: 100 },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
.bg-blue {
  background-color: #4169e1;
}

.bg-grey {
  background-color: #939597;
}
</style>
