@extends('parts.app')

@section('title', 'LogIn')

@section('content')
<div class="form">
    <img src="images/ico.png">
    <form action="main.html" method="POST">
        <div class="dws-input">
            <input type="text" name="login" placeholder="Логін">
        </div>
        <div class="dws-input">
            <input type="password" name="password" placeholder="Пароль">
        </div>
        <input class="submit" type="submit" name="button" value="Вхід"\>
    </form>
</div>
@endsection

