@extends('parts.app')

@section('title', 'Категорія - ' . $category->name)

@section('content')
    <div class="items">
        @foreach ($category->items as $item)
            <div class="item">
                <div><img src="{{ $item->getImageURI() }}" width="150px" height="120px"></div>
                <div id="name">{{ $item->name }}</div>
            </div>
        @endforeach
    </div>
@endsection