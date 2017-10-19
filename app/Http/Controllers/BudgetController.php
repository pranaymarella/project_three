<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    //

    public function index()
    {
        return "This will view the main page of the application"
    }

    public function budget()
    {
        return "This will store the users budget"
    }
}
