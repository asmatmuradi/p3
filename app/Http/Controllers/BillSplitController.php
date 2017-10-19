<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitController extends Controller
{
    public function index()
    {
      return view('billsplit.index' );
    }

    public function calculateTip()
    {
      return 'In this method we will calculate tip...';
    }
}
