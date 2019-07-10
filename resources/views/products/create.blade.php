@extends ('layouts.app')

@section ('page_title', 'Inserimento nuovo prodotto')

@section ('content')
  <h1>Inserisci nuovo prodotto</h1>
  <form method="post" action="{{route('products.store')}}">
    @csrf
    <div class="form-group">
      <label for="name">Nome prodotto: </label>
      <input type="txt" class="form-control" name="name" placeholder="Inserisci nome prodotto">
    </div>
    <div class="form-group">
      <label for="decription">Descrizione prodotto: </label>
      <textarea class="form-control" name="description" placeholder="Inserisci descrizione prodotto"></textarea>
    </div>
    <div class="form-group">
      <label for="price">Prezzo prodotto: </label>
      <input type="number" class="form-control" name="price" placeholder="Inserisci prezzo prodotto">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
