Vue.component('estado-de-cuenta-empresa-lista' ,
{


data:function(){
    return {
      
            

    }
},

props:['estado_de_cuenta','empresa']
,


mounted: function mounted () {        
      
   

},
methods:{
    eliminar_estado_de_cuenta:function()
    {

       var validation = confirm("¿Quieres eliminar éste estado de cuenta?");

       if(!validation)
       {
        return '';
       }

       var url = '/eliminar_estado_de_cuenta_empresa';

       var vue = this;

       var data = {estado_de_cuenta:this.estado_de_cuenta,
                         empresa_id: this.empresa.id};


       app.cargando = true;                  

       axios.post(url,data).then(function(response){ 


          
          if(response.data.Validacion == true)
          {   
             app.cargando = false; 
             app.empresa = response.data.empresa;
             $.notify(response.data.Validacion_mensaje, "success");
          }
          else
          {

            app.cargando = false;
            $.notify(response.data.Validacion_mensaje, "warn");
          }    
           
           
           }).catch(function (error){

                     
            
           });
    }
     

},
computed:{
   paga:function()
   {
    if(this.estado_de_cuenta.tipo_saldo == 'deudor')
    {
      return true;
    }
    else
    {
      return false;
    }
   },
   tipoSaldoclassObject: function () {
    return {
      'estado-pago-indication': this.paga,
      'estado-debe-indication': !this.paga
    }
   },

  getClassLista:function(){
    return {
      
      'sub-contiene-lista-caja-deudor': this.estado_de_cuenta.tipo_saldo === 'deudor',
      'sub-contiene-lista-caja-acredor': this.estado_de_cuenta.tipo_saldo === 'acredor',
      'sub-contiene-lista-caja': true 
    }
  },
  getClassListaNombreYValor:function(){
    return {
      
      'color-text-success text-bold': this.estado_de_cuenta.tipo_saldo === 'deudor',
      'color-text-danger text-bold': this.estado_de_cuenta.tipo_saldo === 'acredor'
    }
  },
  sePuedeEliminar:function(){
    if(this.estado_de_cuenta.estado_del_movimiento != 'anulado' && this.estado_de_cuenta.estado_del_movimiento != 'anulador' )
    {
      return true;
    }
    else
    {
      return false;
    }
  },

},
template:'
<div class="flex-row-column get_width_100">
<div class="flex-row-column get_width_80">

   <div class="contiene-lista-caja"> 

              <div :class="getClassLista">
                <span class="caja-lista-nombre" >
                 
                 <span :class="getClassListaNombreYValor">
                     @{{estado_de_cuenta.detalle}}

                     @{{estado_de_cuenta.moneda}} 

                     @{{estado_de_cuenta.valor}}
                 </span> 

                 

                </span>
                <span class="caja-lista-datos-secundarios"> 

                   Operador: <strong>@{{estado_de_cuenta.user_name}}</strong>  | Fecha:  <strong>@{{estado_de_cuenta.fecha}}</strong> | Id: @{{estado_de_cuenta.id}}  
                   <span v-if="sePuedeEliminar"> 
                    | <span v-on:click="eliminar_estado_de_cuenta" class="simula_link" title="Anular éste movimiento.">
                        <i class="fas fa-trash-alt"></i> 
                      </span>

                      </span>

                </span>            
                <span> </span>
              </div>             
              
            </div>
    
</div>
</div>

          
  

'
}




);