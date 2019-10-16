<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Animal;
use App\Nino;


class NinoController extends Controller
{
    public function index()
    {
       // Session::put('id_nino',5);
      //  Session::forget('id_nino');
      //  Session::flush();
      //  dd(Session::has('id_nino'));
        return view('nino.nino');
    }
    public function registro()
    {
        
        $animales=Animal::all();
        
        return view('nino.registro', compact('animales'));
    }
    public function registrado(Request $request){
       
        if(isset($_POST['reg_animal']))
        {
            $val = $_POST['reg_animal'];
            $animal=Animal::find($val);
            $nuevo=new Nino();
            $nuevo->nom_animal=strtolower($animal->nombre).$animal->siguiente;
            $nuevo->id_animal=$animal->id;
            $nuevo->password= bcrypt($animal->nombre.$animal->siguiente);
            $nuevo->save();
            $animal->siguiente=$animal->siguiente+1;
            $animal->save();
            $request->session()->flash('alert-success','Felicidades, te acabas de registrar. Tu numero animal es: '.$animal->nombre.($animal->siguiente-1).' y tu Clave secreta es: '.$animal->nombre.($animal->siguiente-1));
            
            return redirect('/lognino');
        }
    }
    public function principal(Request $request)
    {
        $this->validate($request, [
         'nombre_animal' => 'required',
            'pass' => 'required',
        ]);
        $tmp=strtolower($request['nombre_animal']);
        
        $nino=Nino::where('nom_animal',$tmp)->get();
        if((count($nino)>0)){
            if(Hash::check($request['pass'], $nino[0]->password)) {
            //if(($nino[0]->password)==$request['pass']){
                Session::put('id_nino',5);
                return redirect('/main/nino');
            }else{
                $request->session()->flash('alert-danger','Numero animal o contraseña incorrectos');
                return redirect('/lognino');
                //dd('contrasieña incorrecta');
            }
        }else{
            $request->session()->flash('alert-danger','Numero animal o contraseña incorrectos');
                return redirect('/lognino');
        }
    }
    public function main(){
        if(Session::has('id_nino')){
            
            return view('nino.carta');
        }
        return redirect('/lognino');
    }
    public function logout(){
        Session::forget('id_nino');
        Session::flush();
        //Session::destroy();
        Session::regenerate();

        return redirect('/');
    }
}
