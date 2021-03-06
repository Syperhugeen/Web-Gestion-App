@extends('layouts.user_layout.user_layout')


@section('title')
 Iniciar Sesión 
@stop

@section('MetaContent')
  Entra en.  
@stop

@section('MetaRobot')
 INDEX,FOLLOW
@stop




@section('content') 
<div class="d-flex flex-row align-items-center justify-content-center">
	<div class="d-flex flex-column align-items-center p-2 py-lg-4 ">
		<div class="col-6 col-lg-4 p-2 p-lg-5 my-5 my-lg-3">
			<img class=" img-fluid " src="{{url()}}/imagenes/Empresa/logo_rectangular.png">
		</div>
		
		<div class="col-11 col-lg-5 background-gris-0 p-5 ">  
         <h1 class="sub-titulos-class font-secondary text-color-black text-center mt-1 mb-3">Inicio de sesión</h1>      
         @include('formularios.auth.login_form')
       </div>
	</div>
</div>
      
      
@stop