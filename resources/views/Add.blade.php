@extends('components.main')
@section('content')
<div class="add-body">
    <div class="add-container">
        <div class="add-header">Customer Information</div>
        <form class="add-form" action="#">
            <div class="add-form-row">
                <div class="add-form-input-data">
                    <input class="add-data" type="text" required>
                    <div class="add-underline"></div>
                    <label for="">First Name</label>
                </div>
                <div class="add-form-input-data">
                    <input class="add-data" type="text" required>
                    <div class="add-underline"></div>
                    <label for="">Last Name</label>
                </div>
            </div>
            <div class="add-form-row">
                <div class="add-form-input-data">
                    <input class="add-data" type="text" required>
                    <div class="add-underline"></div>
                    <label for="">Email Address</label>
                </div>
                <div class="add-form-input-data">
                    <input class="add-data" type="text" required>
                    <div class="add-underline"></div>
                    <label for="">Phone Number</label>
                </div>
            </div>
            <div class="add-form-row">
                <div class="add-form-input-data textarea">
                    <textarea class="add-data" rows="8" cols="80" required></textarea>
                    <br />
                    <div class="add-underline"></div>
                    <label for="">Address</label>
                    <br />
                    <div class="add-form-row submit-btn" id="add-submit-btn">
                        <div class="add-form-input-data">
                        <div class="inner"></div>
                        <input type="submit" value="submit">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection