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
                    <div>
                        <h6>(Icon)</h6>
                    </div>
                    <div class="invoiceInfoBox__RecentlyBoxText">
                        <div>
                            <h2>3</h2>
                        </div>
                        <div>
                            <p>newly added invoice</p>
                        </div>
                    </div>
                </div>

                <div class="invoiceInfoBox__AllBox">
                    <div class="invoiceInfoBox__AllBoxNumber">
                        <h6>6</h6>
                    </div>
                    <div class="invoiceInfoBox__AllBoxText">
                        <p>Total Invoice</p>
                    </div>
                </div>
            </section>

            <section class="invoiceBoxRecently">
                <div class="invoiceBoxRecently__title">
                    <h6>Recently Added Invoice</h6>
                </div>
                <div class="invoiceBoxRecently__table" class="invoiceBoxRecently__table--button">
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


            <section class="invoiceBoxAll">
                <div class="invoiceBoxAll__title">
                    <div>
                        <h6>All Invoices</h6>
                    </div>
                </div>
                <div class="invoiceBoxAll__table" class="invoiceBoxAll__table--button">
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
@endsection