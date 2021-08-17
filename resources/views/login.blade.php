@extends('frontend.partials')
@section('content')

    <section class="logo-banner">
        <div class="container">
            <div class="text-center">
            <img src="images/logo.png" class="img-fluid" alt="">
        </div>
          
        </div>
    </section>
    <section class="bg-wrapper-light">
        <div class="container">
            <div class="pb-bottom-space">
                <div class="text-center">
                    <h2 class="heading-one">FOOD SERVICE PORTAL</h2>
                </div>
                <div class="flex-wrapper-form margin--wrapper-70">
                    <div class="">
                
                        <div class="card card__custm__wrapper mt-3">
                            <div class="card-header card__header--wrapper"><h3 class="title-wrapper-three text-center">Login</h3>
                         
                            </div>
                            <div class="card-body Card__wrapper--innerbox">
                            <form method="POST" action="{{ route('login') }}">
                                       @csrf
                                    <div class="form-group input-group">
                                    
                                        <input class="form-control py-4 wrapper__input--border" id="" name="email" type="text" placeholder="Username">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-transparent wrapper__label--border" id="basic-addon2"><img src="images/Layer174.png" class="img-fluid" alt=""></span>
                                          </div>
                                    </div>
                                    <div class="form-group input-group">
                                      
                                        <input class="form-control py-4 wrapper__input--border" id="inputPassword" name="password" type="password" placeholder="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-transparent wrapper__label--border" id="basic-addon2"><img src="images/Layer175.png" class="img-fluid" alt=""></span>
                                          </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                        </div>
                                    </div> -->
                                    <div class="form-group d-flex align-items-center justify-content-center  margin-top-three">
                                       
                                        <a class="btn btn__signin-wrapper" name="submit" type="submit" >submit</a>
                                       
                                    </div>
                                    <div class="text-center">
                                        <a class="small forgot__label" href="password.html">Recover Password?</a>
                                    </div>
                                    <div class="text-center margin__top-wrapper3">
                                        <p class="account__title-wrapper"> <a class="register-wrapper" href="#"> Register Here</a></p>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="card-footer text-center">
                                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-6 text__center-main">
              <div>
                <p class="m-0 ">© Copyright 2021 provitx . All rights reserved </p>
              </div>
            </div>
            <div class="col-md-6 text-right text__center-main">
              <div>
                <p class="m-0">Designed & Developed by <a href="https://leadconcept.com/" target="_blank">LEADconcept</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
@endsection