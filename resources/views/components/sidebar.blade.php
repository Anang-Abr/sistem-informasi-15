<div class="sidebar">
        <ul>
            <li class="sidebar-list {{ (request()->segment(1) == "") ? "__active" : "" }}">
                <a href="/">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-list {{ (request()->segment(1) == "customer") ? "__active" : "" }}">
                <a href="/customer">
                    <span class="icon">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </span>
                    <span class="title">Sales Center</span>
                </a>
            </li>
            <li class="sidebar-list {{ (request()->segment(1) == "supply") ? "__active" : "" }}">
                <a href="/supply">
                    <span class="icon">
                        <ion-icon name="card-outline"></ion-icon>
                    </span>
                    <span class="title">Supply Center</span>
                </a>
            </li>
            <li class="sidebar-list {{ (request()->segment(1) == "invoice") ? "__active" : "" }}">
                <a href="/invoice">
                    <span class="icon">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="title">Invoices Center</span>
                </a>
            </li>
        </ul>
    </div>