@extends('layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Update people
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/people/{{ $people->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
      <label for="country">Country:</label>
      <input type="text" name="country" id="country" required>
      <label for="age">Age:</label>
      <input type="text" name="age" id="age" required>
                    

                    <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                        Submit
                    </button>
            </div>
        </form>
    </div>
@endsection