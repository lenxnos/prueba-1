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

.panel-heading > ul > li.active {
  color: gray;
  margin-right: 5%;
}

.panel-heading > ul {
  margin-bottom: 0;
}



</style>
@endslot

@slot('content')
@include('layouts.navbar')

@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li></li>
    @endforeach
  </ul>
</div>
@endif



<div class="container">
  <div class="row">
    {!! Breadcrumbs::render('financiaobras_create') !!}
  </div>
</div>


<div class="container">

  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Administración de Fuentes de Financiamiento 
      </div>

      <div class="panel-heading">
        <ul>
          <li  class="active">
            <i class="fa fa-plus"></i>
            Nueva Fuente
          </li>
          <li>
            <a href="{{ Route('financiaobras.index') }}">
              <i class="fa fa-list"></i>
              Listado
            </a>
          </li>
        </ul>
      </div>
      <div class="panel-body">
        <div class="container-fluid">
          <div class="row">
           Registro de Fuente de Financiamiento
           <hr>
         </div>
       </div>
       <div class="container-fluid">
         <div class="row">
           {!! Form::open(['route' => 'financiaobras.store', 'class' => 'form-horizontal']) !!}

           <div class="form-group">
            {!!Form::label('nombre', 'Nombre de la Fuente de Financiamiento', ['class' => 'control-label col-sm-4'])!!}
            <div class="col-sm-8">
              {!!Form::text('nombre', null,['class' => 'form-control' , 'required' => 'required'])!!}
            </div>
          </div>


          <div class="form-group text-center">
           {{Form::submit('Aceptar!', ['class'=>'btn btn-primary'])}}
           {{Form::button('Cancelar!', ['class'=>'btn btn-danger'])}}
         </div>
         {!! Form::close() !!}
       </div>
     </div>
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

