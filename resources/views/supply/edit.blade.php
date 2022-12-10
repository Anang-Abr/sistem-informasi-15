@extends('components.main')
@section('content')
    @include('components.sidebar')
    <div class="UpdateSupply">
    <div class="UpdateSupply__container">
        <div class="UpdateSupply__header">Supply Update</div>
        <form class="UpdateSupply__form" action="{{url('/supply/'.$supply->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="UpdateSupply__form-row">
                <div class="UpdateSupply-form__input-data">
                    <input class="UpdateSupply__data" type="text" name="nama" value="{{$supply->nama}}" required>
                    <div class="UpdateSupply--underline"></div>
                    <label for="">Product Name</label>
                </div>
            </div>
            <div class="UpdateSupply__form-row">
                <div class="UpdateSupply-form__input-data">
                    <input class="Supply-data" type="text" name="stock" value="{{$supply->stock}}" required>
                    <div class="UpdateSupply--underline"></div>
                    <label for="">Stock Available</label>
                </div>
            </div>
            <div class="UpdateSupply__form-row">
                <div class="UpdateSupply-form__input-data">
                    <input class="Supply-data" type="text" name="harga" value="{{$supply->harga}}" required>
                    <div class="UpdateSupply--underline"></div>
                    <label for="">Price/each</label>
                </div>
            </div>
            <br>
            <br>
            <div class="UpdateSupply__form-row UpdateSupply__submit-btn" id="UpdateSupply__submit-btn">
                <div class="UpdateSupply-form__input-data">
                <div class="UpdateSupplyinner"></div>
                <input type="submit" value="submit">
                </div>
            </div>
            
        </form>
    </div>
</div>
@endsection