<?php

namespace App\Http\Controllers;
use App\Carta;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                return view('carta.escribirCarta');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carta.escribirCarta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta=new Carta();
       // if($request->hasFile('imagen')){
            $file =$request->file('imagen');
            $name =time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
           // return $name;
       // }        

        $carta->titulo=$request->input('titulo');
        $carta->asunto=$request->input('asunto');
        $carta->carta=$request->input('carta');
         $carta->imagen=$name;

        $carta->fecha=date("y-m-d");
        $carta->save();
        $request->session()->flash('alert-success','Tu carta ha sido enviado exitosamente GRASIAS Deseas volver a enviar');
        return redirect()->route("cartas.index");
       // return view('carta.escribirCarta');
       // return $request->all();
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
