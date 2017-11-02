{{-- /resources/views/budget/main.blade.php --}}
@extends('layouts.master')

@section('title')
    Show Budget
@endsection

@section('content')
    <h4><strong>Current Budget:</strong></h4>
    <h2>$ {{ $budget or "0.00" }}</h2>
    <br>
    <table class='budget_table'>
        <tr class='table_headers'>
            <th>Categories</th>
            <th>Allocation</th>
            <th>$</th>
        </tr>
        <tr>
            <td>Food</td>
            <td>{{ $food or "0"}}%</td>
            <td>$ {{ $food_alloc or "0" }}</td>
        </tr>
        <tr>
            <td>Entertainment</td>
            <td>{{ $entertainment or "0"}}%</td>
            <td>$ {{ $entertainment_alloc or "0"}}</td>
        </tr>
        <tr>
            <td>Savings</td>
            <td>{{ $savings or "0"}}%</td>
            <td>$ {{ $savings_alloc or "0" }}</td>
        </tr>
        <tr>
            <td>Miscellanious</td>
            <td>{{ $miscellanious or "0"}}%</td>
            <td>$ {{ $miscellanious_alloc or "0"}}</td>
        </tr>
    </table>
    <br>
    <a href='/budget'><button>Change</button></a>
    <br>

    @if ( !empty($food_text))
        <h4>{{ $food_text }}</h4>
    @endif

    @if ( !empty($entertainment_text))
        <h4>{{ $entertainment_text }}</h4>
    @endif

    @if ( !empty($savings_text))
        <h4>{{ $savings_text }}</h4>
    @endif

    @if ( !empty($miscellanious_text))
        <h4>{{ $miscellanious_text }}</h4>
    @endif
@endsection
