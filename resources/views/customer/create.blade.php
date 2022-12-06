@extends('components.main')
@section('content')
<div class="addCustomer__body">
    <div class="addCustomer__container">
        <div class="addCustomer__header">Customer Information</div>
        <form class="addCustomer__form" action="{{ url('/customer') }}" method="post">
            @csrf
            <div class="addCustomer__form-row">
                <div class="addCustomer-form__input-data">
                    <input class="addCustomer__data" name="first_name" type="text" required>
                    <div class="addCustomer--underline"></div>
                    <label for="">First Name</label>
                </div>
                <div class="addCustomer-form__input-data">
                    <input class="addCustomer__data" name="last_name" type="text" required>
                    <div class="addCustomer--underline"></div>
                    <label for="">Last Name</label>
                </div>
            </div>
            <div class="addCustomer__form-row">
                <div class="addCustomer-form__input-data">
                    <input class="Customer-data" type="text" name="no_telp" required>
                    <div class="addCustomer--underline"></div>
                    <label for="">Phone Number</label>
                </div>
            </div>
            <div class="addCustomer__form-row">
                <div class="addCustomer-form__input-data textarea">
                    <textarea class="addCustomer-data" rows="8" cols="80" name="alamat" required></textarea>
                    <br />
                    <div class="addCustomer--underline"></div>
                    <label for="">Address</label>
                    <br />
                    <div class="addCustomer__form-row addCustomer__submit-btn" id="addCustomer__submit-btn">
                        <div class="addCustomer-form__input-data">
                        <div class="addCustomerinner"></div>
                        <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection