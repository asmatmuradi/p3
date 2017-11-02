<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitController extends Controller
{
    public function index(Request $request)
    {
        $tabForEachWay = null;
        if ($_GET != null) {
            $this->validate($request, [
            'totalTab'           => 'required',
            'splitHowManyWay'  => 'required',
            'radios'              => 'required_with:radioValue'
        ]);
            #Retrieve date from the form
            $tabValue  = $request->input('totalTab', 0);
            $splitCount = $request->input('splitHowManyWay', 0);
            $discount   = $request->input('discount', 0);
            $tipValue   = $request->input('radioValue', '');
            $tipType    = $request->input('radios', '');
            $roundUp    = $request->input('roundUp', '');

            #apply discount to tab amount
            $tabValue = $tabValue - ($tabValue * $discount);


            if (!empty($tipValue)) {
                if ($tipType ==1) {
                    $tipValue = $tabValue * $tipValue/100;
                }
            } else {
                $tipValue = 0;
            }
            $tabValue= $tipValue+$tabValue;

            $tabForEachWay = $tabValue/$splitCount;

            if ($roundUp=='on') {
                $tabForEachWay = round($tabForEachWay, 0);
            } else {
                $tabForEachWay= round($tabForEachWay, 2);
            }
        }
        return view('billsplit.index')->with([
        'tabForEachWay'       => $tabForEachWay,
        'totalTab'           => $request->input('totalTab'),
        'splitHowManyWay'     => $request->input('splitHowManyWay'),
        'discount'            => $request->input('discount'),
        'radioValue'          => $request->input('radioValue'),
        'radios'              => $request->input('radios'),
        'roundUp'             => $request->input('roundUp')
        ]);
    }
}
