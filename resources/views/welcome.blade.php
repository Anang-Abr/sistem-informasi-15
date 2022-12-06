@extends('components.main')
@section('content') 
    @include('components.navbar')
    @include('components.sidebar')
    <main>
    <div>
    <h1>customer</h1>
    <form action="/customer" method="post">
        @csrf
        <input type="text" name="nama">
        <input type="number" name="no_telp">
        <textarea name="alamat" id="alamat" cols="30" rows="10" placeholder="Tuliskan alamat anda"></textarea>
        <input type="submit" value="kirim">
    </form>
    </div>
    <div>
    <h1>supply</h1>
    <form action="/supply" method="post">
        @csrf
        <input type="text" name="nama">
        <input type="number" name="harga">
        <input type="number" name="stock" id="stock">
        <input type="submit" value="kirim">
    </form>
    </div>
    @if (isset($customerData))
    <div>  
    <h1>Invoice</h1>
    <form action="/invoice" method="post">
        @csrf
        <input type="text" name="nama">
        <input type="number" name="harga">
        <input type="hidden" name="customer" value="{{ $customerData->id }}">
        <input type="text" name="supply" id="supply" list="stockName">
        <datalist id='stockName'>
            @foreach ($supplies as $supply)
                <option value="{{ $supply->id }}">{{ $supply->nama }}</option>
            @endforeach
        </datalist>
        <input type="submit" value="kirim">
    </form>
    </div>
    @endif
    <form action="/test" method="post">
        @csrf
        <input type="date" name="tanggal" id="">
        <input type="submit" value="">
    </form> 
    </main>  
    <script>
        
    </script> 
@endsection