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
                  <span class="Boxes__text">Up from 1 month ago</span>
                </div>
              </div>
              <div class="Boxes__iconSales">
              <ion-icon name="bag-check-outline"></ion-icon>
              </div>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Income</div>
                <div class="Boxes__number">$12,876</div>
                <div class="Boxes__icon">
                  <ion-icon name="arrow-up-outline"></ion-icon>
                  <span class="Boxes__text">Up from yesterday</span>
                </div>
              </div>
              <div class="Boxes__iconProfit">
              <ion-icon name="cash-outline"></ion-icon>
              </div>
            </div>
            <div class="Boxes__box">
              <div class="Boxes__RightSide">
                <div class="Boxes__title">Total Customer</div>
                <div class="Boxes__number">11,086</div>
                <div class="Boxes__icon">
                  <div class="Boxes__iconDown">
                  <ion-icon name="arrow-down-outline"></ion-icon>
                  </div>
                  <span class="Boxes__text">Down From 1 weeks ago</span>
                </div>
              </div>
              <div class="Boxes__iconCustomer">
              <ion-icon name="happy-outline"></ion-icon>
              </div>
            </div>
          </div>
        </section>
        <section class="SupplyTable">
          <div class="SupplyTable__stock">  
              <table>
                  <thead>
                      <tr>
                          <th>No.</th>
                          <th>Name</th>
                          <th>Stock</th>
                          <th>Price</th>
        
                      </tr>
                  </thead>
                  <tbody class="SupplyTable__body">
                      <tr>
                          <td>1</td>
                          <td>oreo</td>
                          <td>300</td>
                          <td>10.900</td>
                          
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Baju "Okky" Merah</td>
                          <td>243</td>
                          <td>121.000</td>
                          
                      </tr>
                      
                  </tbody>
              </table>
          </div>
          <div class="todo">
            <div class="todo__top">
              <span class="todo__title">To do</span>
              <span class="todo__TopIcon">
              <ion-icon name="add-outline"></ion-icon>
              <ion-icon name="options-outline"></ion-icon>
              </span>
            </div>
            <ul class="todo__list">
              <li class="todo__Completed">
                  <p>Todo List</p>
                  <ion-icon name="ellipsis-vertical-outline"></ion-icon>
              </li>
              <li class="todo__Completed">
                  <p>Todo List</p>
                  <ion-icon name="ellipsis-vertical-outline"></ion-icon>
              </li>
              <li class="todo__NotCompleted">
                  <p>Todo List</p>
                  <ion-icon name="ellipsis-vertical-outline"></ion-icon>
              </li>
              <li class="todo__Completed">
                  <p>Todo List</p>
                  <ion-icon name="ellipsis-vertical-outline"></ion-icon>
              </li>
              <li class="todo__NotCompleted">
                  <p>Todo List</p>
                  <ion-icon name="ellipsis-vertical-outline"></ion-icon>
              </li>
            </ul>
          </div>
				</div>
        </section>
    </main>
@endsection