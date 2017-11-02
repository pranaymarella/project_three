<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BudgetController extends Controller
{
    //

    public function index()
    {
        $budget = 0;
        $food_alloc = 0;
        $savings_alloc = 0;
        $entertainment_alloc = 0;
        $miscellanious_alloc = 0;
        $food_text = "";
        $entertainment_text = "";
        $savings_text = "";
        $miscellanious_text = "";

        if (session('budget'))
        {
            $budget = (int) session('budget');
            $food_alloc = ((int) session('food')) / 100 * $budget;
            $savings_alloc = ((int) session('savings')) / 100 * $budget;
            $entertainment_alloc = ((int) session('entertainment')) / 100 * $budget;
            $miscellanious_alloc = ((int) session('miscellanious')) / 100 * $budget;
        }

        if (session('show') == 'on')
        {
            $food_text = "You can spend $ ".$food_alloc." on food";
            $entertainment_text = "You can spend $ ".$entertainment_alloc." on entertainment";
            $savings_text = "You can put $ ".$savings_alloc." in savings";
            $miscellanious_text = "You can spend $ ".$miscellanious_alloc." on miscellanious";
        }

        return view('budget.main')->with([
            'budget' => session('budget'),
            'food' => session('food'),
            'food_alloc' => $food_alloc,
            'food_text' => $food_text,
            'entertainment' => session('entertainment'),
            'entertainment_alloc' => $entertainment_alloc,
            'entertainment_text' => $entertainment_text,
            'savings' => session('savings'),
            'savings_alloc' => $savings_alloc,
            'savings_text' => $savings_text,
            'miscellanious' => session('miscellanious'),
            'miscellanious_alloc' => $miscellanious_alloc,
            'miscellanious_text' => $miscellanious_text
        ]);
    }

    public function budget(Request $request)
    {
        return view('budget.budget');
    }

    public function change(Request $request)
    {
        $budget = $request->input('new_budget');
        $food = $request->input('food_alloc');
        $entertainment = $request->input('entertainment_alloc');
        $savings = $request->input('savings_alloc');
        $miscellanious = $request->input('misc_alloc');
        $show = $request->input('show_text');
        return redirect('/')->with([
            'show' => $show,
            'budget' => $budget,
            'food' => $food,
            'entertainment' => $entertainment,
            'savings' => $savings,
            'miscellanious' => $miscellanious
        ]);
    }
}
