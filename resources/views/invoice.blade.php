@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
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
                            @for ($i = 0; $i < 5; $i++)
                            The current value is {{ $i }}
                            <tr>
                                <td>{{ $i + 1 }}</td>
                                <td>18-November-2022</td>
                                <td>Martin Router King</td>
                                <td>
                                    <div>
                                        <button>View</button>
                                    </div>
                                </td>
                            </tr>
                            @endfor
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
@endsection