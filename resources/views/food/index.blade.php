@extends('layouts.app')



@section('content')
    {{-- <p>{{ $name }}</p>
    <p>{{ $price }}</p>
    @if ($price>5)
    <p>Price bigger than 5</p>
        
    @else
    <p>Price lower than 5</p>


        
    @endif --}}

  


<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Food List
            @if (session('status'))
    <div class="alert alert-success">
        <p>{{ session('status') }}</p>
    </div>
@endif
        </div>
        <img src="/img/fire.png" alt="Girl in a jacket">
        
    @foreach ($foods as $food)
    {{-- <a href="f/{{ $p->id }}"> --}}
    <div class="people-content">
       <p>{{ $food->id }}</p>
    <p>Name: {{ $food->name }}</p>
    <p>Source: {{ $food->source }}</p>
   
    
    {{-- </a> --}}
</div>
@endforeach


    </div>
</div>
@endsection
