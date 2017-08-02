@component('layouts.zamora')

@slot('zamora')

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

</style>
@endslot

@slot('content')
@include('layouts.navbar')


<div class="container">
  <div class="row">
    {!! Breadcrumbs::render('resumen') !!}
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Sistemas Disponibles</div>
        <div class="panel-body text-center">
          <button class="btn btn-default fa-hover" title="Visor de Información">
            <i class="fa fa-bar-chart" ></i><br>
            <span>Visor de Información</span>
          </button>
          <button class="btn btn-default fa-hover" title="Gestor de Partidas">
            <i class="fa fa-list-alt" ></i><br>
            <span>Gestor de Partidas</span>
          </button>   
          <button class="btn btn-default fa-hover" >
            <i class="fa fa-clock-o"  title="Registro de Fecha"></i><br>
            <span>Registro de Fecha e Info.</span>
          </button>
          <a href="{{Route('planobras.index')}}">
            <button class="btn btn-default fa-hover" >
              <i class="fa fa-university" title="Registro de Plan de 0bras"></i><br>
              <span>Registro de Plan de 0bras</span>
            </button>
          </a>
          <a href="{{Route('financiaobras.index')}}">
            <button class="btn btn-default fa-hover" >
              <i class="fa fa-percent"  title="Financiamiento de Obras"></i><br>
              <span>Financiamiento de Obras</span>
            </button>
          </a>
          <a href="{{Route('financiacreditos.index')}}">
            <button class="btn btn-default fa-hover" >
              <i class="fa fa-money"  title="Financiamiento de Créditos"></i><br>
              <span>Financiamiento de Créditos</span>
            </button>
          </a>
          <button class="btn btn-default fa-hover" >
            <i class="fa fa-money"  title="Créditos Adicionales"></i><br>
            <span>Créditos Adicionales</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endslot
@endcomponent
