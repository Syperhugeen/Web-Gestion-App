Vue.component('crear-empresa' ,
{


,  

data:function(){
    return {
       modal:'#modal-crear-empresa',
       data_post:{
               empresa_name:'',
               empresa_celular:'',
               empresa_email:'',
               user_name:'',
               user_email:'',
               user_celular:''
                 }

    }
}, 


methods:{

 abrir_modal:function(){

   $(this.modal).appendTo("body").modal('show');  

 },
 crear_empresa_post:function(){
 alert('hola');
}
},
template:'

<span >
   <div id="modal-crear-empresa" style="position:relative;" class="admin-user-boton-Crear" v-on:click="abrir_modal">
         <i class="fas fa-user-plus" title="Crear nuevo socio"></i>





       
  </div>

         <div class="modal fade" id="modal-crear-socio" tabindex="+1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
         <div class=""> 
          <h4 class="modal-title" id="myModalLabel">Crear nueva empresa</h4>
          <div class="modal-mensaje-aclarador">
                Aquí tu como vendedor, vas a crear una empresa y el usuario para que la persona pueda comenzar a operar. Por defecto ya quedarás asociado como vendeor, el usuario será asociado como dueño y se creará una Sucursal como principal. Se le enviará un email al usuario con los datos para ingresar.


           </div>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
          
        </div>
        <div class="modal-body text-center"> 

          {{-- empresa datos --}}
          <div class="contenedor-grupo-datos">
            <div class="contenedor-grupo-datos-titulo"> Empresa datos</div>
            <div class="contenedor-formulario-label-fiel">                       
                <div class="formulario-label-fiel">
                  {!! Form::label('empresa_name', 'Nombre', array('class' => 'formulario-label ')) !!}
                  {!! Form::text('empresa_name', null ,['class' => 'formulario-field',
                                                      'v-model' => 'data_post.empresa_name' ]) !!}
                </div>
                 <div class="formulario-label-fiel">
                  {!! Form::label('empresa_email', 'Email', array('class' => 'formulario-label ')) !!}
                  {!! Form::text('empresa_email', null ,['class' => 'formulario-field',
                                                       'v-model' => 'data_post.empresa_email' ]) !!}
                </div>
                 <div class="formulario-label-fiel">
                  {!! Form::label('empresa_celular', 'Celular', array('class' => 'formulario-label ')) !!}
                  {!! Form::text('empresa_celular', null ,['class' => 'formulario-field',
                                                         'v-model' => 'data_post.empresa_celular' ]) !!}
                </div>

             
            </div>
          </div>    

           {{-- usuario datos --}}
          <div class="contenedor-grupo-datos">
            <div class="contenedor-grupo-datos-titulo"> Usuario datos</div>
            <div class="modal-mensaje-aclarador">
                Los datos del usuario que va a operar el negocio. Esto le creara el usuario y lo asociara a la empresa que se crea de forma automática.
            </div>
            <div class="contenedor-formulario-label-fiel">                       
              <div class="formulario-label-fiel">
                  {!! Form::label('user_name', 'Nombre del usuario', array('class' => 'formulario-label ')) !!}
                  {!! Form::text('user_name', null ,['class' => 'formulario-field',
                                                         'v-model' => 'data_post.user_name' ]) !!}
                </div>
                <div class="formulario-label-fiel">
                  {!! Form::label('user_email', 'Email del usuario', array('class' => 'formulario-label ')) !!}
                  {!! Form::text('user_email', null ,['class' => 'formulario-field',
                                                         'v-model' => 'data_post.user_email' ]) !!}
                </div>
                <div class="formulario-label-fiel">
                  {!! Form::label('user_celular', 'Celular del usuario', array('class' => 'formulario-label ')) !!}
                  {!! Form::text('user_celular', null ,['class' => 'formulario-field',
                                                         'v-model' => 'data_post.user_celular' ]) !!}
                </div>
            </div>
          </div>     
               

                  <div  v-on:click="crear_empresa_post" class="boton-simple">Crear</div>
                  
                 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>        
        </div>
      </div>
    </div>
  </div>













</span> 

 

'

}




);