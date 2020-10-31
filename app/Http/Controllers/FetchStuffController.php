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

    //1st purchase
    public function getUnits1($amount1)
    {
        //populate clients details
//            $amount = 0.00;
//            $units =0.00;
//            $amountAfterTax = 0.00;

        //calculate tax here
        $vat = $amount1 * 0.16;
        $excise = $amount1 * 0.03;
        $totalTax = $vat + $excise;
        $amountAfterTax = $amount1 - $totalTax;


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
        if ($amountAfterTax < 47) {
            $units = $amount1 / 0.47;
        } else

            if ($amountAfterTax >= 48 && $amountAfterTax <= 217) {
                $R1units = 100;
                $units = (($amount1 - 55.93) / (1.2 * 0.85)) + $R1units;
            } else {
                $R1units = 100;

                $R2units = (170 / 0.85);

                $R3units = (($amount1 - 258.23) / (1.2 * 1.94));

                $units = $R1units + $R2units + $R3units;
            }
        //return units
        return response()->json(["units1" => number_format((float)$units, 2, '.', ','),"vat1"=>$vat,"exciseDuty1"=>$excise,"amountAfterTax1"=>$amountAfterTax]);

    }

    //2nd purchase
    public function getUnits2($amount2)
    {
        //populate clients details
//            $amount = 0.00;
//            $units =0.00;
//            $amountAfterTax = 0.00;

        //calculate tax here
        $vat = $amount2 * 0.16;
        $excise = $amount2 * 0.03;
        $totalTax = $vat + $excise;
        $amountAfterTax = $amount2 - $totalTax;


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
        $R2units = 200;
        $R3units = 0.00;

        $R2bandPerUnit = 1.01;//1.01 ngwe per unit post tax

        if ($amountAfterTax >= 1 && $amountAfterTax <= 201) {
            $units = ($amount2) / (1.01);


        } else {
           //
            $units = (($amount2-203) / (2.31)) + 201;

        }
        //return units
        return response()->json(["units2" => number_format((float)$units, 2, '.', ','),"vat2"=>$vat,"exciseDuty2"=>$excise,"amountAfterTax2"=>$amountAfterTax]);

    }

    //3rd purchase
    public function getUnits3($amount3)
    {

        //calculate tax here
        $vat = $amount3 * 0.16;
        $excise = $amount3 * 0.03;
        $totalTax = $vat + $excise;
        $amountAfterTax = $amount3 - $totalTax;

        $R3bandPerUnit = 2.31;//2.31 ngwe per unit post tax
        $units = ($amount3 / $R3bandPerUnit);

        //return units
        return response()->json(["units3" => number_format((float)$units, 2, '.', ','),"vat3"=>$vat,"exciseDuty3"=>$excise,"amountAfterTax3"=>$amountAfterTax]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAmount($units)
    {
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
        if ($units <= 100) {
            $amount = $units * 0.47;
        } else

            if ($units >= 101 && $units <= 200) {
                $R1units = 100;
                $amount = (($units - $R1units) * (1.2 * 0.85)) + 55.93;
            } else {
                $R1units = 100;

                $R2units = (170 / 0.85);

                $R3units = (-$R1units - $R2units) + $units;

                $amount = ($R3units * (1.2 * 1.94)) + 258.23;


            }

        //calculate tax here
        $vat = $amount * 0.16;
        $excise = $amount * 0.03;
        $totalTax = $vat + $excise;
        $amountAfterTax = $amount - $totalTax;
        //return units
        return response()->json(["amount" => $amount]);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
