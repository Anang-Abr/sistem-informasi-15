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
                  <i class='bx bx-up-arrow-alt'></i>
                  <span class="Boxes__text">Up from yesterday</span>
                </div>
              </div>
              <i class='bx bx-cart-alt cart'></i>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Sales</div>
                <div class="Boxes__number">38,876</div>
                <div class="Boxes__icon">
                  <i class='bx bx-up-arrow-alt'></i>
                  <span class="Boxes__text">Up from yesterday</span>
                </div>
              </div>
              <i class='bx bxs-cart-add cart two' ></i>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Profit</div>
                <div class="Boxes__number">$12,876</div>
                <div class="Boxes__icon">
                  <i class='bx bx-up-arrow-alt'></i>
                  <span class="Boxes__text">Up from yesterday</span>
                </div>
              </div>
              <i class='bx bx-cart cart three' ></i>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Return</div>
                <div class="Boxes__number">11,086</div>
                <div class="Boxes__icon">
                  <i class='bx bx-down-arrow-alt down'></i>
                  <span class="Boxes__text">Down From Today</span>
                </div>
              </div>
              <i class='bx bxs-cart-download cart four' ></i>
            </div>
          </div>
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