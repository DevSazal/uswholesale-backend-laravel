@extends('layouts.master')

@section('title')
<title>Sign Up</title>
@endsection

@section('content')
<?php
use Illuminate\Support\Facades\DB;
 ?>
  <main>
    <section class="section-auth" id='section-auth'>
        <div class="container">
            <div class="u-center-text u-margin-bottom-small">
                <h2 class="heading-secondary">
                    Sign In or Join Now
                </h2>
                <p> You must be signed in to continue. Sign In or Join below.</p>
            </div>
            <div class="row">
                <div class="auth-controller text-center" >
                <form v-if='!login' method="POST" class="form" action="{{route('register')}}"  id="signup">
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
                                      <input name="password_confirmation" type="password" id="confirm_password" class="form__input" placeholder="Confirm Password" required>
                                  </div>
                                  <div class="form__group">
                                    <div class="phone-input-group">
                                      <input name="country_code" type="text" id="phone_number" class="form__input" placeholder="880" required> -
                                      <input name="phone_code" type="text" id="phone_number" class="form__input" placeholder="501" required> -
                                      <input name="phone" type="text" id="phone_number" class="form__input" placeholder="1025" required>
                                    </div>
                                  </div>
                                  <input type="hidden" name="package_id" value="{{$package_id}}">
                                  <!-- <div class="form-group submit-button u-margin-top-medium">
                                      <button class="btn btn--green">Register &rarr;</button>
                                  </div> -->
                              </div>
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input name="name" type="text" id="contact_name" class="form__input" placeholder="Your Full Name" required>
                                  </div>

                                  <div class="form__group">
                                      <input name="company" type="text" id="company_name" class="form__input" placeholder="Company Name" >
                                  </div>
                                  <div class="form__group">
                                      <input name="address" type="text" id="company_name" class="form__input" placeholder="Address">
                                  </div>

                                  <div class="form__group">
                                      <input name="city" type="text" id="city" class="form__input" placeholder="City" required>
                                  </div>
                                  <div class="form__group select-box">
                                      <select name="country" class="form__select" id="" required>
                                        <option value="">Select Country</option>
                                        <?php $countries = DB::table('countries')->get(); ?>

                                        @if(count($countries) > 0)
                                          @foreach($countries as $country)
                                            <option value="{{$country->id}}">{{$country->name}}</option>
                                          @endforeach
                                        @endif

                                      </select>
                                      <label for="country" class="form__label">&nbsp;</label>
                                  </div>
                                  <!-- <div class="form__group text-right u-margin-top-medium" style="margin-right: 3rem">
                                    <a  @click="authPage('login')" class="btn-orange">Im already a member</a>
                                  </div> -->
                                  <div class="form-btn-align">
                                    <div style="margin-right: 20px;">
                                      <a  @click="authPage('login')" class="btn btn-default btn-orange">Im already a member</a>
                                    </div>
                                    <div>
                                        <button type="submit" name="submit" class="btn btn--green">Register &rarr;</button>
                                    </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                    </form>
                    <form v-if='login' id="login" method="post" action="{{route('login')}}">
                      @csrf
                        <div class="signin-image">
                            <figure><img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signin-image.jpg" alt="sing up image"></figure>
                            <!-- <div class="form__group text-center u-margin-top-medium" style="margin-right: 3rem">
                                <a  @click="authPage('signup')" class="btn-orange">Create an account</a>
                            </div> -->
                        </div>
                        <div class="signin-form u-margin-top-medium">
                            <div class="form__group">
                                <input name="email" type="email" id="name" class="form__input" placeholder="Your Username" required>
                            </div>
                            <div class="form__group">
                                <input name="password" type="password" id="email" class="form__input" placeholder="Password" required>
                            </div>
                            <div class="form-btn-align" style="padding-top: 30px;">
                              <div>
                                <a  @click="authPage('signup')" class="btn btn-default btn-orange">Create an account</a>
                              </div>
                              <div style="margin-right: 20px;">
                                  <button type="submit" name="submit" class="btn btn--green">Login &rarr;</button>
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
        window.onload = function () {
            new Vue({
            el: '#section-auth',
            data: {
                countryList: null,
                login:false
            },
            methods: {
                authPage(stat){
                    console.log(stat);
                    if (stat == 'signup') {
                        this.login =false;
                    }else if(stat == 'login'){
                        this.login =true;
                    }
                }
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
