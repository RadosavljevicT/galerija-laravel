<?php

namespace App\Http\Controllers;

use App\Models\Galerija;
use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Response;

class GalerijaKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return response()->json([
      'statusCode' => 200,
      'galerije' => Galerija::all()
      
       ]);
       
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([
            'statusCode' => 200,
            'galerija' => Galerija::find($id)
            
             ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerija $galerija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerija $galerija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galerija  $galerija
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return response()->json([
            'statusCode' => 200,
            'galerija' => Galerija::find($id)->delete()
            
             ]);
    }
}
