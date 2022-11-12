<?php

namespace App\Http\Controllers;

use App\Http\Requests\LotteryFormRequest;
use App\Models\Lottery;
use App\Models\Operator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LotteryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotteries = Lottery::get();

        return view("lottery.index", ["lotteries" => $lotteries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $operators = Operator::get();

        return view("lottery.create", ["operators" => $operators]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LotteryFormRequest $request)
    {
        $request->validated();

        Lottery::create([
            "operator_id" => $request->operator,
            "name" => $request->name
        ]);

        return redirect(route('lottery.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lottery = Lottery::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lottery = Lottery::where("id", $id)->first();
        $operators = Operator::get();
    
        return view("lottery.update", ["lottery" => $lottery, "operators" => $operators]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LotteryFormRequest $request, $id)
    {
        $request->validated();
        
        Lottery::where("id", $id)->update($request->except(["_token", "_method"]));

        return redirect(route('lottery.index'));
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
