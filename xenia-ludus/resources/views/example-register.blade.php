<form action="/register" method="POST">
  @csrf {{-- IMPORTANT request is blocked without this --}}
  <label for="name">Name</label>
  <input name="name" type="text" id="name"/>
  @error('name')
    <p style="color: red;">{{ $message }}</p>
  @enderror
  <br/>

  <label for="email">Email</label>
  <input name="email" type="email" id="email"/>
  @error('email')
  <p style="color: red;">{{ $message }}</p>
  @enderror
  <br/>

  <label for="password">Password</label>
  <input name="password" type="password" id="password"/>
  @error('password')
  <p style="color: red;">{{ $message }}</p>
  @enderror
  <br/>
  
  <label for="password_confirmation">Confirm password</label>
  <input name="password_confirmation" type="password" id="password_confirmation"/> {{-- using naming convention _confirmation, laravel can use 'confirmed' rule in validation --}}
  @error('password_confirmation')
    <p style="color: red;">{{ $message }}</p>
  @enderror

  <br/>
  <button type="submit">Register</button>
</form>

@auth
  <strong style="color: red;">logged in as {{ Auth::user()->name }}</strong>
@endauth