@extends('layouts.main')

@section('title', 'LogIn')

@section('content')
<div class="form">
    <form action="main.html" method="POST">
        <img src="images/ico.png">
        <div class="dws-input">
            <input type="text" name="login" placeholder="Логін">
        </div>
        <div class="dws-input">
            <input type="password" name="password" placeholder="Пароль">
        </div>
        <input class="btn" type="submit" name="button" value="Вхід" \>
    </form>
</div>
@endsection
