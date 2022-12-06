@extends('components.main')
@section('content')
<div class="login__body">
    <div class="login__container">
         <div class="login__title">
            Welcome !
         </div>
         <form class="login__form" action="/register" method="post">
            @csrf
            <div class="login__input-field">
               <input type="text" name="name" required>
               <label>Name</label>
            </div>
            <div class="login__input-field">
               <input type="email" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="login__input-field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <br>
            <div class="login__input-field" id="login__submit">
               <input type="submit" value="Login">
            </div>
         </form>
      </div>
</div>
@endsection