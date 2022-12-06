@extends('components.main')
@section('content')
<div class="login__body">
    <div class="login__container">
         <div class="login__title">
            Welcome !
         </div>
         <form class="login__form" action="/login" method="post">
            @csrf
            <div class="login__input-field">
               <input type="text" name='email' required>
               <label>Email Address</label>
               @error('email')
               <p>{{ $message }}</p>
               @enderror
            </div>
            <div class="login__input-field">
               <input type="password" name='password' required>
               <label>Password</label>
               @error('password')
               <p>{{ $message }}</p>
               @enderror
            </div>
            {{-- <div class="login__content">
               <div class="login__checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="login__pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div> --}}
            <br>
            <div class="login__input-field" id="login__submit">
               <input type="submit" value="Login">
            </div>
         </form>
      </div>
</div>
@endsection