@extends('layouts.gestion_socios_layout.admin_layout')

@section('miga-de-pan') 
  {{-- lugar atras --}}
  <a href="{{route('get_admin_empresas_gestion_socios')}}"><span>Empresas</span></a>

  {{-- separador --}}
  <span class="spam-separador">|</span> 

  {{-- lugar donde esta --}}
  <span>Editar</span>
@stop

@section('content')

 {{-- titulo --}}
 <div class="contenedor-admin-entidad-titulo-form-busqueda">
    <div class="admin-entidad-titulo">   
        {!! Form::open(['route' => ['get_empresa_panel_de_gestion'],
                            'method'=> 'Post',
                            'files' =>  true,
                            'name'  => 'form1'
                          ])               !!}   
       <input type="hidden" name="empresa_id" :value="empresa.id">
       <span class="admin-user-boton-Crear" onclick="javascript:document.form1.submit()">Vista de cliente</span>    

       {!! Form::close() !!}  
    </div>    
 </div>

  

  {{-- formulario --}}
  {!! Form::model($Empresa,   ['route' => ['set_admin_empresas_gestion_socios_editar',$Empresa->id],
                            'method'=> 'PATCH',
                            'files' =>  true,
                            'id'    => 'form-admin-empresa-datos'
                          ])               !!}
   <div class="formulario-contenedor">

      {{-- datos corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo"> Datos</div>
        <div class="contenedor-formulario-label-fiel">                       
         @include('admin.empresas_gestion_socios.formularios_partes.datos_basicos')
        </div>
      </div>

      {{-- imagenes corporativos --}}
      <div class="contenedor-grupo-datos">
        <div class="contenedor-grupo-datos-titulo">Imagen</div>
        <div class="contenedor-formulario-label-fiel">                       
          @include('admin.empresas_gestion_socios.formularios_partes.datos_imagenes')
        </div>
      </div>


      <div class="contenedor-grupo-datos">
        <vincular-user-empresa :empresa="empresa"></vincular-user-empresa>
      </div>

      

      
   </div>
   <div class="admin-boton-editar">
     Guardar
   </div> 

  {!! Form::close() !!}
  
@stop



@section('vue-logica')


<script type="text/javascript">


    

     Vue.component('v-select', VueSelect.VueSelect)
     @include('empresa_gestion_paginas.Vue_logica.Componentes.vincular-user-empresa')
     @include('empresa_gestion_paginas.Vue_logica.instancia_vue')



</script>

@stop

@section('columna')


  @include('admin.empresas_gestion_socios.columna_derecha.columna_logo_easy_socios')

  {{-- imagen logo --}}
  <a href="{{route('get_home')}}"><img class="admin-header-logo" src="{{$Empresa->url_img}}"></a>

  @include('admin.empresas_gestion_socios.columna_derecha.columna_operario')
  @include('admin.empresas_gestion_socios.columna_derecha.columna_dueño_empresa')
  @include('admin.empresas_gestion_socios.columna_derecha.columna_vendedor')
  @include('admin.empresas_gestion_socios.columna_derecha.columna_super_admin')
@stop