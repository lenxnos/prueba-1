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

</style>
@endslot

@slot('content')
@include('layouts.navbar')


<div class="container">
  <div class="row">
    {!! Breadcrumbs::render('home') !!}
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Sistemas Disponibles</div>
        <div class="panel-body text-center">
          <button class="btn btn-default fa-hover" >
            <i class="fa fa-dropbox " style="font-size: 10em;"></i><br>
            <span>Sistema de Almacén</span>
          </button>
          <button class="btn btn-default fa-hover" >
            <i class="fa fa-server " style="font-size: 10em;"></i><br>
            <span>Resumen Presupuestario</span>
          </button>
          <button class="btn btn-default fa-hover" >
            <i class="fa fa-dropbox " style="font-size: 10em;"></i><br>
            <span>Sistema de Almacén</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endslot
@endcomponent
