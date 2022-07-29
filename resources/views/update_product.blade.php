@extends ('layouts.product')

@section ('title', 'Product Details')

@section('header2')
    Update Product 
@endsection

@section('action')
    updateProduct/{{$product_id -> id}}
@endsection

@section('button')
    UPDATE 
@endsection

@section('name_value')
    {{product_id -> name}} 
@endsection



