<?php  
namespace App\Managers\EmpresaGestion;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Managers\ManagerBase;

/**
* 
*/
class AgregarAlSocioUnServicioManager extends ManagerBase 
{


  public function getRules()
  {
    $rules = [ 
      'empresa_id'         => 'required',
      'estado_de_cuenta'   => 'required'
             ];

    return $rules;
  }
 
  
  
  
}