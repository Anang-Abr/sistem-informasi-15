<nav>
    <h3 class="nav__header">MYSALES</h3>
    <div class="nav__account">
        <h3 class="nav__profile">
            <span>
            <ion-icon name="caret-down-outline"></ion-icon>{{ Auth::user()->name }}
            </span>
            <img class="nav__account__picture" src="{{ url('/assets/img/default.jpg') }}" alt="profile picture">
        </h3>
        <ul class="nav__account_menu">
            <div class="nav__account__profile">
                <a href="{{ url('/account/settings') }}" class="nav__account__profile">
                <img class="nav__account__picture" src="{{ url('/assets/img/default.jpg') }}" alt="profile picture">
                <span>{{ Auth::user()->name }}</span>
                </a>
            </div>
            <li class="">
                <a href="{{ url('account/settings') }}" class='nav__account_menu__item'>Settings</a>
            </li>
            <li class="">
                <form action="/logout"style="text-align:left;"method="post">
                    @method('delete')
                    @csrf
                <input class="nav__account_menu__logout nav__account_menu__item" type="submit" value="Log Out">
            </form>
            </li>
        </ul>
    </div>
</nav>