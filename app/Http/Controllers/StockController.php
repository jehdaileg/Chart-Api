<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Stock');
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
        $stock = new Stock([

            'stockName' => $request->get('stockName'),
            'stockPrice' => $request->get('stockPrice'),
            'stockYear' => $request->get('stockYear')

        ]);

        $stock->save();

        return redirect('/stocks');
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

    public function chart()
    {

       $result = DB::table('stocks')

                      ->where('stockName', '=', 'Infosys')
                      ->orderBy('stockYear', 'ASC')
                      ->get();

                      //$result = Stock::orderBy('stockYear', 'ASC')->pluck('stockPrice', 'stockYear');

                    // return $result = Stock::orderBy('stockYear', 'ASC')->get();



       // return $stocks = Stock::all();

     /*   $stocks_prices = Stock::pluck('stockPrice');

        $stocks_years = Stock::pluck('stockYear');

        $stocks_names = Stock::pluck('stockName');
   */


      return response()->json($result);

//return response()->json(['prices' => $stocks_prices, 'years' => $stocks_years, 'names' => $stocks_names]);
    }
}
