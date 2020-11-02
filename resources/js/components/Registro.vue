<template>
  <div class="container justify-content-center">
    <div class="row">
      <div class="col">
          <div class="container">
          <div class="row justify-content-center">Registro</div>
          <div class="row">
            <div class="col">
              <div class="row justify-content-center">
                <ion-icon name="logo-facebook"></ion-icon>
                <ion-icon name="logo-google"></ion-icon>
              </div>
              <div class="row justify-content-center">ó usa tu correo para registrarte</div>
            </div>
          </div>
          <div class="form-group">
            <label for="Usuario">Nombre</label>
            <input class="form-control" id="Usuario" name="name"  required autofocus autocomplete="name" />
          </div>
          <div class="form-group">
            <label type="email" for="mail">Correo Electrónico</label>
            <input class="form-control" id="mail" name="email"  required />
          </div>
          <div class="form-group">
            <label for="pass">Contraseña</label>
            <input type="password" class="form-control" id="pass" name="password"  required  autocomplete="new-password" />
          </div>
          <div class="form-group">
            <label for="password confirm">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"  required autocomplete="new-password" />
          </div>
          <div class="row">
            <div class="col">
              <div class="row justify-content-center"><a href="/Login">¿Ya tienes cuenta?</a></div>
              <div class="row">
                <button
                  type="submit"
                  class="btn btn-primary mx-auto btn-lg"
                  style="background-color: #76cee6"
                >
                  Registrarme
                </button> 


              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col" style="background-color: #F47E6E">
        <span class="align-middle mx-auto text-white align-self-center"
          >Bienvenido</span
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
