Vue.component('crear-tipo-de-movimientos' ,
{

data:function(){
    return {
     
     showModal: false,
     cargando:false

    }
},
methods:{

  
 

},
mounted: function () {
	

},

template:'

<span>
<div class="Boton-Fuente-Chica Boton-Primario-Relleno" @click="showModal = true">
  Crear un tipo de movimiento <i class="fas fa-plus"></i>
</div>  

  <transition name="modal" v-if="showModal">
    <div class="modal-mask ">
      <div class="modal-wrapper">
        <div class="modal-container">

          <div class="modal-header">
            <h3></h3>
          </div>

          <div class="modal-body">
            
            <div class="row">
              <div class="col-lg-6 formulario-label-fiel">
              <label class="formulario-label">Cantidad de clases</label> 
                <input type="text" min="1" class="formulario-field" placeholder="hola">
              </div>
              <div class="col-lg-6 formulario-label-fiel">
                <label class="formulario-label">Cantidad de clases</label> 
                <input type="number" min="1" class="formulario-field">
              </div>
            </div>
            


          </div>

          <div class="modal-footer">
           
              <button class="modal-default-button" @click="showModal = false">
                OK
              </button>
           
          </div>
        </div>
      </div>
    </div>
  </transition>
</span>



'
}




);