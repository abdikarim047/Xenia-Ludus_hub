<form action="register" method="POST">
  @csrf {{-- request is blocked without this --}}
  <label for="name">Name</label>
  <input name="name" type="text" id="name">
  <br/>

  <label for="email">Email</label>
  <input name="email" "email" id="email">
  <br/>

  <label for="password">Password</label>
  <input name="password" type="password" id="password">
  <br/>
  
  <label for="password_confirmation">Confirm password</label>
  <input name="password_confirmation" type="password" id="password_confirmation"> {{-- using naming convention _confirmation, laravel can use 'confirmed' rule in validation --}}

  <br/>
  <button type="submit">Register</button>
</form>