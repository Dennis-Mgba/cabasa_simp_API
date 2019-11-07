<?php

namespace App\Http\Controllers;

use App\Cabasa;
use Illuminate\Http\Request;
use App\Http\Resources\Cabasa as CabasaResource;
use App\Http\Requests;

class CabasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Let's grab the items in our cabasa database table
        // Route::get('/user', function () {
        //     return UserResource::collection(User::all());
        // });

        // Route::get('/', function () {
        // // access the database table 'tasks', fetch all ->get() and assign it to the variable $tasks
        // $cabasa = DB::table('cabasas')->get();                           // <- the code on this line is laravel's query builder
        //     return view('welcome', compact('cabasa'));
        // });

        $cabasas = Cabasa::all();                // the Cabasa here refers to our model file which we made available by including it into this file above like so  use App\Cabasa;                       // the cabasa::all() here means get all items inside the database "cabasa"
        return CabasaResource::collection($cabasas);
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
        $cabasa = $request->isMethod('put') ? Cabasa::findOrFail($request->cabasa_id) : new Cabasa;

        $cabasa->id = $request->input('cabasa_id');
        $cabasa->hallName = $request->input('hallName');
        $cabasa->capacity = $request->input('capacity');
        $cabasa->reason = $request->input('reason');
        $cabasa->status = $request->input('status');
        // $cabasa->name = $request->input('name');
        // $cabasa->email = $request->input('email');
        // $cabasa->password = $request->input('password');

        if ($cabasa->save()) {
            return new CabasaResource($cabasa);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cabasa  $cabasa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get individual item (id)
        $cabasa = Cabasa::findOrFail($id);

        // return single article as a resource
        return new CabasaResource($cabasa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cabasa  $cabasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Cabasa $cabasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cabasa  $cabasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cabasa $cabasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cabasa  $cabasa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get individual item (id)
        $cabasa = Cabasa::findOrFail($id);

        // to delete the item whose id is refered
        if ($cabasa->delete()) {
            return new CabasaResource($cabasa);
        }
    }
}
