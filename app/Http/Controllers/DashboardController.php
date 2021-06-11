<?php

namespace App\Http\Controllers;

use App\Models\Lead;

class DashboardController extends Controller


{
    public function __construct()
    {  
        $this->middleware(['auth']);
    }


    public function index()
    {
        $total_leads = Lead::count();

        return view('dashboard',['leads'=>$total_leads]);
    }

}
