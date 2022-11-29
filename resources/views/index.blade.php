@extends('components.main')
@section('content')
    
    
    @include('components.navbar')
    @include('components.sidebar')
    <main>
        <section class="dashboard">
            <h1 class="dashboard__title">Dashboard</h1>
            <div class="dashboard__cards">
                <div class="dashboard__card">
                    <ion-icon name="people-circle-outline"></ion-icon>
                    <div>
                        <h3>ALL REQUESTATIONS</h3>
                        <p>500</p>
                    </div>
                </div>
                <div class="dashboard__card">
                    <ion-icon name="checkmark-done-outline"></ion-icon>
                    <div>
                        <h3>ALL RECEIVED QUOTATIONS</h3>
                        <p>500</p>
                    </div>
                </div>
                <div class="dashboard__card">
                    <ion-icon name="logo-buffer"></ion-icon>
                    <div>
                        <h3>ALL PURCHASE ORDERS</h3>
                        <p>46%</p>
                    </div>
                </div>
                <div class="dashboard__card">
                    <ion-icon name="stopwatch-outline"></ion-icon>
                    <div>
                        <h3>PENDING REQUEST</h3>
                        <p>13</p>
                    </div>
                </div>
            </div>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/main.js"></script>
@endsection