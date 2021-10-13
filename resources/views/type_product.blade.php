@extends('index')
@section('type_product')
<div class="col-2">
      <div class="vertical-menu">
        @foreach($type_products as $type_product)
          <a href="#">{{$type_product->name_type_product}}</a>
        @endforeach
      </div>  
</div>
@endsection
@section('product')
<h1 class="text-center">Sản phẩm nổi bật</h1>
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

      
  
