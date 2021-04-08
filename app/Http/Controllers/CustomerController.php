<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function show()
    {
        $customers = DB::table('sales.customers')->offset(180)->limit(20)->get();
        return view('welcome', ['customers' => $customers]);
    }
}
