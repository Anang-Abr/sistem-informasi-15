<nav>
    <h3 class="nav__header">MYSALES</h3>
    <div class="nav__account">
        <h3>
            <span>
                <ion-icon name="caret-down-outline"></ion-icon>{{ Auth::user()->name }}
            </span>
        </h3>
        <ul class="nav__account_menu">
            <form action="/logout" method="post">
                @method('delete')
                @csrf
                <li>
                    <input id="logout" type="submit" value="Log Out">
                </li>
            </form>
        </ul>
    </div>
</nav>