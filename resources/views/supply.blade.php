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

        <section class="HomeSection">
        <div class="HomeContent">
          <div class="Boxes">
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Order</div>
                <div class="Boxes__number">40,876</div>
                <div class="Boxes__icon">
                  <ion-icon name="arrow-up-outline"></ion-icon>
                  <span class="Boxes__text">Up from yesterday</span>
                </div>
              </div>
              <div class="Boxes__iconCart">
              <ion-icon name="cart-outline"></ion-icon>
              </div>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Sales</div>
                <div class="Boxes__number">38,876</div>
                <div class="Boxes__icon">
                  <ion-icon name="arrow-up-outline"></ion-icon>
                  <span class="Boxes__text">Up from yesterday</span>
                </div>
              </div>
              <div class="Boxes__iconCart2">
              <ion-icon name="cart-outline"></ion-icon>
              </div>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Profit</div>
                <div class="Boxes__number">$12,876</div>
                <div class="Boxes__icon">
                  <ion-icon name="arrow-up-outline"></ion-icon>
                  <span class="Boxes__text">Up from yesterday</span>
                </div>
              </div>
              <div class="Boxes__iconCart3">
              <ion-icon name="cart-outline"></ion-icon>
              </div>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Return</div>
                <div class="Boxes__number">11,086</div>
                <div class="Boxes__icon">
                  <div class="Boxes__iconDown">
                  <ion-icon name="arrow-down-outline"></ion-icon>
                  </div>
                  <span class="Boxes__text">Down From Today</span>
                </div>
              </div>
              <div class="Boxes__iconCart4">
              <ion-icon name="cart-outline"></ion-icon>
              </div>
            </div>
          </div>
        </section>
        <span>
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
                  @foreach ( $dataSupply as $supply)
                    <tr>
                        <td>{{ $supply->id }}</td>
                        <td>{{ $supply->nama }}</td>
                        <td>{{ $supply->stock }}</td>
                        <td>{{ $supply->harga }}</td>
                        <td><input type="range" id="points" name="points" min="1" max="{{ $supply->stock }}"></td>
                    </tr>  
                  @endforeach
                </tbody>
            </table>
        </div>
        </span>
        <span class="TopProduct">sdsdsds
        </span>
    </main>
@endsection