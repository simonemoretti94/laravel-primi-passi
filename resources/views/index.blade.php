@extends('layouts.welcome')

@section('content')

<div class="container mt-5">
    @foreach ($jobs as $job)
        <p><a href="job/{{$job['id']}}" class="text-white"><strong class="text-primary">{{$job['title']}}:</strong> pays {{$job['salary']}} <i>per year</i></a></p>
    @endforeach
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