@extends ('layouts.blank')

@section('content')
<section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="backButton">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Back</button>
            </div>
           
            <div class="card-body p-5 text-center">
              
              <h3 class="mb-5">For Admin Only</h3>
  
              <div class="form-outline mb-4">
                <input type="text id="typeEmailX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">Username</label>
              </div>
  
              <div class="form-outline mb-4">
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX-2">Password</label>
              </div>
  
              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

{{-- <div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="">
                <div><h1>For Admin Only</h1></div>
                <div>
                    <label for="">Username : </label>
                    <input type="text" placeholder="username">
                </div>
                <div>
                    <label for="">Password : </label>
                    <input type="text" placeholder="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}