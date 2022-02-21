@extends('layouts.app')

@section('content')
<div class="wrapper-create-person">
  
  
    <h1>Create a New Person</h1>
    <form action="/people" method="POST">
        @csrf
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required>
      <label for="country">Country:</label>
      <input type="text" name="country" id="country" required>
      <label for="age">Age:</label>
      <input type="text" name="age" id="age" required>

      <fieldset>
        <label>Languages:</label><br />
        <input type="checkbox" name="languages[]" value="english">English<br />
        <input type="checkbox" name="languages[]" value="german">German<br />
        <input type="checkbox" name="languages[]" value="danish">Danish<br />
        <input type="checkbox" name="languages[]" value="romanian">Romanian<br />
      </fieldset>
    
      <input type="submit" value="New Person">

    </form>
  </div>
@endsection