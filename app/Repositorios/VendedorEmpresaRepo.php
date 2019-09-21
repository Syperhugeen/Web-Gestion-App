<?php 

namespace App\Repositorios;

use App\Entidades\VendedorEmpresa;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class VendedorEmpresaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new VendedorEmpresa();
  }



  public function setAsociarEmpresaYUser($Empresa_id,$User_id)
  {

    $Existe = $this->getEntidad()
                   ->where('user_id',$User_id)
                   ->where('empresa_id',$Empresa_id)
                   ->get();

    $Validacion = false;
    $Mensaje    = 'Ya está asociado este usuario vendedor con esta empresa';

    if($Existe->count() == 0)
    {
      $Validacion = true;
      $Mensaje    = 'Se asoció correctamente';
      
      $Entidad             = $this->getEntidad();
      $Entidad->user_id    = $User_id;
      $Entidad->empresa_id = $Empresa_id;
      $Entidad->save();
    }


    return [  
             'Validacion'          =>  $Validacion,
             'Validacion_mensaje'  =>  $Mensaje     
           ];


  	

  }


  public function verificarSiUserYEmpresaEstanVicnulados($User_id,$Empresa_id)
  {
      $User = $this->getEntidad()
                   ->where('user_id',$User_id)
                   ->where('empresa_id',$Empresa_id)
                   ->get(); 

      $Validacion = false;             

      if($User->count() > 0)
      {
          $Validacion = true;
      }


      return [  
             'Validacion'   =>  $Validacion,
             'UserEmpresa'  =>  $User->first()   
               ];
  }


 


  
}