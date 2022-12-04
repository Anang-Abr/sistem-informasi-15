@extends('components.main')
@section('content')
<div class="login-container">
    <div class="login-wrapper">
         <div class="login-title">
            Login Form
         </div>
         <form class="login-form" action="#">
            <div class="login-input-field">
               <input type="text" required>
               <label>Email Address</label>
            </div>
            <div class="login-input-field">
               <input type="password" required>
               <label>Password</label>
            </div>
            <div class="login-content">
               <div class="login-checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div>
               <div class="login-pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="login-input-field" id="login-submit">
               <input type="submit" value="Login">
            </div>
         </form>
      </div>
</div>
@endsection