<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FetchStuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUnits($amount)
    {
        //populate clients details
//            $amount = 0.00;
//            $units =0.00;
//            $amountAfterTax = 0.00;

        //calculate tax here
        $vat = $amount * 0.16;
        $excise = $amount * 0.03;
        $totalTax = $vat + $excise;
        $amountAfterTax = $amount - $totalTax;


            //check bands
            /*
            * BANDS
            * ---------
            * R1
            * 100units -> K47
            * 200units -> k170
            * 300units -> k217 and above
            * */

            $R1units = 0.00;
            $R2units = 0.00;
            $R3units = 0.00;

            //if units < k47, do this
            if ($amountAfterTax < 47){
                $units = $amount/0.47;
            }else

                if($amountAfterTax >= 48 && $amountAfterTax <= 217){
                    $R1units = 100;
                    $units = (($amount - 55.93)/(1.2 * 0.85)) + $R1units;
                }else{
                    $R1units = 100;

                    $R2units = (170 / 0.85);

                    $R3units = (($amount - 258.23)/(1.2 * 1.94));

                    $units = $R1units + $R2units + $R3units;
                }
             //return units
        return response()->json(["units"=>$units]);

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCompanyDetsById($id)
    {
        $companydets_array = DB::table('invoices')->where('id',$id)->get();

        return response()->json(['companydets_array'=>$companydets_array]);

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
