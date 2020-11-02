<template>
  <div>
    <div class="row justify-content-center">Contácto</div>

    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input
              required
                class="form-check-input"
                type="radio"
                name="id_tipo"
                id="inlineRadio1"
                value="2"
              />
              <label class="form-check-label" for="inlineRadio1"
                >Soy Especialista</label
              >
            </div>
            <div class="form-check form-check-inline">
              <input
              required
                class="form-check-input"
                type="radio"
                name="id_tipo"
                id="inlineRadio2"
                value="3"
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
            <input class="form-control" id="name" name="nombre" required  autofocus autocomplete="name"/>
          </div>
          <div class="form-group col-md-6">
            <label for="na">Correo</label>
            <input type="email" class="form-control" id="na" name="email" required/>
          </div>
        </div>
        <div class="row">
          <label for="ta">Mensaje</label>
          <textarea
            id="ta"
            name="mensaje"
            class="form-control"
            aria-label="With textarea"
            required
          ></textarea>
        </div>
        <div class="row">
          <button
            type="submit"
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
