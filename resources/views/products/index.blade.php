
@extends('layouts.app')
@section('content')
  <h1>Tutti i prodotti</h1>

    <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>DESCRIZIONE</th>
      <th>PREZZO</th>
    </tr>
  </thead>
  <tbody>
  @forelse($products as $product)
    <tr>
      <th>{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price}}</td>
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
