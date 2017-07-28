@component('layouts.zamora')

@slot('zamora')


<link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.min.css') }}">


<style type="text/css">

  #zamora-navbar {
    margin-bottom: 0px;
  }
  .login-title-index{
    font-size: 50px;
    margin-top: 5%;
  }

  @media (max-width: 480px) {
   .login-title-index{
    font-size: 30px;
    margin-top: 5%;
    text-align: center;
  }

  #zamora-navbar{
    display: none;
  }

  body{
    margin-top: 10px;
  }

  footer{
    font-size: 10px;
  }


}

@-webkit-keyframes color_change {
  from {  color: #636b6f;}
  to {  color: black;}
}
@-moz-keyframes color_change {
  from {  color: #636b6f;}
  to {  color: black;}
}
@-ms-keyframes color_change {
  from {  color: #636b6f;}
  to {  color: black;}
}
@-o-keyframes color_change {
  from {  color: #636b6f;}
  to {  color: black;}
}
@keyframes color_change {
 from {  color: #636b6f;}
 to {  color: black;}
}

.fa-hover:hover i{

  -webkit-animation: color_change 1s infinite  alternate;
  -moz-animation: color_change 1s infinite alternate;
  -ms-animation: color_change 1s infinite alternate;
  -o-animation: color_change 1s infinite alternate;
  animation: color_change 1s infinite alternate;

  color: black;
}

.navbar-brand .breadcrumb {
  margin-bottom: 0px;
  padding: 0;
  background-color: white;
  border-radius: 0px;
}

.fa-hover i {
  font-size: 4em;
}

.fa-hover {
  margin-bottom: 10px;
}

.visor-text > button > span {
  font-size: 10px;
}

.visor-text > button {
  margin-bottom: 5px;
  display: block;
  width: 100%;
}

.panel-heading > ul > li {
  display: inline-block;

  margin-right: 5%;
}

.panel-heading > ul {
  margin-bottom: 0;
}



</style>
@endslot

@slot('content')
@include('layouts.navbar')


<div class="container">
  <div class="row">
    {!! Breadcrumbs::render('planobras_index') !!}
  </div>
</div>


<div class="container">

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">    Administración de Proyectos      </div>

      <div class="panel-heading">
        <ul>
         @if(!Route('planobras.create'))
         <li>
           <a href="{{ Route('planobras.create') }}">
            <i class="fa fa-plus"></i>
            Nuevo Proyecto
          </a>
        </li>
        @endif

        <li class="active">
         <a href="{{ Route('planobras.index') }}">
          <i class="fa fa-list"></i>
          Listado
        </a>
      </li>

      <li>
        <a href="">
          <i class="fa fa-list"></i>
          Listado (Otros Años)
        </a>
      </li>
    </ul>
  </div>
  <div class="panel-body text-center">

   Registro de Proyectos

   <table class="table table-bordered table-striped table-hover table-condensed responsive" id="dataTable">
    <thead>
      <tr>
        <th>Año</th>
        <th>Nombre</th>
        <th>Monto Asignado</th>
        <th>Avance Físico</th>
        <th>Avance Fínanciero</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Prueba</td>
        <td>Prueba</td>
        <td>Prueba</td>
        <td>Prueba</td>
        <td>Prueba</td>
        <td>Prueba</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
</div>
</div>



@endslot

@slot('scripts')


<script type="text/javascript" src="{{ asset('js/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>

<script type="text/javascript">

  $(document).ready(function() {
    $('#dataTable').DataTable();
  } );
</script>


@endslot
@endcomponent

