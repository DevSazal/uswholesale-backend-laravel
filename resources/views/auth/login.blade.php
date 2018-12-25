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
                    <form id="login" v-if='login' method="post" action="{{route('login')}}" v-if=''>
                      @csrf
                        <div class="signin-image">
                            <figure><img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signin-image.jpg" alt="sing up image"></figure>
                        </div>
                        <div class="signin-form u-margin-top-medium">
                            <div class="form__group">
                                <input name="email" type="email" id="email" class="form__input" placeholder="Your Username" required>
                            </div>
                            <div class="form__group">
                                <input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
                                <span>error</span>
                            </div>
                            <!-- @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                            @if ($errors->has('password'))
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                            @endif -->
                            <div class="error-container">
                                <ul class="list">
                                    <li class="item">* Invalid email</li>
                                    <li class="item">* Invalid password</li>
                                    <li class='item'>* Something went wrong</li>
                                </ul>
                            </div>
                            <div class="form-btn-align">
                              <div>
                                <a  @click="authPage('signup')" class="btn btn-default btn-orange">Create an account</a>
                              </div>
                              <div style="margin-right: 12px;">
                                  <button type="submit" name="submit" class="btn btn--green">Login &rarr;</button>
                              </div>
                            </div>
                        </div>
                    </form>

                    <!-- signup form  -->
                    <form method="POST" v-if='!login' class="form" action="{{route('register')}}"  id="signup">
                      @csrf
                      <div class="signup-content">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form__group">
                                      <input name="username" type="text" id="name" class="form__input" placeholder="Your Username" required>
                                        <span class='signup-error-message'>error</span>
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
                                        <input name="country_code" type="text" id="phone_number" class="form__input" placeholder="+88" required> -
                                        <input name="phone_code" type="text" id="phone_number" class="form__input" placeholder="01" required> -
                                        <input name="phone" type="text" id="phone_number" class="form__input" placeholder="622287" required>
                                      </div>
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
                                  <div class="form-btn-align">
                                    <div style="margin-right: 12px;">
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
            el: '#app',
            data: {
                countryList: null,
                login:true
            },
            methods: {
                authPage(stat){
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
