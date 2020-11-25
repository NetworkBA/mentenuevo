<template>
  <div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
      <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
          <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="ti-menu"></i>
            </a>
            <a class="mobile-search morphsearch-search" href="#">
              <i class="ti-search"></i>
            </a>
            <a href="index.html"> Mente4.0 </a>
            <a class="mobile-options">
              <i class="ti-more"></i>
            </a>
          </div>

          <div class="navbar-container container-fluid">
            <ul class="nav-left">
              <li>
                <div class="sidebar_toggle">
                  <a href="javascript:void(0)"><i class="ti-menu"></i></a>
                </div>
              </li>
              <li>
                <a href="#!" onclick="javascript:toggleFullScreen()">
                  <i class="ti-fullscreen"></i>
                </a>
              </li>
            </ul>
            <ul class="nav-right">
              <li class="user-profile header-notification">
                <a href="#!">
                  <img
                    src="/admin/assets/images/avatar-4.jpg"
                    class="img-radius"
                    alt="User-Profile-Image"
                  />
                  <span>John Doe</span>
                  <i class="ti-angle-down"></i>
                </a>
                <ul class="show-notification profile-notification">
                  <li>
                    <a href="#!"> <i class="ti-settings"></i> Configuracion </a>
                  </li>
                  <li>
                    <a href="user-profile.html">
                      <i class="ti-user"></i> Perfil
                    </a>
                  </li>
                  <li>
                    <a href="email-inbox.html">
                      <i class="ti-email"></i> Mensajes
                    </a>
                  </li>
                  <li>
                    <a href="auth-normal-sign-in.html">
                      <i class="ti-layout-sidebar-left"></i> Cerrar Sesion
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
          <nav class="pcoded-navbar">
            <div class="sidebar_toggle">
              <a href="#"><i class="icon-close icons"></i></a>
            </div>
            <div class="pcoded-inner-navbar main-menu">
              <div class="">
                <div class="main-menu-header">
                  <img
                    class="img-40 img-radius"
                    src="/admin/assets/images/avatar-4.jpg"
                    alt="User-Profile-Image"
                  />
                  <div class="user-details">
                    <span>John Doe</span>
                    <span id="more-details"
                      >UX Designer<i class="ti-angle-down"></i
                    ></span>
                  </div>
                </div>

                <div class="main-menu-content">
                  <ul>
                    <li class="more-details">
                      <a href="user-profile.html"
                        ><i class="ti-user"></i>Ver Perfil</a
                      >
                      <a href="#!"><i class="ti-settings"></i>Configuracion</a>
                      <a href="auth-normal-sign-in.html"
                        ><i class="ti-layout-sidebar-left"></i>Cerrar Sesion</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
              <div class="pcoded-search">
                <span class="searchbar-toggle"> </span>
                <div class="pcoded-search-box">
                  <input type="text" placeholder="Search" />
                  <span class="search-icon"
                    ><i class="ti-search" aria-hidden="true"></i
                  ></span>
                </div>
              </div>
              <div
                class="pcoded-navigatio-lavel"
                data-i18n="nav.category.navigation"
              >
                Navigation
              </div>
              <ul class="pcoded-item pcoded-left-item">
                <li class="">
                  <a href="/adminBeta/Medico">
                    <span class="pcoded-micon"
                      ><i class="ti-layout-cta-right"></i><b>N</b></span
                    >
                    <span class="pcoded-mtext" data-i18n="nav.navigate.main"
                      >Medicos</span
                    >
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
                 <li class="">
                  <a href="/adminBeta/Paciente">
                    <span class="pcoded-micon"
                      ><i class="ti-layout-cta-right"></i><b>N</b></span
                    >
                    <span class="pcoded-mtext" data-i18n="nav.navigate.main"
                      >Pacientes</span
                    >
                    <span class="pcoded-mcaret"></span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <medicos-component v-show="Tipo == 'Medico'"></medicos-component>
          <addMedico-component v-show="Tipo == 'AddMedi'"></addMedico-component>
           <pacientes-component v-show="Tipo == 'Paciente'"></pacientes-component>
          <addpaciente-component v-show="Tipo == 'AddPacien'"></addpaciente-component>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      Tipo: "",
    };
  },
  mounted() {
    let pathname = window.location.pathname;
    console.log(pathname);

    var ok = pathname.split("/");
    console.log(ok);
    if (ok[2] == "Medico") {
      if (ok.length > 3) {
        console.log("Entro 2");
        this.Tipo = "AddMedi";
      } else {
        this.Tipo = "Medico";
      }
    }
     if (ok[2] == "Paciente") {
      if (ok.length > 3) {
        console.log("Entro 2");
        this.Tipo = "AddPacien";
      } else {
        this.Tipo = "Paciente";
      }
    }
  },
  methods: {},
};
</script>
