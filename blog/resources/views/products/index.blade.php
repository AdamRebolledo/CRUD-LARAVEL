@extends('layout')

@section('content')
<div class=" col-sm-12">
<hr>

<h2>
        Listado de Productos
        <a href="{{route('products.create')}}" class="btn btn-primary pull-right">Nuevo Producto</a>

</h2>
@include('products.fragment.info')
<table class="table table-hover table-striped">
<thead>
<tr>
<th width="20px">ID</th>
<th>NOMBRE DEL PRODUCTO</th>
<th colspan="3">&nbsp;</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td>
<a href="{{ route('products.show', $product->id) }}">VER</a>
</td>
<td>
<a href="{{ route('products.edit', $product->id)}}" class="btn btn-primary pull-right"> EDITAR</a>
</td>

<td>
<form action="{{ route('products.destroy', $product->id)}}" method="POST">
{{  csrf_field() }}
<input type="hidden" name="_method" value="DELETE">
<button class="btn btn-danger">ELIMINAR</button>
</form>

</td>
</tr>
@endforeach
</tbody>

</table>
{!! $products->render() !!}

</div>

<div class="col-sm-4">
@include('products.fragment.aside')
</div>

@endsection