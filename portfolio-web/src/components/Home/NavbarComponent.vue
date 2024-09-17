<template>
  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark my-4">
      <div class="container-fluid container-lg">
        <a class="navbar-brand" to="/">PS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul
              class="navbar-nav justify-content-end flex-grow-1 pe-3 nav-underline ms-auto"
            >
              <li class="nav-item">
                <router-link to="/" class="nav-link">Home</router-link>
              </li>
              <li class="nav-item">
                <router-link to="/sobre-mim" class="nav-link"
                  >Sobre mim</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="/portfolio" class="nav-link"
                  >Portfólio</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="/contato" class="nav-link"
                  >Contato</router-link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
</template>

<script lang="ts"></script>

<style scoped></style>
