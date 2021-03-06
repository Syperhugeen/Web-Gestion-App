<?php 

namespace App\Repositorios;

use App\Entidades\TipoDeServicioAEmpresas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class TipoDeServicioAEmpresaRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new TipoDeServicioAEmpresas();
  }

  //guetters/////////////////////////////////////////////////////////////////////

  public function getServiciosActivosAEmpresas()
  {
    return $this->getEntidad()
                ->where('borrado','no')
                ->orderBy('valor', 'asc')
                ->get();

  }
  


  //setters//////////////////////////////////////////////////////////////////////

 

 


  
}