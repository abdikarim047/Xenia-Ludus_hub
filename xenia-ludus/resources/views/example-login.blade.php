<form action="/login" method="POST">
  @csrf {{-- IMPORTANT request is blocked without this --}}
  <label for="name">Name</label>
  <input name="name" type="text" id="name" value="{{old('name')}}"/>
  @error('name')
    <p style="color: red;">{{ $message }}</p>
  @enderror
  <br/>

  <label for="password">Password</label>
  <input name="password" type="password" id="password"/>
  @error('password')
  <p style="color: red;">{{ $message }}</p>
  @enderror
  <br/>

  <button type="submit">Sign in</button>
</form>
<a href="/register">REGISTER</a>

@auth
  <strong style="color: red;">logged in as {{ Auth::user()->name }}</strong>
  <form action="/logout" method="POST">
    @csrf
    <button>Log Out</button>
  </form>
@endauth
