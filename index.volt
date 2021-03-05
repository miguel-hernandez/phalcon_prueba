<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>

</head>
<body>


  <!-- MENU SUPERIOR -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <label class="navbar-brand"><span>Sistema de Gestión de Nomina</span> </label>
          <ul class="user-menu">
            <li class="dropdown pull-right">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo " ".$nombre ?> <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Salir <span class="glyphicon glyphicon-off"></span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- TERMINA MENU SUPERIOR -->

    <div id="tabs">
      <ul class="nav nav-pills">
        <li><a data-toggle="pill" href="#tabs-home">Home</a></li>
        <li><a data-toggle="pill" href="#tabs-nominas">Nominas</a></li>
        <li><a data-toggle="pill" href="#tabs-facturas">Facturas y Tesorería</a></li>
        <li><a data-toggle="pill" href="#tabs-catalogos">Catálogos</a></li>
        <li><a data-toggle="pill" href="#tabs-contratos">Contratos y RH</a></li>
        <li><a data-toggle="pill" href="#tabs-utilerias">Utilerias</a></li>
        <li><a data-toggle="pill" href="#tabs-imss">IMSS</a></li>
        <li><a data-toggle="pill" href="#tabs-reportes">Reportes</a></li>
        <li><a data-toggle="pill" href="#tabs-contabilidad">Contabilidad</a></li>
      </ul>

      <div id="wrapper">
          <div id="sidebar-wrapper" style="background-color:#F8F8F8 ; padding-left:0px; "><!-- Sidebar -->
            <ul style="padding-left:0px;">
              <div id="tabs-home" class="tab-pane fade in active">
                <ul class="nav menu" >
                  <br>
                    <div class="panel-img"></div>
                  <br>
                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-nominas">
                <ul class="nav menu">
                  <li><a href="#" data-redirect="importadorn" onclick="navegacion(this,event)" ><span class="glyphicon glyphicon-link"></span>Importador Nòminas </a></li>
                  <li><a href="#" data-redirect="nomina" onclick="navegacion(this,event)" ><span class="fa fa-credit-card-alt "></span> Nòminas </a></li>
                  <li><a href="#" data-redirect="demos" onclick="navegacion(this,event)" > Demos </a></li>
                  <li><a href="#" data-redirect="visornomina" onclick="navegacion(this,event)" >previsualizar </a></li>

                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-facturas">
                <ul class="nav menu">
                  <li><a href="#"><span class="glyphicon glyphicon-file"></span> Cheques *</a></li>
                  <li><a href="#" data-redirect="facturas" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-file"></span> Facturas </a></li>
                  <li><a href="#" data-redirect="cxc" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-file"></span> CxC </a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-file"></span> Gastos y Bancos *</a></li>
                  <li><a href="#" data-redirect="notascredito" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-file"></span> Notas de crédito </a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-file"></span> Conceptos Facturación *</a></li>
                  <li><a href="#" data-redirect="plantillasfactura" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-file"></span>  Plantillas de Facturación </a></li>
                  <li><a href="#" data-redirect="aliasbajio" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-file"></span> Alias Bajio </a></li>
                  <li><a href="#" data-redirect="aliasbanorte" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-file"></span>  Alias Banorte </a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-file"></span> Alias cuentas *</a></li>
                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-catalogos">
                <ul class="nav menu">
                  <li><a href="#" data-redirect="puesto" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Puesto </a></li>
                  <li><a href="#" data-redirect="trabajador" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Trabajador </a></li>
                  <li><a href="#" data-redirect="rpatronal" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> RPatronal </a></li>
                  <li><a href="#" data-redirect="empresa" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Empresa </a></li>
                  <li><a href="#" data-redirect="departamento" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Departamento</a></li>
                  <li><a href="#" data-redirect="concepto" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Concepto </a></li>
                  <li><a href="#" data-redirect="usuario" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Usuario </a></li>
                  <li><a href="#" data-redirect="nacionalidad" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Nacionalidad </a></li>
                  <li><a href="#" data-redirect="documento" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Documento </a></li>
                  <li><a href="#" data-redirect="promotor" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Promotor </a></li>
                  <li><a href="#" data-redirect="servicio" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Servicio </a></li>
                  <li><a href="#" data-redirect="sucursal" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Sucursal </a></li>
                  <li><a href="#" data-redirect="cliente" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-user"></span> Cliente </a></li>
                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-contratos">
                <ul class="nav menu">
                  <li><a href="#"><span class="glyphicon glyphicon-link"></span> Pendiente </a></li>
                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-utilerias">
                <ul class="nav menu">
                  <li><a href="#" data-redirect="banco" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Bancos</a></li>
                  <li><a href="#" data-redirect="permisos" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Perfiles</a></li>
                  <li><a href="#" data-redirect="papeleranominas" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Papelera </a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Bitacora *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Usuarios *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Respaldos *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Mis Plantillas *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Herramientas *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Integración Bimestral *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Configuración % *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Asociar conceptos *</a></li>
                  <li><a href="#" data-redirect="#" onclick="navegacion(this, event)"><span class="glyphicon glyphicon-hdd"></span> Simulador *</a></li>
                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-imss">
                <ul class="nav menu">
                  <li><a href="#"><span class="glyphicon glyphicon-link"></span> Pendiente </a></li>
                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-reportes">
                <ul class="nav menu">
                  <li><a href="#"><span class="glyphicon glyphicon-link"></span> Pendiente </a></li>
                </ul>
              </div>
            </ul>

            <ul style="padding-left:0px;">
              <div id="tabs-contabilidad">
                <ul class="nav menu">
                  <li><a href="#"><span class="glyphicon glyphicon-link"></span> Pendiente </a></li>
                </ul>
              </div>
            </ul>
          </div><!-- /#sidebar-wrapper -->
          <div id="page-content-wrapper">  <!-- Page Content -->
            <div class="container-fluid" >

                <div id="page-wrapper" class="wrap-panel">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
          </div><!-- /#page-content-wrapper -->
      </div><!-- /#wrapper -->
    </div><!-- tabs-->

</body>

</html>
