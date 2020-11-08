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
                value="1"
                v-model="picked"
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
                value="2"
                v-model="picked"
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
            <input
              class="form-control"
              id="name"
              v-model="Tnombre"
              name="nombre"
              required
              autofocus
              autocomplete="name"
            />
          </div>
          <div class="form-group col-md-6">
            <label for="na">Correo</label>
            <input
              type="email"
              v-model="mail"
              class="form-control"
              id="na"
              name="email"
              required
            />
          </div>
        </div>
        <div class="row">
          <label for="ta">Mensaje</label>
          <textarea
            id="ta"
            name="mensaje"
            class="form-control"
            aria-label="With textarea"
            v-model="Tmensaje"
            required
          ></textarea>
        </div>
        <div class="row">
          <a
            type="submit"
            class="btn btn-primary mx-auto btn-lg"
            style="background-color: #76cee6"
            v-on:click="GuardarContacto"
          >
            Enviar
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      Tnombre: "",
      mail: "",
      Tmensaje: "",
      picked: "",
    };
  },
  mounted() {},
  methods: {
    GuardarContacto: function () {
      if (!this.validEmail(this.mail)) {
        alert("El correo electrónico debe ser válido.");
      } else {
        let data = {
          nombre: this.Tnombre,
          email: this.mail,
          mensaje: this.Tmensaje,
          id_tipo: this.picked,
        };
        console.log(data);
        axios
          .post("/contacto/store", data)
          .then((response) => {
            console.log(response);
            console.log(response.status);
            if (response.status === 200) {
              alert("Se ha registrado correctamente el registro");
            }
          })
          .catch((error) => {
            alert(error.response);
          });
      }
    },
    validEmail: function (email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
  },
};
</script>
