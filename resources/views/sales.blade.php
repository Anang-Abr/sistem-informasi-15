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
        <li class="sidebar-list ">
            <a href="/index.html">
                <span class="icon">
                    <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title">Dashboard</span>
            </a>
        </li>
        <li class="sidebar-list __active">
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
        <li class="sidebar-list">
            <a href="/pages/invoice.html">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Invoices Center</span>
            </a>
        </li>
    </ul>
</div>

<main>
    <div class="sales__header">
        <h1>
            Sales Center
        </h1>
        <hr>
    </div>
    <div class="sales__buttons">
        <div class="sales__button--add">
            <span>Add</span>
        </div>
        <div class="sales__button--del">
            <span>Delete</span>
        </div>
    </div>
    <div class="sales-table">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Buyer Name</th>
                    <th>City</th>
                    <th>Main Category</th>
                </tr>
            </thead>
            <tbody class="sales-table__body">
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
            </tbody>
        </table>
    </div>
    <section class="addsales_form_container ">
        <div>
            <h3>Tambahkan Sales</h3>
            <form action="" class="addsales_form">
                <div>
                    <label for="salesName">
                        Sales Name
                    </label>
                    <span>:</span>
                    <input type="text" id="salesName" name="salesName">
                </div>
                <div>
                    <label for="salesCity">
                        Sales Address
                    </label>
                    <span>:</span>
                    <input type="text" id="salesCity" name="salesCity">
                </div>
                <div>
                    <label for="productCategory">Category</label>
                    <span>:</span>
                    <select name="productCategory" id="productCategory">
                        <option value="1">Food</option>
                        <option value="2">Drink</option>
                        <option value="3">Wardrobe</option>
                        <option value="4">Household</option>
                    </select>
                </div>
            </form>
            <div class="form_button_container">
                <a href="" class="form_button button_cancel">Batalkan</a>
                <a href="" class="form_button button_submit">Tambahkan</a>
            </div>
        </div>
    </section>
</main>
<script src="../assets/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection