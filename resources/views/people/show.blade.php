@extends('layouts.app')

@section('content')
<div class="wrapper-pizza-work">
    <div class="wrapper pizza-details">
        <h1>Order for {{ $person->name }}</h1>
        <p class="text-lg text-gray-700 py-6">Country - {{ $person->country }}</p>
        <p class="text-lg text-gray-700 py-6">Age - {{ $person->age }}</p>
        

        <p class="text-lg text-gray-700 py-6">Schools: </p>
       
        <p class="text-lg text-gray-700 py-6">{{ $person->school->school_name ?? "No school"}}</p>
       
        
        
        <p class="text-lg text-gray-700 py-6">Languages:</p>
  <ul>
      @if($person->languages)
    @foreach($person->languages as $lang)
      <li>{{ $lang }}</li>
    @endforeach
    @endif
  </ul>
  <form action="{{ route('people.destroy', ['person' => $person]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button> Delete person</button>
</form>
      </div>
      <a href="{{ route('people.index') }}" class="back"><- Back to all people</a>


</div>
@endsection