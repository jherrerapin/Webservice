<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Pelicula::get();
        return response()->json($results);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data  = [
            'nombre' => $request->get("nombre"),
            'duracion' => $request->get("duracion"),
            'categoria' => $request->get("categoria"),
            'fecha_estreno' => $request->get("fecha_estreno"),
            'poster_estreno' => $request->get("poster_estreno")
        ];

        Pelicula::create($data);
        $results = Pelicula::latest();
        return response()->json($results);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = Pelicula::find($id);
        return response()->json($results);
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

        $pelicula = Pelicula::find($id);
        if($pelicula) {
            $pelicula->update([
                'nombre' => $request->get("nombre"),
                'duracion' => $request->get("duracion"),
                'categoria' => $request->get("categoria"),
                'fecha_estreno' => $request->get("fecha_estreno"),
                'poster_estreno' => $request->get("poster_estreno")
            ]);
        }

        $results = Pelicula::find($id);
        return response()->json($results);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        if($pelicula) {
            $pelicula->delete();
        }
        return response()->json(["deleted" => true ]);
    }
}
