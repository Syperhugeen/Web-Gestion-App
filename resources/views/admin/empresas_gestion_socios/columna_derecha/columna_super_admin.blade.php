 
@if(Auth::user()->role >= 7)
 <ul >
   <span class="admin-columna-ul-titulo">Super admin</span>
   <div >
        
        <a href="{{route('get_admin_users')}}">
          <li class="admin-columna-contenedor-li"><i class="fas fa-user"></i> Usuarios</li>
        </a>
        

        
        <a href="{{route('get_admin_empresas_gestion_socios')}}">
          <li class="admin-columna-contenedor-li "><i class="fas fa-bars"></i> Empresas gestión socios</li>
        </a>

        
        
    </div>

</ul>
@endif

   