<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    //

    public function index()
    {
        return view('layouts.master');
    }

    public function budget()
    {
        return view('budget.budget');
    }
}
