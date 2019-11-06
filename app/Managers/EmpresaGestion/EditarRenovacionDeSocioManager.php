<?php  
namespace App\Managers\EmpresaGestion;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;

/**
* 

*/
class EditarRenovacionDeSocioManager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [
      'empresa_id'                => 'required',
      'socio_id'                  => 'required',
      'se_renueva_automaticamente'=> 'required',
      'servicio_renovacion_id'    => 'required'

             ];

    return $rules;
  }
 
   
  
  
}