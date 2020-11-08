<template>
  <div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">Programa de Intervencion</div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="con">Consultante:</label>
            <input class="form-control" id="con" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="exp">Expediente:</label>
            <input class="form-control" id="exp" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="ps">Psicólogo/a:</label>
            <input class="form-control" id="na" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">
          Datos familiares/soporte personal
        </div>
        <div class="row">
          <div class="form-group col-md-3">
            <label for="con">Nombre:</label>
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
          </div>
          <div class="form-group col-md-3">
            <label for="con">Parentesco:</label>
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
          </div>
          <div class="form-group col-md-3">
            <label for="con">Edad:</label>
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
          </div>
          <div class="form-group col-md-3">
            <label for="con">Ocupación:</label>
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
            <input class="form-control" id="con" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">Acuerdos establecidos</div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="con">Fecha:</label>
            <input class="form-control" id="con" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="exp">Duración:</label>
            <input class="form-control" id="exp" />
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-12">
            <label for="ps">Fecha y Hora de proxima cita:</label>
            <input class="form-control" id="na" />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">Variables históricas relevantes</div>
        <div class="row">
           <textarea
            id="ta"
            name="mensaje"
            class="form-control"
            aria-label="With textarea"
            v-model="Tmensaje"
            required
          ></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">Objetivos de abordaje</div>
        <div class="row">
           <textarea
            id="ta"
            name="mensaje"
            class="form-control"
            aria-label="With textarea"
            v-model="Tmensaje"
            required
          ></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row justify-content-center">Métodos y técnicas utlizadas para la evaluación</div>
        <div class="row">
           <textarea
            id="ta"
            name="mensaje"
            class="form-control"
            aria-label="With textarea"
            v-model="Tmensaje"
            required
          ></textarea>
        </div>
      </div>
    </div>
     <div class="row">
      <div class="container" style="background-color: #f7f7f8">
           <div class="row">
          <a
            type="submit"
            class="btn btn-primary mx-auto btn-lg"
            style="background-color: #76cee6"
            v-on:click="GuardarContacto"
          >
            Siguiente
          </a>
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
