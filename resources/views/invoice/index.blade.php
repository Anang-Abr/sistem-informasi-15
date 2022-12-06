@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <main>
    <div class="main">
            
            <section class="invoice__title">
                <div>
                    <h1>Invoice Center</h1>
                </div>
            </section>

            <section class="invoiceInfoBox">
                <div class="invoiceInfoBox__RecentlyBox" >
                    <div class="invoiceInfoBox__RecentlyBoxIcon">
                        <ion-icon name="caret-down-circle"></ion-icon>
                    </div>
                    <div class="invoiceInfoBox__RecentlyBoxText">
                        <div class="invoiceInfoBox__RecentlyBoxTextTitle">
                            <h2>3</h2>
                        </div>
                        <div>
                            <p>newly added invoice</p>
                        </div>
                    </div>
                </div>

                <div class="invoiceInfoBox__TotalBox" >
                    <div class="invoiceInfoBox__TotalBoxIcon">
                        <ion-icon name="file-tray-full"></ion-icon>
                    </div>
                    <div class="invoiceInfoBox__TotalBoxText">
                        <div class="invoiceInfoBox__TotalBoxTextTitle">
                            <h2>6</h2>
                        </div>
                        <div>
                            <p>Total Invoice</p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="invoiceInfoBox__Button">
                    <ion-icon name="add-circle"></ion-icon>
                    <a href="">Add Invoice</a>
                </div>
            </section>

            <section class="invoiceBoxRecently">
                <div class="invoiceBoxRecently__title">
                    <h6>Recently Added Invoice</h6>
                </div>
                <div class="invoiceBoxRecently__table">
                    <table class="invoiceBoxRecently__table--button">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Product Name</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>


            <section class="invoiceBoxAll">
                <div class="invoiceBoxAll__title">
                    <div>
                        <h6>All Invoices</h6>
                    </div>
                </div>
                <div class="invoiceBoxAll__table">
                    <table class="invoiceBoxAll__table--button">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Product Name</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>Indomie Cabe Ijo</td>
                                <td>3</td>
                                <td>Paid</td>
                                <td>
                                    <div>
                                        <button>Edit</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
    </main>
@endsection