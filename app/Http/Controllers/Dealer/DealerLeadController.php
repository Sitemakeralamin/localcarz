<?php

namespace App\Http\Controllers\Dealer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DealerLeadController extends Controller
{
    public function index()
    {
        return view('dealer.lead.index');
    }
}
