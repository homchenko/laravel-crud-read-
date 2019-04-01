@extends('admin.layout')

@section('content')
    <h1>Отредактировать товар</h1>

    {!! Form::model($product, ['route' => ['products.update', $product->id],  'method' => 'PUT']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Название') }}
        {{ Form::text('title', $product->title, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Описание товара') }}
        {{ Form::textarea('content', $product->content, ['class' =>'form-control']) }}
    </div>
    <div class="form-group">
        {{ Form::label('price', 'Цена') }}
        {{ Form::text('price', $product->price, ['class' =>'form-control']) }}
    </div>

    {{ Form::submit('Редактировать товар', ['class' => 'btn btn-primary']) }}

    {!! Form::close() !!}
@endsection
