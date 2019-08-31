<?php



//Para ir al panel de la empresa vista del cliente
Route::post('get_socios_activos',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@get_socios_activos',
  'as'         => 'get_socios_activos']);  







Route::post('set_nuevo_servicio',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@set_nuevo_servicio',
  'as'         => 'set_nuevo_servicio']);  

Route::post('delet_servicio',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@delet_servicio',
  'as'         => 'delet_servicio']);  

Route::post('editar_servicio',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@editar_servicio',
  'as'         => 'editar_servicio']);  

Route::post('agregar_servicio_a_socio',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@agregar_servicio_a_socio',
  'as'         => 'agregar_servicio_a_socio']);  

Route::post('get_servicios_de_socio',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@get_servicios_de_socio',
  'as'         => 'get_servicios_de_socio']);  







Route::post('editar_servicio_a_socio',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@editar_servicio_a_socio',
  'as'         => 'editar_servicio_a_socio']);  


Route::post('indicar_que_se_uso_el_servicio_hoy',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@indicar_que_se_uso_el_servicio_hoy',
  'as'         => 'indicar_que_se_uso_el_servicio_hoy']);  





Route::post('eliminar_estado_de_cuenta',
[
  'uses'       => 'Admin_Empresa\Admin_Empresa_Gestion_Socios_Controllers@eliminar_estado_de_cuenta',
  'as'         => 'eliminar_estado_de_cuenta']);  

