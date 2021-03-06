<?php

namespace SYSMEDIC;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Usuarios extends Model
{

	protected $table='usuarios';
    protected $primaryKey='id';


    public $timestamps=false;

    protected $fillable =[
        'id',
        'nombres' ,
        'apellidos',
        'email',
        'usuario',
        'contrasena',
        'id_perfil',
        'id_sede',
        'id_sucursal',
        'estatus',
        'esadmin'
        ];


    public static function login($data){
        $usuario = DB::table('usuarios')
                     ->where('usuario','=',$data['usuario'])
                     ->where('estatus','=','1')
                     ->first();

         if(!is_null($usuario)){
           //if (Hash::check($data['contrasena'],$usuario->contrasena)) {
               Session::put('id',$usuario->id);
               Session::put('nombres',$usuario->nombres." ".$usuario->apellidos);

               return true;
            }else{
               return false;

         }        
    }


    public static function lista(){
        $usuario = DB::table('usuarios')
                     ->where('estatus','=','1')
                     ->paginate(5);

         if(!is_null($usuario)){
            return $usuario;
         }else{
            return false;
         }        
    }

     public static function buscar($query){
   
        $usuario = DB::table('usuarios')
                     ->where('estatus','=','1')
                     ->where('nombres','ilike', "%$query%")
                     ->orderby('id')
                     ->paginate(5);

         if(!is_null($usuario)){
            return $usuario;
         }else{
            return false;
         }        
    }

    public static function guardar($data){
        try {
            //toda la lógica va dentro del try 
            //Inicia la transacción
            DB::beginTransaction();

            //Implementacion de guardado de Usuario con datos del array $data

            $usuario=new Usuarios;//<-- instancia de la misma clase Usuarios
            $usuario->cedula      =$data['cedula'];
            $usuario->nombres     =$data['nombres'];
            $usuario->apellidos   =$data['apellidos'];
            $usuario->usuario     =$data['usuario'];
            $usuario->contrasena  =$data['contrasena'];
            $usuario->iniciales   =$data['iniciales'];
            $usuario->id_org      =$data['id_org']; 
            $usuario->id_dep      =$data['id_dep'];
            $usuario->id_dir      =$data['id_dir'];
            $usuario->id_div      =$data['id_div'];
            $usuario->cargo       =$data['cargo'];
            $usuario->perfil      =$data['perfil'];
            $usuario->tipo_usuario=$data['tipo_usuario'];
            $usuario->save();
            //Implementacion de guardado de aprobador;  
            if ($data['aprobador'] == "1") {
                $aprobador = new UsuariosAprobadores;//<-- instancia de la clase UsuariosAprobadores
                $aprobador->id_usuario  =$usuario->id;//El save genera un usuario y directamente lo coloca en el campo id
                $aprobador->id_org      =$data['id_org']; 
                $aprobador->id_dep      =$data['id_dep'];
                $aprobador->id_dir      =$data['id_dir'];
                $aprobador->id_div      =$data['id_div'];
                $aprobador->fecha_inicio=date('Y-m-d H:i:s');
                $aprobador->fecha_fin=date('2030-07-04 11:16:12');
                $aprobador->save();

            }

            //se confirman los datos; puede haber multiples implementaciones pero est es el unico commit para todas al final
            DB::commit();

        } catch (\Exception $e) { //esto atrapa cualquier error y devuelve false al controller
            DB::rollback();
            //echo $e->getMessage(); die(); //para probar si hay error 
            return false;
        }

        return true;

    }


    public static function actualizar($id,$data){
        $usuario=Usuarios::findOrFail($id);
        $usuario->cedula=$data['cedula'];
        $usuario->nombres=$data['nombres'];
        $usuario->apellidos=$data['apellidos'];
        $usuario->usuario=$data['usuario'];
        $usuario->contrasena=$data['contrasena'];
        $usuario->iniciales=$data['iniciales'];
        $usuario->id_org=$data['id_org'];
        $usuario->id_dep=$data['id_dep'];
        $usuario->id_dir=$data['id_dir'];
        $usuario->id_div=$data['id_div'];
        $usuario->cargo=$data['cargo'];
        $usuario->perfil=$data['perfil'];
        $usuario->tipo_usuario=$data['tipo_usuario'];
        $usuario->aprobador=$data['aprobador'];

       $usuario->update();

         if(!is_null($usuario)){
            return true;
         }else{
            return false;
         }        
    }


     public static function usrbyorg($id){
             $usuario = DB::table('users as a')
                     ->where('a.estatus','=','1')
                     ->where('a.id_org','=', $id_org)
                     ->where('a.id_dep','=', $id_dep)
                     //->where('a.id_dep','=','14')
                     ->where('a.perfil','=','10')
                     ->get();
         if(!is_null($usuario)){
            return $usuario;
         }else{
            return false;
         }

    }
    

     public static function updatepasswd($id,$data){
        $usuario=Usuarios::findOrFail($id);
        $usuario->contrasena=$data['contrasena'];
       
        $usuario->update();

         if(!is_null($usuario)){
            return true;
         }else{
            return false;
         }        
    }

    public static function eliminar($id){
       $usuario=Usuarios::findOrFail($id);
       $usuario->estatus='2';

       $usuario->update();

         if(!is_null($usuario)){
            return true;
         }else{
            return false;
         }        
    }
    //
}
