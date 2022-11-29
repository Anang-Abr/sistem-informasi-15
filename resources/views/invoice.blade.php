@extends('components.main')
@section('content')
<nav>
        <h3>MYSALES Dashboard</h3>
        <div class="nav__account">
            <h3>
                <span>
                    <ion-icon name="caret-down-outline"></ion-icon>Username
                </span>
            </h3>
            <ul class="nav__account_menu">
                <li><a href="#">Log Out</a href="#"></li>
            </ul>
        </div>
    </nav>
    <div class="sidebar">
        <ul>
            <li class="sidebar-list">
                <a href="/index.html">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="sidebar-list">
                <a href="/pages/sales.html">
                    <span class="icon">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </span>
                    <span class="title">Sales Center</span>
                </a>
            </li>
            <li class="sidebar-list">
                <a href="/pages/supply.html">
                    <span class="icon">
                        <ion-icon name="card-outline"></ion-icon>
                    </span>
                    <span class="title">Supply Center</span>
                </a>
            </li>
            <li class="sidebar-list __active">
                <a href="invoice.html">
                    <span class="icon">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="title">Invoices Center</span>
                </a>
            </li>
        </ul>
    </div>

    <main>
        <div class="main">
            <section class="invoice-header">
                <div>
                    <h1>Invoice Manager</h1>
                </div>
            </section>

            <section class="invoice-Box">
                <div>
                    <h6>Recently Added Invoice</h6>
                </div>
                <div class="invoice-table" class="invoice-table-button">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Buyer Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>12-November-2022</td>
                                <td>Tuan Fredikson</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>9-November-2022</td>
                                <td>Uzumaki Saburo</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="invoice-Box">
                <div>
                    <div>
                        <h6>All Invoices</h6>
                    </div>
                    <div>
                        <div>
                            <h6>Search Invoice</h6>
                        </div>
                    </div>
                </div>
                <div class="invoice-table" class="invoice-table-button">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Buyer Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>12-November-2022</td>
                                <td>Tuan Fredikson</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>9-November-2022</td>
                                <td>Uzumaki Saburo</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>1-November-2022</td>
                                <td>Nama1</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>1-November-2022</td>
                                <td>Nama2</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>1-November-2022</td>
                                <td>Nama3</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
    </main>
    <script src="../assets/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection