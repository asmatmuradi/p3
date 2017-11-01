<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitController extends Controller
{
    public function index(Request $request)
    {


      $tabForEachWay = null;
      if ($_GET != null)
      {
        $this->validate($request, [
            'Total_Tab' => 'required|numeric',
            'Split_How_Many_Way?' => 'required|numeric',
        ]);
        
        #Retrieve date from the form
        $tabValue  = $request->input('Total_Tab',0);
        $splitCount = $request->input('Split_How_Many_Way?',0);
        $discount   = $request->input('Discount','');
        $tipValue   = $request->input('radioValue','');
        $tipType    = $request->input('radios','');
        $roundUp    = $request->input('RoundUp','');

        #apply discount to tab amount
        $tabValue = $tabValue - ($tabValue * $discount);


        if (!empty($tipValue))
        {
          if ($tipType ==1)
          {
            $tipValue = $tabValue * $tipValue/100;
          }
        }
        else
        {
            $tipValue = 0;
          }
          $tabValue= $tipValue+$tabValue;

          $tabForEachWay = $tabValue/$splitCount;

          if ($roundUp=='on')
          {
            $tabForEachWay = round($tabForEachWay);
          }
    }
    return view('billsplit.index')->with([
        'tabForEachWay'       => $tabForEachWay,
        'Total_Tab'           => $request->input('Total_Tab'),
        'Split_How_Many_Way'  => $request->input('Split_How_Many_Way?'),
        'Discount'            => $request->input('Discount'),
        'radioValue'          => $request->input('radioValue'),
        'radios'              => $request->input('radios'),
        'RoundUp'             => $request->input('RoundUp')
        ]);
    }
}
