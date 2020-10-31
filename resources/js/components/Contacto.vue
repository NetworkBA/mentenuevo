<template>
  <div>
    <div class="row justify-content-center">Contácto</div>

    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio1"
                value="option1"
              />
              <label class="form-check-label" for="inlineRadio1"
                >Soy Especialista</label
              >
            </div>
            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="radio"
                name="inlineRadioOptions"
                id="inlineRadio2"
                value="option2"
              />
              <label class="form-check-label" for="inlineRadio2"
                >Soy Paciente</label
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label for="name">Nombre</label>
            <input class="form-control" id="name" />
          </div>
          <div class="form-group col-md-6">
            <label for="na">Correo</label>
            <input type="email" class="form-control" id="na" />
          </div>
        </div>
        <div class="row">
          <label for="ta">Mensaje</label>
          <textarea
            id="ta"
            class="form-control"
            aria-label="With textarea"
          ></textarea>
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
