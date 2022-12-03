@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
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
@endsection