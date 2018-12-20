@extends('layouts.master')

@section('title')
<title>Auth</title>
@endsection

@section('content')
  <main>
    <section class="section-auth">
        <div class="container">
            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                    Sign In or Join Now
                </h2>
                <p> You must be signed in to continue. Sign In or Join below.</p>
            </div>
            <div class="row">
                <div class="auth-controller text-center" >
                    <form id="login" method="post" action="{{route('login')}}">
                        <div class="signin-image">
                            <figure><img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signin-image.jpg" alt="sing up image"></figure>
                            <div class="form__group text-center u-margin-top-medium" style="margin-right: 3rem">
                                <a  onclick="authPage('signup')" class="btn-orange">Create an account</a>
                            </div>
                        </div>
                        <div class="signin-form u-margin-top-medium">
                            <div class="form__group">
                                <input type="text" id="email" name="email" class="form__input" placeholder="Your Username" required>
                                <label for="email" class="form__label">Email</label>
                            </div>
                            <div class="form__group">
                                <input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
                                <label for="password" class="form__label">Password</label>
                            </div>
                            @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                            @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                            @endif
                            <div class="form-group submit-button text-left">
                                <button type="submit" class="btn btn--green">Login &rarr;</button>
                            </div>
                        </div>
                    </form>
                    <form method="POST" class="form"  id="signup">
                      <div class="signup-content">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input type="text" id="name" class="form__input" placeholder="Your Username" required>
                                      <label for="name" class="form__label">Username</label>
                                  </div>
                                  <div class="form__group">
                                      <input type="email" id="email" class="form__input" placeholder="Email" required>
                                      <label for="email" class="form__label">Email</label>
                                  </div>
                                  <div class="form__group">
                                      <input type="password" id="password" class="form__input" placeholder="Password" required>
                                      <label for="password" class="form__label">Password</label>
                                  </div>
                                  <div class="form__group">
                                      <input type="confirm_password" id="confirm_password" class="form__input" placeholder="Confirm Password" required>
                                      <label for="confirm_password" class="form__label">Confirm Password</label>
                                  </div>
                                  <div class="form__group">
                                      <input type="text" id="phone_number" class="form__input" placeholder="Phone Number" required>
                                      <label for="phone_number" class="form__label">Phone Number</label>
                                  </div>
                                  <div class="form-group submit-button">
                                      <button class="btn btn--green">Register &rarr;</button>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input type="text" id="contact_name" class="form__input" placeholder="Contact Name" required>
                                      <label for="contact_name" class="form__label">Contact Name</label>
                                  </div>
                                 
                                  <div class="form__group">
                                      <input type="text" id="company_name" class="form__input" placeholder="Company Name" required>
                                      <label for="company_name" class="form__label">Company Name</label>
                                  </div>
                                  <div class="form__group">
                                      <input type="text" id="address" class="form__input" placeholder="Address" required>
                                      <label for="company_name" class="form__label">Address</label>
                                  </div>
                                 
                                  <div class="form__group">
                                      <input type="text" id="phone_number" class="form__input" placeholder="City" required>
                                      <label for="phone_number" class="form__label">City</label>
                                  </div>
                                  <div class="form__group select-box">
                                      <select name="country" class="form__select" id="">
                                        <option disabled>Select Country</option>
                                        <option value="">Bangladesh</option>
                                        <option value="">Bangladesh</option>
                                        <option value="">Bangladesh</option>
                                      </select>
                                      <label for="country" class="form__label">&nbsp;</label>                                     
                                  </div>
                                  <div class="form__group text-right u-margin-top-medium" style="margin-right: 3rem">
                                    <a  onclick="authPage('login')" class="btn-orange">Im already a member</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>
                </div>
             
               
            </div>
        </div>
    </section>
  </main>
 
 @endsection