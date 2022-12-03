@extends('components.main')
@section('content')
 @include('components.navbar')
    @include('components.sidebar')
    <main>

        <section class="supply">
            <div class="supply__title">
                Supply Center
            </div>
        </section>

        <section class="infobox">
            <section class="TotalOrder">
                <div class="TotalOrder__title">
                    Total Order
                </div>
                <div class="TotalOrder__number">
                    2,000
                </div>
                <div>
                    <span class="TotalOrder__UpIcon">
                        <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    <span class="TotalOrder__desc">
                        Compared to last week
                    </span>
                </div>
            </section>

            <section class="TotalSale">
                <div class="TotalSale__title">
                    Total Sale
                </div>
                <div class="TotalSale__number">
                    5,000
                </div>
                <div>
                    <span class="TotalSale__DownIcon">
                        <ion-icon name="arrow-down-outline"></ion-icon>
                    </span>
                    <span class="TotalSale__desc">
                        Compared to last week
                    </span>
                </div>
            </section>

            <section class="TotalProfit">
                <div class="TotalProfit__title">
                    Total Profit
                </div>
                <div class="TotalProfit__number">
                    123,000
                </div>
                <div>
                    <span class="TotalProfit__UpIcon">
                        <ion-icon name="arrow-up"></ion-icon>
                    </span>
                    <span class="TotalProfit__desc">
                        Compared to last week
                    </span>
                </div>
            </section>


        </section>

        <div class="SupplyTable">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Order</th>
                    </tr>
                </thead>
                <tbody class="SupplyTable__body">
                    <tr>
                        <td>1</td>
                        <td>Oreo Rasa Mie Goreng</td>
                        <td>300</td>
                        <td>10.900</td>
                        <td>153</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Baju "Okky" Merah</td>
                        <td>243</td>
                        <td>121.000</td>
                        <td>72</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Deodorant Anti-BauBawang</td>
                        <td>122</td>
                        <td>69.000</td>
                        <td>11</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection