@extends('front.templates.base')

@section('mainContent')
<form action="{{route('pokemons.store')}}" method="post">
    @csrf 
    
    <div>
        <label for="nome">nome</label>
        <input type="text" name="nome" id="nome">
    </div>
    <div>
        <label for="tipo">tipo</label>
        <input type="text" name="tipo" id="tipo">
    </div>
    <div>
        <label for="sesso">sesso</label>
        <input type="text" name="sesso" id="sesso">
    </div>
    <div>
        <label for="peso">peso</label>
        <input type="text" name="peso" id="peso">
    </div>
    <div>
        <label for="leggendario">leggendario</label>
        <input type="text" name="leggendario" id="leggendario">
    </div>
    <button>Save</button>
</form>
@endsection