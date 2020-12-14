<template>
  <div>
    <div class="row justify-content-center">Formulario</div>
    <div class="row">
      <div class="container" style="background-color: #F7F7F8">
        <div class="row">
          <div class="form-group col-md-4">
            <label for="name">Nombre</label>
            <input class="form-control" name="name" id="name" />
          </div>
          <div class="form-group col-md-4">
            <label for="ap">Apellido</label>
            <input class="form-control" name="apellido" id="ap" />
          </div>
          <div class="form-group col-md-4">
            <label for="na">Nacionalidad</label>
            <input class="form-control" name="nacionalidad" id="na" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="sex">Sexo</label>
            <div  id="sex">
              <div name="sexo" class="col">
                  <input type="radio" id="Masculina" name="sexo" value="M"
                        checked>
                  <label for="Masculina">Masculina</label>

                  <input type="radio" id="Femenina" name="sexo" value="F">
                  <label for="Femenina">Femenina</label>
              </div>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="tel">Teléfono</label>
            <input class="form-control" type="tel" name="telefono" id="tel" maxlength="10" minlength="10" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
            <label for="DD">Fecha de Nacimiento</label>
            <datepicker name="fecha_nacimiento"></datepicker>
          </div>
          <div class="form-group col-md-6">
            <label for="Motivo">Motivo de consulta</label>
            <input name="motivo" type="text" id="Motivo" class="form-control form-control-lg">
          </div>
        </div>
        <div class="row">
          <a >
            <button
              type="submit"
              class="btn btn-primary mx-auto btn-lg"
              style="background-color: #76cee6"
            >
            Enviar
          </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import Datepicker from 'vuejs-datepicker';

export default {
  components: {
    Datepicker
  },
  mounted() {
    console.log("Component mounted.");
  }, 
};
</script>
