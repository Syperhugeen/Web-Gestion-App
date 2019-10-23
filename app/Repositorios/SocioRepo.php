<?php 

namespace App\Repositorios;

use App\Entidades\Socio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

/**
* Repositorio de consultas a la base de datos User
*/
class SocioRepo extends BaseRepo
{
  
  public function getEntidad()
  {
    return new Socio();
  }



  public function getSociosBusqueda($empresa_id, $palabra_de_busqueda,$cantidad_de_resultados = null)
  {
       

       $palabra_de_busqueda = trim($palabra_de_busqueda);

       if($palabra_de_busqueda != null)
       {        
       

       

       $colecciones_separado  = $this->getEntidad()->active()->where('empresa_id',$empresa_id)->where('name', "LIKE","%$palabra_de_busqueda%")->get();  
       $array_de_ids          = $this->traer_poner_ids($colecciones_separado);

       $colecciones_separado2 = $this->getEntidad()->active()->where('empresa_id',$empresa_id)->where('rut', "LIKE","%$palabra_de_busqueda%")->get();  
       $array_de_ids2         = $this->traer_poner_ids($colecciones_separado2);

       $colecciones_separado3 = $this->getEntidad()->active()->where('empresa_id',$empresa_id)->where('razon_social', "LIKE","%$palabra_de_busqueda%")->get();  
       $array_de_ids3          = $this->traer_poner_ids($colecciones_separado3);

       $colecciones_separado4 = $this->getEntidad()->active()->where('empresa_id',$empresa_id)->where('email', "LIKE","%$palabra_de_busqueda%")->get();  
       $array_de_ids4         = $this->traer_poner_ids($colecciones_separado4);

       $colecciones_separado5  = $this->getEntidad()->active()->where('empresa_id',$empresa_id)->where('celular', "LIKE","%$palabra_de_busqueda%")->get();  
       $array_de_ids5          = $this->traer_poner_ids($colecciones_separado5);

       $array_de_ids          = array_unique(array_merge($array_de_ids,$array_de_ids2,$array_de_ids3,$array_de_ids4,$array_de_ids5)); 

       

       $Socios                = $this->getEntidad()->whereIn('id',$array_de_ids)->orderBy('name','desc')->get();

      }
      else
      {
        $Socios               = $this->getEntidad()->active()->where('empresa_id',$empresa_id)->orderBy('name','desc')->get();
      }


      if($cantidad_de_resultados != null)
      {
        if($Socios->count() >  $cantidad_de_resultados)
        {
          $Socios = $Socios->take($cantidad_de_resultados);
        }
        else
        {
          $Socios = $Socios;
        }
      }
      
      return $Socios;





     
  }


  //para la busqueda
  public function traer_poner_ids($coleccion)
  {
    $array = [];
    if(count($coleccion) > 0)
    {
      foreach($coleccion as $producto)  
       {
        array_push($array,$producto->id);
       } 
       
    }

    return $array;
  } 


  public function getSociosDeEstaEmpresa($Empresa_id)
  {
    return $this->getEntidad()->active()->where('empresa_id',$Empresa_id)->get();
  }


  
}