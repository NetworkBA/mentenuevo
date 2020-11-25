<template>
  <div class="pcoded-content">
    <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
        <div class="page-wrapper">
          <!-- Page-header start -->
          <h6 class="mega-menu-title">Añade Medico</h6>
          <div class="mega-menu-contact">
            <div class="form-group row">
              <label for="example-text-input" class="col-3 col-form-label"
                >Nombre</label
              >
              <div class="col-9">
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  id="example-text-input"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-3 col-form-label"
                >Apellido Paterno</label
              >
              <div class="col-9">
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  id="example-text-input"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="example-text-input" class="col-3 col-form-label"
                >Apellido Materno</label
              >
              <div class="col-9">
                <input
                  class="form-control"
                  type="text"
                  placeholder=""
                  id="example-text-input"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-3 col-form-label"
                >Correo</label
              >
              <div class="col-9">
                <input
                  class="form-control"
                  type="email"
                  placeholder="ejemplo@ejemplo.com"
                  id="example-search-input1"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-3 col-form-label"
                >Telefono</label
              >
              <div class="col-9">
                <input
                  class="form-control"
                  type="number"
                  placeholder="+91-9898989898"
                  id="example-search-input"
                />
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleTextarea" class="col-3 col-form-label"
                >Descripcion</label
              >
              <div class="col-9">
                <textarea
                  class="form-control"
                  id="exampleTextarea"
                  rows="3"
                ></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-12 text-right">
                <button class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
          <!-- end-header start -->
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
  methods: {},
};
</script>
