<nav>
    <h3 class="nav__header">MYSALES</h3>
    <div class="nav__account">
        <h3>
            <span>
            <ion-icon name="caret-down-outline"></ion-icon>{{ Auth::user()->name }}
            </span>
        </h3>
        <ul class="nav__account_menu">
            <form action="/logout"style="text-align:left;"method="post">
            <li class="nav__account_menu__item">
                <a href="{{ url('account/settings') }}">Settings</a>
            </li>
            @method('delete')
            @csrf
            <li class="nav__account_menu__item">
                <span>
                <input type="submit" value="Log Out">
                </span>
            </li>
            </form>
        </ul>
    </div>
</nav>