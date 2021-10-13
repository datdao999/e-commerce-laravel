@extends('index')
@section('type_product')
<div class="col-2">
      
</div>
@endsection
@section('product')
  <div class="row mt-5" >
    @foreach($products as $product)
        <div class="col-3">
        <img src="{{asset('storage/'.$product->image)}}"  width="200px" >
          <h4>{{$product->name_product}}</h4>
          <p>{{$product->price}}/{{$product->unit}}</p>
          <a onclick="addCart({{$product->id}})" class="btn btn-success" href="javascript:">Gio hang</a>
        </div>
      @endforeach
  </div>
@endsection