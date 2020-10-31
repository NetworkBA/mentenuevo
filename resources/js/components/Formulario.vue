<template>
  <div>
    <div class="row justify-content-center">Formulario</div>
    <div class="row">
      <div class="container" style="background-color: #F7F7F8">
        <div class="row">
          <div class="form-group col-md-4">
            <label for="name">Nombre</label>
            <input class="form-control" id="name" />
          </div>
          <div class="form-group col-md-4">
            <label for="ap">Apellido</label>
            <input class="form-control" id="ap" />
          </div>
          <div class="form-group col-md-4">
            <label for="na">Nacionalidad</label>
            <input class="form-control" id="na" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="sex">Nacionalidad</label>
            <div id="sex">
              <div class="col">
                <button
                  type="button"
                  class="btn btn-primary mx-auto btn-lg"
                  style="background-color: #76cee6"
                >
                  Masculino
                </button>
                <button
                  type="button"
                  class="btn btn-primary mx-auto btn-lg"
                  style="background-color: #76cee6"
                >
                  Femenino
                </button>
              </div>
            </div>
          </div>
          <div class="form-group col-md-6">
            <label for="tel">Teléfono</label>
            <input class="form-control" id="tel" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-2">
            <label for="DD">Fecha de Nacimiento</label>
            <select id="DD" class="form-control form-control-lg">
              <option>Large select</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="MM">Motivo de consulta</label>
            <select id="MM" class="form-control form-control-lg">
              <option>Large select</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="YYY">Motivo de consulta</label>
            <select id="YYY" class="form-control form-control-lg">
              <option>Large select</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="Motivo">Motivo de consulta</label>
            <select id="Motivo" class="form-control form-control-lg">
              <option>Large select</option>
            </select>
          </div>
        </div>
        <div class="row">
          <button
            type="button"
            class="btn btn-primary mx-auto btn-lg"
            style="background-color: #76cee6"
          >
            Enviar
          </button>
        </div>
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
