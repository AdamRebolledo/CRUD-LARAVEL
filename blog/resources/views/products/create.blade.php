@extends('layout')

@section('content')
<div class=" col-12 col-md-8">
<hr>

<h2>
        Agregar producto
        <a href="{{ route('products.index') }}" class="btn btn-info pull-right">Listado</a>
</h2>

@include('products.fragment.error')

{!! Form::open(['route' =>'products.store'])  !!}
@include('products.fragment.form')
{!! Form::close() !!}
</div>

<div class="col-sm-4 col-md-4">
@include('products.fragment.aside')
</div>

@endsection