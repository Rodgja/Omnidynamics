@extends('layout')

@section('content')

<h1>Shop</h1>
@foreach($products as $product)

<li>{{ link_to("/shop/{$product->name}", $product->name) }}</li>

@endforeach

@stop