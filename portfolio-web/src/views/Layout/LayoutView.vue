<template>
  <div class="min-vh-100 container-fluid align-items-center d-flex">
    <div class="row justify-content-center min-vw-100">
      <div class="col-10">
        <ContactView />
      </div>
    </div>
  </div>
</template>

<script>
import HomeView from "@/views/HomeView";
import AboutView from "@/views/AboutView";
import ContactView from "@/views/ContactView.vue";
export default {
  name: "LayoutView",
  components: {
    // HomeView,
    // AboutView,
    ContactView,
  },
};
</script>

<style lang="scss" scoped></style>
