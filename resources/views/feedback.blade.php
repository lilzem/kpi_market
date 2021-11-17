@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="form feedback">
    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <img src="images/ico.png">
        <div class="dws-input">
            <input type="text" name="email" placeholder="Пошта">
        </div>
        <div class="dws-input">
            <input type="text" name="name" placeholder="Ім'я">
        </div>
        <div class="dws-input">
            <textarea name="message" placeholder="Повідомлення"></textarea>
        </div>
        <input class="btn" type="submit" name="button" value="Надіслати" \>

        @if (session()->has('date'))
        <div class="feedback__message">
            Повідомлення успішно надіслано!<br>
            <span>{{ session('date') }}</span>
        </div>
        @endif
    </form>
</div>
@endsection
