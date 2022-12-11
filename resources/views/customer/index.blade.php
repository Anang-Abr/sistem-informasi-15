@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
<main>
    <div class="sales__header">
        <h1>
            Customer List
        </h1>
    </div>
    <!-- <div class="sales__buttons">
        <div class="sales__button--add">
            <span>Add</span>
        </div>
        <div class="sales__button--del">
            <span>Delete</span>
        </div>
    </div> -->
    <div class="sales-table">
        <div class="search-bar__container">
            <div class="show-wrapper">
                <span class="show-text">Show</span>
                <input type="number" value="5" id="sales-table-show">
                <span class="show-text">entries</span>
            </div>
            <div class="search-wrapper">
                <div class="search-bar">
                    <input type="text" placeholder="Type to search.." id="text">
                </div>
                <div class="search-icon">
                    <ion-icon id="icon" name="search"></ion-icon>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Nomor Telepon</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody class="sales-table__body">
                @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->nama}}</td>
                    <td>{{$customer->no_telp}}</td>
                    <td>{{$customer->alamat}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="table-footer">
            <div class="show-wrapper">
                <span class="entry">Showing 1 to 5 of 30 entries</span>
            </div>
            <div class="customer-table-pagination">
                <div class="prev">
                    &laquo;
                </div>
                <div class="page-n page-active">
                    1
                </div>
                <div class="page-n">
                    2
                </div>
                <div class="page-n">
                    3
                </div>
                <div class="next">
                    &raquo;
                </div>
            </div>
        </div>
    </div>
</main>
@endsection