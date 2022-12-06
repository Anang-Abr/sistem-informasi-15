@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <main>
    <div class="main">
        <section class="invoiceAdd__title">
            <div>
                <h1>Input New Invoice</h1>
            </div>
        </section>

        <section class="invoiceAdd__body">
            <div>
                <form action="{{ url('/invoice') }}" method="post">
                    @csrf
                    <table class="invoiceAdd__table">
                        <input type="hidden" name="customer" value="{{ $customerData->id }}">
                        <tr>
                            <td>Date</td>
                            <td><input type="date" name="tanggal"></td>
                        </tr>
                        <tr>
                            <td>Product Name</td>
                            <td>
                            <select name="supply">
                                @foreach ($supplies as $supply)
                                    <option value="{{ $supply->id }}">{{ $supply->nama }}</option>
                                @endforeach
                            </select>
                        </tr>
                        <tr>
                            <td>Quantity</td>
                            <td><input type="text" name="jumlah"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>
                                <select name="status">
                                <option>Paid</option>
                                <option>Unpaid</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <td><br></td>
                            <td>
                                <button>
                                    <input type="submit" value="Save">
                                </button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>
    </main>
@endsection