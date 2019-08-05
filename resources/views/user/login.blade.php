<link rel="stylesheet" href="{{ asset('assets') }}/css/styleLogin.css">
<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

  <h1>LS Furniture</h1>
<form form action="{{ url('/home') }}" class="register">
  <input type="text" class="register-input" placeholder="Username">
  <input type="password" class="register-input" placeholder="Password">
  <input type="submit" class="register-button" value="Login"><br>
  Don't have account? <a href="{{ url('/register') }}" align="right">Register</a>
</form>