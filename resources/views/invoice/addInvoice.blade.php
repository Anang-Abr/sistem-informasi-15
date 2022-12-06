@extends('components.main')
@section('content')
    @include('components.navbar')
    @include('components.sidebar')
    <main>
    <div class="main">
            
            <section class="invoice__title">
                <div>
                    <h1>Masukkan Data Invoice Baru</h1>
                </div>
                <div>
                    {{ $customerData }}
                </div>
            </section>
    </main>
@endsection