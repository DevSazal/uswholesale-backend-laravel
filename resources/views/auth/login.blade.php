@extends('layouts.master')

@section('title')
<title>Auth</title>
@endsection

@section('content')
  <main>
    <section class="section-auth" id='app'>
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
                      @csrf
                        <div class="signin-image">
                            <figure><img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signin-image.jpg" alt="sing up image"></figure>
                            <div class="form__group text-center u-margin-top-medium" style="margin-right: 3rem">
                                <a  onclick="authPage('signup')" class="btn-orange">Create an account</a>
                            </div>
                        </div>
                        <div class="signin-form u-margin-top-medium">
                            <div class="form__group">
                                <input name="email" type="text" id="email" class="form__input" placeholder="Your Username" required>
                            </div>
                            <div class="form__group">
                                <input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
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
                            <div class="form-group submit-button text-left u-margin-top-medium">
                                <button type="submit" name="submit" class="btn btn--green">Login &rarr;</button>
                            </div>
                        </div>
                    </form>
                    <form method="POST" class="form" action="{{route('supplier.add')}}"  id="signup">
                      @csrf
                      <div class="signup-content">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input name="username" type="text" id="name" class="form__input" placeholder="Your Username" required>
                                  </div>
                                  <div class="form__group">
                                      <input  name="email" type="email" id="email" class="form__input" placeholder="Email" required>
                                  </div>
                                  <div class="form__group">
                                      <input name="password" type="password" id="password" class="form__input" placeholder="Password" required>
                                  </div>
                                  <div class="form__group">
                                      <input name="password_confirm" type="confirm_password" id="confirm_password" class="form__input" placeholder="Confirm Password" required>
                                  </div>
                                  <div class="form__group">
                                      <div class="phone-input-group">
                                        <input name="country_code" type="text" id="phone_number" class="form__input" placeholder="Country Code" required>
                                        <input name="phone_code" type="text" id="phone_number" class="form__input" placeholder="Phone Code" required>
                                        <input name="phone" type="text" id="phone_number" class="form__input" placeholder="Phone Number" required>
                                      </div>
                                  </div>
                                  <div class="form-group submit-button u-margin-top-medium">
                                      <button class="btn btn--green">Register @{{countryList}} &rarr;</button>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input name="name" type="text" id="contact_name" class="form__input" placeholder="Contact Name" required>
                                  </div>
                                 
                                  <div class="form__group">
                                      <input name="company" type="text" id="company_name" class="form__input" placeholder="Company Name" >
                                  </div>
                                  <div class="form__group">
                                      <input name="address" type="text" id="company_name" class="form__input" placeholder="Address">
                                  </div>
                                 
                                  <div class="form__group">
                                      <input name="city" type="text" id="phone_number" class="form__input" placeholder="City" required>
                                  </div>
                                  <div class="form__group select-box">
                                      <select name="country" class="form__select" id="" required>
                                        <option disabled>Select Country</option>
                                       
                                        <option  v-for="item in countryList" v-if='countryList' :value="item.name">
                                            @{{item.name}}
                                        </option>
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

 @section('script')
    <script>
        (function($) {
            $(document).ready(function() {
                authPage("login");
            });
        })();
        function authPage(auth_value) {
            if (auth_value === "login") {
                $("#login").show();
                $("#signup").hide();
            } else if (auth_value === "signup") {
                $("#login").hide();
                $("#signup").show();
            }
        }
    </script>
    <script>
        window.onload = function () {
            new Vue({
            el: '#signup',
            data: {
                countryList: null
            },
            created: function () {
                const THIS = this;
               axios.get('https://restcountries.eu/rest/v2/all').then(res =>{
                THIS.countryList= res.data;
               }).catch(err => console.log(err));
            }
        })
}
       
    </script>
 @endsection