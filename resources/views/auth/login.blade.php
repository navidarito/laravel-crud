@extends('layouts.app')
@section('content')
    <section class="vh-100 bg-image"
  >
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Login</h2>

              <form action="{{route('login')}}" method="POST">
                @csrf

                @if($errors->any())
                    <ul class="px-4 py-2 bg-red-100">
                        @foreach ( $errors->all() as $error )
                            <li class="my-2 text-red-500">{{$error}}</li>
                            
                        @endforeach
                    </ul>
                @endif

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example3cg"> Email</label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  
                </div>

                <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg" />
                  
                </div>



                <div class="d-flex justify-content-center">
                  <button  type="submit" data-mdb-button-init
                    data-mdb-ripple-init class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Doesn't have an account? <a href="{{route('show.register')}}"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection