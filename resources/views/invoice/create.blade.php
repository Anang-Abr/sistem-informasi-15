@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <section class="invoiceAdd__body">
        <div class="invoiceAdd__container">
            <div class="invoiceAdd__title">
                <h1>Input New Invoice</h1>
            </div>
            <div>
                <div>
                    <form action="{{ url('/invoice') }}" method="post">
                        @csrf
                        <table class="invoiceAdd__table">
                            <input type="hidden" name="customer" value="{{ $customerData->id }}">
                            <tr>
                                <td><label>Date</label></td>
                                <td><input type="date" name="tanggal"></td>
                            </tr>
                            <tr>
                                <td><label>Product Name</label></td>
                                <td>
                                <select name="supply">
                                    @foreach ($supplies as $supply)
                                        <option value="{{ $supply->id }}">{{ $supply->nama }}</option>
                                    @endforeach
                                </select>
                            </tr>
                            <tr>
                                <td><label>Quantity</label></td>
                                <td><input type="text" name="jumlah"></td>
                            </tr>
                            <tr>
                                <td><label>Status</label></td>
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
                                    <div class="invoiceAdd__tableButton">
                                        <input type="submit" value="Save">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection