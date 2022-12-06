@extends('components.main')
@section('content') 
    @include('components.navbar')
    @include('components.sidebar')
    <main>
        <section class="dashboard">
            <h1 class="dashboard__title">Dashboard</h1>
            @include('components.dashboard')
            <div class="dashboard__stats">
                <div class="dashboard__card dashboard__card_1">
                    <h4>Earnings Overview</h4>
                    <div>
                        <canvas id="myChart" width="300" height="250"></canvas>
                    </div>
                </div>
                <div class="dashboard__card dashboard__card_2">
                    <h4>Revenue Sources</h4>
                    <div height=>
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection