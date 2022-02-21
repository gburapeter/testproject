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
            People List
            @if (session('status'))
    <div class="alert alert-success">
        <p>{{ session('status') }}</p>
    </div>
@endif
        </div>
        <img src="/img/fire.png" alt="Girl in a jacket">
        
    @foreach ($people as $p)
    <a href="{{  route('people.show', [$p]) }}">
       
        {{-- <a href="/people/{{ $p->id }}" --}}
    <div class="people-content">
       <p>{{ $p->id }}</p>
    <p>Name: {{ $p->name }}</p>
    <p>Country: {{ $p->country }}</p>
    <p>Age: {{ $p->age}}</p>
    <a 
    class="border-b-2 pb-2 border-dotted italic text-green-500"
    href="{{  route('people.edit', [$p]) }}">
    Edit &rarr;
</a>
    
    </a>
</div>
@endforeach


    </div>
    {{ $people -> links() }}
</div>
@endsection
