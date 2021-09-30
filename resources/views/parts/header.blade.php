<header>
    <div class="logo">
        <a href="{{ route('categories.show', ['category' => 'magical']) }}"> <img src="../images/ico.png" width="60px" alt="icon"> </a> 
    </div>
    <nav>
        <div class="topnav" id="myTopnav">
            @foreach ($_categories as $category)
            <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
            @endforeach
            <a id="menu" href="#" class="icon">&#9776;</a>
        </div>
    </nav>
    @if (\Route::currentRouteName() != 'login')
    <a class="submit" type="button" href="{{ route('login') }}">Вхід</a>
    @endif
</header>
    