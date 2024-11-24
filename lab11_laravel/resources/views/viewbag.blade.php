@extends('layout')

@section('title') PassUsingViewBag @endsection
@section('main_content')
    <div class="header-container">
        <p class="header-container">PassUsingViewBag<p>
    </div>
    <div class="calc-container">
        <p>Rand Value First : {{ $firstValue }}</p>
        <p>Rand Value Second : {{ $secondValue }}</p>
        <p>Add :</p>
        <output>{{ $firstValue }} + {{ $secondValue }} = {{ $resultOperations['add'] }}</output>
        <p>Sub :</p>
        <output>{{ $firstValue }} - {{ $secondValue }} = {{ $resultOperations['subtract'] }}</output>
        <p>Mult :</p>
        <output>{{ $firstValue }} * {{ $secondValue }} = {{ $resultOperations['multiply'] }}</output>
        <p>Div :</p>
        <output>{{ $firstValue }} / {{ $secondValue }} = {{ $resultOperations['divide'] }}</output>
    </div>
@endsection
