<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Validator;
use App\Models\Conductor;
//use Illuminate\Support\Facades\Auth;
class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // if(Auth::check()){
         //  return redirect('/conductors');
        //}
        $conductors = Conductor::all();
        return view('conductor.index')->with('conductors',$conductors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nombre'=>'required|max:10',
            'apellido'=>'required|max:10',
            'telefono'=>'required|min:5|numeric',
            'direccion'=>'required',
            'nopase'=>'required|numeric',


        ]);
        if($validator ->fails()){
            return back()
            ->withInput()
            ->with('ErrorInsert', 'llenar todos los campos')
            ->withErrors($validator);
        }
        if($request->hasFile('pase')) {
            $image = $request->file('pase');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img\conductor\pase');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('cedula')) {
            $image = $request->file('cedula');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img\conductor\cedula');
            $image->move($destinationPath, $image_name);
        }
        if($request->hasFile('hojavida')) {
            $image = $request->file('hojavida');
           //  print_r($image);
            $image_name = time().'.'.$image->getClientOriginalExtension();
           //  echo $image;
           //  exit(0);
            $destinationPath = public_path('img\conductor\hojadevida');
            $image->move($destinationPath, $image_name);

            $conductors =  new Conductor();
            $conductors->nombre = $request->nombre;
            $conductors->apellido = $request->apellido;
            $conductors->telefono = $request->telefono;
            $conductors->direccion = $request->direccion;
            $conductors->nopase = $request->nopase;
            $conductors->pase = $request->pase;
            $conductors->cedula = $request->cedula;
            $conductors->hojavida = $request->hojavida;

            $conductors->save();
            return back()->with('Listo', 'se ha creado correctamente ');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conductor = Conductor::find($id);
        return view('conductor.show')->with('conductor', $conductor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conductor = Conductor::find($id);
        return view('conductor.edit')->with('conductor', $conductor);
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
        $conductor = Conductor::find($id);

        $conductor->nombre = $request->nombre;
        $conductor->apellido = $request->apellido;
        $conductor->telefono = $request->telefono;
        $conductor->direccion = $request->direccion;
        $conductor->nopase = $request->nopase;
        $conductor->pase = $request->pase;
        $conductor->cedula = $request->cedula;
        $conductor->hojavida = $request->hojavida;

        $conductor->save();
        return redirect('/conductors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conductor = Conductor::find($id);
        $conductor->delete();
        return redirect('/conductors');

    }
}
