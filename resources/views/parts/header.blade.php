<header>
    <nav>
        <ul class="nav__container">
            <li class="nav__item">
                <a class="nav__logo" href="{{ route('categories.show', ['category' => 'magical']) }}">
                    <img src="/images/ico.png" width="60px" alt="icon">
                </a>
            </li>
            @if (!in_array($currentRouteName, ['login', 'feedback.index']))
            <li class="nav__item menu__container">
                <span class="menu__title">{{ $category->name }}</span>
                <ul class="nav__menu">
                    @foreach ($_categories as $_category)
                    @continue ($_category->id == ($category->id ?? null))

                    <li class="menu__item">
                        <a href="{{ route('categories.show', $_category) }}">{{ $_category->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endif
            <li class="nav__item">
                <a class="btn nav__btn" href="{{ route('login') }}">Вхід</a>
            </li>
        </ul>
    </nav>
</header>
