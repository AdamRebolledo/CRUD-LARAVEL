@extends('layout')

@section('content')
<div class="col-xs-12 col-sm-8">
<hr>

<h2>
        Editar producto
        <a href="{{ route('products.index') }}" class="btn btn-info pull-right">Listado</a>
</h2>

@include('products.fragment.error')

{!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}
@include('products.fragment.form')
{!! Form::close() !!}
</div>

<div class="col-sm-4">
@include('products.fragment.aside')
</div>

@endsection