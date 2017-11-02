{{-- /resources/views/budget/budget.blade.php --}}
@extends('layouts.master')

@section('title')
    Change Budget
@endsection

@section('content')
    <form method='POST' action='/budget/change'>
        {{ csrf_field() }}

        <input type="text" name="new_budget" placeholder="$ New Budget">
        <table class='budget_table'>
            <tr class='table_headers'>
                <th>Categories</th>
                <th>Allocation</th>
            </tr>
            <tr>
                <td>Food</td>
                <td>
                    <select name="food_alloc">
                        <option value="0">0%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
                        <option value="50">50%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Entertainment</td>
                <td>
                    <select name="entertainment_alloc">
                        <option value="0">0%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
                        <option value="50">50%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Savings</td>
                <td>
                    <select name="savings_alloc">
                        <option value="0">0%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
                        <option value="50">50%</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Miscellanious</td>
                <td>
                    <select name="misc_alloc">
                        <option value="0">0%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
                        <option value="50">50%</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="checkbox" name="show_text" class="check"> Show More
        <br><br>
        <input type='submit'>
    </form>
@endsection
