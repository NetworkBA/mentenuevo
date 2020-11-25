<template>
  <div class="pcoded-content">
    <div class="pcoded-inner-content">
      <!-- Main-body start -->
      <div class="main-body">
       
        <div class="page-wrapper">
          <!-- Page-header start -->
          <div class="page-header card">
            <div class="row align-items-end">
              <div class="col-lg-8">
                <div class="page-header-title">
                  <i class="icofont icofont-table bg-c-blue"></i>
                  <div class="d-inline">
                    <h4>Medicos</h4>
                    <span
                      >Administrador de Medicos</span
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="page-header-breadcrumb">
               <a  href="/adminBeta/Medico/Add" class="btn btn-mat btn-success">Agregar</a>
                </div>
              </div>
            </div>
          </div>

          <div class="page-body">
            <div class="card">
              <div class="card-header">
                <h5>Medicos</h5>
              </div>
              <div class="card-block table-border-style">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Numero Medico</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>asdasd</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>asdasd</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
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
