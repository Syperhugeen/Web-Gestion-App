Vue.component('ingresar-movimiento-caja' ,
{
props:[ 'empresa' ],
data:function(){
    return {
     modal:'#modal-ingreso-caja',
     tipos_de_servicios: {!! json_encode(config('tipo_movimientos_de_caja')) !!},
     servicio_elegido:''

    }
},
methods:{
 abrir_modal:function(){
   $(this.modal).appendTo("body").modal('show'); 
 },
 elegir_lo_que_voy_a_agregar:function(tipo_servicio){
  this.servicio_elegido = tipo_servicio;
 },
 cancelarIngreso:function(){
  this.servicio_elegido = '';
 }
    

},
computed:{
  servicio_elegido_comp:function(){
    if(this.servicio_elegido != '')
    {
      return true;
    }
    else
    {
      return false;
    }
  }
}
,
template:'<span >
   <div  class="admin-user-boton-Crear" v-on:click="abrir_modal" title="Ingresar un movimiento de caja">
       <i class="fas fa-cash-register"></i>





       
  </div>

         <div class="modal fade" id="modal-ingreso-caja" tabindex="+1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Ingresar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
          
        </div>
        <div class="modal-body text-center"> 
         <div v-if="servicio_elegido_comp">
           
           <div v-on:click="cancelarIngreso">Cancelar</div>
         </div>
         <div v-else>
           <div v-for="servicio in tipos_de_servicios" v-on:click="elegir_lo_que_voy_a_agregar(servicio)">
             @{{servicio.nombre}}
           </div>
         </div>
                 
                 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>        
        </div>
      </div>
    </div>
  </div>













</span>'

}




);