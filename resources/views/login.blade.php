@extends('layout.master')
@section('title', "login")
@section('main-section')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>login</title>
    </head>

    <body>

        <section class="vh-200" style="background-color: #9A616D;">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                  <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                      <div class="card-body p-4 p-lg-5 text-black">

                        <form action="{{url('/checkUser')}}" method="POST">

                          <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0">Logo</span>
                          </div>

                          <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                          <div class="form-outline mb-4">
                            <input type="text" name="email" id="form2Example17" class="form-control form-control-lg" value="admin@gmail.com"/>
                            <label class="form-label" for="form2Example17">Username</label>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="password" name="pwd" id="form2Example27" class="form-control form-control-lg" value="123" />
                            <label class="form-label" for="form2Example27">Password</label>
                          </div>

                          <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block" name="submit" type="submit">Login</button>
                          </div>

                        </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </body>
    </html>
@endsection
