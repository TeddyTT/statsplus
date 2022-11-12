<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryFormRequest;
use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get();

        return view("country.index", ["countries" => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::get();

        return view("country.create", ["continents" => $continents]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryFormRequest $request)
    {
        $request->validated();

        Country::create([
            "continent_id" => $request->continent,
            "iso_code" => $request->iso_code,
            "name" => $request->name
        ]);

        return redirect(route('country.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $country = Country::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::where("id", $id)->first();
        $continents = Continent::get();
    
        return view("country.update", ["country" => $country, "continents" => $continents]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryFormRequest $request, $id)
    {
        $request->validated();
        
        Country::where("id", $id)->update($request->except(["_token", "_method"]));

        return redirect(route('country.index'));
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
