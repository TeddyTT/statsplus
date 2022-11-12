<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperatorFormRequest;
use App\Models\Country;
use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operators = Operator::get();

        return view("operator.index", ["operators" => $operators]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::get();

        return view("operator.create", ["countries" => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OperatorFormRequest $request)
    {
        $request->validated();

        Operator::create([
            "country_id" => $request->country,
            "short_name" => $request->short_name,
            "name" => $request->name
        ]);

        return redirect(route('operator.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $operator = Operator::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operator = Operator::where("id", $id)->first();
        $countries = Country::get();
    
        return view("operator.update", ["operator" => $operator, "countries" => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OperatorFormRequest $request, $id)
    {
        $request->validated();
        
        Operator::where("id", $id)->update($request->except(["_token", "_method"]));

        return redirect(route('operator.index'));
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
