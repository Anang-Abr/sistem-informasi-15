@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
<main>
    <div class="sales__header">
        <h1>
            Customer List
        </h1>
        <hr>
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
            <div class="search-bar">
                <input type="text" placeholder="Type to search.." id="text">
            </div>
            <div class="search-icon">
                <ion-icon id="icon" name="search"></ion-icon>
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
                <tr>
                    <td>1</td>
                    <td>Ahmad</td>
                    <td>08958765421</td>
                    <td>Jl. Kelapa</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Budi</td>
                    <td>089572361763</td>
                    <td>Jl. Merpati</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Johan</td>
                    <td>089772635213</td>
                    <td>Jl. Index</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection