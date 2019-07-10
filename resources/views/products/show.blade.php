@extends ('layouts.app')

@section ('page_title', 'prodotto visualizzato')


@section ('content')
  <h1>Prodotto: {{$product->id}}</h1>

  <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$product->name}}</h5>
    <p class="card-text">{{$product->description}}</p>
    <p class="card-text">{{$product->price}} Euro</p>
    <a href="{{route('products.index')}}" class="btn btn-primary">Torna ai prodotti</a>
  </div>
</div>
@endsection
