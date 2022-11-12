<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContinentFormRequest;
use App\Models\Continent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContinentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $continents = Continent::get();

        return view("continent.index", ["continents" => $continents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("continent.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContinentFormRequest $request)
    {
        $request->validated();

        Continent::create([
            "iso_code" => $request->iso_code,
            "name" => $request->name
        ]);

        return redirect(route('continent.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $continent = Continent::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $continent = Continent::where("id", $id)->first();
    
        return view("continent.update", ["continent" => $continent]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContinentFormRequest $request, $id)
    {
        $request->validated();
        
        Continent::where("id", $id)->update($request->except(["_token", "_method"]));

        return redirect(route('continent.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Continent::destroy($id);

        return redirect(route('continent.index'));
    }
}
