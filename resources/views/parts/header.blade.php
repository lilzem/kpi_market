<header>
    <div class="logo">
        <a href="{{ route('categories.show', ['category' => 'magical']) }}"> <img src="../images/ico.png" width="60px" alt="icon"> </a> 
    </div>
    
    @if (\Route::currentRouteName() != 'login')
    <nav>
        <div class="topnav" id="myTopnav">
            @foreach ($_categories as $category)
            <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
            @endforeach
            
        </div>
    </nav>
    <a class="submit" type="button" href="{{ route('login') }}">Вхід</a>
    @endif
</header>
    