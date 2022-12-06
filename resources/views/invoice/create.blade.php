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
                <form action="">
                    <table class="invoiceAdd__table">
                        <tr>
                            <td>Date</td>
                            <td><input type="date"></td>
                        </tr>
                        <tr>
                            <td>Product Name</td>
                            <td><select>
                                <option>Indomie</option>
                                <option>Oreo</option>
                            </select>
                        </tr>
                        <tr>
                            <td>Quantity</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text"></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><select>
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