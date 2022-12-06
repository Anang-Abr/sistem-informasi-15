@extends('components.main')
@section('content')
<div class="addSupply">
    <div class="addSupply__container">
        <div class="addSupply__header">Supply Addition</div>
        <form class="addSupply__form" action="#">
            <div class="addSupply__form-row">
                <div class="addSupply-form__input-data">
                    <input class="addSupply__data" type="text" required>
                    <div class="addSupply--underline"></div>
                    <label for="">Product Name</label>
                </div>
            </div>
            <div class="addSupply__form-row">
                <div class="addSupply-form__input-data">
                    <input class="Supply-data" type="text" required>
                    <div class="addSupply--underline"></div>
                    <label for="">Stock Available</label>
                </div>
            </div>
            <div class="addSupply__form-row">
                <div class="addSupply-form__input-data">
                    <input class="Supply-data" type="text" required>
                    <div class="addSupply--underline"></div>
                    <label for="">Price/each</label>
                </div>
            </div>
            <div class="addSupply__form-row addSupply__submit-btn" id="addSupply__submit-btn">
                <div class="addSupply-form__input-data">
                <div class="addSupplyinner"></div>
                <input type="submit" value="submit">
                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection