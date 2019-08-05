<link rel="stylesheet" href="{{ asset('assets') }}/css/styleLogin.css">
<link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">

  <h1>LS Furniture</h1>
<form action={{ url('/register') }} class="register" method="POST">
	{{ csrf_field() }}

        @if (!empty($result))
          {{ method_field('patch') }}
        @endif
  <input type="text" name="nama_user" class="register-input" placeholder="Nama Lengkap" value="{{ @$result->nama_user }}">
  <input type="text" name="username" class="register-input" placeholder="Username" value="{{ @$result->username }}">
  <input type="password" name="password" class="register-input" placeholder="Password" value="{{ @$result->password }}">
  <button type="submit" class="register-button">Register</button><br>

  Have account? <a href="{{ url('/loginuser') }}" align="right">Login</a>
</form>