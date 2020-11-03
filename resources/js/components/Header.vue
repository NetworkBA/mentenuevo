<template>
  <div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4">
          <img src="/images/logo.svg" class="img-fluid" style="padding: 20px" />
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light"
      style="background-color: #27CC9A">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-between"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link menu" href="/">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="/perfiles">Perfiles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="/planes">Planes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="/contacto/crear">Contacto</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li><a  href="/Registro" class="nav-link">Registro</a></li>
            <li><a  href="/Login" class="nav-link">Iniciar Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
