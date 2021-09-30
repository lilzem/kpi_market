@extends('parts.app')

@section('title', 'Категорія - ' . $category->name)

@section('content')
    <div>
        @foreach ($category->items as $item)
            <div>
                <div><img src="{{ $item->getImageURI() }}"></div>
                <div>{{ $item->name }}</div>
                <div>{{ $item->description }}</div>
            </div>
        @endforeach
    </div>
@endsection