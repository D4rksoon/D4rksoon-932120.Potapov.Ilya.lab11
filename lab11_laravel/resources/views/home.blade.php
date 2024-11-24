@extends('layout')

@section('title') Home Page @endsection

@section('main_content')
    <p class="header-container">Calc Service Demonstration<p>
    <nav>
        <ul>
            <li><a href="/CalcService/PassUsingModel">Using Model Calc</a></li>
            <li><a href="/CalcService/PassUsingViewData">Using ViewData Calc</a></li>
            <li><a href="/CalcService/PassUsingViewBag">Using ViewBag Calc</a></li>
            <li><a href="/CalcService/AccessServiceDirectly">Using Service Injection Calc</a></li>
        </ul>
    </nav>
@endsection
