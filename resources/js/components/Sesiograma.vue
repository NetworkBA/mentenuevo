<template>
  <div>
    <div class="row">
      <div class="container" style="background-color: #f7f7f8">
        <div class="row">
          <div class="container" style="background-color: #f7f7f8">
            <div class="row justify-content-center">Sesiograma</div>
            <div class="row">
              <div class="form-group col-md-3">
                <label for="con">Sesión</label>
                <br />
                <a id="con">Sesión A</a>
              </div>
              <div class="form-group col-md-3">
                <label for="con">Tema</label>
                <input class="form-control" id="con" />
              </div>
              <div class="form-group col-md-3">
                <label for="con">Recursos</label>
                <input class="form-control" id="con" />
              </div>
              <div class="form-group col-md-3">
                <label for="con">Observación</label>
                <input class="form-control" id="con" />
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label for="con">Resumen de la sesión</label>
          </div>
          <div class="col-md-9">
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
        <br />
        <div class="row">
          <div class="col-md-3">
            <label for="con">Sesión B</label>
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-md-3">
            <label for="con">Resumen de la sesión</label>
          </div>
          <div class="col-md-9">
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
        <br />
        <div class="row">
          <div class="col-md-3">
            <label for="con">Sesión C</label>
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-md-3">
            <label for="con">Resumen de la sesión</label>
          </div>
          <div class="col-md-9">
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
        <br />
        <div class="row">
          <div class="col-md-3">
            <label for="con">Sesión D</label>
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
          <div class="col-md-3">
            <input class="form-control" id="exp" />
          </div>
        </div>
        <br />
        <div class="row">
          <div class="col-md-3">
            <label for="con">Resumen de la sesión</label>
          </div>
          <div class="col-md-9">
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
        <div class="row">
          <div class="container" style="background-color: #f7f7f8">
            <div class="row justify-content-center">
              Observaciones generales
            </div>
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
            <div class="row justify-content-center">Recomendaciones</div>
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
          <div class="container">
            <div class="row">
              <label>ANEXO I. CONSENTIMIENTO INFORMADO</label>
              <br />
              <label>ANEXO II. ENTREVISTA INICIAL</label>
              <br />
              <label>ANEXO III. EXAMEN MENTAL</label>
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
                Guardar
              </a>
            </div>
          </div>
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
