<nav>
    <h3>MYSALES Dashboard</h3>
    <div class="nav__account">
        <h3>
            <span>
                <ion-icon name="caret-down-outline"></ion-icon>Username
            </span>
        </h3>
        <ul class="nav__account_menu">
            <form action="/logout" method="post">
                @method('delete')
                @csrf
                <li>
                    <input type="submit" value="Log Out">
                </li>
            </form>
        </ul>
    </div>
</nav>