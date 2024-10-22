@include('include.header') 
<section class=" gradient-form">
    <div class="container py-2">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    {{-- <img src="img/team-3.jpg" style="width: 185px;" alt="logo"> --}}
                    <h4 class="mt-1 mb-5 pb-1">Login</h4>
                  </div>
                  <h5 class="text-danger">{{session('fail')}}</h5>
                  <form action="{{route('login')}}" method="post">
                    <p>Please login to your account</p>
                     @csrf
                    <div class="form-outline mb-4">
                      <input type="text" name="username" id="form2Example11" class="form-control" placeholder="Phone number or email address"/>
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>
                      @error('username')
                          <small class="text-danger">{{$message}}</small>
                      @enderror
                    <div class="form-outline mb-4">
                      <input type="password"name="password" id="form2Example22" class="form-control" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
                    @error('password')
                         <small class="text-danger">{{$message}}</small>
                    @enderror
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <button type="button" class="btn login-btn"><a href="/signup">Create new</a></button>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4 text-white">We are more than just a company</h4>
                  <p class="small mb-0 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End your project here-->
@include('include.footer') 