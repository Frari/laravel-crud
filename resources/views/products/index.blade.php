
@extends('layouts.app')
@section('content')
  <h1 class="pull-left">Tutti i prodotti</h1>
  <a href="{{route('products.create')}}" class="btn btn-primary pull-right mb-4">Aggiungi nuovo</a>
    <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>DESCRIZIONE</th>
      <th>PREZZO</th>
      <th>Azioni</th>
    </tr>
  </thead>
  <tbody>
  @forelse($products as $product)
    <tr>
      <th>{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
      <td>
        <a href="{{route('products.show', $product->id)}}" class="btn btn-info">Visualizza</a>
      </td>
    </tr>

  @empty
    <tr>
      <td colspan='4'>
        Non ci sono prodotti
      </td>
    </tr>

  </tbody>
</table


  @endforelse

@endsection

@section ('page_title', 'Home prodotti')
