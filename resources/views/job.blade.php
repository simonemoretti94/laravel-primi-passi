@extends('layouts.welcome')

@section('content')

<div class="container mt-5">
    <h2 class="text-primary">
    {{ $travail['title']}}:
    </h2>
    <p class="text-white">
        {{$travail['salary']}}&dollar;
    </p>
</div>

@endsection

@section('style')
<style>
body {
    background-color: #2c2c2c;
}
header {
    min-height: 50px;
    margin-bottom: solid 1px white;
}
</style>
@endsection