@extends('layouts.main')

@section('title', 'Категорія - ' . $category->name)

@section('content')
<div class="items">
    @foreach ($category->items as $item)
    <div class="item">
        <div><img src="{{ $item->getImageURI() }}" width="150px" height="120px"></div>
        <div class="item__name">{{ $item->name }}</div>
        <div class="item__description">{{ $item->description }}</div>
    </div>
    @endforeach
</div>
@endsection
