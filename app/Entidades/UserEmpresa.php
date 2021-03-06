<?php

namespace App\Entidades;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use App\Entidades\User;
use App\Entidades\EmpresaConSocios;
use App\Entidades\SucursalEmpresa;
use App\Repositorios\SucursalEmpresaRepo;





//Usuarios y empresas asociados
class UserEmpresa extends Model
{

    protected $table ='lista_usuarios_empresas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description'];
    protected $appends  = ['usuario','sucursal_nombre'];



    public function getSucursalAttribute()
    {
      if($this->sucursal_id == null)
      {
        return null;        
      }

      $Repo = new SucursalEmpresaRepo();
      return $Repo->find($this->sucursal_id);
    } 

      public function getSucursalNombreAttribute()
      {

        if($this->sucursal == null)
        {
          return 'no se le asignó sucursal';
          
        }
        else
        {
          return $this->sucursal->name;
        }
        
        
      }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    } 

      public function getUsuarioAttribute()
      {
        
        return $this->user;
      }

   /* public function empresa()
    {
        return $this->belongsTo(EmpresaConSocios::class,'empresa_id','id');
    }  

      public function getEmpresaAsociadaAttribute()
      {


        return $this->empresa;
      }

*/
    


    /**
     * PAra busqueda por nombre
     */
    public function scopeName($query, $name)
    {
        //si el paramatre(campo busqueda) esta vacio ejecutamos el codigo
        /// trim() se utiliza para eliminar los espacios.
        ////Like se usa para busqueda incompletas
        /////%% es para los espacios adelante y atras
        if (trim($name) !="")
        {                        
           $query->where('name', "LIKE","%$name%"); 
        }
        
    }

    public function scopeActive($query)
    {
                               
           $query->where('estado', "si"); 
                
    }





   

    public function getRouteAttribute()
    {
        /*return route('',[$this->helper_convertir_cadena_para_url($this->name), $this->id]);*/
    }
    
    
}