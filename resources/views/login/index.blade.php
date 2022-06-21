@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4 text-center">
        <main class="form-signin w-100 m-auto">
          <form>
            <img class="img-mb-4 rounded-circle" src="img/logo.jpg" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal"></h1>
            <div class="form-floating">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
              <label for="floatingPassword">Password</label>
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
          </form>
        </main>
    </div>
</div>
@endsection